<?php get_header(); ?>

<?php $graffiti = new WP_Query('post_type=graffiti&orderby=data&order=DESC&posts_per_page=999'); ?>
<?php $lambes = new WP_Query('post_type=lambe-lambe-stickers&orderby=data&order=DESC&posts_per_page=999'); ?>

<div class="col-sm-12 text-center mb-5">
    <h1 class="title-tag">
        <?php echo get_the_title(); ?>
    </h1>
</div>
<div class="content-lazy-loading">
    <?php while ($graffiti->have_posts()):
        $graffiti->the_post(); ?>

        <a class="content-lazy-loading__link" href="<?php echo the_post_thumbnail_url('medium_large'); ?>">
            <?php
            if ((wp_check_filetype(get_the_post_thumbnail_url())['type']) == 'image/gif') {
                echo the_post_thumbnail('full');
            } else {
                echo the_post_thumbnail('medium');
            }
            ?>
        </a>

    <?php endwhile; ?>

    <?php while ($lambes->have_posts()):
        $lambes->the_post(); ?>

        <a class="content-lazy-loading__link" href="<?php echo the_post_thumbnail_url('medium_large'); ?>">
            <?php
            if ((wp_check_filetype(get_the_post_thumbnail_url())['type']) == 'image/gif') {
                echo the_post_thumbnail('full');
            } else {
                echo the_post_thumbnail('medium');
            }
            ?>
        </a>

    <?php endwhile; ?>
</div>

<?php get_footer(); ?>