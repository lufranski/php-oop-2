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
                    . $this -> getCategory() -> getHtml();
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
        public function setCategory($category){

            $this -> category = $category;
        }

        public function getHtml(){

            return ' ' . $this -> getCategory();
        }
    }

    class Type extends Product{

        private $type;

        public function __construct($name, $price, $weight, $category, $type){

            parent :: __construct($name, $price, $weight, $category);

            $this -> setType($type);
        }

        public function getType(){

            return $this -> type;
        }
        public function setType($type){

            $this -> type = $type;
        }

        public function getHtml(){

            return parent :: getHtml() . ' '
                    . $this -> getType();
        }
    }
    
    
    $category1 = new Category ('Gatto');
    $category2 = new Category ('Cane');
    
    $product1 = new Product ('Osso finto' , 180, 500, $category1);
    $product2 = new Product ('Cuccia' , 400, 400, $category2);
    
    $type1 = new Type ('Palla', 10, 0.2, $category2, 'Giochi');
    $type2 = new Type ('Crocchette per gatti', 18, 0.500, $category1, 'Food');

    echo $product1 -> getHtml() . '<br>';
    echo $product2 -> getHtml();
    echo '<br>' . $type1 -> getHtml();
    echo '<br>' . $type2 -> getHtml();
?>