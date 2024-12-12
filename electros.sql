CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    rating DECIMAL(3, 2) NOT NULL
);

CREATE TABLE fuzzy_rules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    price_range VARCHAR(50) NOT NULL,
    rating_range VARCHAR(50) NOT NULL,
    recommendation VARCHAR(255) NOT NULL
);
