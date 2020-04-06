<?php
    $l1 = $_POST['l1'];
    $l2 = $_POST['l2'];

    $result = $l1 + $l2;
    $komunikat = "$l1 + $l2 = ";	
    echo($komunikat. $result);

    echo("<br>");

    $result = $l1 - $l2;
    $komunikat = "$l1 - $l2 = ";	
    echo($komunikat. $result);

     echo("<br>");

    $result = $l1 * $l2;
    $komunikat = "$l1 * $l2 = ";	
    echo($komunikat. $result);

    echo("<br>");

    if ($l2 == 0) {
    	echo("Nie mozna dzielic przez 0");
    }else{
    	    $result = $l1 / $l2;
    $komunikat = "$l1 / $l2 = ";	
    echo($komunikat. $result);
    }



?>