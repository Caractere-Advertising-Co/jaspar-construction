<?php 

$cttCol1 = get_field('contenu_colonne_1','options');

$titreCol2 = get_field('titre-colonne-2','options');
$gites = get_field('liens-gîtes','options');
$titreCol22 = get_field('titre-colonne-2-2','options');
$liensCol2 = get_field('liens-gîtes_copier','options');

$cttCol2 = get_field('contenu_colonne_2','options');

$cttCol3 = get_field('contenu_colonne_3','options');
$keywords = get_field('keywords','options');

?>

<footer>
    <div class="footer-top">
        <div class="container columns">
            <div class="col-g general-infos">
                <?php $logo = get_field('logo_footer','options');?>
                
                <?php if($logo):?>
                    <div class="logo-footer">
                        <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['title'];?>" />
                    </div>
                <?php endif;?>
            </div>

            <div class="col-d content">
                <div class="col col-2">
                    <?php if($cttCol2): echo $cttCol2;endif;?>
                </div>

                <div class="col col-3">
                    <?php wp_nav_menu( 'footer' );?>
                </div>

                <div class="col rs_footer">
                    <?php 
                    if(have_rows('reseaux-sociaux','options')):
                        while(have_rows('reseaux-sociaux','options')): the_row();
                            $icone = get_sub_field('icone');
                            $url = get_sub_field('lien');

                            echo '<a href="'.$url.'"><img src="'.$icone['url'].'"/></a>';
                        endwhile;
                    endif;?>    
                </div>
            </div>
        </div>
    </div>

    <div class="footer-middle">
        <div class="container">
            <?php if($keywords): echo $keywords; endif;?>
        </div>
    </div>

    <div class="footer_bottom">
        <div class="container columns">
            <?php 
                $copyright = get_field('copyright','options');
                $cookies = get_field('cookies','options');
                $conf = get_field('confidentialites','options');
            
                if($copyright): echo $copyright; endif;
            ?>
                <div class="links">
                    <a href="<?php echo $cookies['url'];?>"><?php echo $cookies['title'];?></a>
                    <a href="<?php echo $conf['url'];?>"><?php echo $conf['title'];?></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>