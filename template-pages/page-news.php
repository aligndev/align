<?php get_header(); ?>

<main class="wrapper" data-barba="container" data-barba-namespace="news">
  <section class="mainNews pt">
    <div class="container">
      <div class="mainNews-row">
        <div class="mainNews-content col-5">
          <?php
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 1,
          );

          $loop = new WP_Query($args);

          while ($loop->have_posts()) : $loop->the_post();


          ?>
            <h1 class="h2">
              Latest News : <br>
              <?php print the_title(); ?>
            </h1>
            <div class="mainNews-desc body">
              <?php echo wp_trim_words(get_the_content(), 70); ?>
            </div>
            <a href="<?php echo get_permalink(); ?>" class="btn btn-green col-8">
              Read more
            </a>
        </div>
        <div class="mainNews-image col-6">
          <div class="rto-box">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
          </div>
        </div>

      <?php
          endwhile;

          wp_reset_postdata();  ?>

      </div>
    </div>
  </section>
  <section class="news mt">
    <div class="container">
      <h1 class="h1 text-uppercase news-title">Hung Yen News</h1>
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
              <h5 class="news-item__title">
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
      <a href="" class="btn btn-green col-4 mx-auto">
        Show more
      </a>
    </div>
  </section>
</main>

<?php get_footer(); ?>