<?php

require_once 'models/DatabasePDO.php';
$database = new DatabasePDO();
$db = $database->getPDO();

$produits = [];

$sql = "SELECT * FROM produits";

$results = $db->query($sql);

if($results){
    $i = 0;
    while ($row = $results->fetch(PDO::FETCH_ASSOC)){
        $produits[$i]['id'] = $row['id'];
        $produits[$i]['title'] = $row['title'];
        $produits[$i]['description'] = $row['description'];
        $produits[$i]['price'] = $row['price'];
        $produits[$i]['image'] = $row['image'];

        $i++;
    }

    echo json_encode($produits, JSON_PRETTY_PRINT);
}else{
    http_response_code(404);
    var_dump("Erreur de conversion des données SQL en json");
}
