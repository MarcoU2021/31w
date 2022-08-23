<?php
/**
 * Template name: Atelier
 */
?>
<?php get_header() ?>  

<main class="site__main">

   <?php //the_post_thumbnail("annonce"); ?>
   <mark>Événement à venir</mark>
       <?php if (have_posts()): the_post(); ?>
      <article class="annonce__article">
         <h1><?= get_the_title()?></h1>
         <?php the_content(); ?>
         <?php
         				$description = get_field("description");
                         $animateur = get_field("animateur");
                         $typeFormation = get_field("typeFormation");
                         $dateDebut = get_field("dateDebut");
                         $duree = get_field("duree");
                         $heure = get_field("heure");
                         $nbrHeure = get_field("nombreHeure");
                         $niveau = get_field("niveau");
                         $lieu = get_field("lieu");
                         $prix = get_field("prix");
                        echo "<p class='annonce__description'>" . $description . "</p>";
                        echo "<p class='annonce__formation'>Un Atelier qui se portera sur " . $typeFormation . "</p>";
                        echo "<p class='annonce__heure'>Le niveau est: " . $niveau . "</p>";
                         echo "<p class='annonce__lieu'>Le lieu: " . $lieu . "</p>";
                         echo "<p class='annonce__date'>La date: " . $dateDebut . "</p>";
                         echo "<p class='annonce__heure'>L'heure: " . $heure . " heure</p>";
                         echo "<p class='annonce__heure'>Durée d'une séance: " . $nbrHeure . "</p>";
                         echo "<p class='annonce__heure'>L'atelier au total durera: " . $duree . " heures</p>";
                         echo "<p class='annonce__organisateur'>L'animateur de l'atelier: " . $animateur . "</p>";

        // $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
      
         $image = get_field('image');
         if( !empty( $image ) ): ?>
             <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
         <?php endif; ?>
      </article>
      <?php endif ?>
  
</main>
<?php get_footer() ?>
