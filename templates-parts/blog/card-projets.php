<?php

$thmb = get_the_post_thumbnail_url();
$titre = get_the_title();
$intro = get_the_excerpt();

$i = null;

if($args['id']):
    $i = $args['id'];
endif;?>

<?php if($i % 2):?>
    <div class="card-projets -left container columns">
        <div class="col-g">
            <?php if($titre): echo '<h2>'.$titre.'</h2>';endif;?>
            <?php if($intro): echo '<p>'.$intro.'</p>';endif;?>

            <a href="<?php echo the_permalink( );?>" class="cta-border"><?php the_title();?></a>
        </div>

        <div class="col-d">
            <img src="<?php echo $thmb;?>"/>
        </div>
    </div>
<?php else : ?>
    <div class="card-projets -right container columns">
        <div class="col-g">
            <img src="<?php echo $thmb;?>"/>
        </div>
        <div class="col-d">
            <?php if($titre): echo '<h2>'.$titre.'</h2>';endif;?>
            <?php if($intro): echo '<p>'.$intro.'</p>';endif;?>
            
            <a href="<?php echo the_permalink( );?>" class="cta-border"><?php the_title();?></a>
        </div>
    </div>  
<?php endif;?>