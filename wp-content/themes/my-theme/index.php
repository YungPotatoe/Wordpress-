<?php get_header(); ?>

<div class="container">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&display=swap" rel="stylesheet"> 
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
?>
  <section class="section-1">
    <p><?php the_field('banner_baseline'); ?></p>
      <p> <?php the_field('banner_title_brown'); ?> Chaine alimentaire végétale </p>
    <p> <?php the_field('banner_title_green'); ?> Une question d'équilibre </p>
    <a class="button" href="#"> <?php the_field('banner_register_link'); ?> s'inscrire aux rencontres</a>
  </section>
  <section class="section-2">
  <h1 class="Section-titre"> la conférence</h1>
  <p> Les Rencontre de la Fondation s'intitulent cette année "Chaîne alimentaire <br/>
    végétale et durabilité : une question d'équilibre" Elle se tiendront le 3 décembre prochain à Bruxelle<br/>
     et auront pour objectif de décrypter la transition nutritionnelle des systèmes alimentaires à travers le monde,<br/>
      qui appelle à favoriser une alimentation plus végétale.</p>
  </section>
<?php

  }
}
?>



</div>

<?php get_footer(); ?>