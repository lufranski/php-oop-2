<?php
    class Product {

        private $name;
        private $price;
        private $weight;
        private Category $category;

        public function __construct ($name, $price, $weight, $category){

            $this -> setName($name);
            $this -> setPrice($price);
            $this -> setWeight($weight);
            $this -> setCategory($category);
        }

        public function getName(){

            return $this -> name;
        }
        public function setName($name){

            $this -> name = $name;
        }

        public function getPrice(){

            return $this -> price;
        }
        public function setPrice($price){

            $this -> price = $price;
        }

        public function getWeight(){

            return $this -> weight;
        }
        public function setWeight($weight){

            $this -> weight = $weight;
        }

        public function getCategory(){

            return $this -> category; 
        }
        public function setCategory($category){

            $this -> category = $category;
        }

        public function getHtml(){

            return $this -> getName() . ' '
                    . $this -> getPrice() . ' euro '
                    . $this -> getWeight() . ' kg'
                    . $this -> getCategory() -> getHtml();
        }
    }
?>    