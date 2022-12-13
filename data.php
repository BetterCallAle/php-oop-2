<?php 
require_once __DIR__ . "./Models/Products.php";
require_once __DIR__ . "./Models/Category.php";
require_once __DIR__ . "./Models/FoodProducts.php";
require_once __DIR__ . "./Models/ToyProducts.php";
require_once __DIR__ . "./Models/User.php";
require_once __DIR__ . "./Models/CreditCard.php";
require_once __DIR__ . "./Models/SignedUser.php";

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

// BONUS
echo "--------BONUS-------";

$guest = new User ("Pippo Franco", "pippofranco@gmail.com", "Via Super Mega");
$guest->shopping_cart = new ShoppingCart();
$guest->shopping_cart->addProduct($products[1]);
$guest->shopping_cart->addProduct($products[3]);
$guest_total = $guest->shopping_cart->getTotal();

try{
    $guest->setCreditCard(new CreditCard("123123123", "123", "2025", "10"));
    
    $guest->pay($guest_total);
} catch (Exception $e){
    echo "Errore:" . $e->getMessage();
}

// BONUS CLIENTE ISCRITTO
echo "------ BONUS CLIENTE ISCRITTO-------";

$signed_user = new SignedUser("Albano Carrisi", "AlbanoCarrisi@gmail.com", "Via Incredibile");
$signed_user->shopping_cart = new ShoppingCart();
$signed_user->shopping_cart->addProduct($products[0]);
$signed_total_no_discount = $signed_user->shopping_cart->getTotal();
$signed_total_discount = $signed_user->getFinalPrice($signed_total_no_discount);

try{
    $signed_user->setCreditCard(new CreditCard("55555555555", "555", "2022", "12"));
    
    $signed_user->pay($signed_total_discount);
} catch(Exception $e) {
    echo "Errore:" . $e->getMessage();
}


?>