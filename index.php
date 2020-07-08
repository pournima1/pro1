<?php
     
     include('db/db.php');
     ?>


<!DOCTYPE html>
<html>
<head>
	<title>MrualBooks</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/d356863b83.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
	<style type="text/css">
		body{
			background-color: grey;
		}
		.box{
			width: 95%;
			height: 380px;
			background-color: white; 
			margin-left: 5px;
			margin-top: -300px
		}
		.header-box-bottom{
			width: 100%;
			height: 10px;
			background-color: white; 
		}	
		.grid-container {
			  display: grid;
			  grid-template-columns: auto auto ;
			  /*background-color: #2196F3;*/
			  padding: 5px;
			}
			.grid-item {
			  /*background-color: rgba(255, 255, 255, 0.8);
			  border: 1px solid rgba(0, 0, 0, 0.8);*/
			  padding: 15px;
			  font-size: 13px;
			  text-align: center;
			}
		.header-name{
			margin-top: 15px;
		 	
		}
		.slider-img{
			width: 100%;
		}
		.img-slider{
			width: 100%;
		}
		.book-img{
			width: 70px;
			height: 100px;
			margin-top: 10px;
		}
		.view_all_link{
				margin-top: 20px;
				text-decoration: none;
				margin-left: 10px;

			}
		.view_all_link:hover{			
				text-decoration: none;

			}
	
		.mobile_view{
				display: none;
			}
		.menu-bar{
			background: white;
			text-align: center;
		}
		.menu-bar ul{
			display: inline-flex;
			list-style: none;
			color: black;
		}
		.menu-bar ul li{
			width: 120px;
			padding: 15px;
			margin: 15px;
		}
		.menu-bar ul li a{
			text-decoration: none;
			color: black;
		}
		.active,.menu-bar ul li:hover
		{
			background: blue;
			border-radius: 3px;


		}
		.sub-menu-1{
			display: none;
		}
		.menu-bar ul li:hover .sub-menu-1{
			display: block;
			position: absolute;
			background: blue;
			margin-top:15px;
			margin-left: -15px;
		}
		.menu-bar ul li:hover .sub-menu-1 ul
		{
			display: block;
			margin: 10px;
		}
        



        .product_box2{
			width:100%;
			height: 300px;
			background-color: white;
			margin-top: 20px;


		}

		
/*Mobile View*/

		@media only screen and (max-width: 600px) {

			.mobile_view{
				display: block;
			}
			.web_view{
				display: none;
			}
		} 


			
/*Tab View*/

		@media only screen and (max-width: 800px) {

			.mobile_view{
				display: block;
			}
			.web_view{
				display: none;
			}
		}


		.header-box_mobile{
			width: 100%;
			height: 60px;
			background-color: #eb7722;
		}
		.footer{
			width: 100%;
			height: 60px;
			background-color: #eb7722;
			bottom: 0;
			position: fixed;
		}
		.icon-bar{
			color: white;
			font-size: 20px;
			line-height: 60px;
		}
		.app_name{
			color: white;
			line-height: 60px;
			font-size: 18px;

		}	
		.image{
			width: 100%;
			height: 150px;
		}	
		.product_box1{
			width:100%;
			height: 380px;
			background-color: white;
			margin-top: 5px;
		}
		.mobile_product_img{
			width:70px;
			height: 120px;
			

		}
		.new_updated_product{
			width: 100%;
			height: 80px;
			background-color: white;
		}

		.menu-bar{
			background: white;
			text-align: center;
		}
		.menu-bar ul{
			display: inline-flex;
			list-style: none;
			color: black;
		}
		.menu-bar ul li{
			width: 120px;
			margin: 15px;
			padding: 15px;
		}
		.menu-bar ul li a{
			text-decoration: none;
			color: black;
		}
		.active,.menu-bar ul li:hover
		{
			background: blue;
			border-radius: 3px;
		}
		.sub-menu-1{
			display: none;
		}
		.menu-bar ul li:hover .sub-menu-1
		{
			display: block;
			position: absolute;
			background: blue;
			margin-top: 15px;
			margin-left: -15px;
		}
		.menu-bar ul li:hover .sub-menu-1 ul
		{
			display: block;
			margin: 10px;
		}

		

	</style>

