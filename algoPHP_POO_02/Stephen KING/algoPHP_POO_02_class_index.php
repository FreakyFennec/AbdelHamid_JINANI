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

        $bibliography = new Bibliographys ();
        // var_dump($bibliography);
    ?>

</body>
</html>