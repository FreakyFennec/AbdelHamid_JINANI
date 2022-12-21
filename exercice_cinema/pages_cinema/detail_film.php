<?php
    try {
        // Souvent on identifie cet objet par la variable $conn ou $db
        $mysqlConnection = new PDO(
            'mysql:host=localhost;dbname=cinema_hamid;charset=utf8',
            'root',
            '',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION], // Affiche les requêtes qui comportent des erreurs.
        );
    }
    catch (Exception $e) {
        // En cas d'erreur arrête tout et affiche message
        die('Erreur : ' . $e->getMessage());
    }

    // Si pas d'erreur on continue

    // Récupére le titre du film
    if (isset($_POST['titre_film'])) {
        // La variable existe, on la récupére.
        $titre_film = $_POST['titre_film'];
        echo "Le titre du film est : " . $titre_film;
    } else {
        // La variable n'est pas passée, message d'erreur.
        echo "Erreur : le titre du film n'est pas passé";
    }


    // Récupére le contenu de la table film
    $sqlQuery = 'SELECT * FROM film
                WHERE titre_film = ' . $_POST['titre_film'] . '';                       // Variable qui contient la requête sql.
    $filmStatement = $mysqlConnection->prepare($sqlQuery);  // On prépare la requête (plus de sécurité).

    $filmStatement->execute();
    $films = $filmStatement->fetchAll();                    // Va chercher les éléments de la requête.


    if ($films > 0) {

        echo "
        <h1>Détail du film</h1>
        <table>
            <caption>Liste des films</caption>
            <thead>
                <tr>
                    <th>Titre du film</th>
                    <th>Date de sortie fr</th>
                    <th>Durée</th>
                </tr>
                <thead>
                <tbody> 
                <tr>";

                // On fait un boucle foreach() pour afficher les films.
                

                    echo 
                        "<td><a href='pages_cinema/detail_film.php?titre_film=" . $_POST[$film['titre_film']] . "' class='lien-pages'>" . $film['titre_film'] . "</a></td>
                    </tr>";                                  
        echo "</table>";

    } else {

        echo "0 no results";

    }
?>