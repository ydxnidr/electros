import pandas as pd
import numpy as np
import skfuzzy as fuzz
from skfuzzy import control as ctrl

# Membaca dataset CSV
df = pd.read_csv('asus.csv')

# Mendefinisikan variabel input fuzzy
price = ctrl.Antecedent(np.arange(0, 40000000, 1000000), 'price')
rating = ctrl.Antecedent(np.arange(0, 6, 0.1), 'rating')

# Mendefinisikan variabel output fuzzy
quality = ctrl.Consequent(np.arange(0, 11, 1), 'quality')

# Mendefinisikan fungsi keanggotaan untuk variabel input
price['cheap'] = fuzz.trimf(price.universe, [0, 0, 10000000])
price['moderate'] = fuzz.trimf(price.universe, [5000000, 15000000, 25000000])
price['expensive'] = fuzz.trimf(price.universe, [20000000, 40000000, 40000000])

rating['low'] = fuzz.trimf(rating.universe, [0, 0, 2.5])
rating['medium'] = fuzz.trimf(rating.universe, [1.5, 3.5, 5])
rating['high'] = fuzz.trimf(rating.universe, [4, 5, 5])

# Mendefinisikan fungsi keanggotaan untuk variabel output
quality['poor'] = fuzz.trimf(quality.universe, [0, 0, 5])
quality['average'] = fuzz.trimf(quality.universe, [3, 5, 7])
quality['excellent'] = fuzz.trimf(quality.universe, [5, 10, 10])

# Mendefinisikan aturan fuzzy
rule1 = ctrl.Rule(price['cheap'] & rating['high'], quality['excellent'])
rule2 = ctrl.Rule(price['moderate'] & rating['medium'], quality['average'])
rule3 = ctrl.Rule(price['expensive'] & rating['low'], quality['poor'])

# Membuat sistem kontrol fuzzy
quality_ctrl = ctrl.ControlSystem([rule1, rule2, rule3])
quality_sim = ctrl.ControlSystemSimulation(quality_ctrl)

# Mengaplikasikan sistem fuzzy pada dataset
def apply_fuzzy_logic(row):
    quality_sim.input['price'] = row['product_price']
    quality_sim.input['rating'] = row['product_rating']
    quality_sim.compute()
    return quality_sim.output['quality']

df['quality'] = df.apply(apply_fuzzy_logic, axis=1)

# Menyimpan hasil ke CSV baru
df.to_csv('asus_with_quality.csv', index=False)
