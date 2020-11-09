<?php

session_start();

//conncection

$db_connection = pg_connect("host=localhost dbname=NewHorizonTest user=postgres password=123")
or die('Connexion impossible : ' . pg_last_error());

//registration of a user

  $email=mysqli_real_escape_string($db_connection, $_POST['email']);
  $pass=mysqli_real_escape_string($db_connection, $_POST['password']);

  if(empty($emal) || empty($pass)){
    echo "Can't be empty!";
  }
  else{
    $password=md5($pass);
    $queryCheck="SELECT * FROM korisnici WHERE e_mail='$email' AND sifra='$pass'";
    $results=mysqli_query($db_connection,$queryCheck);

    if(mysqli_num_rows($results)){
      $_SESSION['email']=$email;
      $_SESSION['success']="Log in successfully!";
      header('location: concept.html');
    }
    else{
      echo "Password or email is not correct!";
    }
  }


?>
