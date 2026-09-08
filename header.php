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
        <a class="logo_desk" href="/">
            <img  src=<?php echo get_template_directory_uri() . '/assets/logo/Logo_Desktop.svg' ; ?>
            alt="Logo du site Zenkai Sport">
        </a>
        <a class="logo_mobile" href="/">
            <img  src=<?php echo get_template_directory_uri() . '/assets/logo/Logo_Mobile.svg' ; ?>
            alt="Logo du site Zenkai Sport">
        </a>
    <nav>
        <ul class="nav_list">
            <li><a href="">Articles</a></li>
            <li><a href="">Classement</a></li>
            <li><a href="/about">A propos</a></li>
        </ul>
    </nav>
    </div>
</header>