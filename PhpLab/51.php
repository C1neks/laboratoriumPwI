<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>51_php</title>
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

        $sh = $dba->prepare('
            INSERT INTO Studenci (id, imie, nazwisko, email, id_rok_studiow) VALUES (:imie, :nazwisko, :email, :rok)

        ');
        $sh->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
        $sh->bindValue(':imie', $_GET['imie'], PDO::PARAM_STR);
        $sh->bindValue(':nazwisko', $_GET['nazwisko'], PDO::PARAM_STR);
        $sh->bindValue(':email', $_GET['email'], PDO::PARAM_STR);
        $sh->bindValue(':id_rok_studiow', $_GET['id_rok_studiow'], PDO::PARAM_INT);
        $sh->execute();
    ?>

</body>
</html>