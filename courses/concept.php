<!doctype html>
<html>
    <head>


        <title>Courses</title>


        <meta charset="UTF-8">
        <link rel="stylesheet" href="../style.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="../images/logotip2.png">
    </head>

    <body>

        <!--------------------------Navbar------------------------->

        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="../Index.html"><img src="../images/logotip.png"></a>
                <a class="navbar-home" href="../users/must.php?logout='1'" name="logout">LOG OUT</a>
                <div class="Welcome">
                   <?php session_start(); $name= $_SESSION['name']; if($name==NULL) {header("Location: ../Index.php");} else {echo "&nbsp;&nbsp;&nbsp; WELCOME   $name";} ?>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav ml-auto">
                      <?php
                     $name= $_SESSION['name']; $email=$_SESSION['email'];
                      $db_connection = pg_connect("host=localhost dbname=NewHorizonTest user=postgres password=123");
                      $uloga=pg_query ($db_connection,"SELECT uloga FROM korisnici WHERE e_mail='$email'");
                      $uloga=pg_fetch_result($uloga,0,0);
                      if($uloga=='t'){
                        echo  ' <li><a class="nav-link dropdown- main" href="../admin-pages/editor.php">CREATE COURSE</a></li>';
                      }
                         ?>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle main" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Computer Basics
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item sub" href="basicfunctions1.php">Basic functions</a>
                                <a class="dropdown-item sub" href="basicfunctions2.php">Start menu</a>
                                <a class="dropdown-item sub" href="#">Working with files and folders</a>
                                <a class="dropdown-item sub" href="#">Installing and uninstalling programs</a>
                                <?php
                                $db_connection = pg_connect("host=localhost dbname=NewHorizonTest user=postgres password=123");
                                $id=180;
                                $result=pg_prepare ($db_connection,"my_query11","SELECT * FROM kurs");//prepared mysqli_stm
                                $result=pg_execute($db_connection,"my_query11",array());
                                $ro = pg_fetch_object($result);
                                $rows = pg_num_rows($result);
                                for($i = 1; $i <=$rows; $i++){

                                  $result=pg_query ($db_connection,"SELECT * FROM kurs WHERE id='$id'");

                                  while ($row = pg_fetch_row($result)) {
                                  if($row[3]==3)
                                  {

                                    echo '<a class="dropdown-item sub" href="newcourse.php?id='.$id.'">' . $row[4] .  '</a>';


                                  }}

                                  $id=$id+1;
                                }

                                ?>
                              </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle main" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Internet Basics
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item sub" href="howtogooninternet.php">How to go on the internet</a>
                                <a class="dropdown-item sub" href="searchingoninternet.php">Searching on internet</a>
                                <a class="dropdown-item sub" href="#">Creating an account</a>
                                <a class="dropdown-item sub" href="#">Creating email and email basics</a>
                                <?php
                                $db_connection = pg_connect("host=localhost dbname=NewHorizonTest user=postgres password=123");
                                $id=180;
                                $result=pg_prepare ($db_connection,"my_query12","SELECT * FROM kurs");//prepared mysqli_stm
                                $result=pg_execute($db_connection,"my_query12",array());
                                $ro = pg_fetch_object($result);
                                $rows = pg_num_rows($result);
                                for($i = 1; $i <=$rows; $i++){

                                  $result=pg_query ($db_connection,"SELECT * FROM kurs WHERE id='$id'");

                                  while ($row = pg_fetch_row($result)) {
                                  if($row[3]==2)
                                  {

                                    echo '<a class="dropdown-item sub" href="newcourse.php?id='.$id.'">' . $row[4] .  '</a>';


                                  }}

                                  $id=$id+1;
                                }

                                ?>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle main" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Social Media Basics
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item sub" href="#">Google</a>
                                <a class="dropdown-item sub" href="#">Ebay</a>
                                <a class="dropdown-item sub" href="#">Facebook</a>
                                <a class="dropdown-item sub" href="#">Youtube</a>
                                <?php
                                $db_connection = pg_connect("host=localhost dbname=NewHorizonTest user=postgres password=123");
                                $id=180;
                                $result=pg_prepare ($db_connection,"my_query13","SELECT * FROM kurs");//prepared mysqli_stm
                                $result=pg_execute($db_connection,"my_query13",array());
                                $ro = pg_fetch_object($result);
                                $rows = pg_num_rows($result);
                                for($i = 1; $i <=$rows; $i++){

                                  $result=pg_query ($db_connection,"SELECT * FROM kurs WHERE id='$id'");

                                  while ($row = pg_fetch_row($result)) {
                                  if($row[3]==1)
                                  {

                                    echo '<a class="dropdown-item sub" href="newcourse.php?id='.$id.'">' . $row[4] .  '</a>';


                                  }}

                                  $id=$id+1;
                                }

                                ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>

        <!-------selection-------------------------------->

        <section id="selection">
            <h1>Computer basics courses:</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="basicfunctions1.php"><img class="placeholder" src="../images/tutorials/desktop.jpg"></a>
                        <h4 class="ptitle">Basic functions on Desktop</h4>
                        <p>What are basic functions on desktop and how we can access them</p>
                        <a href="basicfunctions1.php" class="seemore">see more</a>
                    </div>
                    <div class="col-md-4">
                        <a href="basicfunctions2.php"><img class="placeholder" src="../images/tutorials/start.jpg"></a>
                        <h4 class="ptitle">Start menu</h4>
                        <p>What is Start menu, how does it look on different Windows OS and what are the parts of a Start menu</p>
                        <a href="basicfunctions2.php" class="seemore">see more</a>
                    </div>
                     <div class="col-md-4">
                        <a href="howtogooninternet.php"><img class="placeholder" src="../images/tutorials2/int.png"></a>
                        <h4 class="ptitle"><br>Basics of internet</h4>
                        <p>How to go on Internet <br>What is Internet</p>
                        <a href="howtogooninternet.php" class="seemore">see more</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="searchingoninternet.php"><img class="placeholder" src="../images/tutorials2/Search-Engine.jpg"></a>
                        <h4 class="ptitle">Searching on internet</h4>
                        <p>Ways to search on Web browser.</p>
                        <a href="searchingoninternet.php" class="seemore">see more</a>
                    </div>
                    <?php
                    $id=180;
                    $result=pg_prepare ($db_connection,"my_query15","SELECT * FROM kurs");//prepared mysqli_stm
                    $result=pg_execute($db_connection,"my_query15",array());
                    $ro = pg_fetch_object($result);
                    $rows = pg_num_rows($result);
                    $j=1;
                      for($i = 1; $i <=2; $i++){

                        $result=pg_query ($db_connection,"SELECT * FROM kurs WHERE id='$id'");

                        while ($row = pg_fetch_row($result)) {
                          $image = $row[5];
                          echo '<div class="col-md-4">';
                          echo '<img class="placeholder" src="../images/'.$image.'">';
                          echo '<h4 class="ptitle">'.$row[4].'</h4>';
                          echo '<p>'.$row[2].'</p>';
                          echo '<a href="newcourse.php?id='.$id.'" class="seemore">see more</a></div>';

                    }
                        $id=$id+1;
                        $j++;
                      }

                    ?>

                  </div>

                  <?php
                  $id=182;
                  $result=pg_prepare ($db_connection,"my_query16","SELECT * FROM kurs");//prepared mysqli_stm
                  $result=pg_execute($db_connection,"my_query16",array());
                  $ro = pg_fetch_object($result);
                  $rows = pg_num_rows($result);

                    for($i = 1; $i <=$rows; $i++){

                      $result=pg_query ($db_connection,"SELECT * FROM kurs WHERE id='$id'");


                        echo '<div class="row">';
                        if($rows>=3){
                        for($n=1;$n<=3;$n++){

                          while ($row = pg_fetch_row($result)) {
                              $image = $row[5];
                              echo '<div class="col-md-4">';
                              echo '<img class="placeholder" src="../images/'.$image.'">';
                              echo '<h4 class="ptitle">'.$row[4].'</h4>';
                              echo '<p>'.$row[2].'</p>';
                              echo '<a href="newcourse.php?id='.$id.'" class="seemore">see more</a></div>';
                        }
                        $id=$id+1;
                        $result=pg_query ($db_connection,"SELECT * FROM kurs WHERE id='$id'");

                        }
                      }
                        echo '</div>';
                    }

                  ?>

              </div>
          </section>



        <section id="footer">
            <img class="footer-img" src="../images/Untitled2.png">

            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="../images/logomain.png">

                </div>
                <div class="col-md-4 con">
                    <h4>Contact us:</h4>
                    <p><i class="fa fa-location-arrow" ></i><i> International Burch University</i></p>
                    <p><i class="fa fa-mobile"></i><i> tel: xxxxxxxxx</i></p>
                    <p><i class="fa fa-envelope"></i><i> newhorizon.onlinecontact@gmail.com</i></p>
                </div>
                <div class="col-md-4 con">
                    <h4>Subscribe to newsletter:</h4>
                    <input type="email" class="form-control" placeholder="Your Email">
                    <button type="button" class="btn btn-primary"> Subscribe </button>
                </div>
            </div>
            <hr>
            <p class="copyright">All copyrights reserved to New Horizon ©<?php echo date("Y");?></p>

        </section>


    </body>

</html>
