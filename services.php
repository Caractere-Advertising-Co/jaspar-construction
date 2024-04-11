<?php
/*
Template Name: Services
*/

get_header();

$titre = get_field('titre');
$titreBaca = get_field('titre-baca');
$cta = get_field('services');
?>

<section id="galerie">
    <div class="container intro">
        <?php if($titre): echo $titre;endif?>

        <div class="bloc-filter">
            <?php 
                $terms = get_terms('type-realisations', array(
                    'orderby' => 'name',
                    'order' => 'asc',
                    'hide-empty' => false,
                ));
                            
                echo '<div class="filter active" data-filter="all">Tout</div>';
                        
                foreach ($terms as $term) :
                    echo '<div class="filter" data-filter="'. $term->name .'">'. $term->name .'</div>';
                endforeach; 
            ?>
        </div>
    </div>
    <div class="grid-realisations">
        <?php 
            $args = array(
                "post_type" =>  "realisations",
                "post_status" => "publish",
                "posts_per_page" => -1
            );
            
            $query = new WP_Query($args);
            
            if($query->have_posts()):
                while($query->have_posts()): $query->the_post();?>

                    <?php $taxs = get_the_terms(get_the_id(),'type-realisations');
                    
                    if($taxs): 
                        foreach($taxs as $tax):
                            $value = $tax->name;
                        endforeach;
                    endif;?>

                    <a data-fslightbox href="<?php echo get_the_post_thumbnail_url();?>" data-filters="<?php echo $value;?>">
                        <div class="card-realisation">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" />
                        </div>
                    </a>
                <?php endwhile;
            endif;
            
            wp_reset_postdata();
            ?>
    </div>
</section>

<section id="banner-discussion">
    <div class="container">
        <?php if($titreBaca): echo $titreBaca; endif;?>
        <?php if($cta): echo '<a href="'.$cta['url'].'" class="cta">'.$cta['title'].'</a>'; endif;?>
    </div>
</section>

<?php get_template_part( 'templates-parts/section-introduction' );?>
<?php get_footer();