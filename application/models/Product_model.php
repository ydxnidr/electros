<?php
// application/models/Product_model.php
class Product_model extends CI_Model
{
    public function get_all_products()
    {
        return $this->db->get('products')->result();
    }
}

// application/models/Fuzzy_model.php
class Fuzzy_model extends CI_Model
{
    public function get_fuzzy_rules()
    {
        return $this->db->get('fuzzy_rules')->result();
    }
}
