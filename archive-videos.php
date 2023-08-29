<?php get_header(); ?>

<?php $videos = new WP_Query( 'post_type=videos&orderby=title&order=ASC&posts_per_page=999' ); ?>

<div class="content-main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="title-tag">Vídeos</h1>
            </div>
        </div>
        <div class="row">
            <?php
                if($videos->post_count == 1){
                    $classCols  = "col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3";
                }else {
                    $classCols  = "col-sm-12 col-md-6 col-lg-6";
                }
            ?>

            <?php while ( $videos->have_posts() ) : $videos->the_post(); ?>
                <div class="<?= $classCols ?>">
                    <div class="video-box">
                        <?php //echo get_the_content(); ?>
                        <?php echo get_the_excerpt(); ?>
                    </div>
                </div>
                <!--<h2 class="title-video"><?php /*the_title(); */?></h2>-->
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
