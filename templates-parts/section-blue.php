<?php 

$titre = get_field('titre-blue');
$texte = get_field('texte-blue');
$cta = get_field('cta-blue');
$img_blue = get_field('img-blue');

?>

<section id="section-blue">
    <div class="container">
        <div class="title">
            <?php if($titre): echo $titre; endif;?>
        </div>
    </div>

    <div class="container columns">
        <div class="col-g">
            <img src="<?php echo $img_blue['url'];?>" alt="<?php $img_blue['title'];?>"/>
        </div>

        <div class="col-d">
            <div class="paragraph">
                <?php if($texte) : echo $texte; endif;?>
                <?php if($cta):?>
                    <a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>