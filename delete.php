<?php
include "conexao.php";


$id = $_GET['id'];


$sql3 = mysqli_query($conexaobd, "DELETE FROM tabela WHERE id ='$id'") 


?>