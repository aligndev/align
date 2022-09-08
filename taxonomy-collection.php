<?php get_header(); ?>
<?php $term = get_queried_object(); ?>
<main class="wrapper" data-barba="container" data-barba-namespace="recycle">
  <section class="collectionPage">

    <div class="collectionPage--top">
      <div class="container">
        <div class="collectionPage-heading">
          <img src="<?php echo get_field('collection_logo', $term); ?>" class="collectionPage-logo" />
          <h1 class="h1 collectionPage-title">
            <?php echo $term->name;  ?>
          </h1>
        </div>
        <h2 class="h2 collectionPage-desc">
          <?php echo get_field("collection_description", $term); ?>
        </h2>
        <p class="body collectionPage-sub">
          <?php echo get_field("collection_subtitle", $term); ?>
        </p>
      </div>
      <div class="collectionPage-hero fadeJs">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php
            $collection_imgs = get_field('collection_image', $term);

            if ($collection_imgs) : ?>
              <?php foreach ($collection_imgs as $collection_img) :
              ?>

                <div class="collectionPage-hero__item swiper-slide">
                  <div class="rto-box">
                    <img src="<?php echo $collection_img; ?>" />
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif;
            ?>
          </div>
          <div class="swiper-button-next swiper-button-lg"></div>
          <div class="swiper-button-prev swiper-button-lg"></div>
          <div class="swiper-pagination pagination-hide-on-desktop"></div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <?php
  $termid = $term->term_id;
  if ($termid == 17) {
    echo '<section class="collectionExtra">';
    get_template_part('template-parts/block', 'xlance');
    echo '</section>';
  } ?>

  <section class="collectionMain">
    <div class="container">
      <div class="collectionPage-category">
        <div class="collectionPage-filter col-4">
          <?php echo do_shortcode('[piotnetgrid id=3306 type=facet grid=3304]'); ?>

          <?php

          $postid = get_term_by('slug', 'polyamide-recycled', 'collection');
          ?>

          <!-- <div class="collectionPage-filter__button btn btn-black">
            <img src="<?php //echo ASSETS . "/images/polyamide-icon.svg" 
                      ?>" />
            <p>Polyamide Recycled</p>
          </div>
          <div class="collectionPage-filter__button btn btn-black">
            <img src="<?php //echo ASSETS . "/images/polyester-icon.svg" 
                      ?>" />
            <p>Polyester Recycled</p>
          </div> -->
          <div class="collectionPage-download">
            <a href="#" download class="collectionPage-download__button">
              <img src="<?php echo ASSETS . "/images/arrow-down-circle.svg" ?>" />
              <p>Download Polyamide Color Card 2023</p>
            </a>
            <a href="#" download class="collectionPage-download__button">
              <img src="<?php echo ASSETS . "/images/arrow-down-circle.svg" ?>" />
              <p>Download Polyester Color Card 2023</p>
            </a>
          </div>
          <div class="collectionPage-feature">
            <h4 class="featureTitle">GENERAL FEATURES</h4>
            <div class="featureList">
              <p class="feature">High Chlorine resistant*</p>
              <p class="feature">UV Protection</p>
              <p class="feature">Two Way stretch</p>
              <p class="feature">Comfort fit</p>
            </div>
          </div>
          <div class="collectionPage-filter__main">
            <?php echo do_shortcode('[piotnetgrid id=3305 type=facet grid=3304]'); ?>
            <!-- <div class="collectionPage-application">
              <h4 class="collectionPage-property__title h4">
                Filter by Application
              </h4>
              <a href="" class="body" id="clear-all" onclick="return false;"> Clear all filter</a>
              <?php
              $applications = get_field_object('application');
              if ($applications) {
                foreach ($applications['choices'] as $key => $value) {
              ?>
                    <?php echo $value; ?>
              <?php
                }
              }
              ?>

              <?php
              $properties = get_field_object('property');
              if ($properties) {
                foreach ($properties['choices'] as $key => $value) {
              ?>
                    <?php echo $value; ?>
              <?php
                }
              }
              ?>


            </div> -->

          </div>

        </div>
        <div class="collectionPage-list col-8">
          <?php echo do_shortcode('[piotnetgrid id=3304 type=grid]'); ?>
        </div>
      </div>
    </div>
  </section>



</main>
<?php get_footer(); ?>