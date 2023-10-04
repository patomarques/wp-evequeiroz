<?php get_header(); ?>

<?php $tattos = new WP_Query('post_type=handpoke-tatto&orderby=title&order=ASC&posts_per_page=999'); ?>

<div class="content-main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="title-tag">
                    <?php echo the_title(); ?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="gallery">
                    <div class="grid">
                        <?php while ($tattos->have_posts()):
                            $tattos->the_post(); ?>

                            <div class="grid-item">
                                <a href="<?php echo the_post_thumbnail_url('medium'); ?>">
                                    <img src="<?= the_post_thumbnail_url('post-thumbnail') ?>" alt="<?= get_the_title() ?>" data-lazy-load>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>