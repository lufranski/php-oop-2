<?php
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
?>