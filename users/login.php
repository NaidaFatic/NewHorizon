<?php


session_start();

//conncection

$db_connection = pg_connect("host=localhost dbname=NewHorizonTest user=postgres password=123");

//registration of a user

  $email=$_POST['email'];
  $pass= $_POST['password'];

    $password=md5($pass);
    $results=pg_prepare ($db_connection,"my_query",'SELECT * FROM korisnici WHERE e_mail=$1 AND sifra=$2');//prepared mysqli_stm
    $results=pg_execute($db_connection,"my_query",array($email,$password));
    $name=pg_query ($db_connection,"SELECT ime FROM korisnici WHERE e_mail='$email' AND sifra='$password'");
    $name=pg_fetch_result($name,0,0);


    $uloga=pg_query ($db_connection,"SELECT uloga FROM korisnici WHERE e_mail='$email' AND sifra='$password'");
    $uloga=pg_fetch_result($uloga,0,0);


    if(pg_num_rows($results)==1 ){
      $_SESSION['email']=$email;
      $_SESSION['success']="Log in successfully!";
      if($uloga=='t'){
        $_SESSION['name']=" ADMIN $name";
          header("Location: adminpage.php");
      }
      else{
        $_SESSION['name']=$name;
        header("Location: courses/concept.php");
      }

    }
    else{
      echo '<script>
      alert("Passwords or email is NOT correct!");
      window.location.href = "LOG IN.html";
      </script>';
      die();
    }




?>
