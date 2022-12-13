<?php
require_once __DIR__ . "/CreditCard.php";
require_once __DIR__ . "/ShoppingCart.php";



class User{
    public $name;
    public $email;
    public $address;
    public $shopping_cart;
    private $credit_card;

    function __construct($name, $email, $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }

    public function setCreditCard(CreditCard $credit_card){
        if(date("Y") < $credit_card->getYear() || (date("Y") <= $credit_card->getYear() && date("m") >= $credit_card->getMonth())){
            $this->credit_card = $credit_card;
        } else {
            throw new Exception("La carta di credito è scaduta"); 
        }
    }

    public function pay($total){
        echo "Pagamento di € $total completato";
    }
}