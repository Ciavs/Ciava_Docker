<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
        include "./connessione.php";
        $mysqli = open();
        $query = "INSERT INTO utente(nome,cognome,ur_data) values('Lorenzo','Ciavarella','2004-06-23')";
        $result = $mysqli->query($query);
        echo "ciao";
    ?>
</body>
</html>
