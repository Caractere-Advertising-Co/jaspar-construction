<?php
/*
Template Name: Contact
*/

get_header();

$surtitre = get_field('surtitre-header');
$titre = get_field('titre-header');

$imgU = get_field('image-unique');
$contentUniq = get_field('content-unique');
$imgUd = get_field('image-droite-unique');
?>

<?php get_template_part( 'templates-parts/contact' );?>
<?php get_footer();
