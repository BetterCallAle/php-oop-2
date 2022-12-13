<?php
require_once __DIR__ . "/User.php";

class SignedUser extends User{
    public $discount = 20;

    public function getFinalPrice($total){
        $discounted_price = $total * $this->discount / 100;
        return $total - $discounted_price;
    }
}