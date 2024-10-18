<?php
include 'conn.php';

  $que_id = $_GET['id'];
$sql= "update contact_query set query_status = 1 where query_id={$que_id}";
$result=mysqli_query($conn,$sql);
header("Location: query.php");
mysqli_close($conn);

 ?>
