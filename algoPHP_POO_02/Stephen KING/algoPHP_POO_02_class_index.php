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
        echo "<h1>The author</h1>";

        require "algoPHP_POO_02_class_author.php"; 
        $author = new Authors("Stephen", "KING", "Men", "1947-09-21", "books");
        echo $author;


        echo "<h1>Books</h1>";

        require "algoPHP_POO_02_class_books.php";

        $bibliography = new Books ();
    ?>

</body>
</html>