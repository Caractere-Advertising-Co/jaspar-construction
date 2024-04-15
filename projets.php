<?php
/*
Template Name: Projets Listing
*/

get_header();

$surtitre = get_field('surtitre');
$titre = get_field('titre');

$titreDec = get_field('decouverte');
$cta = get_field('cta');

?>

<section id="listing-projets">
    <div class="container">
    <?php 
        $args = array(
            "post_type" => "projets",
            "post_per_page" => -1
        );

        $news = new WP_Query($args);
        $i = 1;

        if($news->have_posts()):
            while($news->have_posts()): $news->the_post();
                get_template_part('templates-parts/blog/card-projets', null, array( 'id' => $i));
                $i++;
            endwhile;
        endif;

        wp_reset_postdata();?>

    </div>
</section>

<?php get_template_part( 'templates-parts/section-bannerfullwidth' );?>
<?php get_template_part( 'templates-parts/section-promimmo');?>

<?php get_footer();