<?php
$surtitre = get_field('surtitre-fullwidth','options');
$title = get_field('title-fullwidth','options') ;
$cta = get_field('cta-fullwidth','options');
$bgBanner = get_field('background-fullwidth','options');
?>

<section id="banner-fullwidth" <?php if($bgBanner): echo 'style="background-image:url('.$bgBanner['url'].');background-size:cover;background-repeat:no-repeat;"';endif;?>>
    <div class="container">
        <?php if($title) : echo $title;endif;?>
        <?php if($cta): echo '<a href="'.$cta['url'].'" class="cta">'.$cta['title'].'</a>'; endif;?>
    </div>
</section>