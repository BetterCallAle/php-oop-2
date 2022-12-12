<?php 
require_once __DIR__ . "./Models/Products.php";
require_once __DIR__ . "./Models/Category.php";
require_once __DIR__ . "./Models/FoodProducts.php";
require_once __DIR__ . "./Models/ToyProducts.php";

$categories = [
    new Category("Cani"),
    new Category("Gatti")
];

$products = [
    new FoodProducts("Cibo buonissimo per cani", "descrizione prodotto", 20.00, $categories[0], ["Carni e derivati", "Ortaggi", "Cereali", "Sostanze minerali"], "22/09/2023", "Manzo e Verdure", 230, "cibo-cani.jpg"),
    new ToyProducts("Giocattolo a forma di Elefante", "descrizione prodotto", 5.51, $categories[0], "Grigio", ["peluche", "plastica interna"], "peluche-cani.jpg"),
    new FoodProducts("Cibo buonissimo per gatti", "descrizione prodotto", 19.99, $categories[1], ["Tonno", "Sostanze minerali", "Sottoprodotti di origine vegetale", "Zuccheri"], "09/11/2023", "Tonno", 250, "cibo-gatti.jpg"),
    new ToyProducts("Namsan Gatto Palla Automatica", "descrizione prodotto", 17.99, $categories[1], "Azzurro", ["Silicone"], "palla-gatti.jpg")
];


?>