<?php 
include('../connection.php');
session_start();
$user= $_SESSION['user'];
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
?>
 <!-- <!DOCTYPE html>
<html lang="en"> -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Digital Notice Board</title>
    <link rel="stylesheet" href="../style.css" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
    <nav>

    
        <ul>    
            <li class="active"><a href="#">Hello, <?php echo $users['name'] ;?></a></li>
            <li class="active"><a href="homepage1.php"><i class="fa fa-home" ></i> Home</a></li>
            <li><a href="#"><i class="fa fa-user" ></i><a href="about1.php"> About Us</a> </li>
            <li><a href="#"><i class="fa fa-sign-in" ></i><a href="logout.php"> Logout</a> </li>
            <!-- <li><a href="login.php"><span class="fa fa-sign-in"></span> Login</a></li>
            <li><a href="registration.php"><span class="fa fa-sign-in"></span> Sign Up</a></li> -->
        </ul>
        
    </nav>
    <div class="main-box">
        <h1><b>A. P. SHAH  INSTITUTE OF TECHNOLOGY </b></h1>
        
        <div class="container">
            <h2>DIGITAL BOARD</h2>
        </div>
       
        <section class="list">
            <div class="left">
               <div class="box"><b >NOTICE</b></div>
               <div class="active"><a href="#"><a href="index.php?page=notification"><img src="../gifs/idea.gif" alt=""></a></div>
             
            </div>
            <div class="mid">
                <div><b>CLUB</b></div>
                <div><a href="#"><a href="#"><a href="../club.php"><img src="../gifs/apple.gif" alt=""></a></div>
                </div>
            <div class="right">  
                <div class="box"><b>MAGZINE</b></div>
            <div class="active"><a href="#"><a href="../years.html"><img src="../gifs/book.gif" alt=""></a></div>
            </div>
        </section>
        
        <div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading">Latest news</div>
  <div class="panel-body">
    this is the best website
	you can search anything here
	the best thumfjdfug
  </div>
</div>
		
		

</div>
</nav>
      
			<nav class="navbar navbar-default navbar-bottom" style="background:black">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="https://www.instagram.com/_chinu_8005_/"> Chinmay Patil </a></li>
	<li><a href="https://www.instagram.com/_saket_nigam/"> Saket Nigam </a></li>
	<li><a href="https://www.instagram.com/pandey_avadh/"> Avadh Pandey </a></li>
      
	</ul>


</div>
</nav>  
</body>
</html>