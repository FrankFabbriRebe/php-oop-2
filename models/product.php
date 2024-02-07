<?php

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
        if (!is_numeric($price))
            throw new Exception("price has to be a number");

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