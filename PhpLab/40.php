<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>40_php</title>
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

        $zap1 = "INSERT INTO Studenci (id,imie, nazwisko, email, id_rok_studiow) VALUES (?,?,?,?,?)";
        
        $join->prepare($zap1)->execute(["1","Marcin", "Baranowski", "baranowskimarcin7@gmail.com", "2"]);
        $join->prepare($zap1)->execute(["2","Tomasz", "Kowalski", "kowalowal@gmail.com", "1"]);
        $join->prepare($zap1)->execute(["3","Krystian", "Bąk", "baczekbezraczek@gmail.com", "2"]);

        $zap2 = "INSERT INTO Rok (id, kierunek, stopien) VALUES (?,?,?)";
        $join->prepare($zap2)->execute(["1", "Ekonomia", "2"]);
        $join->prepare($zap2)->execute(["2", "Informatyka", "1"]);
    
    ?>
    
</body>
</html>