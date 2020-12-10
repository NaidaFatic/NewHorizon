<?php
$db_connection = pg_connect("host=localhost dbname=NewHorizonTest user=postgres password=123");
$id=147;
$result=pg_prepare ($db_connection,"my_query15","SELECT * FROM kurs");//prepared mysqli_stm
$result=pg_execute($db_connection,"my_query15",array());
$ro = pg_fetch_object($result);
$rows = pg_num_rows($result);
$j=1;
  for($i = 1; $i <=2; $i++){
    $id=$id+1;
    $result=pg_query ($db_connection,"SELECT * FROM kurs WHERE id='$id'");

    while ($row = pg_fetch_row($result)) {
      $image = $row[7];
      $image_src = "upload/".$image;
      echo '<div class="col-md-4">';
      echo '<img src="data:image/jpg;charset=utf8;base64'. $image_src. '/>' ;
      echo '<h4 class="ptitle">'.$row[6].'</h4>';
      echo '<p>'.$row[3].'</p>';
      echo '<a href="newcourse.php?id='.$id.'" class="seemore">see more</a></div>';

}
    $id=$id+1;
    $j++;
  }

?>
