<?php

$thmb = get_the_post_thumbnail_url();
$titre = get_field('titre');
$intro = get_field('texte_introduction');

if(is_page_template( 'services.php' )):
    $thmb = get_sub_field('image-service');
    $titre = get_sub_field('titre');
    $intro = get_sub_field('texte_introduction');
endif;

$i = null;

if($args['id']):
    $i = $args['id'];
endif;?>

<div class="card-news">
    <div class="thumbnail">
        <img src="<?php echo $thmb;?>"/>
    </div>

    <div class="content">
        <?php if($titre): echo $titre;endif;?>
        <?php if($intro): echo substr($intro,0,180).'...';endif;?>
        <br/>
        <a href="<?php echo the_permalink( );?>">Lire plus</a>
    </div>
</div>  