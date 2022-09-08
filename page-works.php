<?php echo get_header(); ?>
<section class="works mt">
    <div class="container">
        <div class="works-heading">
            <h1 class="works-title">
                <span>We build the <span class="works-words">fastest</span> websites</span>
            </h1>
            <div class="slogan-award works-slogan">
                <a target="_blank" rel="noopener noreferrer" href="https://clutch.co/profile/alignvn" class="slogan-logo">
                    <img src="/Images/Slogan.png" alt="">
                </a>
                <div class="slogan-award__content">
                    <a target="_blank" rel="noopener noreferrer" class="hover block" href="https://clutch.co/vn/agencies/branding">
                        Align is top 34 UX/UI
                    </a>
                    <a target="_blank" rel="noopener noreferrer" class="hover block" href="https://clutch.co/agencies/digital?page=6">Top VietNam Agency</a>
                    <a target="_blank" rel="noopener noreferrer" class="hover block" href="https://clutch.co/profile/alignvn#summary">5 <img src="/Images/star.png" alt="">
                        Reviews (13)</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$works = new WP_Query(array(
    'post_type' => 'work',
    'orderby' => 'date',
    'order' => 'ASC',
    'post_per-page' => -1,

));
// The Loop
if ($works->have_posts()) { ?>

    <section class="project works-wrapper">
        <div class="container">
            <?php
            while ($works->have_posts()) {
                $works->the_post();
            ?>
                <div class="project-item">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <div class="project-overlay">
                        <div class="project-overlay__wrap">
                            <div class="project-overlay__top">
                                <div class="project-overlay__title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="project-overlay__field">
                                    <?php
                                    $areas = get_the_terms($works->post->ID, 'area');
                                    if ($areas) {
                                        foreach ($areas as $area) {
                                            echo $area->name;
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="project-overlay__bottom">
                                <?php
                                $projects = get_the_terms($works->post->ID, 'project');
                                if ($projects) {
                                    foreach ($projects as $project) {
                                        echo $project->name;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
<?php
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
<section>
    <div class="container">
        <div class="reviews pd-0">
            <div class="reviews-flex mainSwiper">
                <div class="personSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide reviews-info">
                            <div class="reviews-personal">
                                <img src="/Images/ArdorClient.jpg" alt="">
                                <div class="reviews-personal__text">
                                    <p>Arden Linh Nguyen
                                    </p>
                                    <p>Head of Marketing, Ardor Group
                                    </p>

                                    <ul>
                                        <li><img src="/Images/star.png" alt=""></li>
                                        <li><img src="/Images/star.png" alt=""></li>
                                        <li><img src="/Images/star.png" alt=""></li>
                                        <li><img src="/Images/star.png" alt=""></li>
                                        <li><img src="/Images/star.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide reviews-info">
                            <div class="reviews-personal">
                                <img src="/Images/GIACeo.png" alt="">
                                <div class="reviews-personal__text">
                                    <p>Peter Nguyen</p>
                                    <p>VP of marketing, Gia Capital LLC.</p>


                                    <ul>
                                        <li><img src="/Images/star.png" alt=""></li>
                                        <li><img src="/Images/star.png" alt=""></li>
                                        <li><img src="/Images/star.png" alt=""></li>
                                        <li><img src="/Images/star.png" alt=""></li>
                                        <li><img src="/Images/star.png" alt=""></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide reviews-info">
                            <div class="reviews-personal">
                                <img src="/Images/Phil.png" alt="">
                                <div class="reviews-personal__text">
                                    <p>Phil Greswold</p>
                                    <p>MD, KEEP</p>


                                    <ul>
                                        <li><img src="/Images/star.png" alt=""></li>
                                        <li><img src="/Images/star.png" alt=""></li>
                                        <li><img src="/Images/star.png" alt=""></li>
                                        <li><img src="/Images/star.png" alt=""></li>
                                        <li><img src="/Images/star.png" alt=""></li>
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
                <img src="/Images/Slogan.png" alt="">
                <p>Reviews from Clutch</p>
            </a>
        </div>
    </div>
</section>
<section class="wehave last-section">
    <div class="container">
        <h1 class="wehave-title">
            We have lorem isum process
        </h1>
        <div class="wehave-list">
            <div class="wehave-item">
                <h1 class="wehave-item__count">
                    01
                </h1>
                <div class="wehave-item__desc">
                    Discovery
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </div>
            </div>
            <div class="wehave-item">
                <h1 class="wehave-item__count">
                    02
                </h1>
                <div class="wehave-item__desc">
                    Strategy
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </div>
            </div>
            <div class="wehave-item">
                <h1 class="wehave-item__count">
                    03
                </h1>
                <div class="wehave-item__desc">
                    Stylescape
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </div>
            </div>
            <div class="wehave-item">
                <h1 class="wehave-item__count">
                    04
                </h1>
                <div class="wehave-item__desc">
                    Design
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </div>
            </div>
            <div class="wehave-item">
                <h1 class="wehave-item__count">
                    05
                </h1>
                <div class="wehave-item__desc">
                    Guideline
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </div>
            </div>
            <div class="wehave-item">
                <h1 class="wehave-item__count">
                    06
                </h1>
                <div class="wehave-item__desc">
                    Usage
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo get_footer(); ?>