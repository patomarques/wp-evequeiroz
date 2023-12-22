<?php get_header(); ?>

<?php $items = new WP_Query('post_type=aquarela&orderby=title&order=ASC&posts_per_page=999'); ?>

<div class="content-main" id="page-aquarela">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="title-tag">
                    <?php echo the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
    <div class="content-lazy-loading">
        <?php while ($items->have_posts()):
            $items->the_post(); ?>

            <a class="content-lazy-loading__link" href="<?php echo the_post_thumbnail_url('large'); ?>">
                <?php
                if ((wp_check_filetype(get_the_post_thumbnail_url())['type']) == 'image/gif') {
                    echo the_post_thumbnail('large');
                } else {
                    echo the_post_thumbnail('medium_large');
                }
                ?>
            </a>

        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>