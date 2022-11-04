<!--
    exo2.php
=============================================
    By AHJ
-->

<h1>Exercice 2</h1>

<p>Soit la phrase « Notre formation commence aujourd'hui ». <br>
Ecrire un algorithme permettant de compter le nombre de mots contenus dans cette phrase.</p>

<h2>Résultat</h2>

<?php
$string = "Notre formation DL commence aujourd'hui";
$nbrMots = str_word_count($string);

echo "La phrase « $string » contient $nbrMots mots<br>";
?>