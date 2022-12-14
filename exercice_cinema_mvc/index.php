<?php
    use Controller\CinemaController;
    use Controller\HomeController;

    spl_autoload_register(function($class_name) {
        include $class_name . '.php';
    });

    $ctrlCinema = new CinemaController();
    $ctrlHome = new HomeController();

    $id = (isset(($_GET["id"])) ? $_GET["id"] : null);
    // $type = (isset(($_GET["type"])) ? $_GET["type"] : null);

    if (isset($_GET["action"])) {
        switch ($_GET["action"]) {

            case "listFilms" : $ctrlCinema->listFilms(); break;
            case "detailFilm" : $ctrlCinema->detailFilm($id); break;
            case "listActeurs" : $ctrlCinema->listActeurs(); break;
            case "listRealisateurs" : $ctrlCinema->listRealisateurs(); break;
            case "rolesActeur" : $ctrlCinema->rolesActeur($id); break;
            case "listGenres" : $ctrlCinema->listGenres(); break;
            case "listRoles" : $ctrlCinema->listRoles(); break;
            case "listParGenre" : $ctrlCinema->listParGenre($id); break;
            case "insertGenre" : $ctrlCinema->insertGenre(); break;
            case "addActeur" : $ctrlCinema->addActeur(); break;
        }
    } else {
        $ctrlHome->displayHomePage();
    }
