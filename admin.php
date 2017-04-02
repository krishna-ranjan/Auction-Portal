<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Auction Plus</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
<style>
 


 

  .modal-footer {
      background-color: black;
  }

</style>

</head>

<body>

    <!-- Navigation -->
  
 
<div class="container-fluid"  style="background-color:black;padding:15px;margin:0px">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4 col-xs-12">
  <h3 class="text-center">
      <a href="#" style="text-decoration:none;color:white">Online Auction Portal</a>
    </h3>
		</div>
		<div class="col-md-4 col-xs-12">
			Krishna
		</div>
	</div>
	</div>
        
	

<nav class="navbar navbar-inverse navbar-static-top">	
	<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		
         <span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		
               
		</button>
          <a class="navbar-brand" href="index.html"><font color="blue" size="6 px">A</font><sup><font color="green" size="6 px">+</font></sup></a>
	</div><!--closed -->
	
	<div class="collapse navbar-collapse" id="myNavbar">
		
		<ul class="nav navbar-nav">
                
			<li class="active"><a href="index.html">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="Contact.html">Contact</a></li>
			<li><a href="#">FAQ</a></li>
             
             
            
		</ul>
		
	
       
		<form class="navbar-form navbar-right" role="search">
		   <div class="input-group">
			<input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
			<div class="input-group-btn"><a href="search.html">
				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button></a>
			</div><!-- closed-->
			 </div>																				   
		 </form>
			 
		
	</div>
   </div>
	</nav>

<div class="container">
  
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Details</a></li>
    <li><a data-toggle="pill" href="#menu1">Bid</a></li>
    <li><a data-toggle="pill" href="#menu2">Add</a></li>
    
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Two</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
                <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </div>
    <div id="menu1" class="tab-pane fade">
		<div class="container" style="margin:20px; width:75%;">
			<p><b>Bidding Information</b></p>
       <table class="table tabel-condensed table-responsive" style="margin:5px;outline:solid #f0f5f5 1px;">
    <thead>
      <tr>
        <th>List of top bidders</th>
        <th>Bidding</th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Member1</td>
        <td><button type="button" class="btn btn-success">Allow</button>
		  <button type="button" class="btn btn-primary">Deny</button>
		  </td>
       
      </tr>      
      <tr class="success">
        <td>Member2</td>
        <td><button type="button" class="btn btn-success">Allow</button>
		   <button type="button" class="btn btn-primary">Deny</button>
		  </td>
       
      </tr>
      <tr class="danger">
        <td>Member3</td>
        <td><button type="button" class="btn btn-success">Allow</button>
		   <button type="button" class="btn btn-primary">Deny</button>
		  </td>
       
      </tr>
      <tr class="info">
        <td>Member4</td>
        <td><button type="button" class="btn btn-success">Allow</button>
		   <button type="button" class="btn btn-primary">Deny</button>
		  </td>
        
      </tr>
      <tr class="warning">
        <td>Member5</td>
        <td><button type="button" class="btn btn-success">Allow</button>
		   <button type="button" class="btn btn-primary">Deny</button>
		  </td>
        
      </tr>
      <tr class="active">
        <td>Member6</td>
        <td><button type="button" class="btn btn-success">Allow</button>
		   <button type="button" class="btn btn-primary">Deny</button>
		  </td>
        
      </tr>
		 <tr>
        <td>Member7</td>
        <td><button type="button" class="btn btn-success">Allow</button>
			  <button type="button" class="btn btn-primary">Deny</button>
			 </td>
       
      </tr>  
		 <tr class="success">
        <td>Member8</td>
        <td><button type="button" class="btn btn-success">Allow</button>
			  <button type="button" class="btn btn-primary">Deny</button>
			 </td>
        
      </tr>
    </tbody>
  </table>
		</div>
		
    </div>
      
    <div id="menu2" class="tab-pane fade">
      <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
		   <textarea name="message" rows="10" cols="30">The cat was playing in the garden.</textarea>
</form>
    </div>
	</div>
  </div>



<div class="modal-footer" style="height:80px;margin:0px;">
         
          <p style="text-align:center;"><font style="color:white;">All Rights Reserved</font></p>
          <p style="text-align:center;"><font style="color:white;">Uniq Technology</font></p>

        </div>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
