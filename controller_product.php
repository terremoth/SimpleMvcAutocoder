<?php

$bHasPost = count($_POST) > 0;

if ($bHasPost) {
    // tratar item a item do post
    //persistir post ao objeto do model
    require_once './model_product.php';
    // Relaxem que a superglobal $_POST será sanitizada, aqui é só exemplo
    $oProduct = new Product();
    $oProduct->persist($_POST); // esse persist é um metodo do ActiveRecord.php
    // ou
    //$oProduct = new Product($_POST);
    //ou
    //$oProduct = new Product($_POST['id'], $_POST['name'], $_POST['quantity'], $_POST['releaseDate'], $_POST['active']);
    //$oProduct->save();
    
    header("Location: view_product.php");
    
} else {
    exit("Forbidden access");
}
    
