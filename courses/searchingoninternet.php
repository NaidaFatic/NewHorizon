<!doctype html>
<html>
    <head>

        <title>Searching on internet</title>
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
                           <?php session_start(); $name= $_SESSION['name']; echo "&nbsp;&nbsp;&nbsp; WELCOME   $name"; ?>
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
         <section id="tut">
            <h1>After you open your Web browser</h1>
            <div class="container">
                <div class="img0">
                <img src="../images/tutorials2/internetsec.png" >
                </div>
                <h4><br>You can search for something on the Web browser by typing on the search bar on top or on the marked boxes. On this picture, it is showed where you can type on Microsoft Edge. If You prefer other Web browsers some are shown below.</h4>
                <p><br><br></p>

            <h1>Mozilla Firefox</h1>
                <div class="img0">
                <img src="../images/tutorials2/internetsec2.png" >
                </div>
            <h1><br>Google Chrome</h1>
                <div class="img0">
                <img src="../images/tutorials2/intenretsec1.png" >
                </div>
                <p class="tutp"><br>You can type URL (URL is the Web address of the site, like www.facebook.com) or You can simply type Facebook ether way is correct but if you want to go directly to the site you will have to type URL of the site and on the top of the Web browser. You can type the name of the site anywhere but it will not direct you to the site but to the search engine, it will show the result of your search.</p>

             <h5 style="float: right"><br><img src="../images/tutorials2/facebook.png" style="float:left;width:59%" class="img">
                 <br><br><br>On this picture it is shown how we can type URL and it will take us directly to site.</h5>
                <h5 style="float: left"><img src="../images/tutorials2/facebook1.png" style="float:right;width:59%;" class="img"> <br><br><br><br>On this picture it is shown how we can type name of site and it will show us the result od our search. In this case the search engine is Bing.</h5>

            <h4><br><br>The searching engine on Firefox and Chrome is Google.</h4>
                <img src="../images/tutorials2/google.png" class="img0">

             </div>

            </section>

        <!------foother----------------------------------->


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
