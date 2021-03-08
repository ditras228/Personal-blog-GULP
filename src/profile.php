<?php
    $title=  "BrainsClub";
    include "partials/head.php";
?>
<h1 class="page_title">Мои работы</h1>


<div class="form">
    <div class="cabinet">
        <div class="cabinet_form">
            <div class="form_group">
                <input type="text" class="form_control" placeholder="Ваше имя" value="Александр Провостин">             
                <span class="form_line"></span>
            </div>
                 <div class="form_group">
                <input type="email" class="form_control" placeholder="Ваш email" value="alex.provo@mail.com">
                 <span class="form_line"></span>
            </div>
                 <div class="form_group">
                <input type="password" class="form_control" placeholder="Новый пороль"> 
                <span class="form_line"></span>
            </div>
                 <div class="form_group">
                <input type="password" class="form_control" placeholder="Подтвердите пороль">
                <span class="form_line"></span>
                
            </div>
            <div class="btn btn--blue btn--rounded btn--sm">Сохранить</div>
        </div>
        <div class="cabinet_avatar">
            <img src="https://placehold.it/150" alt="">
            <label class="cabinet_file">
                <input type="file">
                выбрать аватар
            </label>
        </div>
    </div>
</div>
<?php
    include "partials/footer.php";
?>