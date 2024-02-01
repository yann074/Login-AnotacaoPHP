<?php 

session_start();
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

unset($_SESSION['x']);

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

session_destroy();
header('Location: index.php');
/* 
PARA REMOVER INDICES DO ARRAY UM POR UM
UNSET()



PARA DISTUIR TODOS OS ARRAY
SESSIO_DESTROY()
*/
?>