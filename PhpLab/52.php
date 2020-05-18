<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>52_php</title>
</head>
<body>
    
            <form method="GET" action="53.php">
            <select name = "student">
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
            $sh = $dba -> prepare('SELECT * FROM Studenci');
            $sh -> execute();
            $rows = $sh->fetchAll();
            foreach($rows as $row){
                echo '<option value="'.$row['id'].'">'.$row['imie'].' '.$row['nazwisko'].' '.$row['email'].' '.$row['id_rok_studiow'].'</option>';
            }
        
    ?>  
    </select>
    <input type = "submit" name="submit" value="Delete">
                </form>
</body>
</html>