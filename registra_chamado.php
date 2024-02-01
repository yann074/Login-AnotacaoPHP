<?php 

session_start();

$titulo = str_replace('//', '-', $_POST['titulo']);
$categoria= str_replace('//', '-', $_POST['categoria']);
$descricao= str_replace('//', '-', $_POST['descricao']);


//implode('#', _post);
$texto = $_SESSION['id'] .'//'. $titulo . '//'. $categoria .'//'. $descricao . PHP_EOL;

$arquivo = fopen('../../../app_help_desk/arquivo.txt', 'a');

fwrite($arquivo, $texto);

fclose($arquivo);

header('Location: home.php');

?>