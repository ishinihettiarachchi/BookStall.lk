<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>BookStall</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">

	    <link rel="stylesheet" type="text/css" href="css1/normalize.css">
	    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
	    <link rel="stylesheet" type="text/css" href="css1/vendor.css">
	    <link rel="stylesheet" type="text/css" href="style1.css">
		<link rel="stylesheet" type="text/css" href="review.css">
		<link rel="stylesheet" type="text/css" href="css/headerstyle.css">
		<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="css/footestyle.css">
		<!-- script
		================================================== -->
		<script src="js/modernizr.js"></script>

	</head>

<body>


<header class="header">

    <div class="header-1">

        <a href="#featured" class="logo"> <img src="image/logo.png" alt="" width="300" height="80"> </a>

        <form action="" class="search-form-x">
            <input type="search" id="srch" placeholder="search here..." >
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="shopping-cart.php" class="fas fa-shopping-cart"></a>
            <div id="login-btn" class="fas fa-user"></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="product.php">product</a>
            <a href="about.php">about</a>
            <a href="contact.php">contact</a>

        </nav>
    </div>
    

</header>

<section class="bg-sand padding-large">
	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<a href="#" class="product-image"><img src="image/book-1.png" alt="image"></a>
			</div>

			<div class="col-md-6 pl-5">
				<div class="product-detail">
					<h1>SLAYER</h1>
					<p>Fiction</p>
					<span class="price colored">$28.13</span>
					<h2>About the Author </h2>
					<p>	
					Kiersten White is the New York Times bestselling author of many books for teens and young readers, including And I Darken, Now I Rise, Bright We Burn, The Dark Descent of Elizabeth Frankenstein, and Slayer. She lives with her family near the ocean in San Diego, where she perpetually lurks in the shadows. Visit Kiersten online at KierstenWhite.com and follow @KierstenWhite on Twitter.
					</p>
					<form action="" >
						<input type="number" min="0" max="15" placeholder="select quantity" style="width: 150px;" name="qty">
						<br>
						<button type="submit" name="add-to-cart" value="27545" class="button">Add to cart</button>
					</form>
					<?php 

						include "dbconnection.php";
						if(isset($_REQUEST["add-to-cart"])){
							$bname = "SLAYER" ;
							$bprice =  28.13 ;
							$qty = $_REQUEST["qty"];
							$sql = "INSERT INTO cart (bname, bprice, qty) VALUES ('$bname', '$bprice', '$qty')";
							$stmt1=$con->prepare($sql);
							$stmt1->execute();
							}				
						?>

					
				</div>
			</div>

		</div>
	</div>
</section>

<script src="https://use.fontawesome.com/a6f0361695.js"></script>

<h2 id="fh2">WE APPRECIATE YOUR REVIEW!</h2>
<h3 id="fh6">Your review will help us to improve our web hosting quality products, and customer services.</h3>


<form id="feedback" action="">
  <div class="pinfo">Your personal info</div>
  
<div class="form-group">
  <div class="col-md-6 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user"></i></span>
  <input  name="name" placeholder="John Doe" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <div class="col-md-6 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input name="email" type="email" class="form-control" placeholder="john.doe@yahoo.com">
     </div>
  </div>
</div>



 <div class="pinfo">Rate our overall services.</div>
  

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-heart"></i></span>
   <select class="form-control" id="rate" name="select">
      <option value="1star">1</option>
      <option value="2stars">2</option>
      <option value="3stars">3</option>
      <option value="4stars">4</option>
      <option value="5stars">5</option>
    </select>
    </div>
  </div>
</div>
<br>
 <div class="pinfo">Write your feedback.</div>
  

<div class="form-group">
  <div class="col-md-12 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
  <textarea class="form-control" id="review" rows="3" name="rev"></textarea>
 
    </div>
  </div>
</div>

 <button type="submit" name="submit" class="btn btn-primary" style="width:150px ; font-size:20px ; margin-left:40%">Submit</button>

</form>

<?php 


	if(isset($_REQUEST["submit"])){
    	$name =  $_REQUEST["name"] ;
		$email = $_REQUEST["email"];
		$option = $_REQUEST["select"];
		$review = $_REQUEST["rev"];
		$sql = "INSERT INTO review (name, email, rate,feedback) VALUES ('$name', '$email', '$option','$review')";
		$stmt1=$con->prepare($sql);
		$stmt1->execute();
}



?>

<section class="footer" id="ftr">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> admin login </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> buyer login </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> register </a>
        
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +94-11-456-7890 </a>
            <a href="#"> <i class="fas fa-envelope"></i> info@bookstall.com </a>

        </div>
        
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"> <span>bookstall.lk</span> | all rights reserved! </div>

</section>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>

</body>
</html>	