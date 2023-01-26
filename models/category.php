<?php
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
?>