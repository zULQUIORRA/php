<?php 
require("conecta.php");
//include("conecta.php");
//include_once("conecta.php");
//require_once("conecta.php");

// primeira forma de conectar ao banco online web
//"example.com", "user", "password", "database",
define("servidor","localhost"); 
define("usuario", "root");
define("senha","");
define("banco","modular");

$con = mysqli_connect(servidor, usuario, senha, banco);

if($con){
    echo "Não Conectou!!!"mysqli_error();
    exit();

}else {
    echo "conectou";
}

?>