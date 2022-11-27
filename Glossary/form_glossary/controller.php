<?php
    // Verify
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dev_tools";

        $abbreviation = $_POST['abbreviation'];
        $signification = $_POST['signification'];
        $defAbbrev = $_POST['defAbbrev'];
        $typeAbbrev = $_POST['typeAbbrev'];

        // Connect to mysqli
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Verify connexion
        if (mysqli_connect_errno()) {
            echo "Impossible de se connecter à MySQL : " .mysqli_connect_error();
            exit();
        }

        // Prepare query
        $statement = $conn->prepare("INSERT INTO  dev_abbreviations(abbreviation, signification, defAbbrev, typeAbbrev) VALUES (?, ?, ?, ?)");

        // Bind values and execute insert
        $statement->bind_param("ssss",$abbreviation, $signification, $defAbbrev, $typeAbbrev);

        if ($statement->execute()) {
            print "C'est okay !";
        } else {
            print $msqli->error;
        }
    }
?>