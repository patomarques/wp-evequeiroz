<!--
Template Name: Contato

-->

<?php get_header(); ?>
</div> <!-- end .row -->
</div> <!-- end .container  -->
<div class="site-content site-individual" id="page-contato">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="title-tag">Contato</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
                <?php
                    // TO SHOW THE PAGE CONTENTS
                    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <div class="content-text">
                    <?php the_content(); ?> <!-- Page Content -->
                </div>

                <?php
                endwhile; //resetting the page loop
                wp_reset_query(); //resetting the page query
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
                <?php echo do_shortcode('[contact-form-7 id="170" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function( $ ) {
        if($('input[type="submit"').length > 0){
            $('input[type="submit"').removeClass('btn btn-primary');
        }
    });
</script>
<?php get_footer(); ?>
