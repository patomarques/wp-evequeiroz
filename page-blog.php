<?php get_header(); ?>

<?php
global $numposts;
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => $numposts,
    'paged' => $paged
);
$posts = new WP_Query( $args ); ?>

<div class="content-main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="title-tag">Blog</h1>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="list-postagens grid">

                <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                    <div class="box-post grid-item">
                        <a class="imagem" href="<?php echo the_permalink(); ?>" style="background-image: url('<?php echo the_post_thumbnail_url() ?>');">
                            <?php if(has_post_thumbnail()){ ?>
                                <?php the_post_thumbnail('post-thumbnail', array('class' => 'default-imagem zoom')); ?>
                            <?php }else{ ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/custom/img/nebulosa.jpg" alt="" class="default-imagem zoom">
                            <?php } ?>
                        </a>

                        <div class="content-post">
                            <a href="<?php echo the_permalink(); ?>" class="title-post">
                                <?php echo the_title(); ?>
                            </a>
                            <span class="data-postagem"><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></span>
                            <!--<span class="categoria">
                                <?php /*if(sizeof(get_the_category()) > 0){ */?>
                                    <ul class="list-categorias list-inline">
                                        <li class="item-inline"><b>Categoria:</b></li>
                                        <?php /*foreach(get_the_category() AS $cat){ */?>
                                            <li><?php /*print_r($cat->cat_name); */?></li>
                                        <?php /*} */?>
                                    </ul>
                                <?php /*} */?>
                            </span>-->
                            <div class="resumo text-center"><?php echo get_the_excerpt(); ?></div>

                            <a href="<?php echo the_permalink(); ?>" class="button-effect continue-read">Continuar Lendo ...</a>
                        </div>
                    </div>

                <?php endwhile; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <?php custom_pagination($posts->max_num_pages, "", $paged); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/bower_components/isotope-layout/dist/isotope.pkgd.min.js"></script>
<script>
    jQuery(window).load(function( $ ) {
        var elem = document.querySelector('.grid');
        var iso = new Isotope( elem, {
            // options
            itemSelector: '.grid-item',
            layoutMode: 'fitRows'
        });

        // element argument can be a selector string
        //   for an individual element
        var iso = new Isotope( '.grid', {
            // options
        });
    });
</script>
<?php get_footer(); ?>