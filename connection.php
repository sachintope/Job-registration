<?php 
$username = "root";
$password = "";
$server = 'localhost';
$db = 'youtube';

  $con = mysqli_connect($server,$username,$password,$db);

  if($con){
    //echo "Connection Successful";
    ?>
    <script>
    alert('Connection Successful');  
    </script>
    <?php
  }
  else {
     // echo "No Connection";
      die(" no connection".mysqli_connect_error());
  }


  ?>






























