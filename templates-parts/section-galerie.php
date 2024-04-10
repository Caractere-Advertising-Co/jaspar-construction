<?php 

$galerie = get_field('galerie-fullwidth','options');
$firstImg = $galerie[0];
$i = 0;

?>

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
                    <div class="img-card from-bottom" style="background:url('<?php echo $g['url'];?>');">
                        <span class="more">+</span>
                    </div></a>
                <?php endif;
                $i++;?>
            <?php endforeach;?>
        </div>
    </div>
</div>