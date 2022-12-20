<?php
    try {
        // Souvent on identifie cet objet par la variable $conn ou $db
        $mysqlConnection = new PDO(
            'mysql:host=localhost;dbname=cinema_hamid;charset=utf8',
            'root',
            ''
        );
    }
    catch (Exception $e) {
        // En cas d'erreur arrête tout et affiche message
        die('Erreur : ' . $e->getMessage());
    }

    // Si pas d'erreur on continue

    // Récupére le contenu de la table film
    $sqlQuery = 'SELECT * FROM film';
    $filmStatement = $mysqlConnection->prepare($sqlQuery);

    $filmStatement->execute();
    $films = $filmStatement->fetchAll();

    // On fait un boucle foreach() pour afficher les films.
    foreach ($films as $film) {
        ?>
        <p><?php echo $film['titre_film']; ?></p>
        <?php
    }
?>