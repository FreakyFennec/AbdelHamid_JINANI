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
            $requete = $pdo->prepare("
                SELECT * , 
                CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_realisateur
                FROM film f
                INNER JOIN realisateur r
                    ON f.id_realisateur = r.id_realisateur
                INNER JOIN personne p
                    ON r.id_personne = p.id_personne
                WHERE id_film = :id
            ");
            $requete->execute(["id"=> $id]);
 
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
                    COUNT(type_genre_film) AS nbr_films, 
                    type_genre_film 
                FROM appartenir a
                INNER JOIN genre g
                    ON a.id_genre_film = g.id_genre_film
                GROUP BY a.id_genre_film
                ORDER BY COUNT(type_genre_film) DESC
            ");
            
            require "view/listGenres.php";
        }
    }
