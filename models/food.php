<?php

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