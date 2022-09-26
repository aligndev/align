<?php get_header(); ?>

<main class="work-wrapper">
    <?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>


            <div class="work-header-container">
                <h1 class="postTitle"><?php the_title() ?></h1>
                <div class="projectName-wrapper">
                    <?php
                    $projects = get_the_terms($post->ID, 'project');
                    foreach ($projects as $project) {
                    ?>
                        <div class="projectName"> <?php echo $project->name ?> </div>
                    <?php

                    }
                    ?>
                </div>
            </div>

            <?php the_content(); ?>



        <?php endwhile; ?>
    <?php endif; ?>
    <a href="/work">
        <div class="project-button">
            <div class="button">
                <div class="button__filler" style=""></div>
                <span class="button__text">
                    <span class="button__text-inner" style="">View More</span>
                </span>
            </div>
        </div>
    </a>
</main>

<?php get_footer(); ?>