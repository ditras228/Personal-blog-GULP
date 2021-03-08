<?php
$articles = mysqli_query( $connection, $output);

while( $art = mysqli_fetch_assoc( $articles ) ) {
    ?>

            <ul class="comments">
                <li class="comments_item">
                    <div class="comments_header">
                        <img class="comments_avatar" src="https://placehold.it/30" alt="">
                        <div class="comments_author">
                            <div class="comments_name"> Lorem ipsum.</div>
                            <time datetime="2020-12-21 19:21" class="comments_pubdate">1 неделю назад</time>

                        </div>
                    </div>
                    <div class="comments_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis optio, omnis amet. Necessitatibus possimus laudantium quam ad natus omnis, numquam blanditiis porro quaerat quia sint, doloribus ratione optio inventore earum!</div>
                    <button class="comments_reply" type="button">ответить</button>

                    
                </li>
               
            </ul>
      

        <?php 
  
        <div class="post_text"> <?php echo mb_substr(strip_tags($art['text']), 0, 255, 'utf-8')."...    ";  ?> </div>
        <?php
    
    ?>
    
<?php
}

?>