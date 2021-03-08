<?php
    $title=  "BrainsClub";
    include "partials/head.php";
?>
<h1 class="page_title page_title--center">Восстановить</h1>


<div class="form form--auth">
    <div class="cabinet">
        <div class="cabinet_form">
                 <div class="form_group">
                <input type="email" class="form_control" placeholder="Ваш email">
                 <span class="form_line"></span>
            </div>

            <div class="form_footer form_footer--center">
              <div class="form_group">
            <div class="btn btn--blue btn--rounded btn--sm">Войти</div>
                </div>
            <ul class="form_footer-list">
                <li><a href="signin.html">войти</a></li>
                <li><a href="signup.html">регистрация</a></li>
            </ul>
            </div>
        </div>
       
    </div>
</div>
<?php
    include "partials/footer.php";
?>