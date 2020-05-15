<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>42_php</title>
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

        $del = "DELETE FROM studenci WHERE id = 2";
        

        $dba->exec($del);
    ?>
    
</body>
</html>