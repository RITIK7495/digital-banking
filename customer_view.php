<?php

$con=mysqli_connect("localhost","root","","store") or 
die(mysqli_error($con));
session_start();


  $customer_id=$_SESSION['id'];
// echo"$customer_id";

?>



<!doctype html>
<html lang="en">
  <head>
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>DIGITAL BANKING</title>
  </head>

  <body style="background-color: #c8c6c687;">
  <?php
  include 'navbar.php';
  ?>

<div class="container">
  <div class="row row-cols-2" style="margin-top: 42px;">
    <div class="col" style="margin-top: 47px;">
    	<img src="img/user3.jpg" style="border-radius:50%;">


    </div>
    <div class="col" style="margin-left: -10%; ">
    	<p style="    width: 124%;">Digital banking is part of the broader context for the move to online banking, where banking services are delivered over the internet. The shift from traditional to digital banking has been gradual and remains ongoing, and is constituted by differing degrees of banking service digitization. Digital banking involves high levels of process automation and web-based services and may include APIs enabling cross-institutional service composition to deliver banking products and provide transactions. It provides the ability for users to access financial data through desktop, mobile and ATM services.</p>



    </div>
    <div class="col"></div>
    <div class="col" style="font-size: 28px;margin-left: 40%;">
    	<?php
                $fetch_query = "SELECT * FROM customers.users WHERE id='$customer_id' ";

            $fetch_query_result = mysqli_query($con, $fetch_query);

            while ($row=mysqli_fetch_assoc($fetch_query_result)){


?>



                   <p>id: <?php echo $row['id'] ;?></p>
                   <p>name: <?php echo $row['name'] ;?></p>
                   <p>email: <?php echo $row['email'] ;?></p>
                   <p>account balance: <?php echo $row['balance'] ;?></p>
                  
                  
                 

           
<?php  } ?>


    
    </div>
  </div>
</div>








  </body>
  </html>
