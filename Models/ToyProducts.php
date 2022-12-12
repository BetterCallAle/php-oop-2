<?php 
require_once __DIR__ . "./Products.php";

class ToyProducts extends Products{
    public $color;
    public $materials;

    function __construct(String $name, String $description, Float $price, Category $category, String $color, Array $materials, String $img_name = "image_not_available.png")
    {
        parent::__construct($name, $description, $price, $category, $img_name);
        $this->color = $color;
        $this->materials = $materials;
    }

}
?>