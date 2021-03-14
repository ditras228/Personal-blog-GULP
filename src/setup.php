<?php 
include 'assets/includes/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<form method="POST">
	<div class="container">
		<button class="btn btn--blue" name="set_db">Устоновить БД</button>
		<button class="btn btn--red" name="drop">ДРОП</button>
	</div>
	</form>
</body>
</html>
<?php
if(isset($_POST['set_db'])){
	    include    "./assets/includes/_functions.php";    
//Добавить ТЭГи
addTag('Создание сайтов');
addTag('Интернет-маркетинг');
addTag('Реклама');

//Добавить статьи
addArticle('Создание сайтов', 'lorem', 1, NULL, NULL);
addArticle('маркетинг сайтов2', 'lorem2', 2,NULL, 'https://www.youtube.com/embed/o6wfYJoJLDo' );
addArticle('маркетинг сайтов2', 'lorem2', 2,'https://sun9-22.userapi.com/impf/7WTydnTEg6fNQW-ur8sVZmFZD_rnQvozWW5fYQ', NULL );


//Добавить комментарии
addComment('devil', 'yooy',	1);

}

if(isset($_POST['drop'])){
R::freeze(false);
R::nuke();


}
?>