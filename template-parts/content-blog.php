<?php
$args = array(
    'post_type'        => 'post',
    'numberposts'      => 3,
    'category'         => 0,
    'orderby'          => 'date',
    'order'            => 'DESC',
);
$last_posts = get_posts($args);
?>
<section id="blog-posts" class="content-section container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title-main">Posts Recentes</h3>
            </div>
        </div>
        <div class="row">
            
            <?php foreach ( $last_posts as $post ){ ?>

            <div class="col-12 col-md-4">
                <div class="box-posts">
                    <?= get_the_title($post->ID) ?>
                    data 
                    <?//= get_the_post_thumbnail('post-thumbnail')?>                     
                    <a href="#">Ler mais</a>
                </div>
            </div>
            
            <?php  
                }
            ?>
        </div>
        <div class="row mt-2">
            <div class="col-12 text-center">
                <button class="button-effect">Continuar vendo...</button>
            </div>
        </div>
    </div>
</section>