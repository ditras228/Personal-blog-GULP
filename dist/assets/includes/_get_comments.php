<?php

  require ("../vendor/rb.php");
     R::setup( 'mysql:host=localhost;dbname=personal-blog-gulp',
        'root', 'root' ); //for both mysql or mariaDB


$comments = R::find('comments', "WHERE `articlesid`= 1 ORDER BY  `id`  DESC");

    echo json_encode($comments);   
if($comments<=0){
    echo "Нет комментариев";
}
?>