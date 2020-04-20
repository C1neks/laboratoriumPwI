<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>22_php</title>
</head>
<body>
    <?php
        session_start();
        echo $_SESSION["ala"];
    ?>
    <a href = "23.php">Kliknij3</a>
</body>
</html>