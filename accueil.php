<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>

<body>
    <main>

        <section class="news-carousel" aria-label="Actualités anime à la une">
            <ul class="news-carousel__track">

                <li class="news-carousel__item">
                    <a href="#" class="news-carousel__card">
                        <img
                            class="news-carousel__image"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Kuroko_no_basket.jpg'); ?>"
                            alt="Haikyuu !!"
                            width="245"
                            height="370"
                            loading="lazy">
                        <span class="news-carousel__badge">Kuroko No Basket News</span>
                    </a>
                </li>

                <li class="news-carousel__item">
                    <a href="#" class="news-carousel__card">
                        <img
                            class="news-carousel__image"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/one_outs_1174.webp'); ?>"
                            alt="Actualité anime 2"
                            width="245"
                            height="370"
                            loading="lazy">
                        <span class="news-carousel__badge">One Outs News</span>
                    </a>
                </li>

                <li class="news-carousel__item">
                    <a href="#" class="news-carousel__card">
                        <img
                            class="news-carousel__image"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/blue-lock.webp'); ?>"
                            alt="Actualité anime 3"
                            width="245"
                            height="370"
                            loading="lazy">
                        <span class="news-carousel__badge">Blue Lock News</span>
                    </a>
                </li>

                <li class="news-carousel__item">
                    <a href="#" class="news-carousel__card">
                        <img
                            class="news-carousel__image"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Jeanne-et-Serge.jpg'); ?>"
                            alt="Actualité anime 4"
                            width="245"
                            height="370"
                            loading="lazy">
                        <span class="news-carousel__badge">Jeanne et Serge News</span>
                    </a>
                </li>

                <li class="news-carousel__item">
                    <a href="#" class="news-carousel__card">
                        <img
                            class="news-carousel__image"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Captain_Tsubasa.jpeg'); ?>"
                            alt="Actualité anime 5"
                            width="245"
                            height="370"
                            loading="lazy">
                        <span class="news-carousel__badge">Captain Tsubasa News</span>
                    </a>
                </li>
            </ul>
            <div class="news-carousel__dots" role="tablist" aria-label="Navigation du carrousel news">
                <button class="news-carousel__dot is-active" type="button" role="tab" aria-selected="true" aria-label="Aller à l'actualité 1"></button>
                <button class="news-carousel__dot" type="button" role="tab" aria-selected="false" aria-label="Aller à l'actualité 2"></button>
                <button class="news-carousel__dot" type="button" role="tab" aria-selected="false" aria-label="Aller à l'actualité 3"></button>
                <button class="news-carousel__dot" type="button" role="tab" aria-selected="false" aria-label="Aller à l'actualité 4"></button>
                <button class="news-carousel__dot" type="button" role="tab" aria-selected="false" aria-label="Aller à l'actualité 5"></button>
            </div>
        </section>

        <section class="cta-newsletter">
            <div class="cta-newsletter__text">
                <h2 class="cta-newsletter__title">NE RATE AUCUNE SORTIE</h2>
                <p class="cta-newsletter__subtitle">Reçois les nouveautés animes directement dans ta boîte mail.</p>
            </div>

            <form class="cta-newsletter__form" action="#" method="post">
                <label for="newsletter-email" class="visually-hidden">Ton adresse email</label>
                <input
                    type="email"
                    id="newsletter-email"
                    name="newsletter-email"
                    class="cta-newsletter__input"
                    placeholder="Ton adresse email"
                    required>
                <button type="submit" class="cta-newsletter__button">S'abonner</button>
            </form>
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
                            src=<?php echo get_template_directory_uri() . '/assets/images/Kuroko_no_basket.jpg'; ?>
                            alt="Blue Lock"
                            width="200"
                            height="300"
                            loading="lazy">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img
                            class="top-anime__cover"
                            src=<?php echo get_template_directory_uri() . '/assets/images/InitialD.jpg'; ?>
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
</body>

<?php get_footer(); ?>