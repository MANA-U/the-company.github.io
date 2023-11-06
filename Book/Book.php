<?php

class Book{

    private $title;
    private $author = "J.K Rowling";
    private $image;
    private $summary;
    private $price;
    private $page;
    private $isbn;

    public function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
    }

    public function getTitle(){
        return $this->title;
    }

    public function addPrice($b, $c){
        $a = $b + $c;
        if($a > $b){
            echo $c;
        }
    }

    public function getPrice(){
        return $this->price;
    }

}

class PocketBook extends Book{

}

$book = new PocketBook('Harry Potter', 1500);

echo $book->getTitle()."<br>";
echo $book->getPrice()."<br>";
//$chemistry = new Book('Chemical Bonds', 1500);


?>