<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<body data-barba="wrapper">
  <main data-barba="container" data-barba-namespace="contact">
  <section class="download">
      <div class="container">
        <h1 class="download-title h1">
          <?php the_field('download_title')?>
        </h1>
        <?php if(have_rows('download_item')) : ?>
          <div class="download-inner">
            <?php while(have_rows('download_item')) : the_row();
              $download_poster = get_sub_field('download_item_poster');
              $download_button_text = get_sub_field('download_item_button_text');
              $download_link = get_sub_field('download_item_link_pdf');
            ?>
              <div class="download-item">
                <div class="download-image download-color">
                  <div class="rto-box">
                    <img src="<?php echo $download_poster; ?>" alt="">
                  </div>
                </div>
                <a href="<?php echo $download_link; ?>" class="download-button body">
                  <?php echo $download_button_text; ?>
                </a>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php if(have_rows('download_item')) : ?>
        <?php while(have_rows('download_item')) : the_row();
          $download_type = get_sub_field('download_item_type');
          $download_link = get_sub_field('download_item_link_pdf');
        ?>
          <div class="flipbookContainer flip-book-container" id="<?php echo $download_type ?>"
          data-src="<?php echo $download_link ?>">
          <a class="download-close">
          </a>
      </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </section>
  </main>
  <?php get_footer(); ?>
</body>

</html>