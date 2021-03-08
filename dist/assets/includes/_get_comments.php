<?php
$comments = mysqli_query( $connection, $output);

while( $com = mysqli_fetch_assoc( $comments ) ) { 
    ?>

            <ul class="comments">
                <li class="comments_item">
                    <div class="comments_header">
                        <img class="comments_avatar" src="https://placehold.it/30" alt="">
                        <div class="comments_author">
                            <div class="comments_name"><?php echo $com['author']?></div>
                            <time datetime="2020-12-21 19:21" class="comments_pubdate"><?php echo $com['pubdate']?></time>

                        </div>
                    </div>
                    <div class="comments_text"><?php echo $com['text']?></div>
                    <button class="comments_reply" type="button">ответить</button>

                    
                </li>
               
            </ul>
      

    
<?php
}
if(mysqli_num_rows($comments)<=0){
    echo "Нет комментариев";
}
?>