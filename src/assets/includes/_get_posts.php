<?php
$articles = mysqli_query( $connection, $output);

while( $art = mysqli_fetch_assoc( $articles ) ) {
    ?>

<div class="post">
    <div class="post_content">
        <!--Если есть картинка-->
        <?php 
    if($art['picture'] !=  null)
    {
          ?>
        <div class="post_header post_header--preview">
            <a href="#">
                <img src="<?php echo $art['picture'] ?>" alt="">
            </a>
        </div>
        <div class="post_title">
           <a href="post.php?id=<?php echo $art['id']?>"><?php echo $art['title'] ?></a>
        </div>
        <?php
    }
    
    ?>
        <!-- Если есть видео -->

        <?php 
    if($art['video'] !=  null)
    {
          ?>
        <div class="post_header post_header--video">
            <div class="embed">
                <iframe width="560" height="315" src="<?php echo $art['video'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>
        <div class="post_title">
           <a href="post.php?id=<?php echo $art['id']?>"><?php echo $art['title'] ?></a>
        </div>
        <?php
      }
      
    
    ?>

        <!-- Скрыть текст, если есть видео-->

        <?php 
    if($art['video'] ==  null)
    {
          ?>
        <div class="post_text"> <a href="post.php?id=<?php echo $art['id']?>"> <?php echo mb_substr(strip_tags($art['text']), 0, 255, 'utf-8')."...    ";  ?> </div></a>
        <?php
    }
    ?>
    </div>
    <div class="post_footer">
        <ul class="post_data">
            <li class="post-data-item">
                <time datetime="2020-06-11 19:20"> <?php echo $art['pubdate']; ?> </time>

            </li>
            <li class="post-data-item">


                <?php 

               foreach($categories as $cat){
                

                    $art_cat =       false;
                    if($cat['id'] == $art['tags_id'])
                    {

                        $art_cat = $cat;
                        break;
                    }
                }
    
                 ?>
                <a href="#"><?php echo $art_cat['title']?></a>
            </li>
        </ul>
    </div>
</div>
<?php
}

?>