<header class="header">
    <div class="header_left">
        <nav class="nav">
            <ul class="nav_list">
                <li class="nav_item">

                    <a href="index.php" class="nav_link">Главная</a>
                </li>
                <li class="nav_item">
                    <a href="#" class="nav_link has-subnav">Статьи</a>
                    <ul class="subnav">
                        <?php          

                        $categories = R::findAll('tags');
                        foreach ($categories as $cat) {
                     ?>
                               <li><a href="search.php?id=<?php echo $cat['id'] ?>" class="subnav_link"><?php echo $cat['title'] ?></a></li>
                              
                              <?php
                        }

                        /*       
                        $categories_q= mysqli_query($connection, "SELECT * FROM `articles_tags`");
                        $categories = array();       

                            while($cat = mysqli_fetch_assoc($categories_q)){
                            
                                $categories[]= $cat;

   }
                        
                     
  
                        foreach($categories as $cat){
                             ?>
                             <li><a href="search.php?id=<?php echo $cat['id'] ?>" class="subnav_link"><?php echo $cat['title'] ?></a></li>
                              <?php
                        }
                        */
                          ?>
                    </ul>
                </li>
                <li class="nav_item">
                    <a href="#" class="nav_link">Обо мне</a>
                </li>
                <li class="nav_item">
                    <a href="text.php" class="nav_link">Реклама</a>
                </li>
            </ul>
        </nav>
        <button type="button" class="burger" id="burger"><span></span></button>
    </div>
    <div class="header_right">
        <nav class="nav">
            <ul class="nav_list">
                <li class="nav_item">
                    <a href="profile.php" class="nav_link">Профиль</a>
                </li>
                <li class="nav_item">
                    <a href="#" class="nav_link">Выйти</a>
                </li>
            </ul>
        </nav>
        <form class="search" action="search.php" method="get">
            <input class="search_input" type="text" placeholder="Поиск по блогу">
        </form>
    </div>
</header>