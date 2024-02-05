<?php

// class Product
class Product
{

    // variables 
    private $title;
    private $image;
    private $description;
    private $price;

    // methods
    public function __construct($title, $image, $description, $price)
    {
        $this->setTitle($title);
        $this->setImage($image);
        $this->setPrice($price);
        $this->setDescription($description);
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }
}

// test
$product = new Product("Titolo prodotte", "Imagine Prodotto", "Descrizione Prodotto", "Prezzo Prodotto");
var_dump($product);

?>