<?php
// Template Name: Contato
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <!-- ENTRE EM CONTATO -->

    <?php include(TEMPLATEPATH . "/inc/contato.php"); ?>

    <!-- ENTRE EM CONTATO -->
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>