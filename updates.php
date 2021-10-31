

<!doctype html>
<html lang="en">
    <title> job Registration  </title>
    
 
    <?php include 'links.php'; ?>
    <?php include 'css/style.php';?>
 
    
    
  <head>

  
  
  <div class="container border-dark  rounded-top register "> 
      <div class="row">
       <div class="col-md-4 register-right">
           <img src="img/icons8-registration-64.png" alt="">
           <h3> Welcome</h3>
           <p> Please fill all the details carefully.This form can change your life. </p>
          <a href="display.php" class="btn-success btn  ">check form </a> <br>
       </div> 

       <div  class="col-md-9 register-right">
           <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="home" role="tabpanel">
             <h3 class="register-heading "> Apply for web Developer Post</h3>

             <!--FORM-->
             <form action="" method="POST">
            <div class="row register-form">
             
<?php
///php code are starting here
include 'connection.php'?>
 <?php 

$id = $_GET['id'];
$showquery = " SELECT * FROM `job registration` WHERE id= $id";
$showdata = mysqli_query($con,$showquery);
$arrdata = mysqli_fetch_array($showdata);

?>


<?php
if(isset($_POST['submit']))

{
  $idupdate = $_GET['id'];
  $name = $_POST['user'];
  $degree = $_POST['degree'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $refer = $_POST['refer'];
  $jobprofile = $_POST['jobprofile'];

//   $insertquery = " INSERT INTO `job registration`( `name`,`degree`,`mobile`,`email`,`refer`,`jobpost`)  VALUES('$name','$degree','$mobile','$email','$refer','$jobprofile') ";

 $query = " UPDATE `job registration` SET `id`='$idupdate',`name`='$name',`degree`='$degree',`mobile`='$mobile',`email`='$email',`refer`='$refer',`jobpost`='$jobprofile' WHERE  id =$idupdate";


   $res = mysqli_query($con,$query);
   if($res)
   {
    ?> 
    <script>
      alert ("Data updated properly");
    </script>
    <?php } else 
   { 
     ?> 
    <script>
      alert ("Data not updated ");
    </script>
    <?php
   }
}
?>





             <div class="col-md-6">
             <div class="form-group">
             <input type="text" class="form-control" placeholder="Enter your name" name="user" value="<?php echo $arrdata ['name']; ?>  " required />
             </div>

             <div class="form-group">
             <input type="tel " class="form-control" placeholder="Mobile number"  name="mobile"  value="<?php echo $arrdata ['mobile']; ?>" required />
             </div>
             <div class="form-group">
             <input type="text" class="form-control" placeholder="Any references" name="refer" value="<?php echo $arrdata ['refer']; ?>" required />  
             </div>
             </div>

             <div class="col-md-6">
             <div class="form-group">
             <input type="text" class="form-control" placeholder="Enter your qualification" name="degree" value="<?php echo $arrdata ['degree']; ?>" required />
             </div>

             <div class="form-group">
             <input type="email" class="form-control" placeholder=" Enter your email" name="email" value="<?php echo $arrdata ['email']; ?>" required />    
             </div>

             <div class="form-group">
             <input type="text" class="form-control" placeholder=" Web Developer" name="jobprofile" value="<?php echo $arrdata ['jobpost']; ?>" required />    
             </div>

             <input type="submit" class="btn-primary btn"  value="update" name="submit"> 
             </div>
            
             </div>
              </form>       
             </div>
        </div>
     </div> 
    </div>
    
  </div>
  <table>
            <thead class="">  
          
            <th><a href="#">  <i class=" fab fa-twitter"></i></a> </th>
            <th><a href="#">  <i class=" fab fa-instagram"></i></a></th>
            
            <th><a href="#">  <i class="footer1 fab fa-facebook-square"></i></a></th>
            <th><a href="#"><i class=" far fa-envelope"></i></a></th>

            </tr>
           
        </thead>
        </table>

    <P>@copyright 2021 SachinTope</p>
  
  </body>
</html>






















