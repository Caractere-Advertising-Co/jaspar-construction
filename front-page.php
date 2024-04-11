<?php
/* Template Name: accueil*/

get_header();?>

<section id="hero-container">
    <div class="swiper swiper-hero">
        <div class="swiper-wrapper">
            <?php if(have_rows('slides')):
                while(have_rows('slides')) : the_row();?>
                    <?php $bg = get_sub_field('background_image');?>
                    <?php $cta = get_sub_field('liens');?>

                    <?php if($bg):?>
                        <div class="swiper-slide">
                            <img src="<?php echo $bg['url'];?>" alt="bg_slider" />
                                <div class="content">
                                    <?php echo get_sub_field('titre');?>
                                    <p class="baseline"><?php echo get_sub_field('sous-titre');?></p>
                                    <?php if($cta):?><a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a><?php endif;?>
                                </div>
                        </div>
                    <?php endif;
                endwhile;
            endif;?>
        </div>

        <div class="swiper-pagination"></div>
    </div>
</section>

<?php get_template_part( 'templates-parts/separator/infinite-separator' );?>
<?php get_template_part( 'templates-parts/section-introduction' );?>
<?php get_template_part( 'templates-parts/section-galerie' );?>
<?php get_template_part( 'templates-parts/section-bannerfullwidth' );?>

<?php get_template_part( 'templates-parts/section-slider-left' );?>
<?php get_template_part( 'templates-parts/section-slider-right' );?>

<?php get_template_part( 'templates-parts/section-joinus' );?>
<?php get_template_part( 'templates-parts/section-reference' );?>

<section id="intro-actualites">
    <div class="container">
        <?php 
            $surtitre = get_field('surtitre-actus');
            $titre = get_field('titre-actus');
            $intro = get_field('intro-actus');

            if($surtitre): echo '<p class="subtitle">'.$surtitre.'</p>';endif;
            if($titre): echo $titre;endif;
            if($intro): echo $intro;endif;

        ?>
    </div>
</section>

<section id="liste-actualites">
    <div class="container grid">
        <?php 
        $args = array(
            "post_type" => "post",
            "post_per_page" => 2
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
    <div class="container">
        <?php $ctaActus = get_field('cta-actus');
            if($ctaActus): echo '<a href="'.$ctaActus['url'].'" class="cta cta-actus">'.$ctaActus['title'].'</a>';endif;
        ?>
    </div>
</section>

<?php get_footer();?>