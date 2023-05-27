<?php 
include('connection.php');
session_start();
 ?>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <link rel="stylesheet" href="club.css">
  
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="comps student">
   <title>A. P. SHAH INTITUTE OF TECHNOLOGY - THANE</title>
   <style>
      .btn{
      color: rgba(0, 0, 0, 0.842);
      cursor: pointer;
      outline: none; 
      margin: 12px 0;
      padding: 10px 21px;
      border: 2px solid rgba(0, 0, 0, 0.842);
      border-radius: 10px;
      font-size: 14px;
      background: none;
      font-weight: bold; 
      }
      .box i{ 
         width: 25px; 
         text-align: center;
      }
      .btn:hover{
         opacity: 0.5;
         color: rgba(16, 19, 8, 0.048); 
         background: rgba(0, 0, 0, 0.747); 
      }
      .left
      {
         color: rgb(1, 104, 104);
         display: inline-block;
         position: absolute;
         left: 200px;
         top: 400px;
      }
      .left img
      {  
         font-display: block;
         height: 130px;
         width:120px ;
         border-radius: 30px;
         background-color: #ff8800c0
      }
      .mid
      {
         color: rgb(9, 202, 202);
         display: inline-block;
         position: absolute;
         left: 550px;
         top: 400px;
      }
      .mid img
      {  
         font-display: block;
         height: 130px;
         width:120px ;
         border-radius: 30px;
         background-color: #ff8800c0
      }
      .right
      {
         color: rgb(4, 94, 94);
         position: absolute;
         top: 400px;
         right: 250px;
      }
      .right img
      {  
         font-display: block;
         height: 330px;
         width:350px ;
         border-radius: 30px;
      }
   </style>
</head>
<body>
      <nav class="navlist">
         <ul>
            <li><h1>CLUB</h1></li>
            <li><a href=""></a></li>
            <li class="active"><a href="./user/homepage1.php"><i class="fa fa-home" ></i> Home</a></li>
            <li><a href="#"><i class="fa fa-user" ></i><a href="about.php"> About Us</a> </li>
         </ul>
      </nav>
   <div class="main-box">
      <h1>A. P. SHAH INSTITUTE OF TECHNOLOGY</h1>   
   </div>
   <div class="clubs">
      <div class="club1">
         <div class="container">
            <div class="row">
               <div class="column">
                   <a><b> AI/ML Club</b></a>
                     <p>
                      <Li><a href="#"><button type="button"> <img src="photo/My project (2).png" height ="80" width="100" /></button><a href="https://forms.gle/hURAhkjam9cxNh9w6"> Register</a></Li>
                     </p>
               </div>
            </div>
         </div>
      </div>
      <div class="club2">
         <div class="container">
            <div class="row">
               <div class="column">
               <a><b> Design Club</b></a>
               <Li><a href="#"><button type="button"> <img src="photo/My project.png" height ="80" width="100" /></button><a href="https://forms.gle/hURAhkjam9cxNh9w6"> Register</a></Li>
               </div>  
            </div>
         </div>
      </div>
      <div class="club3">
         <div class="container">
            <div class="row">
               <div class="column">
                  <a><b> Smart City Club</b></a>
                        <Li><a href="#"><button type="button"> <img src="photo/My project (4).png" height ="80" width="100" /></button><a href="https://forms.gle/hURAhkjam9cxNh9w6"> Register</a></Li>
               </div>
            </div>
         </div>
      </div>
      <div class="club3">
         <div class="container">
            <div class="row">
               <div class="column">
                  <a><b> HPC Club</b></a>
                     <Li><a href="#"><button type="button"> <img src="photo/My project (3).png" height ="80" width="100" /></button><a href="https://forms.gle/hURAhkjam9cxNh9w6"> Register</a></Li>
               </div>
            </div>
         </div>
      </div>
      <div class="club3">
         <div class="container">
            <div class="row">
               <div class="column">
                  <a><b> Auto MAC Club</b></a>
                     <Li><a href="#"><button type="button"> <img src="photo/My project (1).png" height ="80" width="100" /></button><a href="https://forms.gle/hURAhkjam9cxNh9w6"> Register</a></Li>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- <nav class="navbar navbar-default navbar-bottom" style="background:transparent">
      <div class="container">
         <ul class="nav navbar-nav navbar-left">
            <li><a href="https://www.instagram.com/_chinu_8005_/"> Chinmay Patil </a></li>
            <li><a href="https://www.instagram.com/_saket_nigam/"> Saket Nigam </a></li>
            <li><a href="https://www.instagram.com/pandey_avadh/"> Avadh Pandey </a></li>
         </ul>
      </div>
   </nav>   -->
</body>
