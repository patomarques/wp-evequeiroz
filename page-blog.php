<?php get_header(); ?>

<?php
global $numposts;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => $numposts,
    'paged' => $paged
);
$posts = new WP_Query($args);
?>

<div class="content-main">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="title-tag">Blog</h1>
            </div>
        </div>
        <div class="row mt-3 grid-posts">

            <?php while ($posts->have_posts()):
                $posts->the_post(); ?>

                <div class="col-12 col-lg-4">
                    <div class="grid-post">
                        <div class="grid-post__image">
                            <ul class="grid-post__categories list-inline">
                                <?php
                                $categories = get_the_category();

                                foreach ($categories as $category) {

                                    if ($category->category_nicename != 'sem-categoria') { ?>

                                        <li class="grid-post__categories__item list-inline-item tags"">
                                            <a href=" <?= esc_url(get_category_link($category->term_id)) ?>"
                                                class="grid-post__categories__item__link">
                                            <?= $category->name ?>
                                            </a>
                                        </li>

                                    <?php } ?>

                                <?php } ?>
                            </ul>
                            <?php echo showThumbnail(); ?>
                        </div>
                        <div class="grid-post__box">
                            <div class="grid-post_title title-subtitle">
                                <a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>" alt="<?php echo the_title(); ?>">
                                    <?php echo the_title(); ?>
                                </a>
                            </div>
                            <div class="grid-post_subtitle mb-3">
                                <i class="fa fa-clock-o"></i> Postado em
                                <?php echo get_the_date(); ?>
                            </div>
                            <div class="grid-post_description">
                                <p class="medium">
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                            </div>
                            <div class="grid-post_button">
                                <a href="<?php echo the_permalink(); ?>" class="button-effect button-black">
                                    Continuar Lendo...
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

        </div>

        <div class="row mt-3 hidden">
            <div class="list-postagens">

                <?php while ($posts->have_posts()):
                    $posts->the_post(); ?>
                    <div class="box-post">
                        <a class="imagem" href="<?php echo the_permalink(); ?>"
                            style="background-image: url('<?php echo the_post_thumbnail_url() ?>');">
                            <?php if (has_post_thumbnail()) { ?>
                                <?php the_post_thumbnail('post-thumbnail', array('class' => 'default-imagem zoom')); ?>
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/custom/img/nebulosa.jpg" alt=""
                                    class="default-imagem zoom">
                            <?php } ?>
                        </a>

                        <div class="content-post">
                            <a href="<?php echo the_permalink(); ?>" class="title-post">
                                <?php echo the_title(); ?>
                            </a>
                            <span class="data-postagem"><i class="fa fa-clock-o"></i>
                                <?php echo get_the_date(); ?>
                            </span>
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
                            <div class="resumo text-center">
                                <?php echo get_the_excerpt(); ?>
                            </div>

                            <a href="<?php echo the_permalink(); ?>" class="button-effect continue-read">
                                Continuar Lendo...
                            </a>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <?php custom_pagination($posts->max_num_pages, "", $paged); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>