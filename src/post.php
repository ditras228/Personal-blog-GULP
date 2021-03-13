<?php
    $title=  "BrainsClub";
    include "partials/head.php";

?>

<?php
$id = $_GET['id'];

$art = R::findOne('articles', "WHERE id = $id" );
$art->views++;
R::store($art);
?>

<article class="post">
    <div class="post_actions">
        <a href="index.php">вернуться назад</a>
        <div class="actions_right">
                    <div class="views"><i class="far fa-eye"></i><?php echo $art['views'] ?></div>
        <a href="#">
            поделиться
            <img class="" src="assets/images/share.svg" alt="">
        </a>

    </div>
    </div>
    <div class="post_content">







        <div class="post_header">
            <div class="post_title">
                <a href="#"><?php  echo $art['title'];?></a>
            </div>
            <ul class="post_data">
                <li class="post-data-item">
                    <time datetime="2020-06-11 19:20"><?php  echo $art['pubdate'];?></time>
                </li>
                <li class="post-data-item">
                    <a href="#">создание сайтов</a>
                </li>
            </ul>
        </div>
        <div class="post_text">
            <?php  echo $art['text'];?>
            
            </ol>
        </div>
        <!--/.post_text -->

        <div class="related">
            <h3 class="post_subtitle">Интересно почитать</h3>

            <div class="related_list">
                <div class="related_list-item">
                    <h4 class="related_list-title">
                        <a href="#">Как я сходил на FrontEnd Conf 2021</a>
                    </h4>
                    <time class="related_list-date" datetime="2020-06-21 19:21">21.06.2020</time>
                </div>
                <div class="related_list-item">
                    <h4 class="related_list-title">
                        <a href="#">Как я сходил на FrontEnd Conf 2021</a>
                    </h4>
                    <time class="related_list-date" datetime="2020-06-21 19:21">21.06.2020</time>
                </div>
                <div class="related_list-item">
                    <h4 class="related_list-title">
                        <a href="#">Как я сходил на FrontEnd Conf 2021 Как я сходил на FrontEnd Conf 2021</a>
                    </h4>
                    <time class="related_list-date" datetime="2020-06-21 19:21">21.06.2020</time>
                </div>
                <div class="related_list-item">
                    <h4 class="related_list-title">
                        <a href="#">Как я сходил на FrontEnd Conf 2021</a>
                    </h4>
                    <time class="related_list-date" datetime="2020-06-21 19:21">21.06.2020</time>
                </div>
            </div>
        </div>
        <!--/.related -->
 
        <div class="comments_content">

            <div id = "post_subtitle" class="post_subtitle">Обсуждение</div>
                       <?php
 //   $output = "SELECT * FROM `comments` WHERE `articles_id`= $id ORDER BY  `id`  DESC   ";
    include "assets/includes/_get_comments.php"

    ?>
    <div class="form_fixed">
            <form class="form"   action="" onsubmit="return false;" >
             
                <div class="form_group">
                    <textarea class="form_control form_control--textarea"  id="text_comment" placeholder data-autoresize="Текст комментария"></textarea>
                    <span class="form_line"></span>
                </div>
                <button class="btn btn--blue btn--rounded btn--sm" type="submit" id="form_comment"  name="do_post">Отправить</button>
            </form>


</div>

        </div>
        <!--/.pos_content-->

</article>
<!--/.post-->
<?php
    include "partials/footer.php";
?>