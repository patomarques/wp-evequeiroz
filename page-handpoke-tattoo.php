<?php get_header(); ?>

<?php $tattos = new WP_Query( 'post_type=handpoke-tatto&orderby=date&order=DESC&posts_per_page=999' ); ?>

<div class="content-main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="title-tag"><?php echo the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="content-lazy-loading">
  
  <?php while ( $tattos->have_posts() ) : $tattos->the_post(); ?>
        <a class="content-lazy-loading__link" href="<?php echo the_post_thumbnail_url('medium_large'); ?>">
            <img data-src="<?php echo the_post_thumbnail_url('post-thumbnail'); ?>" 
            src="<?php echo the_post_thumbnail_url('medium'); ?>"
            alt="<?= get_the_title() ?>"
            class="content-lazy-loading__image" >
        </a>
    <?php endwhile; ?>
    
</div>

<?php get_footer(); ?>