<!doctype html>
<html>
    <head>


        <title>Computer Basics</title>

        <title>Basic functions on Desktop</title>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="images/logotip2.png">
    </head>

    <body>

        <!--------------------------Navbar------------------------->

        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="Index.html"><img src="images/logotip.png"></a>
                <a class="navbar-home" href="must.php?logout='1'" name="logout">LOG OUT</a>
                <div class="Welcome">
                   <?php session_start(); $name= $_SESSION['name']; echo "&nbsp;&nbsp;&nbsp; WELCOME   $name "; ?>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav ml-auto">
                      <li><a class="nav-link dropdown- main" href="editor.php">CREATE COURSE</a></li>
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
                                $id=85;
                                $result=pg_prepare ($db_connection,"my_query11","SELECT * FROM kurs");//prepared mysqli_stm
                                $result=pg_execute($db_connection,"my_query11",array());
                                $ro = pg_fetch_object($result);
                                $rows = pg_num_rows($result);
                                for($i = 1; $i <=$rows; $i++){
                                  $id=$id+1;
                                  $result=pg_query ($db_connection,"SELECT * FROM kurs WHERE id='$id'");

                                  while ($row = pg_fetch_row($result)) {
                                  if($row[5]==3)
                                  {

                                    echo '<a class="dropdown-item sub" href="newcourse.php?id='.$id.'">' . $row[6] .  '</a>';

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
                                $id=85;
                                $result=pg_prepare ($db_connection,"my_query12","SELECT * FROM kurs");//prepared mysqli_stm
                                $result=pg_execute($db_connection,"my_query12",array());
                                $ro = pg_fetch_object($result);
                                $rows = pg_num_rows($result);
                                for($i = 1; $i <=$rows; $i++){
                                  $id=$id+1;
                                  $result=pg_query ($db_connection,"SELECT * FROM kurs WHERE id='$id'");

                                  while ($row = pg_fetch_row($result)) {
                                  if($row[5]==2)
                                  {

                                    echo '<a class="dropdown-item sub" href="newcourse.php?id='.$id.'">' . $row[6] .  '</a>';

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
                                $id=85;
                                $result=pg_prepare ($db_connection,"my_query13","SELECT * FROM kurs");//prepared mysqli_stm
                                $result=pg_execute($db_connection,"my_query13",array());
                                $ro = pg_fetch_object($result);
                                $rows = pg_num_rows($result);
                                for($i = 1; $i <=$rows; $i++){
                                  $id=$id+1;
                                  $result=pg_query ($db_connection,"SELECT * FROM kurs WHERE id='$id'");

                                  while ($row = pg_fetch_row($result)) {
                                  if($row[5]==1)
                                  {

                                    echo '<a class="dropdown-item sub" href="newcourse.php?id='.$id.'">' . $row[6] .  '</a>';


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
        <!--------------------tutorial------------------------------>

        <section id="tut">
            <h1>Basic functions on Desktop</h1>
            <div class="container">
                <img src="images/tutorials/desktop.jpg">
                <h4>What is desktop?</h4>
                <p class="tutp">Desktop is the main screen of any modern computer. Desktop is area you are going to see any time you do anything on your computer. Desktop has many functions and also has couple parts. Surface that takes 95% of screen is used for storing shorcuts, icons and files. We usually store icons for accessing our most important and most used programs. </p>
                <img src="images/tutorials/taskbar.jpg">
                <p class="tutp">Second part of desktop you will use mostly is taskbar. Again, ono taskbar we have couple of parts but we will go trought them. In your right corner of taskbar you have couple of icons also called "Notification area". Here you can find some important programs that are working in background, your time and date and also some notifications. In middle part of taskbar, you can find all your currently opened programs. You can also pin some icons on taskbar so they are easily accessable to you. Taskbar has some more functions but we will go through them in later tutorials.</p>
                <img src="images/tutorials/start.jpg">
                <div class="row">
                    <div class="col-md-3">
                        <img src="images/tutorials/start2.jpg">
                    </div>
                    <div class="col-md-9">
                        <p class="tutp">Lastly, we have start menu. Start menu is located in left side of taskbar. You acceess it by pressing start button. Start button is different for every windows so check image we provided to you for your windows.Start menu has many functions and it is one of the most used parts of computer. Start menu is used for turning on or off pc, for accessing programs, for accessing control panel and other parts of settings in your computer. We will also cover start menu more in depth in one of next tutorials. Desktop is usually filled with many folders and files which we will cover in next tutorials. If you right click on your desktop, you can access things like refreshing(If you're having problems with your PC, you can try to refresh, reset, or restore it. Refreshing your PC reinstalls Windows and keeps your personal files and settings. It also keeps the apps that came with your PC and the apps you installed from the Windows Store.), access screen settings, create new foler or file and other things.</p>
                    </div>
                </div>
            </div>
        </section>

        <!--------------------footer------------------------------>

        <section id="footer">
            <img class="footer-img" src="images/Untitled2.png">

            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="images/logomain.png">

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

        <!--------------------scrool----------------------------->


    </body>

</html>
