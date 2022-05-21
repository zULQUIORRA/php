<?php
// criar uma variavel de string e resulta em sql

$sqlInsert = "insert into tb_usuario 
 (nome_us, email_us)
 values('Joao', 'joaolindao@etec.com'),
       ('Kauan', 'kauancomedordecasadas@etec.com')";

  $resp = mysqli_query($con,$sqlInsert);

   if($resp){
       echo "Cadastro feito com sucesso";
       mysqli_close($con);
   }
   else{
     echo myseqli_connect_error();  
   }




?>