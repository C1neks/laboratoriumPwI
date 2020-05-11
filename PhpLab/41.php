<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>41_php</title>
</head>
<body>
    
<?php
        
        try
        {
            $join = new PDO('mysql:host=localhost;dbname=Uczelnia', 'root', '');
        }
        catch (PDOException $e)
        {
            echo $e->getMessage() . "<br/>";
            die();
        }

        $zap = "UPDATE Studenci SET nazwisko = 'Malinowski' WHERE id = 3";
        $join->query($zap);
    ?>

</body>
</html>