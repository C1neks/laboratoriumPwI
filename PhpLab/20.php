<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20_php</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION["ala"]= "Ala ma kota";
    ?>
    <a href = "21.php">Kliknij</a>
</body>
</html>
