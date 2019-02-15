<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title><?php wp_title(); ?>Velorution</title>
        <link rel="shortcut icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/img/icons8-bulle.svg" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <header>
        <div id="banner" class="d-flex flex-column" >
            <div id="main-logo" class="align-self-center order-2" >

                <img src="<?= get_stylesheet_directory_uri(); ?>/img/shadow_logo.svg" alt="Logo Vélorution">

            </div>
            <div id="social-btn" class="align-self-end order-1 d-none d-lg-block">

               <a href="https://www.facebook.com/velorutionlille/" target="_blank" >

                    <i class="fab fa-facebook"></i>

                </a>

                <a href="https://twitter.com/velorutionlille" target="_blank">

                    <i class="fab fa-twitter"></i>

                </a>

                <a href="https://www.instagram.com/velorution_lille/" target="_blank">

                    <i class="fab fa-instagram"></i>

                </a>

            </div>
        </div>

        <nav class="navbar navbar-expand-lg sticky-top">
                <div id="social-btn" class="navbar-toggler">
                    <a href="https://www.facebook.com/velorutionlille/" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/velorutionlille" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/velorution_lille/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#test">
                    <i class="fas fa-bars"></i>
                  </button>


            <div class="collapse navbar-collapse bg-light" id="test">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-4">
                  <a class="nav-link" href="#">Évenements <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-4">
                  <a class="nav-link" href="#">Liens Utiles</a>
                </li>
                <li class="nav-item mx-4">
                  <a class="nav-link" href="#">Téléchargement médias</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#">Photos/Vidéos</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
<?php
// configuration du menu WP_Bootstrap_Navwalker
wp_nav_menu([
    'theme_location'    => 'main-menu', // le nom de l'emplacement du menu doit être défini dans le fichier `functions.php`
    'depth'             => 2, // 1 = sans menu déroulant, 2 = avec menu déroulant
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse',
    'container_id'      => 'my-theme-navbar-collapse', // si vous changez ce `container_id`, changez-le aussi change les attributs `data-target` et `aria-controls` de la balise `button` ci-dessus
    'menu_class'        => 'nav navbar-nav',
    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
    'walker'            => new WP_Bootstrap_Navwalker(),
]);
?>
            </div>
        </nav>

        <section class="content">
