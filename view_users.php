<?php 
  


$con=mysqli_connect("localhost","root","","store") or 
die(mysqli_error($con));
session_start();

                     
                  
                     if(isset($_POST['view'])){
                             $name=$_POST['id'];
                             $_SESSION['id'] = $name;
                              header('location:customer_view.php');
                            }

                   
                
                 

                


?>




<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>view users</title>



    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body style="background-color :  #99939399;">


<?php
  include 'navbar.php';
?>
<form action="#" method="POST">

 <!-- <label for="details">type id to view customer details</label>
 <input type="submit" name="view"  value="save" class="btn btn-primary">view</input> -->
 <div class="row g-3" style="margin-left: 97px;
    width: 30%;
    /* margin: 27px 135px; */
    margin: 1% 16%;">
  <div class="col">
         <input type="text" class="form-control" name="id" id="formGroupExampleInput" placeholder="ENTER ID TO VIEW DETAILS" required>

  </div>
  <button type="submit" name="view"   class="btn btn-primary">VIEW</button>
  
</div>

</form>


<table class="table" style="width: 58%;
    margin:auto;margin-top: 68px;">
  <thead>
    <tr >
      
      <td scope="col"><b>id</b></td>
      <td scope="col"> <b>Name</b></td>
      <td scope="col"><b>email</b></td>
      
    </tr>
  </thead>
  <form method="POST" action="#" >
    <tbody>
<?php
   $fetch_query = "SELECT * FROM customers.users ";

            $fetch_query_result = mysqli_query($con, $fetch_query);
            
            while ($row=mysqli_fetch_assoc($fetch_query_result)){


?>
 </tr>
                    <td><?php echo $row['id'] ;?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  
                 

            </tr>

<?php  } ?>

</tbody>
</form>
</table>

       
<footer class="text-center mt-5 py-2" style="position: relative;
    top: -46px;
    color: black;
    background-color: cornsilk;
   ">
           <p>Made by <b>Ritik kumar</b> <br>EMPOWERING YOUTHS </p>
</footer>

</body>
</html>