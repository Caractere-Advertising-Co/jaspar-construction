<?php
/*
Template Name: Projets
Template Post Type: projets, projet 
*/

get_header();

$surtitre = get_field('surtitre');
$titre = get_field('titre');
$price = get_field('price');

$subtitle = get_field('surtitre-intro');
$titrintro = get_field('titre-intro');
$intro = get_field('introduction');

$cta = get_field('cta');

/* Séparator */
$imgSep = get_field('image-separator');
?>

<section id="simple-page">
    <div class="container">
        
    </div>
</section>

<?php get_footer();