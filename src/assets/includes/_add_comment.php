

<?php
$_POST = json_decode(file_get_contents('php://input'), true);

include '_functions.php';
  require ("../vendor/rb.php");
     R::setup( 'mysql:host=localhost;dbname=personal-blog-gulp',
        'root', 'root' ); //for both mysql or mariaDB

addComment($_POST['author'], $_POST['text'],	$_POST['articlesid']);
?>

