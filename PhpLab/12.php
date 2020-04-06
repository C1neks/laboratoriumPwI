<?php
if($_GET['l1']!=null && $_GET['l2']!=null){
  $number1=$_GET['l1'];
  $number2=$_GET['l2'];
  echo "$number1, $number2";
} else {
  echo "Nie podano pierwszej lub drugiej liczby";
}
?>