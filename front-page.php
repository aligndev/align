<?php get_header(); ?>



<div class="load-container">
    <div class="loading-screen">
    </div>
</div>

<main class="wrapper" data-barba="container" data-barba-namespace="home">
    <?php if (have_rows('hero_slider')) : ?>
        <section class="hero fadeJs">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <?php
                  while (have_rows('hero_slider')) : the_row();
                      $hero_sub = get_sub_field('hero_slider_sub');
                      $hero_title = get_sub_field('hero_slider_title');
                      $hero_slider_waves = get_sub_field('hero_slider_waves');
                      $hero_image = get_sub_field('hero_image');
                      $hero_body  = get_sub_field('hero_body');
                      $hero_link = get_sub_field('hero_link');
                  ?>
                      <div class="swiper-slide">
                          <div class="container">
                              <div class="hero-top">
                                  <h2 class="h2 hero-sub"><?php echo $hero_sub; ?></h2>
                                  <h1 class="h1 hero-title"><?php echo $hero_title; ?></h1>
                              </div>
                              <div class="hero-bottom">
                                  <div class="hero-wave">
                                      <div class="hero-wave__item">
                                          <img src="<?php echo $hero_slider_waves; ?>" alt="" />
                                      </div>
                                  </div>

                                  <div class="hero-image">
                                      <img src="<?php echo $hero_image['url']; ?>" alt="" />
                                  </div>
                                  <div class="hero-cta col-6">
                                      <p class="hero-desc body">
                                          <?php echo $hero_body; ?>
                                      </p>

                                      <a href="<?php echo $hero_link; ?>" class="col-4 hero-button body">
                                          Learn More
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  <?php endwhile; ?>
              </div>
              <div class="swiper-button-next swiper-button-lg"></div>
              <div class="swiper-button-prev swiper-button-lg"></div>
              <div class="swiper-pagination pagination-hide-on-desktop"></div>
            </div>
        </section>
    <?php endif; ?>

    <section class="slider mt">
        <div class="container">
            <h2 class="h2 col-6 slider-heading">
                <?php the_field('home_page_slider_title'); ?>
            </h2>
            <?php if (have_rows('home_page_slide')) : ?>
                <div class="slider-inner row">
                    <div class="slider-wrapper col-5">
                        <div class="reviewSlider slider-text">
                            <div class="swiper-wrapper">
                                <?php while (have_rows('home_page_slide')) : the_row();
                                    $home_page_slider_title = get_sub_field('home_page_slider_title');
                                    $home_page_slider_text = get_sub_field('home_page_slider_text');
                                    $home_page_slider_link = get_sub_field('home_page_slider_link');
                                    $home_page_slider_image = get_sub_field('home_page_slider_image');
                                ?>
                                    <div class="swiper-slide slider-slide">
                                        <div class="swiper-slide-container">
                                            <h3 class="h3 slider-title text-uppercase">
                                                <?php echo $home_page_slider_title ?>
                                            </h3>
                                            <p class="body slider-desc">
                                                <?php echo $home_page_slider_text; ?>
                                            </p>
                                            <a href="<?php echo $home_page_slider_link; ?>" class="btn btn-green col-7">
                                                Find out more
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>

                    <div class="imageSlider col-6 slider-image">
                        <div class="swiper-wrapper">
                            <?php while (have_rows('home_page_slide')) : the_row();
                                $home_page_slider_image = get_sub_field('home_page_slider_image');
                            ?>
                                <div class="swiper-slide slider-slide">
                                    <div class="rto-box">
                                        <img src=" <?php echo $home_page_slider_image; ?>" alt="" />
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>

                    <div class="swiper-button-next reviewSlider-button-next"></div>
                    <div class="swiper-button-prev reviewSlider-button-prev"></div>
                    <div class="swiper-pagination hide-on-desktop reviewSlider-pagination"></div>

                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="partner mt">
        <div class="container">
            <div class="partner-inner">
                <div class="partner-content row">
                    <h2 class="h2 partner-title text-uppercase col-6">
                        <?php the_field('home_page_partner_title') ?>
                    </h2>
                    <p class="body partner-desc col-6">
                        <?php the_field('home_page_partner_text') ?>
                    </p>
                </div>
                <div class="partner-logos">
                    <div class="logoJs">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php
                                $images = get_field('home_page_partner_logo');
                                if ($images) : ?>
                                    <?php foreach ($images as $image) : ?>
                                        <div class="swiper-slide partner-item">
                                            <img src="<?php echo $image; ?>" />
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif;
                                ?>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt discover">
        <div class="container">
            <div class="discover-block">
                <h2 class="h2 text-uppercase discover-title">
                    <?php the_field('home_page_discover_title') ?>
                </h2>
                <p class="body discover-desc">
                    <?php the_field('home_page_discover_description') ?>
                </p>
            </div>
            <?php // Check rows exists.
            if (have_rows('home_page_discover_block')) :

                // Loop through rows.
                while (have_rows('home_page_discover_block')) : the_row();

                    // Load sub field value.
                    $discover_title = get_sub_field('discover_block_title');
                    $discover_body = get_sub_field('discover_block_body');
                    $discover_image = get_sub_field('discover_block_image');
                    $discover_heading = get_sub_field('discover_block_heading');
                    $discover_logo = get_sub_field("discover_block_logo");

                    // Do something...
            ?>
                    <div class="discover-block">
                        <div class="discover-item">
                            <div class="discover-image">
                                <img src="<?php echo $discover_image['url']; ?>" alt="" />
                            </div>
                            <img src="<?php echo $discover_logo; ?>" alt="" class="discover-logo" />
                            <div class="discover-info">
                                <div class="discover-info__inner">
                                    <h4 class="h4 discover-info__title"><?php echo $discover_title; ?></h4>
                                    <p class="body">
                                        <?php echo $discover_body; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="discover-item__heading">
                                <?php echo $discover_heading; ?>
                            </div>
                        </div>
                    </div>
            <?php

                // End loop.
                endwhile;

            // No value.
            else :
            // Do something...
            endif; ?>

        </div>
    </section>

    <section class="news mt">
        <div class="container">
            <h2 class="h2 text-uppercase news-title">Hung Yen News</h2>
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,

                );

                $loop = new WP_Query($args);

                while ($loop->have_posts()) : $loop->the_post();


                ?>
                    <div class="news-item col-4">
                        <div class="rto-box news-item__image">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                        </div>
                        <div class="news-item__content">
                            <h5 class="h5 news-item__title">
                                <?php print the_title(); ?>
                            </h5>
                            <p class="news-item__desc">
                                <?php echo wp_trim_words(get_the_content(), 50); ?>
                            </p>
                        </div>
                    </div>
                <?php
                endwhile;

                wp_reset_postdata();  ?>

            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>