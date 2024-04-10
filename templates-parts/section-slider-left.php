<?php
    $galerie = get_field('galerie-slider-left');
    $cta = get_field('cta-slider-left');
    $texte = get_field('txt-slider-left');
?>

<section id="section-slider-left">
    <div class="container columns">
        <div class="col-g">
            <?php if($galerie): ?>
                <div class="swiper swiper-sectionslider from-right">
                    <div class="swiper-wrapper">
                        <?php foreach($galerie as $g):?>
                            <div class="swiper-slide">
                                <img src="<?php echo $g['url'];?>" alt="<?php echo $g['title'];?>" />
                            </div>
                        <?php endforeach;?>
                    </div>

                    <div class="swiper-button-prev sesli-btn-prev"></div>
                    <div class="swiper-button-next sesli-btn-next"></div>
                </div>
            <?php endif;?>  
        </div>

        <div class="col-d from-left">
            <?php if($texte): echo $texte; endif;?>
            <?php if($cta):?>
                <a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a>
            <?php endif;?>
        </div>
    </div>
</section>