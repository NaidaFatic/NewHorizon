
<?php

session_start();


//conncection

$db_connection = pg_connect("host=localhost dbname=NewHorizonTest user=postgres password=123");

//registration of a user


  $name=$_POST['name'];
  $surname=$_POST['surname'];
  $date= $_POST['date'];
  $email=$_POST['email'];
  $broj=$_POST['number'];
  $pass= $_POST['password'];
  $passTest=$_POST['passwordTest'];
  //inpuut into database

  //chech if there is someone with same email

  $results=pg_prepare ($db_connection,"my_query",'SELECT * FROM korisnici WHERE e_mail=$1 LIMIT 1');
  $userResult=pg_execute($db_connection,"my_query",array($email));


  if($pass!=$passTest){

    echo '<script>
    alert("Passwords have to be same!");
    window.location.href = "REGISTRATION.html";
    </script>';
    die();
    }
  if(pg_num_rows($userResult)>=1){
    echo '<script>
    alert("Email is already used!");
    window.location.href = "REGISTRATION.html";
    </script>';
    die();
  }

    $password=md5($pass); //encrypt password

    $ers=pg_prepare($db_connection,"query",'INSERT INTO korisnici(ime, prezime, datum_rodjanja, e_mail, broj_telefona, sifra, uloga)
    values ($1, $2, $3, $4, $5,$6,$7)');
    $ers=pg_execute($db_connection,"query",array( $name,$surname,$date,$email,$broj,$password,'FALSE'));
    $_SESSION['name']=$name;
    $_SESSION['success']="You are logged in!";

    header("location: concept.php");

 ?>
