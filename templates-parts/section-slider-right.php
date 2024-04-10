<?php
    $galerie = get_field('galerie-slider-right');
    $cta = get_field('cta-slider-right');
    $texte = get_field('txt-slider-right');
?>

<section id="section-slider-right">
    <div class="container columns">
        <div class="col-g from-bottom">
        <?php if($texte): echo $texte; endif;?>
            <?php if($cta):?>
                <a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a>
            <?php endif;?>
        </div>

        <div class="col-d">
            <?php if($galerie): ?>
                <div class="swiper swiper-sectionsliderRight from-bottom">
                    <div class="swiper-wrapper">
                        <?php foreach($galerie as $g):?>
                            <div class="swiper-slide">
                                <img src="<?php echo $g['url'];?>" alt="<?php echo $g['title'];?>" />
                            </div>
                        <?php endforeach;?>
                    </div>

                    <div class="swiper-button-prev sliri-btn-prev"></div>
                    <div class="swiper-button-next sliri-btn-next"></div>
                </div>
            <?php endif;?>  
        </div>
    </div>
</section>