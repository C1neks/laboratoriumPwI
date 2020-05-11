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
            $join = new PDO('mysql:host=localhost;dbname=Uczelnia', 'root', '');
        }
        catch (PDOException $e)
        {
            echo $e->getMessage() . "<br/>";
            die();
        }

        $zap = "DELETE FROM studenci WHERE id = 2";
        $join->query($zap);
    ?>
    
</body>
</html>