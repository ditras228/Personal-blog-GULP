<?php
    $title=  "BrainsClub";
    include "partials/head.php";
?>

<h1 class="page_title">Результаты поиска 
    “<?php
    $id=$_GET['id'];
    echo $categories[$id-1]['title'];
    ?>”
</h1>
<?php 
$output = "SELECT * FROM `articles` WHERE `tags_id`= $id ORDER BY  `id`  DESC   ";
include "assets/includes/_get_posts.php";
    if($articles->num_rows==NULL){
?>
    <h2     >К сожалению, ничего не найдено</h2>
    <?php
}
?>

<?php
    include "partials/footer.php";
?>