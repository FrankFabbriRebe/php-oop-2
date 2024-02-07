<?php

class Toys extends Product
{

    // variables
    private $color;

    // methods
    public function __construct($title, $image, $description, $price, $category, $color)
    {
        $this->setTitle($title);
        $this->setImage($image);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setCategory($category);

        $this->setColor($color);
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

}