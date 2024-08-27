<?php

session_start();

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

//remover índices do array de sessão
//unset() -> remove apenas se existir
unset($_SESSION['x']);
echo '<pre>';
print_r($_SESSION);
echo '</pre>';


//destruir a variável de sessão 
//session_destroy() -> será destruída
session_destroy();
header('Location: index.php');

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
