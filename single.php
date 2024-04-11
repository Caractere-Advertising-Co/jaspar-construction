<?php
/*
Template Name: Simple-page
Template Post Type: post, page
*/

get_header();

$surtitre = get_field('surtitre');
$titre = get_field('titre');

$img = get_field('image');
$content = get_field('content');
$ctaPr = get_field('cta-projet');
$cta = get_field('cta');

$galerie = get_field('galerie-fullwidth');
$firstImg = $galerie[0];
$i = 0;

?>

<section id="section-introduction">
    <div class="container columns">
        <div class="col-g">
            <?php if($surtitre): echo '<span class="subtitle">' . $surtitre . '</span>'; endif;?>
            <?php if($titre): echo '<span class="from-bottom">' . $titre . '</span>'; endif;?>
            <?php if($img):?>
                <div class="img-content from-bottom">
                    <img src="<?php echo $img['url'];?>" alt="<?php echo $img['name'];?>" />
                </div>
            <?php endif;?>
        </div>
        <div class="col-d">
            <?php if($content): echo '<span class="from-bottom">' . $content . '</span>'; endif;?>

            <div class="bloc-cta">
                <?php if($ctaPr):?><a href="<?php echo $ctaPr;?>" class="cta from-bottom">Voir projet</a><?php endif;?>
                <?php if($cta):?><a href="<?php echo $cta['url'];?>" class="cta-border from-bottom"><?php echo $cta['title'];?></a><?php endif;?>
            </div>
        </div>
    </div>
</section>

<?php if($galerie):?>
<div id="galerie-fullwidth">
    <div class="container-fullwidth columns">
        <div class="colg">
            <a data-fslightbox href="<?php echo $firstImg['url'];?>">
                <div class="img-card from-bottom" style="background:url('<?php echo $firstImg['url'];?>');">
                    <span class="more">+</span>
                </div>
            </a>
        </div>
        <div class="cold grid">
            <?php foreach($galerie as $g):?>
                <?php if($i > 0):?>
                    <a data-fslightbox href="<?php echo $g['url'];?>">
                    <div class="img-card card-<?php echo $i;?> from-bottom" style="background:url('<?php echo $g['url'];?>');">
                        <span class="more">+</span>
                    </div></a>
                <?php endif;
                $i++;?>
            <?php endforeach;?>
        </div>
    </div>
</div>
<?php endif;?>

<?php get_footer();