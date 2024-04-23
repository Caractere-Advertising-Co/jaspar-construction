<?php
/*
Template Name: Projets
Template Post Type: projets, projet 
*/

get_header();

$galerie = get_field('galerie');

$textePo = get_field('texte-po');
$ctaPo = get_field('cta-po');  
$imagePo = get_field('image-po');

$surtitre = get_field('surtitre-projet');
$desc = get_field('description_projet');
$cta = get_field('cta-contact');

// informations-projet (boucle)
// biens_disponibles (boucle)

?>

<section id="simple-page-projet">
    <?php if($galerie): ?>
        <div class="container columns">
            <div class="col-g">
                <?php $firstImg = $galerie[0];?>
                <a data-fslightbox href="<?php echo $firstImg['url'];?>">
                    <img src="<?php echo $firstImg['url'];?>" alt="<?php echo $firstImg['title'];?>"/>
                </a>
            </div>
            <div class="col-d columns">
                <?php 
                    $i = 1;
                ?>

                <?php foreach ($galerie as $g):?>
                    <?php if($i > 1):?>
                        <a data-fslightbox href="<?php echo $g['url'];?>" <?php  echo $i > 3 ? 'style="display:none;"' : '';?>>
                            <img src="<?php echo $g['url'];?>" alt="<?php echo $g['title'];?>"/>
                        </a>
                    <?php endif;?>
                <?php $i++;
                endforeach;?>
            </div>
        </div>
    <?php endif;?>
</section>

<section id="banner-jpo">
    <div class="container columns">
        <div class="col-g">
            <?php if($textePo):?>
                <?php echo $textePo;?>
            <?php endif;?>
        </div>
        <div class="col-d">
            <?php if($ctaPo):?><a href="<?php echo $ctaPo['url'];?>" class="cta"><?php echo $ctaPo['title'];?></a><?php endif;?>
            <img src="<?php echo $imagePo['url'];?>" alt="<?php echo $imagePo['title'];?>" />
        </div>
    </div>
</section>

<section id="description-projet">
    <div class="container">
        <div class="columns">
            <span class="subtitle"><?php if($surtitre): echo $surtitre;endif;?></span>
            <a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a>
        </div>

        <?php if($desc): echo $desc; endif;?>
    </div>

    <div class="">
    </div>
</section>

<section id="list-bien">
    <div class="container">
        <h2>Biens <strong>Disponibles</strong></h2>
        
        <table class="list-projet-bien -nomobile">
            <thead>
                <tr>
                    <th>Maisons</th>
                    <th>Caractéristiques</th>
                    <th>Surfaces Habitables</th>
                    <th>Prix</th>
                    <th>Plans</th>
                </tr>
            </thead>
            <tbody>
                <?php if(have_rows('biens_disponibles')):
                    while(have_rows('biens_disponibles')) : the_row(); 

                        $nom = get_sub_field('nom_bien');
                        $cara = get_sub_field('caracteristiques');
                        $surf = get_sub_field('surface_hab');
                        $prix = get_sub_field('prix');
                        $plans = get_sub_field('plans');
                    
                        ?>
                        <tr>
                            <td><strong><?php if($nom): echo $nom; endif;?></strong></td>
                            <td><?php if($cara): echo $cara; endif;?></td>
                            <td><strong><?php if($surf): echo $surf; endif;?></strong></td>
                            <td><strong><?php if($prix): echo $prix; endif;?></strong></td>
                            <td class="cta-plan"><?php if($plans): echo '<a href="'.$plans['url'].'">VOIR</a>'; endif;?></td>
                        </tr>
                    <?php endwhile;
                endif;?>

            </tbody>
        </table>


        <div class="list-projet-bien -nodesktop">
            <?php if(have_rows('biens_disponibles')):
                while(have_rows('biens_disponibles')) : the_row();?>
                    <div class="card-projet-bien">
                    
                        <?php 
                        $nom = get_sub_field('nom_bien');
                        $cara = get_sub_field('caracteristiques');
                        $surf = get_sub_field('surface_hab');
                        $prix = get_sub_field('prix');
                        $plans = get_sub_field('plans');
                    
                              if($nom): echo '<h3><strong>'.$nom.'</strong></h3>'; endif;?></strong>
                        <?php if($cara): echo '<p>'.$cara.'</p>'; endif;?>
                        <?php if($surf): echo '<p><strong>'.$surf.'</strong></p>'; endif;?>
                        <?php if($prix): echo '<p class="price"><strong>'.$prix.'</strong></p>'; endif;?>
                        <?php if($plans): echo '<span class="cta"><a href="'.$plans['url'].'">VOIR</a></span>'; endif;?>  
                        
                    </div>       
                <?php endwhile;
            endif;?>
        </div>
    </div>
</section>

<?php get_template_part( 'templates-parts/section-bannerfullwidth' );?>
<?php get_template_part( 'templates-parts/section-promimmo' );?>


<?php get_footer();