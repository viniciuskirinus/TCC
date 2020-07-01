<?php

header('Content-Type: application/json');
include("conexao.php");

$cons = "SELECT * from historico WHERE usuario_id_usuario = $_SESSION[id_U]";

$result = mysqli_query($conn, $cons);

$linha_historico = mysqli_fetch_assoc($result);

echo json_encode($resultado);

?>