<?php
// application/controllers/Recommendation.php
class Recommendation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('Fuzzy_model');
    }

    public function index()
    {
        $products = $this->Product_model->get_all_products();
        $fuzzy_rules = $this->Fuzzy_model->get_fuzzy_rules();

        $recommendations = $this->apply_fuzzy_logic($products, $fuzzy_rules);

        $data['recommendations'] = $recommendations;
        $this->load->view('recommendation_view', $data);
    }

    private function apply_fuzzy_logic($products, $fuzzy_rules)
    {
        $recommendations = [];
        foreach ($products as $product) {
            foreach ($fuzzy_rules as $rule) {
                if ($this->match_rule($product, $rule)) {
                    $recommendations[] = [
                        'product' => $product,
                        'recommendation' => $rule->recommendation
                    ];
                }
            }
        }
        return $recommendations;
    }

	private function match_rule($product, $rule) {
		// Contoh implementasi sederhana
		$price_match = $this->in_range($product->price, $rule->price_range);
		$rating_match = $this->in_range($product->rating, $rule->rating_range);
		return $price_match && $rating_match;
	}
	
	private function in_range($value, $range) {
		list($min, $max) = explode('-', $range);
		return $value >= $min && $value <= $max;
	}
}
