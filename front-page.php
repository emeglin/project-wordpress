<?php
get_header();
?>

<?php if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
    // Custom content markup goes here
}
?>

<div class="d-flex justify-content-center my-5">
    <div class="intro_txt d-flex flex-column my-5 pb-5">
        <img src="<?=get_stylesheet_directory_uri(); ?>/img/last-friday.svg" class="position-relative img-fluid" alt="Chaque dernier vendredi du mois.">
        <div>
            <p class="text-center text-white mx-5">La Vélorution / Masse Critique, c'est le rendez-vous des cyclistes
                partout dans le monde ! Chaque dernier vendredi du mois, vélos, fixies, cargobikes, monocycles,
                rollers, skateboards se rassemblent pour arpenter les rues.</p>
            <p class="text-center text-white mx-5">L'idée est d'atteindre une " masse critique" suffisante pour
                s'imposer dans la circulation comme ne peut pas le faire un cycliste isolé.</p>
            <p class="text-center text-white mx-5">Revendiquer plus de places aux modes de déplacement doux en ville,
                montrer les bienfaits du vélo pour le corps (et l'esprit !), se soucier de son environnement, ou juste
                passer un bon moment en roulant en musique, on a tous une bonne raison de faire de la Vélorution !</p>
        </div>
    </div>
</div>


<?php
get_footer();
?>