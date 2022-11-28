<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout produit</title>
</head>
<body>
    <h1>Ajouter un produit</h1>
    <form action="traitement.php" method="post">
        <p>
            <label for="">Nom du produit :
                <input type="text" name="name">
            </label>
        </p>
        <p>
            <label for="">Prix du produit :
                <input type="number" step="any" name="price">
            </label>
        </p>
        <p>
            <label for="">Quantitée désirée :
                <input type="number" step="any" value="1">
            </label>
        </p>
        <p>
            <input type="submit" name="submit" value="Ajouter le produit">
        </p>
    </form>
</body>
</html>