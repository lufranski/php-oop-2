<?php
    
    // La struttura verrà suddivisa in 3 classi nel seguente rapporto di relazione: Product Has-A Category | Type Is-A Product

    class Product {

        private $name;
        private $price;
        private $weight;

        public function __construct ($name, $price, $weight){

            $this -> setName($name);
            $this -> setPrice($price);
            $this -> setWeight($weight);
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

        public function getHtml(){

            return $this -> getName() . ' '
                    . $this -> getPrice() . ' euro '
                    . $this -> getWeight() . ' kg';
        }
    }

    $product = new Product ('Osso finto' , 180, 500);

    echo $product -> getHtml();
?>