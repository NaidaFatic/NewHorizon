<?php

session_start();
$db_connection = pg_connect("host=localhost dbname=NewHorizonTest user=postgres password=123");

$naslov=$_POST['naslov'];
$smallDesc=$_POST['smallDesc'];
$description=$_POST['description'];
$fileToUpload1=$_POST['fileToUpload1'];
$group=$_POST['course'];

$insert=pg_prepare ($db_connection,"my_query",'INSERT INTO kurs(opis, slike, kratakopis, id_grupa_korsa, naziv) VALUES($1,$2,$3,$4,$5)');//prepared mysqli_stm
$insert=pg_execute($db_connection,"my_query",array($description,$fileToUpload1,$smallDesc, $group, $naslov));


$sql1="SELECT * FROM kurs LIMIT 1";

$result=pg_prepare ($db_connection,"my_query1",'SELECT * FROM kurs LIMIT 1');//prepared mysqli_stm
$result=pg_execute($db_connection,"my_query1",array());
echo "$result";
while ($ro = pg_fetch_object($result)) {
    echo $ro->id . " ";
    echo $ro->opis . " ";
    echo $ro->id_grupa_korsa . " ";
    echo "\n";
}



/*
$insert1=pg_prepare ($db_connection,"my_query1",'SELECT slika FROM  k where name=$1');
$insert1=pg_execute($db_connection,"my_query1",array($naslov));*/

//header("location: adminpage.php");

?>
