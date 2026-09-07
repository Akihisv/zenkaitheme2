<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>

<main>

    <section class="news-carousel" aria-label="Actualités anime à la une">
        <ul class="news-carousel__track">

            <li class="news-carousel__item">
                <a href="#" class="news-carousel__card">
                    <img
                        class="news-carousel__image"
                        src=<?php echo get_template_directory_uri() . '/assets/images/haikyu.svg'; ?>
                        alt="Haikyuu !!"
                        width="245"
                        height="370"
                        loading="lazy">
                    <span class="news-carousel__badge">TITRE : NEWS</span>
                </a>
            </li>

            <li class="news-carousel__item">
                <a href="#" class="news-carousel__card">
                    <img
                        class="news-carousel__image"
                        src=<?php echo get_template_directory_uri() . '/assets/images/haikyu.svg'; ?>
                        alt="Actualité anime 2"
                        width="245"
                        height="370"
                        loading="lazy">
                    <span class="news-carousel__badge">TITRE : NEWS</span>
                </a>
            </li>

            <li class="news-carousel__item">
                <a href="#" class="news-carousel__card">
                    <img
                        class="news-carousel__image"
                        src=<?php echo get_template_directory_uri() . '/assets/images/haikyu.svg'; ?>
                        alt="Actualité anime 3"
                        width="245"
                        height="370"
                        loading="lazy">
                    <span class="news-carousel__badge">TITRE : NEWS</span>
                </a>
            </li>

            <li class="news-carousel__item">
                <a href="#" class="news-carousel__card">
                    <img
                        class="news-carousel__image"
                        src=<?php echo get_template_directory_uri() . '/assets/images/haikyu.svg'; ?>
                        alt="Actualité anime 4"
                        width="245"
                        height="370"
                        loading="lazy">
                    <span class="news-carousel__badge">TITRE : NEWS</span>
                </a>
            </li>

            <li class="news-carousel__item">
                <a href="#" class="news-carousel__card">
                    <img
                        class="news-carousel__image"
                        src=<?php echo get_template_directory_uri() . '/assets/images/haikyu.svg'; ?>
                        alt="Actualité anime 5"
                        width="245"
                        height="370"
                        loading="lazy">
                    <span class="news-carousel__badge">TITRE : NEWS</span>
                </a>
            </li>

        </ul>
    </section>

    <section class="top-anime" aria-labelledby="top-anime-title">
        <h2 id="top-anime-title" class="top-anime__title">TOP ANIME</h2>

        <ul class="top-anime__grid">
            <li>
                <a href="#">
                    <img
                        class="top-anime__cover"
                        src=<?php echo get_template_directory_uri() . '/assets/images/Zenkai_ippo.jpg'; ?>
                        alt="Ippo"
                        width="200"
                        height="300"
                        loading="lazy">
                </a>
            </li>
            <li>
                <a href="#">
                    <img
                        class="top-anime__cover"
                        src=<?php echo get_template_directory_uri() . '/assets/images/Zenkai_slam_dunk.webp'; ?>
                        alt="Slam Dunk"
                        width="200"
                        height="300"
                        loading="lazy">
                </a>
            </li>
            <li>
                <a href="#">
                    <img
                        class="top-anime__cover"
                        src=<?php echo get_template_directory_uri() . '/assets/images/Zenkai_haikyuu.jpg'; ?>
                        alt="Haikyuu !!"
                        width="200"
                        height="300"
                        loading="lazy">
                </a>
            </li>
            <li>
                <a href="#">
                    <img
                        class="top-anime__cover"
                        src=<?php echo get_template_directory_uri() . '/assets/images/haikyu.svg'; ?>
                        alt="Blue Lock"
                        width="200"
                        height="300"
                        loading="lazy">
                </a>
            </li>
        </ul>

        <a href="#" class="top-anime__more">Voir plus</a>
    </section>

</main>


<?php get_footer(); ?>