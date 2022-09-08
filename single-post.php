<?php get_header(); ?>
<div class="mt">
    <?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>

            <section class="blogDetail last-section">
                <div class="container">
                    <div class="insightsPage-heading blogDetail-heading">
                        <?php the_title(); ?>
                    </div>
                    <div class="button-type">
                        <?php $cats = the_category();
                        //printf($cats);
                        echo $cats;
                        // if ($cats) {
                        //     foreach ($cats as $cat) {
                        //         echo '<div>' . $cat . '</div>';
                        //         echo 'test';
                        //         //var_dump($cat);
                        //     }
                        // } 
                        ?>
                    </div>

                    <div class="blog-content-wrapper a-owl-s">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>

    <section class="signupEmail">
        <div class="container">
            <h2 class="signupTitle">
                Insights delivered to your mail box
            </h2>
            <?php echo do_shortcode('[contact-form-7 id="1003594" title="Signup"]'); ?>
        </div>
    </section>
    <section class="RelativePosts">
        <div class="container">
            <h1 class="relativeTitle">
                More
            </h1>
            <?php
            $related = get_posts(array('category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID)));
            if ($related) foreach ($related as $post) {
                setup_postdata($post); ?>
                <div class="postWrapper">
                    <img src="<?php the_post_thumbnail_url($post->ID);
                                ?>" alt="">
                    <a href="<?php the_permalink();  ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

                    <div>
                        <?php //$cats = get_the_category($post->ID);
                        $cats = the_category();
                        if ($cats) {
                            foreach ($cats as $cat) {
                                echo $cat;
                            }
                        }
                        ?>
                    </div>
                </div>

            <?php }
            wp_reset_postdata(); ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>