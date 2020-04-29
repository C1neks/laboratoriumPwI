<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>34_php</title>
</head>
<body>
<?php
        try
        {
        $connect = new PDO('mysql:host=localhost;dbname=Motoryzacja', 'root', '');
        }
        catch (PDOException $e)
        {
        echo $e -> getMessage() . "<br/>";
        die();
        }
        $pyt = 'SELECT * FROM Samochody WHERE id = 1 OR id = 3';
        foreach($connect->query($pyt) as $row){
            echo $row['marka'];
            echo $row['model'];
            echo $row['pojemnosc'];
        }
    ?>
</body>
</html>