<div class="mobile_view">
	<center>
	<div class="header-box_mobile">
		<div class="container">
			<div class="row">
				<div class="col-1">
					<i style="margin-top: 15px;"class="fas fa-bars icon-bar"></i>
				</div>
				<div class="col">
					<label class="app_name">App Name
					</label>
				</div>
				<div class="col-2">
					<a style="margin-top: 15px;"href="pages/cart.php">
					<i style="margin-top: 15px;" class="fas fa-cart-plus icon-bar"></i></a>
					
			    </div>
				
			</div>
			
		</div>
		

	</div>




<div class="menu-bar">
	<ul>
		<li class="active"><a href="#">Books</a></li>
		<li><a href="#">MPSC</a></li>
		<li><a href="#">UPSC</a></li>
		<li><a href="#">Magazine</a></li>
		<li><a href="#">Bank Exam</a></li>
		<li><a href="#">Stationary</a></li>
	</ul>
</div>


	<div class="Mobile_Image">
		<img class="image" src="img/4.jpg">
	</div>
	<div class="new_updated_product">
		
	</div>
	<div class="product_box1">
		<div class="grid-container">

			<?php
			$sql = "SELECT * FROM product Where status='1' order by product_id desc LIMIT 4";

			$result = mysqli_query($conn,$sql);

			if(mysqli_num_rows($result) > 0){
				foreach ($result as $row ) {
					$product_id = $row['product_id'];
					$product_name = $row['product_name'];
					$product_rate = $row['product_rate'];
					$product_img = $row['product_img'];
					?>


			<form action="php/add_to_cart.php"
			 method="POST">
			    <div class="grid-item">
				<img class="mobile_product_img" src="img/book_img/<?= $row['product_img']?>"><br>
				<label><?php echo $row['product_name'] ?></label><br>
				<b><label>&#x20b9;.<?=$row['product_rate']?></label></b><br>

				<input type="hidden" class="product_id" name="product_id"
				value="<?=$product_id?>">

				<input type="hidden" class="product_img" name="product_img" value="<?=$product_img?>">
				<input type="hidden" class="product_name" name="product_name" value="<?=$product_name?>">
				<input type="hidden" class="product_rate" name="product_rate" value="<?=$product_rate?>">





				<!--<button class="btn btn-info add_to_cart">Add to Cart</button>--->
				<input type="submit" class="btn btn-info" name="submit" value="Add to Cart">

			</div>
		</form>
					<?php
				}
			}
			?>











<!---

			<div class="grid-item">
				<img class="mobile_product_img" src="img/book_img/HISTORY.jpg"><br>
				<label>Book Name</label><br>
				<b><label>&#x20b9;220</label></b>	
			

			<div class="grid-item">
				<img class="mobile_product_img" src="img/book_img/HISTORY.jpg"><br>
				<label>Book Name</label><br>
				<b><label>&#X20B9;220</label></b>
			</div></div>

			<div class="grid-item">
				<img class="mobile_product_img" src="img/book_img/HISTORY.jpg"><br>
				<label>Book Name</label><br>
				<b><label>&#X20B9;220</label></b>

			<div class="grid-item">
				<img class="mobile_product_img" src="img/book_img/HISTORY.jpg"><br>
				<label>Book Name</label><br>
				<b><label>&#X20B9;220</label></b>
			</div>
			--->
			</div>
		</div>



	
	<div class="product_box1">
		<div class="container">
			
		</div>
	</div>

	<div class="footer">
		<div class="row">
			<div class="col">
				<i class="fas fa-home icon-bar"></i>
			</div>
			<div class="col">
				2
			</div>
			<div class="col">
				<i class="fas fa-user-cog icon-bar"></i>
			</div>
		</div>
	</div>
</div></center>

		


	</div>


























<div style="display: ;" class="web_view">



<div class="header-box">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 


  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>

