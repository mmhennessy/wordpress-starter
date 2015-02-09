<!DOCTYPE html>
<html>
<head>
  <title><?php bloginfo('firstsite'); ?></title>
  <script src="http://use.edgefonts.net/josefin-slab.js"></script>
  <script src="http://use.edgefonts.net/merriweather.js"></script>
  <link rel="stylesheet" href="<?php bloginfo ('stylesheet_url');?>"/>
</head>
  <body>
    <header>
      <h1>Pressed and Squeezed</h1>
      <nav>
        <ul>
          <li>Home</li>
          <li>WordPress</li>
        </ul>
      </nav>
    </header>
    <section>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/hero.jpg" />
      <?php if ( have_posts() ) :while ( have_posts() ) : the posts (); ?>
      <section>
          <a href="<?php the_permalink(); ?>"><h1><?php the_title_artribute(); ?><?h1></a>
          <?php the_content(); ?>
          <!--Pressed and Squeezed is a full-service WordPress shop. We create custom themes and CMSes for our clients.
          We also make pancakes on the side.-->
      </section>
    </p?php endwhile; else :?>
    <p><?php_e('sorry, no content'); ?></p>
  <?php endif; ?>
    </section>
    <footer>
      <h1>Contact Us</h1>
      <p>Pressed and Squeezed</p>
      <p>2525 Orange Way, Orchard, CA 91104</p>
      <p>Phone: (800) 424-3232</p>
    </footer>
  </body>
</html>
