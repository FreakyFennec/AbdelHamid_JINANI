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

    // Récupére le contenu de la table film
    $sqlQuery = 'SELECT * FROM film';                       // Variable qui contient la requête sql.
    $filmStatement = $mysqlConnection->prepare($sqlQuery);  // On prépare la requête (plus de sécurité).

    $filmStatement->execute();
    $films = $filmStatement->fetchAll();                    // Va chercher les éléments de la requête.

    // On fait un boucle foreach() pour afficher les films.
    foreach ($films as $film) {
        ?>
        <p><?php echo $film['titre_film']; ?></p>           <!-- Affiche les titre des films -->
        <?php
    }
?>