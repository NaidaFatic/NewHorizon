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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tiny.cloud/1/9bfmbnpzkgkaiedqh73xbydrzqpalxno3pkoj1gay6fpz49x/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>tinymce.init({
  selector: 'textarea',  // change this value according to your HTML
  paste_data_images: true,
  plugins: 'paste',
  menubar: 'edit',
  setup: function (editor) {
    editor.on('click', function () {
      console.log('Editor was clicked');
    });
  }
});      </script>


      </head>

    <body>

        <!--------------------------Navbar------------------------->

        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="../Index.html"><img src="../images/logotip.png"></a>
                <a class="navbar-home" href="../users/must.php" name="logout">LOG OUT</a>
                <div class="Welcome">
                   <?php session_start(); $name= $_SESSION['name']; echo "&nbsp;&nbsp;&nbsp; WELCOME   $name"; ?>
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
                                <a class="dropdown-item sub" href="../courses/basicfunctions1.php">Basic functions</a>
                                <a class="dropdown-item sub" href="../courses/basicfunctions2.php">Start menu</a>
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

                                    echo '<a class="dropdown-item sub" href="../courses/newcourse.php?id='.$id.'">' . $row[4] .  '</a>';


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
                                <a class="dropdown-item sub" href="../courses/howtogooninternet.php">How to go on the internet</a>
                                <a class="dropdown-item sub" href="../courses/searchingoninternet.php">Searching on internet</a>
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

                                    echo '<a class="dropdown-item sub" href="../courses/newcourse.php?id='.$id.'">' . $row[4] .  '</a>';


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

                                    echo '<a class="dropdown-item sub" href="../courses/newcourse.php?id='.$id.'">' . $row[4] .  '</a>';


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
          <h1>CREATE A COURSE</h1>
          <div class="container signin-container" style="margin-top: 30px; margin: auto;">
          <div class="card signin-card">

          <form  class="create" action="../admin-pages/create.php" method="post" enctype='multipart/form-data' style="max-width:1000px; margin: auto;">
            <div>
                <input type="text" class="form-control" name="naslov" placeholder="WRITE COURSE HEADING..." required><br>
            </div>

            <div>
              <label for="course">Choose a categry of course:</label>
              <select name="course" style="padding:7px;width:1000px;margin: auto;">
                <option value="3">Computer Basics</option>
                <option value="2">Internet Basics</option>
                <option value="1">Social Media Basics</option>
              </select>
              <br><br>
            </div>

            <p style="margin-bottom: 7px;">Upload a image:</p>
            <div class="file">
              <input type="file" name="fileToUpload">
            </div><br>
            <p style="margin-bottom: 7px;">Write a brife description:</p>
            <textarea id="mytextarea" name="smallDesc">Write...</textarea><br>
            <div>
            </div><br>
            <p style="margin-bottom: 7px;">Write a description:</p>
            <textarea id="mytextarea" name="description">Write...</textarea><br>
            <div>
              <button  name="signin" class="buttonSignUp" type="submit" style="  margin-left: 40%;">SUBMIT</a>
            </div><br><br>

          </form>
        </div>
      </div>

        </body>
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
