<?php 

$titre = get_field('titre-blue');
$texte = get_field('texte-blue');
$cta = get_field('cta-blue');

?>

<section id="section-blue">
    <div class="container">
        <div class="title">
            <?php if($titre): echo $titre; endif;?>
        </div>
        
        <div class="paragraph">
            <?php if($texte) : echo $texte; endif;?>
            <?php if($cta):?>
                <a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a>
            <?php endif;?>
        </div>
    </div>
</section>