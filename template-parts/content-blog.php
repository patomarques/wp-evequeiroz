<?php
$args = array(
    'post_type' => 'post',
    'numberposts' => 3,
    'category' => 0,
    'orderby' => 'date',
    'order' => 'DESC',
);
$last_posts = get_posts($args);
//print_r($last_posts);
?>
<section id="blog-posts" class="content-main container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title-main mb-5">Posts Recentes</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="content-posts">

                    <?php foreach ($last_posts as $post) { ?>

                        <div class="content-post mb-5">

                            <div class="content-post__image" style="background-image: url(<?= get_the_post_thumbnail_url( $post->ID ) ?>)">
                                <div class="content-post__categories">

                                    <ul class="list-inline tags">
                                        <?php 
                                            $categories = get_categories( array(
                                                'orderby' => 'name',
                                                'order'   => 'ASC',
                                                'hide_empty'      => true,
                                            ) );
                                        
                                            foreach( $categories as $category){ 

                                                if($category->category_nicename != 'sem-categoria') { ?>

                                                <li class="content-post__categories-item list-inline-item">
                                                    <a href="<?= esc_url( get_category_link( $category->term_id ) ) ?>" 
                                                    class="content-post__categories-link tag-link">
                                                        <?= $category->name ?>
                                                    </a>
                                                </li>

                                            <?php } ?>

                                        <?php } ?>

                                    </ul>
                                </div>

                                
                            </div>

                        
                            <div class="content-post__box">
                                <h3 class="content-post__title title-subtitle text-center">
                                    <a href="<?php echo get_permalink( $post->ID ); ?>">
                                        <?= get_the_title($post->ID) ?>
                                    </a>
                                </h3>
                                <h5 class="content-post__date text-center mb-3">Postado em
                                    <b><?= get_the_date('j \d\e F \d\e Y', $post->ID) ?></b>
                                </h5>

                                <p class="content-post__text text-justify">
                                    <?= get_the_excerpt($post->ID) ?>
                                </p>

                                <div class="d-block text-center">
                                    <a href="<?= get_permalink( $post->ID ) ?>" class="content-post__button button-link p-2">Continuar lendo...</a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <a href="/blog" class="button-effect">Ver todos</a>
        </div>
    </div>
</section>