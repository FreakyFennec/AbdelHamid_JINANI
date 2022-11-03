<!--
    exo3.php
=============================================
    By AHJ
-->

<h1>Exercice 3</h1>

<p>Soit la phrase « Notre formation commence aujourd'hui ». <br>
Ecrire un algorithme permettant de compter le nombre de mots contenus dans cette phrase.</p>

<h2>Résultat</h2>

<?php
$string = "Notre formation DL commence aujourd'hui";
$string2 = str_replace("aujourd'hui", "demain", $string);

echo $string."<br>";
echo $string2;
?>