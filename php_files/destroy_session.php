<?php


session_start();

unset($_SESSION['user']);
unset($_SESSION['id_elem_chart']);

echo "AAA";
header('Location:../principal_page.php');

?>