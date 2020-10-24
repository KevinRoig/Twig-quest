<?php

require_once '../vendor/autoload.php';
$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/view');
$twig = new Twig\Environment($loader,[
    'cache'=> false,
]);

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

echo $twig->render('index.html.twig', ['products' => $products]);


?>