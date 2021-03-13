<?php
function addTag($title){
$tag = R::dispense('tags');
$tag->title=$title;
R::store($tag);


}

function addArticle($title, $text, $tags, $picture, $video){
$article = R::dispense('articles');
$article->title=$title;
$article->text=$text;
$article->tags=$tags;
$article->views=$title;
$article->picture=$picture;
$article->video=$video;
$article->pubdate=R::isoDate() ;
R::store($article);

}
function addComment($author, $text, $articlesid){
$comment = R::dispense('comments');
$comment->articlesid=$articlesid;
$comment->author=$author;
$comment->text=$text;
$comment->pubdate=R::isoDate() ;
R::store($comment);
}
?>

