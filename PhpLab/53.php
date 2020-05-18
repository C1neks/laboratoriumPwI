<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>53_php</title>
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

        $sh = $dba->prepare('DELETE FROM Studenci WHERE id = :id');
        $sh->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
        $sh->execute();

    ?>

</body>
</html>