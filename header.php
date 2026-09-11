<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenkai Sport</title>
</head>
<body>

<header>
    <div class="header_container">
        <div class="mobile">
            <img  src=<?php echo get_template_directory_uri() . '/assets/pictogrammes/mobile/btn_menu.png' ; ?>
            alt="Logo du site Zenkai Sport" width="40" height="40">
        </div>
        <a class="logo_desk" href="/">
            <img  src=<?php echo get_template_directory_uri() . '/assets/logo/Logo_Desktop.svg' ; ?>
            alt="Logo du site Zenkai Sport">
        </a>
        <a class="logo_mobile" href="/">
            <img  src=<?php echo get_template_directory_uri() . '/assets/logo/Logo_Mobile.svg' ; ?>
            alt="Logo du site Zenkai Sport">
        </a>
       
    </div>
     <div class="mobile_nav">
            <nav>
                <ul class="nav_list">
                    <li class="btn_desk"><a href="">Articles</a></li>
                    <li class="btn_mobile"><a href="/">
                        <img  src=<?php echo get_template_directory_uri() . '/assets/pictogrammes/mobile/article.svg' ; ?>
                    alt="Pictograme Article">Articles</a></li>

                    <li class="btn_mobile"><a href="/">
                        <img  src=<?php echo get_template_directory_uri() . '/assets/pictogrammes/mobile/home.svg' ; ?>
                    alt="Pictograme Home">Accueil</a></li>
                    
                    <li class="btn_desk"><a href="">Classement</a></li>
                    <li class="btn_mobile"><a href="/">
                        <img  src=<?php echo get_template_directory_uri() . '/assets/pictogrammes/mobile/ordered.svg' ; ?>
                    alt="Pictograme Home">Classement</a></li>

                    <li class="btn_desk"><a href="/about">A propos</a></li>
                    <li class="btn_mobile"><a href="/about">
                        <img  src=<?php echo get_template_directory_uri() . '/assets/pictogrammes/mobile/book-open.svg' ; ?>
                    alt="Pictograme Home">A propos</a></li>
                    
                    <li class="btn_mobile"><a href="/">
                        <img  src=<?php echo get_template_directory_uri() . '/assets/pictogrammes/mobile/users.svg' ; ?>
                    alt="Pictograme Home">Profil</a></li>
                </ul>
            </nav>
            <div class="logout">
                <li class="btn_mobile"><a href="">
                        <img  src=<?php echo get_template_directory_uri() . '/assets/pictogrammes/mobile/users.svg' ; ?>
                    alt="Pictograme Home">Log out</a>
                </li>
            </div>
        </div>
</header>
