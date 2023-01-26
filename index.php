<?php
    
    // La struttura verrà suddivisa in 3 classi nel seguente rapporto di relazione: Product Has-A Category | Type Is-A Product

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
                    . $this -> $category -> getHtml();
        }
    }

    class Category {

        private $category;

        public function __construct($category){

            $this -> setCategory($category);
        }

        public function getCategory(){

            return $this -> category;
        }
        public function setCategory(){

            $this -> category = $category;
        }

        public function getHtml(){

            return $this -> getCategory();
        }
    }
    $category1 = new Category ('Gatto');
    $category2 = new Category ('Cane');
    
    $product = new Product ('Osso finto' , 180, 500, $category1);

    echo $product -> getHtml();
?>