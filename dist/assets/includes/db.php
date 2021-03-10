<?php 

  require ("./assets/vendor/rb.php");
     R::setup( 'mysql:host=localhost;dbname=personal-blog-gulp',
        'root', 'root' ); //for both mysql or mariaDB
if(!R::testConnection())
{
	exit('Нет подключения к БД');
}
/*
$connection = mysqli_connect(
$config['db']['server'],
$config['db']['username'],
$config['db']['password'],
$config['db']['name']

);   

if( $connection  == false)
{
    echo 'Не удалось подключиться к БД<br>';
    echo mysqli_connect_error();
    die();
}

*/


?>