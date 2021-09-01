<?php 

session_start();

echo "<pre>";
print_r($_SESSION);
echo '</pre>';

/*
//remover indices do array de sessao
//unset() - espera o array de indice eliminado

unset($_SESSION['x']); //remover indice apenas se exisitr

echo "<pre>";
print_r($_SESSION);
echo '</pre>';


//destruir a variavel de sessao 
//session_destroy()

session_destroy(); //sera destruida, mas n enchergaremos
//forçe um redirecionamento 

echo "<pre>";
print_r($_SESSION);
echo '</pre>';
*/

session_destroy();
header('Location: index.php');

?>
