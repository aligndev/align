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
                        <?php
                        $categories = get_the_category();
                        foreach ($categories as $category) {
                        ?>
                            <?php echo '<div>' . $category->name . '</div>'; ?>
                        <?php
                        }
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
            <div class="relativePost-wrapper">


                <?php
                $postID = $post->ID;
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'category__in' => wp_get_post_categories($postID),
                    'post__not_in' => array($postID),
                );
                $relatedPost = new WP_Query($args);

                while ($relatedPost->have_posts()) : $relatedPost->the_post();
                ?>
                    <a href="<?php echo the_permalink(); ?>" class="insightSlider-item">
                        <div class="rto-box">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <div class="insightSlider-title">
                            <?php echo the_title(); ?>
                        </div>
                        <div class="button-type">
                            <?php $cats = get_the_category();
                            //var_dump($cats);
                            foreach ($cats as $cat) {
                                echo '<div>' . $cat->name . '</div>';
                            }
                            ?>
                        </div>
                    </a>

                <?php
                endwhile;
                wp_reset_postdata();  ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>