<?php
    namespace Controller;
    use Model\Connect;

    class CinemaController {
        /**
         * Lister les films
         */
        public function listFilms() {

            $pdo = Connect::seConnecter();
            $requete = $pdo->query("
                SELECT id_film, titre_film, date_sortie_fr
                FROM film
            ");

            require "view/listFilms.php";
        }

        public function listActeurs() {

            $pdo = Connect::seConnecter();
            $requete = $pdo->query("
                SELECT *,
                    CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_acteur
                FROM personne p
                INNER JOIN acteur a
                    ON p.id_personne = a.id_personne
            ");

            require "view/listActeurs.php";
        }

        public function listRealisateurs() {

            $pdo = Connect::seConnecter();
            $requete = $pdo->query("
                SELECT *,
                    CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_realisateur
                FROM personne p
                INNER JOIN realisateur r
                    ON p.id_personne = r.id_personne
            ");

            require "view/listRealisateurs.php";
        }

        public function detailFilm($id) {

            $pdo = Connect::seConnecter();
            $requete1 = $pdo->prepare("
                SELECT * , 
                    CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_realisateur
                FROM film f
                INNER JOIN realisateur r
                    ON f.id_realisateur = r.id_realisateur
                INNER JOIN personne p
                    ON r.id_personne = p.id_personne
                WHERE id_film = :id
            ");
            $requete1->execute(["id"=> $id]);

            $requete2 = $pdo->prepare("
                SELECT 
                    CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_acteur, 
                    p.genre_personne, 
                    c.id_acteur,
                    r.nom_role
                FROM casting c
                INNER JOIN acteur a
                    ON c.id_acteur = a.id_acteur
                INNER JOIN personne p
                    ON a.id_personne = p.id_personne
                INNER JOIN role r
                    ON a.id_acteur = r.id_role
                WHERE id_film = :id
            ");
            $requete2->execute(["id"=>$id]);
 
            require "view/detailFilm.php";
        }

        public function rolesActeur($id) {

            $pdo = Connect::seConnecter();
            $requete1 = $pdo->prepare("
                SELECT 
                    CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_acteur
                FROM personne p
                INNER JOIN acteur a
                    ON p.id_personne = a.id_personne
                WHERE p.id_personne = :id
            ");
            $requete1->execute(["id"=> $id]);

            $requete2 = $pdo->prepare("
                SELECT                   
                    r.nom_role,
                    f.titre_film,
                    DATE_FORMAT(date_sortie_fr, '%d/%m/%Y') AS date_sortie_fr
                FROM personne p
                INNER JOIN acteur a
                    ON p.id_personne = a.id_personne
                INNER JOIN casting c
                    ON a.id_acteur = c.id_acteur
                INNER JOIN film f
                    ON c.id_film = f.id_film
                INNER JOIN role r
                    ON r.id_role = c.id_role
                WHERE p.id_personne = :id
                ORDER BY f.date_sortie_fr DESC
            ");
            $requete2->execute(["id"=> $id]);

            require "view/filmographieActeur.php";
        }

        public function listGenres() {
            
            $pdo = Connect::seConnecter();
            $requete = $pdo->query("
                SELECT 
                    COUNT(a.id_film) AS nbr_films, 
                    g.type_genre_film,
                    g.id_genre_film AS id_genre_film
                FROM genre g
                LEFT JOIN appartenir a
                    ON a.id_genre_film = g.id_genre_film
                GROUP BY g.id_genre_film
                ORDER BY COUNT(type_genre_film) DESC
            ");
            
            require "view/listGenres.php";
        }

        public function listRoles () {

            $pdo = Connect::seConnecter();
            $requete = $pdo->query("
                SELECT 
                    nom_role 
                FROM role
            ");

            require "view/listRoles.php";
        }

        public function listParGenre($id) {

            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare("
                SELECT 
                    f.titre_film, 
                    f.date_sortie_fr,
                    g.id_genre_film
                FROM genre g
                INNER JOIN appartenir a
                    ON g.id_genre_film = a.id_genre_film
                INNER JOIN film f
                    ON a.id_film = f.id_film
                WHERE g.id_genre_film = :id
            ");
            $requete->execute(["id"=>$id]);

            require "view/listParGenre.php";
        }

        public function insertGenre() {
            
            if (isset($_POST['nom_genre'])) {

                //var_dump($_POST);

                $genre = filter_input(INPUT_POST, "nom_genre", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                var_dump($genre);
                //die("je veux pas !");

                $pdo = Connect::seConnecter();
                $requete = $pdo->prepare("
                    INSERT INTO genre(type_genre_film)
                    VALUES(:nom_genre)
                ");
                $requete->execute(["nom_genre"=>$genre]); 
                
                require "view/formMovies.php";

            } else {
                require "view/formMovies.php";
            }    
        }

        public function addActeur() {
            if (isset($_POST['nom_acteur'])) {
                $acteur = filter_input(INPUT_POST, "nom_acteur", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                var_dump($acteur);

                $pdo = Connect::seConnecter();
                $requete = $pdo->prepare("
                    INSERT INTO personne(nom_personne, prenom_personne, date_naiss_personne, lieu_naiss_personne, genre_personne)
                    VALUES(:nom_personne, :prenom_personne, :date_naiss_personne, :lieu_naiss_personne, :genre_personne)
                
                ");
                $requete->execute(["acteur"=>$acteur]);

                require "view/formMovies.php";
                
            } else {
                require "view/formMovies.php";
            }
            
        }
    }
