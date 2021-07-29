<?php
ob_start();

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = "acceuil";
}

//Les routes

//projet/index.php?action=accueil

if($action === "acceuil"){
    require_once "home.php";
}

$content = ob_get_clean();
require_once "template.php";