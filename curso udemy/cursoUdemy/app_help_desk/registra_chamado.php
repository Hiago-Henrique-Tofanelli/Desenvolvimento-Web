<?php
/*echo '<pre>';
print_r($_POST);
echo '</pre>';*/

session_start();

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);
//$texto =  array($titulo, $categoria, $descricao );
//echo implode('#',$texto);

$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#'
 . $descricao . PHP_EOL; //PHP_EOL serve para
 //quebrar linhas no sistema operacional

//abrindo o arquivo
$arquivo = fopen('../../../app_help_desk/arquivo.hd', 'a');
//escrevendo o texto
fwrite($arquivo, $texto);
//fechando o arquivo
fclose($arquivo);

//echo $texto;
header('Location: abrir_chamado.php');