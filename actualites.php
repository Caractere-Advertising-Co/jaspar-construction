<?php
/*
Template Name: Actualités
*/

get_header();

$surtitre = get_field('surtitre');
$titre = get_field('titre');
    
$titreDec = get_field('decouverte');
$cta = get_field('cta');

?>

<section id="simple-page">
    <div class="container">
        <div class="grid_articles">
            <?php 
                $args = array(
                    "post_type" => "post",
                    "post_per_page" => -1
                );

                $news = new WP_Query($args);
                $i = 1;

                if($news->have_posts()):
                    while($news->have_posts()): $news->the_post();
                        get_template_part('templates-parts/blog/card-blog', null, array( 'id' => $i));
                        $i++;
                    endwhile;
                endif;

                wp_reset_postdata();?>
        </div>
    </div>
</section>

<?php get_footer();