<?php
include '../../config_db.php';

$nome = $_POST['nome'];
$curso = $_POST['curso'];
$carga = $_POST['carga'];
$ementa = $_POST['ementa'];

//$query = "INSERT INTO DISCIPLINAS VALUES( NULL, '$nome', '$curso')";
$query = "INSERT INTO DISCIPLINAS VALUES( NULL, '$nome', '$curso', '$carga', '$ementa' ) ";
mysqli_query($conexao, $query);
header('location:'.$_SERVER['HTTP_REFERER']);
