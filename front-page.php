<?php echo get_header() ?>

<section class="hero mt">
    <div class="container">
        <div class="hero-flex">
            <h4 class="hero-title">
                <?php echo get_field('home_page_hero_title') ?>
            </h4>
            <div class="slogan-award">
                <a target="_blank" rel="noopener noreferrer" href="https://clutch.co/profile/alignvn#summary" class="slogan-logo">
                    <img src="/wp-content/uploads/2022/09/Slogan-min.png" alt="">
                </a>
                <div class="slogan-award__content">
                    <a target="_blank" rel="noopener noreferrer" class="hover" href="https://clutch.co/vn/agencies/branding">
                        Align is top 34 UX/UI
                    </a>
                    <a target="_blank" rel="noopener noreferrer" class="hover" href="https://clutch.co/agencies/digital?page=6">Top VietNam Agency</a>
                    <a target="_blank" rel="noopener noreferrer" class="hover" href="https://clutch.co/profile/alignvn#summary">5 <img src="/wp-content/uploads/2022/09/star-min.png" alt="">
                        Reviews (13)</a>
                </div>
            </div>
        </div>
    </div>
    <div class="video-wrapper">
        <video autoplay muted>
            <source src="<?php $video = get_field('home_page_hero_video');
                            if ($video) {
                                echo $video;
                            } ?>" type="video/mp4">
            <!-- <source src="movie.ogg" type="video/ogg"> -->
            Your browser does not support the video tag.
        </video>
    </div>

</section>
<!-- <div id="canvas" class="canvas1">
</div> -->
<section class="slogan">
    <div class="container">
        <div class="slogan-wrap">
            <h3 class="slogan-text" data-splitting>
                <?php
                if (have_rows('home_page_slogan')) :
                    while (have_rows('home_page_slogan')) : the_row();
                        $sloganText = get_sub_field('home_page_slogan_normal_text');
                        $sloganHighlighttext = get_sub_field('home_page_slogan_highlight_text');
                ?>
                        <span class="slogan-animation"><?php echo $sloganText; ?>
                            <span class="slogan-orange">
                                <a href="/" onclick="return false;" class="hover"><?php echo $sloganHighlighttext; ?> </a>
                            </span>
                        </span>
                <?php
                    endwhile;
                endif;
                ?>
            </h3>
        </div>
    </div>
