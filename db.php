<?php

// require
require_once(__DIR__ . "/models/product.php");
require_once(__DIR__ . "/models/food.php");
require_once(__DIR__ . "/models/toy.php");

// create food object
try {

    $scatolette = new Food("Scatolette", "https://shop-cdn-m.mediazs.com/bilder/9/400/26635_pla_meradog_puppyknochen_10kg_9.jpg", "Descrizione Prodotto", 10, "Categoria Prodotto", "Ingredienti");

    // echo "Ingredients:" . $food->getIngredients();

} catch (Exception $e) {
    echo "Error about set price: " . $e->getMessage();
}


// create toy object
try {

    $toy = new Toys("Titolo prodotto", "Imagine Prodotto", "Descrizione Prodotto", 50, "Categoria Prodotto", "Colore");

    // echo "Colors:" . $toy->getColor();

} catch (Exception $e) {
    echo "Error about set price: " . $e->getMessage();
}