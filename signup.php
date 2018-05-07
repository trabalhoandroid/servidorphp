<?php
$con=mysqli_connect("localhost","root","","bancoapp");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}
 
$nome = $_GET['nome'];
$email = $_GET['email'];
$celular= $_GET['celular'];
$senha= $_GET['senha'];
$cpf= $_GET['cpf'];
$endereco = $_GET['endereco'];

 
$result = mysqli_query($con,"INSERT INTO cliente (nome, email, telefone, cpf,endereco) VALUES ('$nome', '$email', '$celular', '$cpf','$endereco' )");




 
if($result == true) {
    echo '{"query_result":"SUCCESS"}';
}
else{
    echo '{"query_result":"FAILURE"}';
}
mysqli_close($con);
?>


