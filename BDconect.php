<?php
// DB CREDENCIALES DE USUARIO.
define('DB_HOST','db-23jun.ct5atuaccivb.us-east-1.rds.amazonaws.com');
define('DB_USER','admin');
define('DB_PASS','leica666');
define('DB_NAME','Evaluacion3');
 
// Ahora, establecemos la conexión.
try
{
// Ejecutamos las variables y aplicamos UTF8
$connect = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>