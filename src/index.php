<?php
$title =  "BrainsClub";
include "partials/head.php";
?>
<!--Stories-->
<div class="stories">
    <div class="stories_item" data-modal="video-modal">
        <img class="stories_preview" src="assets/images/1.png" alt="">
        <div class="stories_tittle">Отдыхаю на природе</div>
        <time class="stories_date" datetime="2020-09-21 19:25">2020.09.21</time>
    </div>
    <div class="stories_item">
        <img class="stories_preview" src="assets/images/Rectangle 4.png" alt="">
        <div class="stories_tittle">Заканчиваю
            сложный проект</div>
        <time class="stories_date" datetime="2020-09-21 19:25">2020.09.21</time>
    </div>
    <div class="stories_item">
        <img class="stories_preview" src="assets/images/story.png" alt="">
        <div class="stories_tittle">Переехал в новую
            квартиру</div>
        <time class="stories_date" datetime="2020-09-21 19:25">2020.09.21</time>
    </div>
    <div class="stories_item">
        <img class="stories_preview" src="assets/images/story-1.png" alt="">
        <div class="stories_tittle">Осень пришла!</div>
        <time class="stories_date" datetime="2020-09-21 19:25">2020.09.21</time>
    </div>
</div>
 <!--Add post-->
<div class="add-post">
    <form class="add-post_form" action="/" method="post">
        <textarea class="add-post_textarea" name="post-text" placeholder="Напишите что-нибудь" data-autoresize></textarea>

        <div class="add-post_form-actions">
            <label class="add-post_file" for="add-post-file">
                <input type="file" id="add-post-file">
            </label>
            <button class="add-post_send" type="submit"></button>
        </div>

    </form>
</div>

<?php

$per_page=2;
$page=1;
if(isset($_GET['page'])){
    $page=(int)$_GET['page'];


}
$total_count =R::count('articles');



$total_pages = ceil($total_count/$per_page);
$offset = ($per_page*$page)-$per_page;
if($page <= 1 || $page > $total_pages){
    $page=1;
}
$output = R::find('articles', "ORDER BY  `id`  DESC LIMIT $offset,$per_page");

include 'assets/includes/_get_posts.php'


?>

<!--Pagination-->
<ul class="pagination">
    <?php 
    if($page>1)
    {
    ?>
    <li class="pagination_item">
        <a class="pagination_link" href="?<?php echo 'page='.$page-1 ?>">&lt;
        </a>
    </li>
     <?php 
}
else{
?>
     <li class="pagination_item ">
        <div class="pagination_link pagination_link--deactive">&lt;
        </div>
    </li>
<?php
}
 ?>

 <!--  
 <?php 
 if($total_pages >=3)
 {
    ?>
    <li class="pagination_item">
        <a class="pagination_link" href="?<?php echo 'page='.$page-1?>">1</a>
    </li>
    <li class="pagination_item">
        <a class="pagination_link" href="#">2</a>
    </li>
    <li class="pagination_item">
        <a class="pagination_link" href="#">3</a>
    </li>
<?php
}

?>
-->
     <?php 
    if($page< $total_pages)
    {
    ?>
    <li class="pagination_link">
        <a class="pagination_link" href="?<?php echo 'page='.$page+1 ?>">&gt;
        </a>
    </li>
     <?php 
}
else{
?>
     <li class="pagination_item ">
        <div class="pagination_link pagination_link--deactive">&gt;
        </div>
    </li>
<?php
}
 ?>

</ul>
<?php
include "partials/footer.php";
?>
