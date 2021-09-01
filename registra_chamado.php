<?php

session_start();

//trabalhando na montagem de texto
$titulo = str_replace ('#', '-', $_POST['titulo']);
$categoria = str_replace ('#', '-', $_POST['categoria']);
$descricao = str_replace ('#', '-', $_POST['descricao']);

//implode transforma array em string
$texto = $_SESSION ['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

//abrindo arquivo
$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');
//escrevendo texto
fwrite($arquivo, $texto);
//fechando arquivo
fclose($arquivo);

header ('Location: abrir_chamado.php');
//echo $texto;

?>