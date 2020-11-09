<?php

session_start();

//conncection

$db_connection = pg_connect("host=localhost dbname=NewHorizonTest user=postgres password=123")
or die('Connexion impossible : ' . pg_last_error());

//registration of a user
if(isset($_GET['signup'])){

  $name=mysqli_real_escape_string($db_connection, $_POST['name']);
  $surname=mysqli_real_escape_string($db_connection, $_POST['surname']);
  $date=mysqli_real_escape_string($db_connection, $_POST['date']);
  $email=mysqli_real_escape_string($db_connection, $_POST['email']);
  $pass=mysqli_real_escape_string($db_connection, $_POST['password']);
  $passTest=mysqli_real_escape_string($db_connection, $_POST['passwordTest']);

  //inpuut into database

  //chech if there is someone with same email

  $userQuery="SELECT * FROM korisnici WHERE e_mail=$email LIMIT 1";
  $userResult=mysqli_query($db_connection,$user);
  $user=mysqli_fetch_assoc($userResult);


  if(empty($name) || empty($surname) || empty($date) || empty($email) || empty($pass)){
      die("It can't be empty");
    }
  else if($pass!=$pass){
      echo "Passwords have to be same!";
    }
  else if($userResult && $userResult["email"]===$email){
    echo "There is account with same email !";
  }
  else {
    $password=md5($pass); //encrypt password

    $queryInsert="INSERT INTO korisnici(ime, prezime, datum_rodjanja, e_mail, broj_telefona, sifra, uloga)
    values ('$name','$surname','$date','$email','$password','FALSE')";

    mysqli_query($db_connection,$queryInsert);//pass to db
    $_SESSION['name']=$name;
    $_SESSION['success']="You are logged in!";

    header("location: concept.html");




  }


}




 ?>
