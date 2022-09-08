<?php

$the_query = new WP_Query(array(
    'post_type' => 'product', //Post Type Slug
    'tax_query' => array(
        array(
            'taxonomy' => 'collection',
            'field' => 'slug',
            'terms' => $term->slug,
        )
    ),
));

while ($the_query->have_posts()) :
    $the_query->the_post();

    $applications = get_field('application');
    $properties = get_field('property');

?>
    <a href="<?php the_permalink(); ?> " class="collectionPage-fabric  <?php if ($applications) {
                                                                            foreach ($applications as $application) :
                                                                                echo $application . ' ';
                                                                            endforeach;
                                                                        } ?>">
        <div class="collectionPage-fabric__title h4">
            <?php echo the_title(); ?>
        </div>
        <div class="collectionPage-fabric__image rto-box">
            <img src="<?php echo ASSETS . '/images/demo-collection-img.png';
                        ?>" alt="">
        </div>
        <div class="collectionPage-fabric__bottom">
            <?php
            if (have_rows('composizione')) :
                while (have_rows('composizione')) : the_row();
                    $percent = get_sub_field('percentuale');
                    $material = get_sub_field('materiale');
            ?>
                    <div class="collectionPage-fabric__desc">
                        <div class="collectionPage-fabric__number"><?php echo $percent; ?></div>
                        <div class="collectionPage-fabric__material"><?php echo $material; ?></div>
                    </div>
            <?php
                endwhile;

            endif; ?>

        </div>
    </a>
<?php
endwhile;
wp_reset_postdata();
?>