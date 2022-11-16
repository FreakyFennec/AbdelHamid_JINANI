<!--
    algoPHP_POO_02_class_index.php
    =============================================
    By AHJ
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    
    <?php

        require "algoPHP_POO_02_class_author.php";
        require "algoPHP_POO_02_class_bibliography.php";

        $author = new Authors("Stephen", "KING");

        $biblioStephenKing = [
            [
            "title" => "Ca",
            "publicationDate" => "1986",
            "pagesQuant" => "1138",
            "price" => "20"
            ],

            [
            "title" => "Simetierre",
            "publicationDate" => "1983",
            "pagesQuant" => "374",
            "price" => "15"
            ],

            [
            "title" => "Le Fléau",
            "publicationDate" => "1978",
            "pagesQuant" => "823",
            "price" => "14"
            ],

            [
            "title" => "Shining",
            "publicationDate" => "1977",
            "pagesQuant" => "447",
            "price" => "16"
            ],
        ];

        $bibliography = new Bibliographys ();
        // var_dump($bibliography);
    ?>

</body>
</html>