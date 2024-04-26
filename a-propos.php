<?php 
/* Template Name: A propos */

get_header();
?>

<?php get_template_part( 'templates-parts/section-introduction' );?>
<?php get_template_part( 'templates-parts/section-galerie' );?>
<?php get_template_part( 'templates-parts/section-blue' );?>

<section id="section-service-2">
    <div class="container columns">
        <div class="col-g">
            <?php 
                $titre_section = get_field('titre-section-2');
                $texte_section = get_field('texte-section-2');
                $cta_section = get_field('cta-section-2');

                if($titre_section): echo $titre_section; endif;
                if($texte_section): echo $texte_section; endif;
                if($cta_section): echo '<a href="'.$cta_section['url'].'" class="cta">'.$cta_section['title'].'</a>';endif;
            ?>
        </div>

        <div class="col-d">
            <?php 
                $image_section = get_field('image-section-2');

                if($image_section):?>
                    <img src="<?php echo $image_section['url'];?>" alt="<?php echo $image_section['title'];?>" class="img-section-2"/>
                <?php endif;?>
        </div>
    </div>
</section>

<?php get_template_part( 'templates-parts/section-prom-immo' );?>

<?php get_footer();  