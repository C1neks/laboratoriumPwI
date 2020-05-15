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
            $dba = new PDO('mysql:host=localhost;dbname=Uczelnia', 'root', '');
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            die();
        }

        $add1 = 'INSERT INTO Studenci (id,imie, nazwisko, email, id_rok_studiow) VALUES (1,"Marcin", "Baranowski", "baranowskimarcin7@gmail.com", 2),
        (2,"Tomasz", "Kowalski", "kowalowal@gmail.com", 1),
        (3,"Krystian", "Bąk", "baczekbezraczek@gmail.com", 2)';
        
        $dba->exec($add1);
        
        $add2 = 'INSERT INTO Rok (id, kierunek, stopien) VALUES (1, "Ekonomia", 2),
        (2, "Informatyka", 1)';
        
        $dba->exec($add2);
    
    ?>
    
</body>
</html>