<?php
    $title=  "BrainsClub";
    include "partials/head.php";
?>
<h1 class="page_title page_title--center">Регистрация</h1>


<form class="form form--auth">
    <div class="cabinet">

        <div class="form_group">
            <input type="text" class="form_control" placeholder="Ваше имя" value="Александр Провостин">
            <span class="form_line"></span>
        </div>
        <div class="form_group">
            <input type="email" class="form_control" placeholder="Ваш email" value="alex.provo@mail.com">
            <span class="form_line"></span>
        </div>
        <div class="form_group">
            <input type="password" class="form_control" placeholder="Пороль">
            <span class="form_line"></span>
        </div>
        <div class="form_group">
            <input type="password" class="form_control" placeholder="Подтвердите пороль">
            <span class="form_line"></span>

        </div>
        <div class="form_footer form_footer--center">
            <div class="form_group">
                <button class="btn btn--blue btn--rounded btn--sm">Сохранить</button>
            </div>
            <ul class="form_footer-list">
                <li><a href="signin.html">войти</a></li>
                <li><a href="reset.html">восстаноить</a></li>
            </ul>
        </div>


    </div>
</form>
<?php
    include "partials/footer.php";
?>