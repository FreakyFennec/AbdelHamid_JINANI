/*== 1 ==================*/
SELECT * 
FROM lieu 
WHERE nom_lieu LIKE '%um';

/*== 2 =================*/
SELECT nom_lieu, COUNT(*) AS nbrHab
FROM lieu l
INNER JOIN personnage p ON l.id_lieu = p.id_lieu
GROUP BY l.id_lieu
ORDER BY nbrHab DESC;

/*== 3 =================*/
SELECT nom_personnage, adresse_personnage, nom_lieu, nom_specialite
FROM personnage as p
INNER JOIN specialite as sp ON p.id_specialite = sp.id_specialite
INNER JOIN lieu as l ON p.id_lieu = l.id_lieu
ORDER BY nom_lieu, nom_personnage;

/*== 4 ================*/
SELECT nom_specialite, COUNT(*) AS nbrPerso
FROM specialite sp
INNER JOIN personnage p ON sp.id_specialite = p.id_specialite
GROUP BY sp.id_specialite
ORDER BY nbrPerso DESC;

/*== 5 ================*/
SELECT nom_bataille, DATE_FORMAT( date_bataille, "%d/%m/%Y" )
FROM bataille 
ORDER BY date_bataille DESC;

/*== 6 ================*/
SELECT nom_potion, SUM( i.cout_ingredient * c.qte ) AS coutPotion
FROM composer c
INNER JOIN ingredient i ON c.id_ingredient = i.id_ingredient
INNER JOIN potion p ON c.id_potion = p.id_potion
GROUP BY p.id_potion
ORDER BY coutPotion DESC;

/*== 7 ================*/
SELECT nom_potion, nom_ingredient, cout_ingredient, qte
FROM composer c
INNER JOIN ingredient i ON c.id_ingredient = i.id_ingredient
INNER JOIN potion p ON c.id_potion = p.id_potion
WHERE nom_potion = 'Santé';

/*== 8 ================*/



/*== 9 ================*/
SELECT per.nom_personnage, b.dose_boire 
FROM boire b
INNER JOIN potion p ON b.id_potion = p.id_potion
INNER JOIN personnage per ON b.id_personnage = per.id_personnage
ORDER BY dose_boire DESC;

/*== 10 ================*/


/*== 11 ================*/
SELECT per.nom_personnage, SUM(b.dose_boire) AS doseBue
FROM boire b
INNER JOIN potion p ON b.id_potion = p.id_potion
INNER JOIN personnage per ON b.id_personnage = per.id_personnage
GROUP BY per.id_personnage
ORDER BY doseBue DESC;

/*== 12 ================*/
SELECT p.nom_potion, i.nom_ingredient
FROM composer c
INNER JOIN ingredient i ON c.id_ingredient = i.id_ingredient
INNER JOIN potion p ON c.id_potion = p.id_potion
WHERE nom_ingredient = 'Poisson frais';

/*== 13 ================*/
SELECT p.nom_personnage
FROM personnage p
WHERE p.id_personnage NOT IN ( SELECT b.id_personnage FROM boire b );