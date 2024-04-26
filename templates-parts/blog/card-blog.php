<?php

$thmb = get_the_post_thumbnail_url();
$titre = get_field('titre');
$intro = get_field('content');

$i = null;

if($args['id']):
    $i = $args['id'];
endif;?>

<div class="card-news">
    <div class="thumbnail">
        <a href="<?php echo the_permalink( );?>">
            <img src="<?php echo $thmb;?>"/>
        </a>
    </div>

    <div class="content">
        <a href="<?php echo the_permalink( );?>"><?php if($titre): echo $titre;endif;?></a>
        <?php if($intro): echo substr($intro,0,250).'...';endif;?>
        <br/>
        <a href="<?php echo the_permalink( );?>">Lire plus</a>
    </div>
</div>  