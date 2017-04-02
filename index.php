<?php
 session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="krishna">

    <title>AUCTION PLUS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
<style>
 .carousel .item {
  height: 300px;
}

.item img {
    background-size:cover;
    max-width:100%;
    display:block;
    margin:auto;
    min-height: 300px;
}
 
 .modal-header, h4, .close {
      background-color: black;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: black;
  }

</style>

</head>

<body style="margin:1px;padding:0;height:100%;">

    <!-- Navigation -->
  
 
	
  <h2 class="text-center" style="background-color:black;padding:20px;margin:0px">
      <a href="#" style="text-decoration:none;color:white">Online Auction Portal</a>
    </h2>
  
        
	

<div class="navbar navbar-inverse navbar-static-top" role="navigation">	
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		
               
		</button>
          <a class="navbar-brand" href="index.html"><font color="blue" size="6 px">A</font><sup><font color="green" size="6 px">+</font></sup></a>
	</div><!--closed -->
	
	<div class="collapse navbar-collapse">
		
		<ul class="nav navbar-nav">
                
			<li class="active"><a href="index.html">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="Contact.html">Contact</a></li>
			<li><a href="#">FAQ</a></li>
             
             
            
		</ul>
		
		<div class="navbar-right">
       
		 <form class="navbar-form" role="search">
		   <div class="input-group">
			<input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
			<div class="input-group-btn"><a href="search.html">
				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button></a>
			</div><!-- closed-->
      		   </div>
		 </form>
		</div>
		
	</div>
   </div>




<!-- Carousel-->

    <div class="carousel">
            <div class="row">
                <div class="col-md-8">
                    <div id="carousel-homepage" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-homepage" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-homepage" data-slide-to="1"></li>
                            <li data-target="#carousel-homepage" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="#"><img src="none" /><div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div></a>

                            </div>
                            <div class="item">
                                <a href="#"><img src="none" /><div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div></a>

                            </div>
                            <div class="item">
                                <a href="#"><img src="none" /><div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div></a>

                            </div>
                        </div>

                        <a class="left carousel-control" href="#carousel-homepage" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-homepage" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 low-padding-left">
	

<form action="login.php" method="post"  name="login"  style="padding:20px;height:310px;">
    <div class="form-group">
      <label for="email" style="font-size:20px;">Username</label>
      
<div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon">@</div>
<input type="text" class="form-control" name="username" placeholder="username" required>

    </div>
    <div class="form-group">
      <label for="pwd" style="font-size:20px;">Password:</label>
<div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon"><span class="glyphicon glyphicon-search" required></span></div>
      <input type="password" class="form-control" name="password" placeholder="Enter password" required>
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label><br />
    </div>

   <input type="submit"  name="submit" value="Login"  style="padding:2px;font-size:15px;" >
<!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-success btn-lg" id="myBtn" style="padding:5px;font-size:17px;">Signup</button>
        
        </form>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:25px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Sign Up</h4>
        </div>
        <div class="modal-body" style="padding:20px 50px;">
        <form action="regis.php" method="post"  name="Signup" >
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Username" name="username"  required>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Email</label>
              <input type="email" class="form-control" id="psw" placeholder="email" name="email" required>
            </div>

 <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password" name="password" required>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <input type="submit" name="submit" value="Register" />
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Already a member?<a href="#">Login</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 


  

</div>

</div>
</div>

<div class="col-md-1"></div>
<div class="col-md-6"><hr />
     <div class="jumbotron" style="padding:10px;">
    
    <p><font size="3.5px">In today's world,Internet is the most popular way of connecting with the people.At <font color="blue">Auction Plus</font> you can perform Auction easily.You will be able to participate from any part of the World.</p>
  </div>
<div class=col-md-5"></div>
 </div>

 </div>
 <hr />
 <div class="modal-footer" style="height:80px;margin:0px;">
         
          <p style="text-align:center;"><font style="color:white;">All Rights Reserved</font></p>
          <p style="text-align:center;"><font style="color:white;">Uniq Technology</font></p>

        </div>


<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
                    
                    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
