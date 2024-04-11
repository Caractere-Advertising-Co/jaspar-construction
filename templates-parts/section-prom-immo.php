<?php

$subtitle = get_field('surtitre-promimmo');
$titre = get_field('titre-promimmo');

$image = get_field('img-promimmo');
$intro = get_field('intro-promimmo');
$blue = get_field('blue-promimmo');

$cta = get_field('cta-promimmo');
?>

<section id="section-promimmo">
    <div class="container intro">
        <span class="subtitle"><?php if($subtitle):echo $subtitle;endif;?></span>
        <?php if($titre): echo $titre; endif;?>
    </div>

    <div class="container columns">
        <div class="col-g">
            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['title'];?>"/>
        </div>
        <div class="col-d">
            <div class="intro-blue"><?php if($intro): echo $intro; endif;?></div>
            <div class="blue-block"><?php if($blue): echo $blue; endif;?></div>
        </div>
    </div>

    <div class="container grid">
        <?php if(have_rows('quality-jaspar')):
            while(have_rows('quality-jaspar')): the_row();
                $icon = get_sub_field('icone');
                $titre = get_sub_field('titre');
                $exp = get_sub_field('explication');?>

                <div class="card">
                    <div class="card-img">
                        <img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['title'];?>"/>
                    </div>
                    <?php if($titre): echo $titre; endif;?>
                    <?php if($exp): echo $exp;endif;?>
                </div>
            <?php endwhile;
        endif; ?>
    </div>

    <?php if($cta):?><a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a><?php endif;?>
</section>