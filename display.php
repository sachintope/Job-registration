

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
<?php include 'links.php';?>
<?php include 'css/style.php';?>

</head>
<body>
    
<div class="main-div">
    <h1>List of candidates for web developer job</h1>
    <div class="center-div"> 
    <div class="table-responsive">
        <table>
            <thead>  
            <th>Id</th>
            <th>name</th>
            <th>degree</th>
            <th>mobile</th>
            <th>email</th>
            <th>refer</th>
            <th>post</th>
            <th colspan="2">Operation</th>
            </tr>
        </thead>
        <tbody>

        
        <?php 
include 'connection.php';
$selectquery = " SELECT * from `job registration`";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);

while ($res = mysqli_fetch_array($query))   {
 ?>
    <tr>
    <td> <?php echo $res ['id']; ?>   </td>
    <td><?php echo $res ['name']; ?> </td>
    <td><?php echo $res ['degree']; ?> </td>
    <td> 
    <?php echo $res ['mobile']; ?>  </td>
    <td><span class="email-style"> 
    <?php echo $res ['email']; ?> </span></td>
    <td><?php echo $res ['refer']; ?> </td>
    <td><?php echo $res ['jobpost']; ?> </td>
    <!--this is a update file code -->
    <td> <a href="updates.php?id=<?php echo $res ['id'];?>"
     data-toggle="tooltip" data-placement="bottom" title="UPDATE"> <i class="fa fa-edit" aria-hidden="true"> </i> </td>

    <td> <a href="delete.php?id=<?php echo $res ['id'];?>"
     data-toggle="tooltip" data-placement="bottom" title="DELETE"> <i class="fa fa-trash" aria-hidden="true"> </i> </td>
</tr>

<?php
}


?>

        </tbody>
        </table>

    </div>
        
</div>
</div>



<script>
    $(document).ready(function(){

        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

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
















<?php




?>


















