<?php
    class Product {
        public $prodID;
        public $name;
        public $category;
        public $manufacture;
        public $specs;
        public $desc;
        public $price;

        function __construct($prodID,$name,$category,$manufacture,$specs,$desc,$price)
        {
            $this->prodID = $prodID;
            $this->name = $name;
            $this->category = $category;
            $this->manufacture = $manufacture;
            $this->specs = $specs;
            $this->desc = $desc;
            $this->price = $price;
        }
    }
?>