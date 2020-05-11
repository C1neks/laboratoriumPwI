<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>43_php</title>
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

        $zap = "SELECT s.imie, s.nazwisko, r.kierunek, r.stopień FROM Studenci s JOIN Rok r ON (s.id_rok_studiow = r.id)";
        $pol = $join->query($zap);
        while ($row = $pol->fetch()) 
        {
            print $row['imie'] . "\t";
            print $row['nazwisko'] . "\t";
            print $row['kierunek'] . "\t";
            print $row['stopień'] . "<br />\n";
        }
    ?>
   
</body>
</html>