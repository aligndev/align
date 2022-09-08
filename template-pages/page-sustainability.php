<?php get_header(); ?>
<main class="wrapper" data-barba="container" data-barba-namespace="sustainability">
    <?php if (have_rows('sustainability_page_hero_slide')) : ?>
        <section class="process fadeJs">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php
                while (have_rows('sustainability_page_hero_slide')) : the_row();
                  $process_title = get_sub_field('hero_slide_title');
                  $process_sub = get_sub_field('hero_slide_sub');
                  $process_icons = get_sub_field('hero_slide_icons');
                  $process_button_download_url = get_sub_field('hero_slide_button_download_link');
                  $process_button_text = get_sub_field('hero_slide_button_text');
                  $process_video = get_sub_field('hero_slide_video')
              ?>
                <div class="swiper-slide">
                  <div class="container">
                    <div class="process-row">
                      <div class="col-8">
                                  <div class="process-heading">
                                      <h1 class="process-title h1">
                                          <?php echo $process_title; ?>
                                      </h1>
                                      <div class="body process-sub content-config">
                                          <?php echo $process_sub; ?>
                                      </div>
                                      <ul class="process-icon">
                                          <?php foreach ($process_icons as $process_icon) : ?>
                                              <li>
                                                  <a href="#circle"><img src="<?php echo $process_icon['url']; ?>" alt=""></a>
                                              </li>
                                          <?php endforeach; ?>
                                      </ul>
                                      <a href="<?php echo $process_button_download_url; ?>" download class="process-download btn btn-green col-6 hide-on-mobile">
                                          <?php echo $process_button_text; ?>
                                      </a>
                                  </div>
                      </div>
                      <video autoplay playinlines muted loop class="process-video">
                          <source src="<?php echo $process_video ?>" type="video/mp4"/>
                      </video>
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
    <section class="logoSlider">
        <div class="container">
            <a href="<?php echo $process_button_download_url; ?>" class="process-download btn btn-green col-9 hide-on-desktop">
                <?php echo $process_button_text; ?>
            </a>
            <div class="logoSlider-inner">
                <div class="logoJs">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $logos = get_field('sustainability_page_logo_slide');
                            if ($logos) : ?>
                                <?php foreach ($logos as $logo) : ?>
                                    <div class="swiper-slide logoSlider-slide">
                                        <img src="<?php echo $logo; ?>" alt="" />
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="tabs">
        <div class="container">
            <div class="row tabs-tab">
                <ul class="tabs-list">
                    <li class="tabs-item col-4 active" data-tab-target="#<?php the_field('sustainability_tab_id_one') ?>">
                        <span class="h4 tabs-title"><?php the_field('materials_tab_title')?> </span>
                    </li>
                    <li class="tabs-item col-4" data-tab-target="#<?php the_field('sustainability_tab_id_two')?>">
                        <span class="h4 tabs-title"><?php the_field('sustainability_through_efficiency_tab_title')?> </span>
                    </li>
                    <li class="tabs-item col-4" data-tab-target="#<?php the_field('sustainability_tab_id_three') ?>">
                        <span class="h4 tabs-title"><?php the_field('corporate_social_responsibility_tab_title') ?></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tabs-content">
            <div class="container">
                <div class="tabs-content__item materials active" id="<?php the_field('sustainability_tab_id_one') ?>" data-tab-content>
                    <h2 class="h2 col-7">
                        <?php the_field('materials_tab_heading') ?>
                    </h2>
                    <div class="tabs-content__video">
                        <video playsinline muted autoplay loop>
                            <source src="<?php the_field("materials_tab_video"); ?>" />
                        </video>
                    </div>

                    <div class="materials-block">
                        <div class="materials-row">
                            <h2 class="materials-heading h2">
                              <?php the_field("materials_core_heading") ?>
                            </h2>
                            <div class="materials-col"></div>

                        </div>
                        <?php
                        // Check rows exists.
                        if (have_rows('materials_core')) :
                            // Loop through rows.
                            while (have_rows('materials_core')) : the_row();

                                // Load sub field value.
                                $materials_core_year = get_sub_field('materials_core_year');
                                $materials_core_description = get_sub_field('materials_core_description');
                                $materials_core_sub = get_sub_field('materials_core_sub');
                                $materials_core_image = get_sub_field('materials_core_image');
                                $materials_core_video = get_sub_field("materials_core_video");
                                $materials_core_logos = get_sub_field('materials_core_logos');
                                $materials_core_reverse = get_sub_field('materials_core_reverse');
                                $materials_core_for_image = get_sub_field("materials_core_popup_image");
                                $materials_core_for_video = get_sub_field("materials_core_popup_video");
                                $materials_cover_link_text = get_sub_field("materials_core_link_text");
                                $materials_cover_link = get_sub_field("materials_core_link");
                        ?>
                                <div class="material-block <?php if ($materials_core_reverse) {
                                                                echo 'material-rev ';
                                                            } if($materials_core_for_image || $materials_core_for_video){
                                                                echo 'material-popup';
                                                            } ?>" <?php if($materials_core_for_image) {
                                                                echo 'data-url-image = " ';
                                                                forEach($materials_core_for_image as $key=>$image) {
                                                                  if($key != 0) {
                                                                    echo ",";
                                                                  };
                                                                  echo  $image;
                                                                }
                                                                echo '"';
                                                            }else if($materials_core_for_video){
                                                                echo 'data-url-video = " ' . $materials_core_for_video . ' " ';
                                                            }?> >
                                    <?php

                                      if($materials_core_video) {
                                        echo '<div class="materials-col materials-image">
                                                <video autoplay playinlines loop muted>
                                                  <source src=" ' . $materials_core_video . ' " type="video/mp4" >
                                                </video>
                                              </div>';
                                      }elseif ($materials_core_video == 'null') ; {
                                        if( !empty($materials_core_image) ): ?>
                                              <div class="materials-col materials-image">
                                                <img src="<?php echo $materials_core_image['url'] ?>" alt="" />
                                              </div>
                                            <?php endif;
                                            }
                                          ?>
                                    <div class="materials-col materials-text materials-border">
                                        <h2 class="materials-title h2"><?php echo $materials_core_year ?></h2>
                                        <p class="materials-sub h5">
                                            <?php echo $materials_core_description ?>
                                        </p>
                                        <div class="materials-logo">
                                            <?php
                                            // Check rows exists.
                                            if (have_rows('materials_core_logos')) :

                                                // Loop through rows.
                                                while (have_rows('materials_core_logos')) : the_row();

                                                    // Load sub field value.
                                                    $logo = get_sub_field('materials_core_logo');
                                                    // Do something...
                                            ?>
                                                    <img src="<?php echo $logo['url'] ?>" alt="">
                                            <?php
                                                // End loop.
                                                endwhile;

                                            // No value.
                                            else :
                                            // Do something...
                                            endif; ?>
                                        </div>
                                        <div class="materials-desc content-config">
                                          <?php echo $materials_core_sub ?>
                                        </div>
                                        <a class="materials-link" href="<?php echo $materials_cover_link ?> ">
                                          <?php echo $materials_cover_link_text ?>
                                        </a>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                            else :
                        endif; ?>
                    </div>
                </div>
                <div class="tabs-content__item efficiency" id="<?php the_field('sustainability_tab_id_two') ?>" data-tab-content>
                    <h2 class="tabs-content__title h2 col-10 mx-auto uppercase">
                      <?php the_field('sustainability_through_efficiency_tab_heading_green') ?>
                    </h2>

                    <div class="tabs-content__block">
                        <p class="tabs-content__sub h2 col-10 mx-auto uppercase">
                            <?php the_field('sustainability_through_efficiency_block_one_title')?>
                        </p>
                        <div class="tabs-info col-10 mx-auto">
                            <?php
                            $count = 1;
                            if (have_rows('sustainability_through_efficiency_block')) :
                                while (have_rows('sustainability_through_efficiency_block')) : the_row();
                                    $sustainability_through_efficiency_title = get_sub_field('sustainability_through_efficiency_title');
                                    $sustainability_through_efficiency_tab = get_sub_field('sustainability_through_efficiency_tab');
                                    $sustainability_through_efficiency_image = get_sub_field('sustainability_through_efficiency_image');
                            ?>
                                    <div class="row">
                                        <div class="tabs-info__content">
                                            <h4 class="h4 tabs-info__title"><?php echo $sustainability_through_efficiency_title ?></h4>
                                            <?php
                                            if (have_rows('sustainability_through_efficiency_tab')) :
                                                while (have_rows('sustainability_through_efficiency_tab')) : the_row();
                                                    $logo = get_sub_field('sustainability_through_efficiency_tab_logo');
                                                    $info = get_sub_field('sustainability_through_efficiency_tab_description');
                                            ?>
                                                    <div class="tabs-info__item">
                                                        <div class="tabs-info__logo">
                                                            <img src="<?php echo $logo['url'] ?>" alt="" />
                                                        </div>
                                                        <div class="tabs-info__desc body">
                                                            <?php echo $info; ?>
                                                        </div>
                                                    </div>
                                            <?php
                                                endwhile;
                                            else :
                                            endif; ?>
                                        </div>
                                        <div class="tabs-info__banner">
                                            <img src="<?php echo $sustainability_through_efficiency_image['url'] ?>" alt="" />
                                        </div>
                                    </div>
                                    <?php

                                    $count++;
                                    if ($count == 3) {
                                    ?>
                        </div>
                    </div>
                    <div class="tabs-content__block">
                        <p class="tabs-content__sub h2 col-10 mx-auto">
                          <?php the_field('sustainability_through_efficiency_block_two_title')?>
                        </p>

                        <div class="tabs-info col-10 mx-auto">
                        <?php
                                    }

                                endwhile;
                            else :
                            endif; ?>
                        </div>
                    </div>
                </div>
                <div class="tabs-content__item corporate" id="<?php the_field('sustainability_tab_id_three') ?>" data-tab-content>
                    <h2 class="tabs-content__title h2 col-10 mx-auto uppercase">
                        <?php the_field('corporate_social_responsibility_heading'); ?>
                    </h2>

                    <div class="slider tabs-content__slider">
                        <?php if (have_rows('corporate_social_responsibility_slider')) : ?>
                            <div class="slider-inner row">
                                <div class="slider-wrapper col-5">
                                    <div class="reviewSlider slider-text">
                                        <div class="swiper-wrapper">
                                            <?php while (have_rows('corporate_social_responsibility_slider')) : the_row();
                                                $corporate_social_responsibility_slider_title = get_sub_field('corporate_social_responsibility_slider_title');
                                                $corporate_social_responsibility_slider_description = get_sub_field('corporate_social_responsibility_slider_description');
                                            ?>
                                                <div class="swiper-slide slider-slide">
                                                    <div class="swiper-slide-container">
                                                        <h3 class="h3 slider-title text-uppercase">
                                                            <?php echo $corporate_social_responsibility_slider_title; ?>
                                                        </h3>
                                                        <p class="body slider-desc">
                                                            <?php echo $corporate_social_responsibility_slider_description; ?>
                                                        </p>

                                                        <a href="#" class="btn btn-green col-7">
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
                                        <?php while (have_rows('corporate_social_responsibility_slider')) : the_row();
                                            $corporate_social_responsibility_slider_image = get_sub_field('corporate_social_responsibility_slider_image');
                                        ?>
                                            <div class="swiper-slide slider-slide">
                                                <div class="rto-box">
                                                    <img src="<?php echo $corporate_social_responsibility_slider_image['url']; ?>" alt="" />
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>

                                <div class="swiper-button-next reviewSlider-button-next"></div>
                                <div class="swiper-button-prev reviewSlider-button-prev"></div>
                            </div>
                        <?php endif; ?>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tabsMobile">
        <div class="swiper-default swiper-farther noloop">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide tabsMobile-slide">
                        <div class="container">
                            <h4 class="tabsMobile-title h4">
                                <?php the_field('materials_tab_title') ?>
                            </h4>
                        </div>
                        <div class="tabsMobile-inner">
                            <div class="container">
                                <h1 class="h1 col-7 tabsMobile-materials__heading">
                                  <?php the_field('materials_tab_heading') ?>
                                </h1>
                                <div class="tabs-content__video">
                                    <video playsinline muted autoplay loop>
                                      <source src="<?php the_field("materials_tab_video"); ?>" />
                                    </video>
                                </div>

                        <div class="materials-block">
                            <div class="materials-row">
                                <h1 class="materials-heading h1">
                                  <?php the_field("materials_core_heading") ?>
                                </h1>
                                <div class="materials-col"></div>

                            </div>
                            <?php
                            // Check rows exists.
                            if (have_rows('materials_core')) :
                                // Loop through rows.
                                while (have_rows('materials_core')) : the_row();

                                    // Load sub field value.
                                    $materials_core_year = get_sub_field('materials_core_year');
                                    $materials_core_description = get_sub_field('materials_core_description');
                                    $materials_core_logos = get_sub_field('materials_core_logos');
                                    $materials_core_reverse = get_sub_field('materials_core_reverse');
                                    $materials_core_image = get_sub_field('materials_core_image');
                                    $materials_core_video = get_sub_field("materials_core_video");
                            ?>
                                    <div class="material-block <?php if ($materials_core_reverse) {
                                                                    echo 'material-rev';
                                                                } ?>">
                                  <?php
                                      if($materials_core_video) {
                                        echo '<div class="materials-col materials-image">
                                                <video autoplay playinlines loop muted>
                                                  <source src=" ' . $materials_core_video . ' " type="video/mp4" >
                                                </video>
                                              </div>';
                                      }elseif ($materials_core_video == 'null') ; {
                                        if( !empty($materials_core_image) ): ?>
                                              <div class="materials-col materials-image">
                                                <img src="<?php echo $materials_core_image['url'] ?>" alt="" />
                                              </div>
                                            <?php endif;
                                            }
                                    ?>
                                        <div class="materials-col materials-text materials-border">
                                            <h1 class="materials-title h1"><?php echo $materials_core_year ?></h1>
                                            <div class="materials-logo">
                                                <?php

                                                // Check rows exists.
                                                if (have_rows('materials_core_logos')) :

                                                    // Loop through rows.
                                                    while (have_rows('materials_core_logos')) : the_row();

                                                        // Load sub field value.
                                                        $logo = get_sub_field('materials_core_logo');
                                                        // Do something...
                                                ?>
                                                        <img src="<?php echo $logo['url'] ?>" alt="">
                                                <?php
                                                    // End loop.
                                                    endwhile;

                                                // No value.
                                                else :
                                                // Do something...
                                                endif; ?>
                                            </div>
                                            <p class="materials-sub">
                                                <?php echo $materials_core_description ?>
                                            </p>
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                                else :
                            endif; ?>
                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tabsMobile-slide">
                        <div class="container">
                            <h4 class="tabsMobile-title h4">
                                <?php the_field('sustainability_through_efficiency_tab_title')?>
                            </h4>
                        </div>
                        <div class="tabsMobile-inner">
                            <div class="container">
                                <h1 class="tabs-content__title h1 col-10 mx-auto">
                                    <?php the_field('sustainability_through_efficiency_tab_heading_green') ?>
                                </h1>
                                <div class="tabs-content__block">
                        <p class="tabs-content__sub h1 col-10 mx-auto uppercase">
                            <?php the_field('sustainability_through_efficiency_block_one_title')?>
                        </p>
                        <div class="tabs-info col-10 mx-auto">
                            <?php
                            $count = 1;
                            if (have_rows('sustainability_through_efficiency_block')) :
                                while (have_rows('sustainability_through_efficiency_block')) : the_row();
                                    $sustainability_through_efficiency_title = get_sub_field('sustainability_through_efficiency_title');
                                    $sustainability_through_efficiency_tab = get_sub_field('sustainability_through_efficiency_tab');
                                    $sustainability_through_efficiency_image = get_sub_field('sustainability_through_efficiency_image');
                            ?>
                                    <div class="row">
                                        <div class="tabs-info__content">
                                            <h4 class="h4 tabs-info__title"><?php echo $sustainability_through_efficiency_title ?></h4>
                                            <?php
                                            if (have_rows('sustainability_through_efficiency_tab')) :
                                                while (have_rows('sustainability_through_efficiency_tab')) : the_row();
                                                    $logo = get_sub_field('sustainability_through_efficiency_tab_logo');
                                                    $info = get_sub_field('sustainability_through_efficiency_tab_description');
                                            ?>
                                                    <div class="tabs-info__item">
                                                        <div class="tabs-info__logo">
                                                            <img src="<?php echo $logo['url'] ?>" alt="" />
                                                        </div>
                                                        <div class="tabs-info__desc">
                                                            <?php echo $info; ?>
                                                        </div>
                                                    </div>
                                            <?php
                                                endwhile;
                                            else :
                                            endif; ?>
                                        </div>
                                        <div class="tabs-info__banner">
                                            <img src="<?php echo $sustainability_through_efficiency_image['url'] ?>" alt="" />
                                        </div>
                                    </div>
                                    <?php

                                    $count++;
                                    if ($count == 3) {
                                    ?>
                        </div>
                    </div>
                    <div class="tabs-content__block">
                        <p class="tabs-content__sub h1 col-10 mx-auto">
                          <?php the_field('sustainability_through_efficiency_block_two_title')?>
                        </p>

                        <div class="tabs-info col-10 mx-auto">
                        <?php
                                    }

                                endwhile;
                            else :
                            endif; ?>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tabsMobile-slide">
                        <div class="container">
                            <h4 class="tabsMobile-title h4">
                              <?php the_field('corporate_social_responsibility_tab_title') ?>
                            </h4>
                        </div>
                        <div class="tabsMobile-inner">
                            <div class="container">
                                <h1 class="tabs-content__title h1 col-10 mx-auto">
                                    <?php the_field('corporate_social_responsibility_heading') ?>
                                </h1>


                                <div class="slider tabs-content__slider">
                        <?php if (have_rows('corporate_social_responsibility_slider')) : ?>
                            <div class="slider-inner row">
                                <div class="slider-wrapper col-5">
                                    <div class="reviewSlider slider-text">
                                        <div class="swiper-wrapper">
                                            <?php while (have_rows('corporate_social_responsibility_slider')) : the_row();
                                                $corporate_social_responsibility_slider_title = get_sub_field('corporate_social_responsibility_slider_title');
                                                $corporate_social_responsibility_slider_description = get_sub_field('corporate_social_responsibility_slider_description');
                                            ?>
                                                <div class="swiper-slide slider-slide">
                                                    <div class="swiper-slide-container">
                                                        <h1 class="h1 slider-title text-uppercase">
                                                            <?php echo $corporate_social_responsibility_slider_title; ?>
                                                        </h1>
                                                        <p class="body slider-desc">
                                                            <?php echo $corporate_social_responsibility_slider_description; ?>
                                                        </p>

                                                        <a href="#" class="btn btn-green col-7">
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
                                        <?php while (have_rows('corporate_social_responsibility_slider')) : the_row();
                                            $corporate_social_responsibility_slider_image = get_sub_field('corporate_social_responsibility_slider_image');
                                        ?>
                                            <div class="swiper-slide slider-slide">
                                                <div class="rto-box">
                                                    <img src="<?php echo $corporate_social_responsibility_slider_image['url']; ?>" alt="" />
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div class="swiper-button-next reviewSlider-button-next"></div>
                                <div class="swiper-button-prev reviewSlider-button-prev"></div>
                                <div class="swiper-pagination reviewSlider-pagination"></div>
                            </div>
                        <?php endif; ?>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-mobile-next"></div>
                <div class="swiper-button-prev swiper-mobile-prev"></div>
            </div>
        </div>
    </section>
    <section class="circle" id="circle">
        <div class="circle-inner">
          <div class="circle-inner__center">
            <div class="circle-inner__image">
              <img src="<?php echo get_field("developments_goals_image"); ?>" alt="">
            </div>
            <div class="circle-inner__desc">
              <?php echo get_field("developments_goals_text"); ?>
            </div>
          </div>
          <div class="circle-inner__list">
            <?php if (have_rows("developments_goals_logos")) : ?>
              <?php while(have_rows("developments_goals_logos")) : the_row();
                $dev_item = get_sub_field("developments_goals_item");
              ?>
                <div class="circle-inner__item">
                  <img src="<?php echo $dev_item ?>" alt="">
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
    </section>

    <div class="materials-popup">
        <div class="materials-popup__inner">
            <div class="swiper-popup noloop">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
    </div>
    </div>

</main>

<?php get_footer(); ?>