<div class="menu-bar">
	<ul>
		<li class="active"><a href="#">Books</a></li>
			<div class="sub-menu-1">
				<ul>
					<li><a href="#">business</a></li>
					<li><a href="#">Art</a></li>
					<li><a href="#">School</a></li>
				</ul>
			</div>




		<li><a href="#">MPSC</a></li>

		<li><a href="#">UPSC</a></li>
		
		<li><a href="#">Magazine</a></li>
		
		<li><a href="#">Bank Exam</a></li>
		
		<li><a href="#">Stationary</a></li>
	</ul>
</div>


<div class="slider-img">
	<img class="img-slider"src="img/4.jpg">
</dir>






<center>
<div style="width: 95%;text-align: center;position: relative;margin-top: -180px;" class="">

<div class="row">
	
	<div class="col box">
		<h4 class="header-name">Upto 40%</h4>
		<br>

		<div class="row">
			<div class="col">
				<img class="book-img" src="img/book_img/HISTORY.jpg">

			</div>
			<div class="col">
				<img class="book-img" src="img/book_img/HISTORY.jpg">
			</div>
		</div>
		<div class="row">
			<div class="col">
				<img class="book-img" src="img/book_img/HISTORY.jpg">
				

			</div>
			

			<div class="col">
				<img class="book-img" src="img/book_img/HISTORY.jpg">
				

			</div>
		</div>

		<div style="margin-top: 10px;"class="row">
			<div class="col-5">
				<a class="view_all_link"
				href="#">View All</a>
			</div>

		</div>
	</div>



	
	<div class="col box">
		<h4 class="header-name">Upto 30%</h4>
		<br>
		
		<div class="row">
			<div class="col">
				<img class="book-img" src="img/book_img/fastrack maths.jpg">
			</div>
			<div class="col">
				<img class="book-img" src="img/book_img/fastrack maths.jpg">
			</div>
		</div>
		<div class="row">
			<div class="col">
				<img class="book-img" src="img/book_img/fastrack maths.jpg">
			</div>
			
			<div class="col">
				<img class="book-img" src="img/book_img/fastrack maths.jpg">
				</div>
	        </div>

	        <div style="margin-top: 10px;" class="row">
	        	<div class="col-5">
	        		<a class="view_all_link"
	        		href="#">View All</a>
	        	</div>
	        </div>
        </div>

	


	<div class="col box">
		<h4 class="header-name">Upcoming</h4>
		<br>

		<div class="row">
			<div class="col">
				<img class=
				"book-img" src="img/book_img/HANSA 400.jpg">
			</div>
			<div class="col">
				<img class="book-img" src="img/book_img/HANSA 400.jpg">
			</div>
		</div>
		<div class="row">
			<div class="col">
				<img class="book-img" src="img/book_img/HANSA 400.jpg">
			</div>
			<div class="col">
			<img class="book-img" src="img/book_img/HANSA 400.jpg">
		    </div>
		</div>

		<div style="margin-top: 10px;" class="row">
			<div class="col-5">
				<a class="view_all_link"href="#">View All</a>
			</div>
			
		</div>

	</div>

	
	<div class="col box">
		<h4 class="header-name">Offer</h4>
		<br>

		<div class="row">
			<div class="col">
				<img class=
				"book-img" src="img/book_img/HANSA 400.jpg">
			</div>
			<div class="col">
				<img class="book-img" src="img/book_img/HANSA 400.jpg">
			</div>
		</div>
		<div class="row">
			<div class="col">
				<img class="book-img" src="img/book_img/HANSA 400.jpg">
			</div>
			<div class="col">
			<img class="book-img" src="img/book_img/HANSA 400.jpg">
		    </div>
		</div>

		<div style="margin-top: 10px;" class="row">
			<div class="col-5">
				<a class="view_all_link"href="#">View All</a>
			</div>
			
		</div>

	</div>
	
</div>
</div>
</center>


<center>
	
<div style="width: 95%;text-align: left;position: relative;margin-top: 315px;" class="">
	<div class="row">
		<div class="col box">
			
		</div>
		
	




	</div>
	






</div>
</center>










</body>































































<div style="width: 100%;height: 200px;margin-top: 10px;">
	
</div>















<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>









</html>