</section>
<section class="project">
    <div class="container">
        <h2 class="project-title">Website projects</h2>
        <div class="project-grid">
            <?php
            $args = array(
                'post_type' => 'work',
                'post_status' => 'publish',
                'posts_per_page' => 6,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'project',
                        'field' => 'slug',
                        'terms' =>  array('websites'),
                    )
                ),
            );
            $websiteProject = new WP_Query($args);

            while ($websiteProject->have_posts()) : $websiteProject->the_post();
            ?>
                <a href="<?php echo the_permalink(); ?>" class="project-item project-view">
                    <img src="<?php echo get_the_post_thumbnail_url();
                                ?>" alt="">
                    <div class="project-content">
                        <div class="project-title">
                        </div>
                    </div>
                    <div class="project-overlay">
                        <div class="project-overlay__wrap">
                            <div class="project-overlay__top">
                                <div class="project-overlay__title">
                                    <?php echo the_title();
                                    ?>
                                </div>
                                <div class="project-overlay__field">
                                    <?php $areas = get_the_terms($post->ID, "area");
                                    foreach ($areas as $area) {
                                        echo $area->name;
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="project-overlay__bottom">
                                <?php $projects = get_the_terms($post->ID, "project");
                                foreach ($projects as $project) {
                                    echo $project->name;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </a>
            <?php
            endwhile;

            wp_reset_postdata();  ?>

        </div>
    </div>
</section>
<section class="project">
    <div class="container">
        <h2 class="project-title">Branding projects</h2>
        <div class="project-grid">
            <?php
            $args = array(
                'post_type' => 'work',
                'post_status' => 'publish',
                'posts_per_page' => 6,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'project',
                        'field' => 'slug',
                        'terms' =>  array('branding', 'packaging-design'),
                    )
                ),
            );
            $brandingProject = new WP_Query($args);

            while ($brandingProject->have_posts()) : $brandingProject->the_post();
            ?>
                <a href="<?php echo the_permalink();
                            ?>" class="project-item branding-item project-view">
                    <img src="<?php echo get_the_post_thumbnail_url();
                                ?>" alt="">
                    <div class="project-overlay">
                        <div class="project-overlay__wrap">
                            <div class="project-overlay__top">
                                <div class="project-overlay__title">
                                    <?php echo the_title();
                                    ?>
                                </div>
                                <div class="project-overlay__field">
                                    <?php $areas = get_the_terms($post->ID, "area");
                                    foreach ($areas as $area) {
                                        echo $area->name;
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="project-overlay__bottom">
                                <?php $projects = get_the_terms($post->ID, "project");
                                foreach ($projects as $project) {
                                    echo $project->name;
                                }
                                ?>
                                <?php //var_dump(get_the_terms($post->ID, "project"));
                                ?>
                            </div>
                        </div>
                    </div>
                </a>
            <?php
            endwhile;

            wp_reset_postdata();  ?>

        </div>
        <!-- <div class="project-button">
                    <div class="button">
                        <div class="button__filler"></div>
                        <span class="button__text">
                            <a href="/works.html" class="button__text-inner">View all projects</a>
                        </span>
                    </div>
                </div> -->
    </div>
</section>
<section class="services services-section">
    <div class="container">
        <div class="services-flex">
            <h1 class="services-title">
                Services
            </h1>
            <div class="services-list">
                <?php
                if (have_rows('home_page_service_item')) :
                    while (have_rows('home_page_service_item')) : the_row();
                        $serviceItem__title = get_sub_field('service_item_title');
                        $serviceItem__text = get_sub_field('service_item_text');
                ?>
                        <div class="services-item">
                            <div class="services-item__heading">
                                <span class="services-item__title">
                                    <?php echo $serviceItem__title ?>
                                </span>
                                <span class="services-item__arrow">
                                    <img src="/wp-content/uploads/2022/09/Arrow-min.png" alt="">
                                </span>
                            </div>
                            <div class="services-item__desc">
                                <?php echo $serviceItem__text ?>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
        <div class="services-quote" data-splitting>
            <?php
            if (have_rows('home_page_service_quote')) :
                while (have_rows('home_page_service_quote')) : the_row();
                    $serviceQuote__id = get_sub_field('service_quote_id');
                    $serviceQuote__text = get_sub_field('service_quote_text');
            ?>
                    <span data-content="<?php echo $serviceQuote__id; ?>"><?php echo $serviceQuote__text; ?></span>
            <?php
                endwhile;
            endif;
            ?>

            <div class="services-symbol">
                <?php
                if (have_rows('home_page_service_quote')) :
                    while (have_rows('home_page_service_quote')) : the_row();
                        $serviceQuote__id = get_sub_field('service_quote_id');
                        $serviceQuote__text = get_sub_field('service_quote_text');
                        $serviceQuote__explain = get_sub_field('service_quote_explain');
                ?>
                        <div class="services-content" id="<?php echo $serviceQuote__id ?>">
                            <span>
                                <?php echo $serviceQuote__explain ?>
                            </span>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<section class="clients">
    <div class="clients-marque">
        <div class="container">
            <h1 class="clients-title">
                Clients
            </h1>
            <div class="clients-list">
                <div class="clients-list__heading">
                    Educational
                </div>
                <div class="clients-list__marque">
                    <ul class="clients-list__icon marque">
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoOne-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoTwo-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoThree-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoFour-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoFive-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoSix-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoSeven-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoEight-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoNine-min.png" alt="">
                        </li>
                    </ul>
                    <ul class="clients-list__icon marque">
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoOne-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoTwo-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoThree-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoFour-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoFive-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoSix-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoSeven-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoEight-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoNine-min.png" alt="">
                        </li>
                    </ul>
                    <ul class="clients-list__icon marque">
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoOne-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoTwo-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoThree-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoFour-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoFive-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoSix-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoSeven-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoEight-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/EduLogoNine-min.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="container">
            <div class="clients-list">
                <div class="clients-list__heading">
                    Industrial
                </div>
                <div class="clients-list__marque">
                    <ul class="clients-list__icon marqueForward">
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo1-min.png" alt="" class="clients-list__w7">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo2-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo3-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo4-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo5-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo6-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo7-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo8-min.png" alt="" class="clients-list__w7">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo9-min.png" alt="">
                        </li>
                    </ul>
                    <ul class="clients-list__icon marqueForward">
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo1-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo2-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo3-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo4-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo5-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo6-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo7-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo8-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo9-min.png" alt="">
                        </li>
                    </ul>
                    <ul class="clients-list__icon marqueForward">
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo1-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo2-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo3-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo4-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo5-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo6-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo7-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo8-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/IndusLogo9-min.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="container">
            <div class="clients-list">
                <div class="clients-list__heading">
                    American
                </div>
                <div class="clients-list__marque">
                    <ul class="clients-list__icon marque">
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo1-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo2-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo3-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo4-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo5-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo6-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo7-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo8-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo9-min.png" alt="">
                        </li>
                    </ul>
                    <ul class="clients-list__icon marque">
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo1-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo2-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo3-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo4-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo5-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo6-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo7-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo8-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo9-min.png" alt="">
                        </li>
                    </ul>
                    <ul class="clients-list__icon marque">
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo1-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo2-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo3-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo4-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo5-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo6-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo7-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo8-min.png" alt="">
                        </li>
                        <li>
                            <img src="/wp-content/uploads/2022/09/AmericanLogo9-min.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="container">
        <div class="reviews">
            <div class="reviews-flex mainSwiper">
                <div class="personSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide reviews-info">
                            <div class="reviews-personal">
                                <img src="/wp-content/uploads/2022/09/ArdorClient-min.jpg" alt="">
                                <div class="reviews-personal__text">
                                    <p>Arden Linh Nguyen
                                    </p>
                                    <p>Head of Marketing, Ardor Group
                                    </p>

                                    <ul>
                                        <li><img src="/wp-content/uploads/2022/09/star-min.png" alt=""></li>
                                        <li><img src="/wp-content/uploads/2022/09/star-min.png" alt=""></li>
                                        <li><img src="/wp-content/uploads/2022/09/star-min.png" alt=""></li>
                                        <li><img src="/wp-content/uploads/2022/09/star-min.png" alt=""></li>
                                        <li><img src="/wp-content/uploads/2022/09/star-min.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide reviews-info">
                            <div class="reviews-personal">
                                <img src="/wp-content/uploads/2022/09/GIACeo-min.png" alt="">
                                <div class="reviews-personal__text">
                                    <p>Peter Nguyen</p>
                                    <p>VP of marketing, Gia Capital LLC.</p>


                                    <ul>
                                        <li><img src="/wp-content/uploads/2022/09/star-min.png" alt=""></li>
                                        <li><img src="/wp-content/uploads/2022/09/star-min.png" alt=""></li>
                                        <li><img src="/wp-content/uploads/2022/09/star-min.png" alt=""></li>
                                        <li><img src="/wp-content/uploads/2022/09/star-min.png" alt=""></li>
                                        <li><img src="/wp-content/uploads/2022/09/star-min.png" alt=""></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide reviews-info">
                            <div class="reviews-personal">
                                <img src="/wp-content/uploads/2022/09/Phil-min.png" alt="">
                                <div class="reviews-personal__text">
                                    <p>Phil Greswold</p>
                                    <p>MD, KEEP</p>


                                    <ul>
                                        <li><img src="/wp-content/uploads/2022/09/star-min.png" alt=""></li>
                                        <li><img src="/wp-content/uploads/2022/09/star-min.png" alt=""></li>
                                        <li><img src="/wp-content/uploads/2022/09/star-min.png" alt=""></li>
                                        <li><img src="/wp-content/uploads/2022/09/star-min.png" alt=""></li>
                                        <li><img src="/wp-content/uploads/2022/09/star-min.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="reviewSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide reviews-quote">
                            <q>They managed to offer a professional website that was so affordable compared to
                                the effort that they put in.
                            </q>
                        </div>
                        <div class="swiper-slide reviews-quote">
                            <q>Their designers did an awesome job and we felt that they are masters of their
                                craft.</q>
                        </div>
                        <div class="swiper-slide reviews-quote">
                            <q>
                                Their good communication stood out for us.
                            </q>
                        </div>
                    </div>
                </div>
            </div>
            <a target="_blank" rel="noopener noreferrer" href="https://clutch.co/profile/alignvn#reviews" class="reviews-logo hover">
                <img src="/wp-content/uploads/2022/09/Slogan-min.png" alt="">
                <p>Reviews from Clutch</p>
            </a>
        </div>
    </div>
</section>
<section class="insights last-section">
    <div class="container">
        <div class="insights-title">
            Insights
        </div>
        <div class="insightSlider">
            <div class="swiper-wrapper">
                <?php
                $insight_posts = get_field('insight_post');
                if ($insight_posts) : ?>
                    <?php foreach ($insight_posts as $post) :

                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post); ?>
                        <a href="<?php echo the_permalink(); ?>" class="insightSlider-item swiper-slide">
                            <div class="rto-box">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="insightSlider-title">
                                <?php echo the_title(); ?>
                            </div>
                            <div class="button-type">
                                <?php $cats = get_the_category($post->ID);
                                foreach ($cats as $cat) {
                                    echo '<div>' . $cat->name . '</div>';
                                }
                                ?>
                            </div>
                        </a>
                    <?php endforeach; ?>
                    <?php
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php echo get_footer() ?>