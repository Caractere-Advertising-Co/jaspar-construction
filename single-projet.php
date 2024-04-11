<?php
/*
Template Name: Projets
Template Post Type: projets, projet 
*/

get_header();

$surtitre = get_field('surtitre');
$titre = get_field('titre');
$price = get_field('price');

$subtitle = get_field('surtitre-intro');
$titrintro = get_field('titre-intro');
$intro = get_field('introduction');

$cta = get_field('cta');

/* Séparator */
$imgSep = get_field('image-separator');
?>

<div id="modal-chambre">
    <div class="container_popup">
    </div>
</div>


<section id="simple-page">
    <div class="container">
        <div class="section-intro">
            <?php if($subtitle) : echo '<span class="subtitle">'.$subtitle.'</span>';endif;?>
            <?php if($titrintro) : echo $titrintro;endif;?>
            
            <div class="intro from-bottom"><?php if($intro) : echo $intro;endif;?></div>
        </div>

        <div class="content-toggle">
            <?php if(have_rows('informations_gites')):
                    while(have_rows('informations_gites')): the_row();
                        $title = get_sub_field('titre');
                        $content = get_sub_field('explication');
                    
                        ?>
                        <div class="title-toggle accordion">
                           <h2><?php echo $title;?></h2>
                        </div>

                        <div class="content-toggle panel <?php echo $title == 'Aménagement' ? 'amenagements' : '';?>">
                            <?php echo $content;?>
                        </div>
                    <?php endwhile;
                endif;
            ?>
        </div>

        <?php echo '<a href="'.$ctaChambres['url'].'" class="cta">'.$ctaChambres['title'].'</a>';?>
    </div>
</section>

<section id="nos-chambres">
    <div class="container">
        <?php 
            $surtitre = get_field('surtitre-chambres');
            $titre = get_field('titre-chambres');
        
            $galerie = get_field('galerie-chambres');

            if($surtitre): echo '<h3 class="subtitle">'.$surtitre.'</h3>';endif;
            if($titre): echo $titre;endif;

            if($galerie):?>
                <div class="swiper swiper-chambres">
                    <div class="swiper-wrapper">
                        <?php
                        foreach($galerie as $g):?>
                            <div class="swiper-slide views-rooms" data-index="<?php echo $g->ID;?>">
                                <?php echo get_the_post_thumbnail( $g->ID);?>
                                <h3 class="content-slider"><?php echo $g->post_title;?></h3>
                                <p class="hover-effect">+</p>
                            </div>
                        <?php endforeach;?>
                    </div>
                    
                </div>


                <div class="swiper-chambre-button-prev"></div>
                <div class="swiper-chambre-button-next"></div>

            <?php endif;
        ?>
    </div>
</section>

<?php if($imgSep):?>
    <section id="photo-separator">
        <img src="<?php echo $imgSep['url'];?>" alt="<?php echo $imgSep['title'];?>"/>
    </section>
<?php endif;?>

<?php get_template_part( 'templates-parts/section-extra' );?>
<?php get_template_part( 'templates-parts/section-citation' );?>
<?php get_template_part( 'templates-parts/section-acco-infos' );?>
<?php get_template_part( 'templates-parts/disclaimer-banner' );?>

<?php get_template_part( 'templates-parts/section-cta-contact' );?>

<?php get_footer();