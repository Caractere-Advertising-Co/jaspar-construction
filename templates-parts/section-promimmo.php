<?php 

$surtitre_promimmo = get_field('surtitre-promimmo','options');
$titre_promimmo = get_field('titre-promimmo','options');
$text_promimmo = get_field('text-promimmo','options');
$img_promimmo = get_field('image-promimmo','options');
$cta_promimmo = get_field('cta-promimmo','options');

?>

<section id="section-prom-immo">
    <div class="container columns">
        <div class="col-g">
            <?php if($surtitre_promimmo): echo '<span class="subtitle">' . $surtitre_promimmo . '</span>'; endif;?>
            <?php if($titre_promimmo ): echo '<span class="from-bottom">' . $titre_promimmo . '</span>'; endif;?>
            <?php if($img_promimmo):?>
                <div class="img-content from-bottom">
                    <img src="<?php echo $img_promimmo['url'];?>" alt="<?php echo $img_promimmo['name'];?>" />
                </div>
            <?php endif;?>
        </div>
        <div class="col-d">
            <?php if($text_promimmo): echo '<span class="from-bottom">' . $text_promimmo . '</span>'; endif;?>

            <div class="bloc-cta">
                <?php if($cta_promimmo):?><a href="<?php echo $cta_promimmo;?>" class="cta from-bottom"><?php echo $cta_promimmo['title'];?></a><?php endif;?>
            </div>
        </div>
    </div>
</section>