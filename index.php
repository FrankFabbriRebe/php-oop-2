<?php

// class Product
class Product
{

    // variables 
    private $title;
    private $image;
    private $description;
    private $price;
    private $category;

    // methods
    public function __construct($title, $image, $description, $price, $category)
    {
        $this->setTitle($title);
        $this->setImage($image);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setCategory($category);
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

}

// class Food
class Food extends Product
{

    // variables
    private $ingredients;

    // methods
    public function __construct($title, $image, $description, $price, $category, $ingredients)
    {
        $this->setTitle($title);
        $this->setImage($image);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setCategory($category);

        $this->setIngredients($ingredients);
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

}

// TEST
// $product = new Product("Titolo prodotto", "Imagine Prodotto", "Descrizione Prodotto", "Prezzo Prodotto", "Categoria Prodotto");
// var_dump($product);
// echo "Product: " . $product->getTitle();

// TEST
// $food = new Food("Titolo prodotto", "Imagine Prodotto", "Descrizione Prodotto", "Prezzo Prodotto", "Categoria Prodotto", "Ingredienti");
// echo "<pre>";
// var_dump($food);
// echo "<pre>";
// echo "Ingredients:" . $food->getIngredients();

?>