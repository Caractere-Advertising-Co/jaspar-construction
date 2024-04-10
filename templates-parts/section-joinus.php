<?php 

$imgTr = get_field('image-transition');
$contentTr = get_field('content-transition');
$ctaTr = get_field('cta-transition');
?>

<section id="transition-blog">
    <div class="imgTr from-right"><img src="<?php if($imgTr): echo $imgTr['url'];endif;?>" alt="<?php if($imgTr):echo $imgTr['title'];endif;?>"/></div>
    <div class="container columns form-left">
        <div class="col-g"></div>
        <div class="col-d from-bottom">
            <?php if($contentTr): echo $contentTr;endif;?>
            <?php if($ctaTr): echo '<a href="'.$ctaTr['url'].'" class="cta">'.$ctaTr['title'].'</a>';endif;?>
        </div>
    </div>
</section>