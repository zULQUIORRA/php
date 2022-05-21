<?php
//
require("conecta.php");

//exibir todos os registros da tabela usuario

$sqlSelect = " SELECT   * FROM TB_USUARIO ";

// EXECUTAR O BANCO
$resp = mysql_query ($con, $sqlSelect);

//QUANTO O REGISTRO TEM A TABELA
echo mysql_num_row($resp);
//exibir valores na tabela

$campo = mysql_fetch_assoc($resp);
echo"<br>";
//exibir
// echo $campo["nome_us"]."<br>";

while ($campo = mysql_fetch_assoc($resp); ) {
    echo "nome :" . $campo["nome_us"] . 
    "email :" . $campo ["email_us"] ."<br>";
}

while ($indice = mysql_fetch_row($resp)) {
    echo "Nome :" . $indice[1].
         "Email :" . $indice[2]. "<br>";
         
}


?>