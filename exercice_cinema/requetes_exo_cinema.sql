/*== a ==*/
/*== Afficher infos film ==*/
SELECT id_film, titre_film, DATE_FORMAT(date_sortie_fr, "%d/%m/%Y") AS date_sortie_fr, CONCAT(p.prenom_personne,' ', p.nom_personne)
FROM film f
INNER JOIN realisateur r
ON f.id_realisateur = r.id_realisateur
INNER JOIN personne p
ON p.id_personne = r.id_personne
WHERE id_film = 1;

/*== b ==*/
/*== Films dont la durée excède 2h15 classés par durée (DESC) ==*/
SELECT titre_film, duree_film
FROM film 
WHERE duree_film > 135
ORDER BY duree_film DESC;

/*== c ==*/
/*== Liste des films d’un réalisateur (en précisant l’année de sortie) ==*/
SELECT titre_film, date_sortie_fr, CONCAT(p.prenom_personne,' ', p.nom_personne)
FROM film f
INNER JOIN realisateur r
ON f.id_realisateur = r.id_realisateur
INNER JOIN personne p
ON p.id_personne = r.id_personne
WHERE r.id_realisateur = 4;

/*== d ==*/
/*== Nombre de films par genre (classés dans l’ordre décroissant) ==*/
SELECT COUNT(type_genre_film), type_genre_film 
FROM appartenir a
INNER JOIN genre g
ON a.id_genre_film = g.id_genre_film
GROUP BY a.id_genre_film;

/*== e ==*/
/*== Nombre de films par réalisateur (classés dans l’ordre décroissant) ==*/
SELECT COUNT(id_film), CONCAT(p.prenom_personne,' ', p.nom_personne)
FROM film f
INNER JOIN realisateur r
ON f.id_realisateur = r.id_realisateur
INNER JOIN personne p
ON p.id_personne = r.id_personne
GROUP BY r.id_realisateur
ORDER BY COUNT(id_film) DESC;

/*== f ==*/
/*== Casting d’un film en particulier (id_film) : nom, prénom des acteurs + sexe ==*/

/*== g ==*/
/*== Films tournés par un acteur en particulier (id_acteur) avec leur rôle et l’année de sortie (du film le plus récent au plus ancien) ==*/

/*== h ==*/
/*== Listes des personnes qui sont à la fois acteurs et réalisateurs ==*/

/*== i ==*/
/*== Liste des films qui ont moins de 5 ans (classés du plus récent au plus ancien) ==*/

/*== j ==*/
/*== Nombre d’hommes et de femmes parmi les acteurs ==*/

/*== k ==*/
/*== Liste des acteurs ayant plus de 50 ans (âge révolu et non révolu) ==*/

/*== l ==*/
/*== Acteurs ayant joué dans 3 films ou plus ==*/