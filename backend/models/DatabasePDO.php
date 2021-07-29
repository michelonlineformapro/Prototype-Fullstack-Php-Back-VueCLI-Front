<?php
//Options HTTP Headers
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: PUT, PATCH, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

class DatabasePDO
{
    public function getPDO(){
        $user = "root";
        $pass="";

        try {
            $db = new PDO("mysql:host=localhost;dbname=ecommerce;charset=utf8", $user, $pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "COnnexion a pdo mysql est ok";
            return $db;

        }catch (PDOException $event){
            echo "Erreur de connexion" . $event->getMessage();
        }
    }

}