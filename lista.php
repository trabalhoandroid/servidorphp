<?php

$con=mysqli_connect("localhost","root","","pratos");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}
 

 
if($_SERVER['REQUEST_METHOD'] == "POST"){
 $data = json_decode(file_get_contents('php://input'), true);
 if(isset($data["usuario"]) && isset($data['senha'])
 	&& $data['usuario']=="ednaldo" && $data['senha']=="123"){



 	$sql = mysqli_query($con, "SELECT * FROM pratos");

    $lista = array();

  while  ($array = mysqli_fetch_array($sql)){
    
	$descricao = $array['descricao'];
    $preco = $array['preco'];
	

	$lista[] = array($descricao, $preco);
	//$lista[] = array(1, "aluno2", "213132");
	//$lista[] = array(1, "aluno3", "213132");
	//$lista[] = array(1, "aluno4", "213132");
	
}

	$json = array("status" => 1, "lista" => $lista);

 }else{
	$json = array("status" => 0, "msg" => "Dados inválidos");
 }
}else{
// Insert data into data base
 $json = array("status" => 0, "msg" => "Metodo nao post!");
}
header('Content-type: application/json');
echo json_encode($json);

?>

