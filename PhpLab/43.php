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
            $dba = new PDO('mysql:host=localhost;dbname=Uczelnia', 'root', '');
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            die();
        }

        $jn = 'SELECT s.imie, s.nazwisko, r.kierunek, r.stopien
		FROM Studenci s
		INNER JOIN Rok r 
        ON s.id_rok_studiow = r.id';
?>

<table>
<tr>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Kierunek</th>
    <th>Stopień</th>
</tr>


<?php
        foreach ($dba->query($jn) as $row) {
            <tr>
            echo "<td>" $row['imie']"</td>";
            echo "<td>" $row['nazwisko']"</td>";
            echo "<td>" $row['kierunek']"</td>";
            echo "<td>" $row['stopien']"</td>";
            </tr>
        }
    
    ?>
   
</body>
</html>