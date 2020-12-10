<?php
session_start();

$db_connection = pg_connect("host=localhost dbname=NewHorizonTest user=postgres password=123");

$naslov=$_POST['naslov'];
$smallDesc=$_POST['smallDesc'];
$description=$_POST['description'];
$name = $_FILES['file']['name'];
$target_dir = "upload/";
$group=$_POST['course'];

$insert=pg_prepare ($db_connection,"my_query",'INSERT INTO kurs(opis, kratakopis, id_grupa_korsa, naziv, slikastring) VALUES($1,$2,$3,$4,$5)');//prepared mysqli_stm
$insert=pg_execute($db_connection,"my_query",array($description,$smallDesc, $group, $naslov,$name));
move_uploaded_file($_FILES['file']['name'],$target_dir.$name);


header("location: adminpage.php");



?>
