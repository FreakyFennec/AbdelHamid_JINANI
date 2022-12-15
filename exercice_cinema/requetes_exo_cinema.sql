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
/*==  ==*/

/*== e ==*/
/*==  ==*/

/*== f ==*/
/*==  ==*/

/*== g ==*/
/*==  ==*/

/*== h ==*/
/*==  ==*/

/*== i ==*/
/*==  ==*/

/*== j ==*/
/*==  ==*/

/*== k ==*/
/*==  ==*/

/*== l ==*/
/*==  ==*/