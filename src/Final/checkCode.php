<?php

$quantite = $_POST['quant'];
$year = $_POST['y'];
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
		
$json = array();
$json['prix'] = $prix;

echo $prix;