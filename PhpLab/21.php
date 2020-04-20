<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>21_php</title>
</head>
<body>
    <?php
        session_start();
        echo $_SESSION["ala"];
    ?>
    <a href = "22.php">Kliknij2</a>
</body>
</html>