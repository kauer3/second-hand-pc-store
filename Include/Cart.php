<?php
    class Cart {
        public $prodID;
        public $name;
        public $specs;
        public $price;

        function __construct($prodID,$name,$specs,$price)
        {
           $this->prodID = $prodID;
           $this->name = $name;
           $this->specs = $specs; 
           $this->price = $price;
        }
    }
?>