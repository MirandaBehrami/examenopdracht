<?php
$products = array(
              array("title" => "Bert", "image" => "be.jpeg", "text" => "Dit is het BERT product", "prijs" => 12,5),
              array("title" => "Ernie", "image" => "ernie.png", "text" => "Dit is ERNIE", "prijs" => 12,5),
              array("title" => "Bernie", "image" => "bernie.jpg", "text" => "Dit is BERNIE", "prijs" => 12,5),
              array("title" => "Rick", "image" => "rickandmorty.jpg", "text" => "Dit is RICK", "prijs" => 12,5)
);
echo $products[2]["image"];
?>