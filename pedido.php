<?php
$con=mysqli_connect("localhost","root","","pratos");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}
 
$descricao = $_GET['id1'];



$select_comanda =  mysqli_query($con, "SELECT * FROM comanda order by id Desc Limit 1 ");
$array_comanda = mysqli_fetch_array($select_comanda);

$id_comanda = $array_pedido['id'];	

for ($i=$id_comanda; $i <= $id_comanda ; $i++) { 
 $insert_comanda = mysqli_query($con, "INSERT INTO comanda (id) VALUES ('$i')");

}


while ($array_pedido = mysqli_fetch_array($insert_comanda)) {


}

$select =  mysqli_query($con, "SELECT * FROM pratos WHERE descricao = '$descricao' ");
$select1 =  mysqli_query($con, "SELECT * FROM pedido ");
while ($array_1 = mysqli_fetch_array($select1)){
$total = $array_1['total'];
}
while ($array = mysqli_fetch_array($select)){
$id = $array['id'];
$preco = $array['preco'];
$total = $preco + $total;

 
$result = mysqli_query($con,"INSERT INTO pedido (id_prato, total, id_comanda ) VALUES ('$id', '$total', '1' )");




}


 
if($result == true) {
    echo '{"query_result":"SUCCESS"}';
}
else{
    echo '{"query_result":"FAILURE"}';
}
mysqli_close($con);
?>