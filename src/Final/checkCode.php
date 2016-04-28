<?php

$quantite = $_POST['quantity'];
$year = $_POST['year'];
$code = $_POST['code'];

$prix = 0;
if($quantite == 1){
    $prix = $quantite * 10;
}else{
    $prix = $quantite * $year * 10;
}

if($code == 'cesiut3'){
    $prix *= 0.9;
}

echo $prix;