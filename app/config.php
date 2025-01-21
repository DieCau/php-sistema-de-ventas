<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','root');
define('BD','sistemadeventas');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "La conexión a la base de datos fue con exito";
}catch (PDOException $e){
    //print_r($e);
    echo "Error al conectar a la base de datos";
}

$URL = "http://localhost/sistemadeventas";

// Declaro la zona horaria
date_default_timezone_set("America/Argentina/Tucuman");
$fechaHora = date('Y-m-d H:i:s');


