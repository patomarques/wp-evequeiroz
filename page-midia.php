<?php get_header(); ?>

<?php
    $args = array(
        'post_type' => 'midias', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC'
    );
    $midiasMaterias = new WP_Query( $args );
?>

<div class="content-main" id="page-midia">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="title-tag"><?php echo the_title(); ?></h1>
            </div>
        </div>

        <ul class="row text-center list-midia-legends">
            <li class="col-sm-12 col-md-4 col-lg-4">
                <h3 class="title-midia">Matérias</h3>
            </li>
            <li class="col-sm-12 col-md-4 col-lg-4">
                <h3 class="title-midia">Jornais e Revistas</h3>
            </li>
            <li class="col-sm-12 col-md-4 col-lg-4">
                <h3 class="title-midia">TV</h3>
            </li>
        </ul>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <ul class="list-midia" id="list-materias">
                    <?php while ( $midiasMaterias->have_posts() ) : $midiasMaterias->the_post(); ?>
                        <?php // print_r($midiasMaterias); ?>

                        <?php
                            $link = "";
                            $link = trim(get_the_content());

                            $categoriaClass  = "";

                            foreach((get_the_category()) as $category) {
                               if($category->category_nicename != "midia"){
                                   $categoriaClass      = $category->category_nicename;
                               }

                               ?>
                           <?php } ?>


                            <?php //if($categoriaClass == 'materias'){ ?>
                            <li class="<?php echo $categoriaClass; ?>"><a href="<?php echo $link; ?>" target="_blank" title="<?php echo the_title(); ?>"><?php echo the_title(); ?></a> </li>
                            <?php //} ?>
                    <?php endwhile; ?>
                </ul>
            </div>

        </div>
       <!-- <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-6">

                <ul class="list-midia">
                    <?php /*while ( $midiasMaterias->have_posts() ) : $midiasMaterias->the_post(); */?>
                        <?php /*// print_r($midiasMaterias); */?>

                        <?php
/*                        $link = "";
                        $link = trim(get_the_content());

                        $categoriaClass  = "";

                        foreach((get_the_category()) as $category) {
                            if($category->category_nicename != "midia"){
                                $categoriaClass      = $category->category_nicename;
                            }

                            */?>
                        <?php /*} */?>

                            <?php /*if($categoriaClass == 'jornais-e-revistas'){ */?>
                                <li class="<?php /*echo $categoriaClass; */?>"><a href="<?php /*echo $link; */?>" target="_blank"><?php /*echo the_title(); */?></a> </li>
                            <?php /*} */?>
                    <?php /*endwhile; */?>
                </ul>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-6">

                <ul class="list-midia">
                    <?php /*while ( $midiasMaterias->have_posts() ) : $midiasMaterias->the_post(); */?>
                        <?php /*// print_r($midiasMaterias); */?>

                        <?php
/*                        $link = "";
                        $link = trim(get_the_content());

                        $categoriaClass  = "";

                        foreach((get_the_category()) as $category) {
                            if($category->category_nicename != "midia"){
                                $categoriaClass      = $category->category_nicename;
                            }

                            */?>
                        <?php /*} */?>

                            <?php /*if($categoriaClass == 'tv'){ */?>
                                <li class="<?php /*echo $categoriaClass; */?>"><a href="<?php /*echo $link; */?>" target="_blank"><?php /*echo the_title(); */?></a> </li>
                            <?php /*} */?>
                    <?php /*endwhile; */?>
                </ul>
            </div>-->
        </div>


    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/bower_components/packery/dist/packery.pkgd.min.js"></script>
<script>
    jQuery(document).ready(function( $ ) {
           /* $('#list-materias').packery({
                // options
                itemSelector: '.materias'
            });*/

       /* $('.list-midia').packery({
            // options
            itemSelector: '.li'
        });*/
    });
</script>

<?php get_footer(); ?>
