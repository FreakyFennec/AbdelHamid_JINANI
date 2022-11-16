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
        
        require "algoPHP_POO_02_class_books.php";

        $king = new Authors("Stephen", "KING", "Men", "1947-09-21");

        $ca = new Books ("Ca", 1980, 1138, 20, $king);
        $simetierre = new Books ("Simetierre", 1983, 374, 15, $king);
        $le_fleau = new Books ("Le Fléau", 1978, 823, 14, $king);
        $shining = new Books ("Shining ", 1977, 447, 16, $king);

        echo $king->displayBooks();
    ?>

</body>
</html>