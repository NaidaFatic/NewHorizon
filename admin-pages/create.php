<?php
session_start();

$db_connection = pg_connect("host=localhost dbname=NewHorizonTest user=postgres password=123");

$naslov=$_POST['naslov'];
$smallDesc=$_POST['smallDesc'];
$description=$_POST['description'];
$filename = $_FILES["fileToUpload"]["name"];
  $tempname = $_FILES["fileToUpload"]["tmp_name"];
  $folder = "../images/".$filename;
$group=$_POST['course'];


$insert=pg_prepare ($db_connection,"my_query",'INSERT INTO kurs(opis, kratakopis, id_grupa_korsa, naziv, slikastring) VALUES($1,$2,$3,$4,$5)');//prepared mysqli_stm
$insert=pg_execute($db_connection,"my_query",array($description,$smallDesc, $group, $naslov,$filename));
move_uploaded_file($tempname, $folder);

header("Location: ../admin-pages/adminpage.php");


?>
