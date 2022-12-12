<?php 
require_once __DIR__ . "./Products.php";

/**
 * ## class FoodProducts
 * describes Food Products
 * @author Alessio Dileo
 */
class FoodProducts extends Products{
    public $ingredients;
    public $expiration_date;
    public $flavor;
    public $quantity_in_gr;

    function __construct(String $name, String $description, Float $price, Category $category, Array $ingredients, String $expiration_date, String $flavor, Int $quantity_in_gr, String $img_name = "image_not_available.png")
    {
        parent::__construct($name, $description, $price, $category, $img_name);
        $this->ingredients = $ingredients;
        $this->expiration_date = $expiration_date;
        $this->flavor = $flavor;
        $this->quantity_in_gr = $quantity_in_gr;
    }
}

?>