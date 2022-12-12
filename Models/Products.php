<?php 
require_once __DIR__ . "./Category.php";
/**
 * ## class Products
 * describes Products
 * @author Alessio Dileo
 */
class Products{
    public $name;
    public $description;
    public $price;
    protected $img_name;
    protected $img_path;

    function __construct(String $name, String $description, Float $price, Category $category ,String $img_name = "image_not_available.png")
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->img_name = $img_name;
    }

    function setImgName($img_name){
        $this->img_name = $img_name;
    }

    function setImgPath(){
        $this->img_path = "./img/$this->img_name";
    }

    function getImgPath(){
        return $this->img_path;
    }
}
?>