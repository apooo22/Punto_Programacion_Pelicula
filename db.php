<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  //'apolinar123',
  'php_mysql_crud'
) or die(mysqli_error($mysqli));

?>
