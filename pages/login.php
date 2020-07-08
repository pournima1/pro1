<?php

include('../db/db.php');
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
	.white{
    color:#000;
    background-color:#fff;
}

.btn-facebook {
    color: #ffffff;
    -webkit-text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    background-color: #2b4b90;
    *background-color: #133783;
    background-image: -moz-linear-gradient(top, #3b5998, #133783);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#3b5998), to(#133783));
    background-image: -webkit-linear-gradient(top, #3b5998, #133783);
    background-image: -o-linear-gradient(top, #3b5998, #133783);
    background-image: linear-gradient(to bottom, #3b5998, #133783);
    background-repeat: repeat-x;
    border-color: #133783 #133783 #091b40;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3b5998', endColorstr='#ff133783', GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

    .btn-facebook:hover,
    .btn-facebook:focus,
    .btn-facebook:active,
    .btn-facebook.active,
    .btn-facebook.disabled,
    .btn-facebook[disabled] {
        color: #ffffff;
        background-color: #133783 !important;
        *background-color: #102e6d !important;
    }

    .btn-facebook:active,
    .btn-facebook.active {
        background-color: #0d2456 \9 !important;
    }
</style>



<div class="login_section">
<div class="container">
    <div class="row">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Login via site</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="yourmail@example.com" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
                      <hr/>
                    <center><h4>OR</h4></center>
                    <button onclick="Sign_up()" class="btn btn-lg btn-facebook btn-block">Sign Up</button>


                   
			    </div>
			</div>
		</div>
	</div>
</div>
</div>




<div style="display: none;" class="register_section">
<div class="container">
    <div class="row">

    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Registration via site</h3>
			 	</div>
			 	
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" class="register_form" method="POST">
                    <fieldset>
                    	<div class="form-group">
			    		    <input class="form-control mobile" placeholder="Enter Mobile No" name="mobile" type="text">
			    		</div>

			    		<div class="form-group">
			    		    <input class="form-control name" placeholder="Enter Your Name" name="name" type="text">
			    		</div>


			    	  	<div class="form-group">
			    		    <input class="form-control email" placeholder="yourmail@example.com" name="email" type="text">
			    		</div>

			    		<div class="form-group">
			    			<input class="form-control password" placeholder="Enter Password" name="password" type="password" value="">
			    		</div>

			    		<div class="form-group">
			    			<input class="form-control conf_password" placeholder="Confirm Password" name="conf_password" type="password" value="">
			    		</div>

			    		<input class="btn btn-lg btn-success btn-block register_form_btn" name="register" type="submit" value="Register">
			    	</fieldset>
			      	</form>
                      <hr/>
                    <center><h4>OR</h4></center>
                   
                    Already Register ? <a href="#" onclick="login()">Login</a>
			    </div>
			</div>
		</div>
	</div>
</div>
</div>






















<script type="text/javascript">
	function Sign_up(){
		$('.register_section').show();
		$('.login_section').hide();
	}

	function login(){
		$('.register_section').hide();
		$('.login_section').show();
	}


$(document).ready(function(){
$('.register_form_btn').click(function(e){
e.preventDefault();


var $form = $(this).closest(".register_form");

var mobile = $form.find(".mobile").val();
var name = $form.find(".name").val();
var email = $form.find(".email").val();
var password = $form.find(".password").val();
var conf_password = $form.find(".conf_password").val();

if (password !== conf_password) {
	alert("Password Do not Matched");
}

console.log(mobile);


$.ajax({
	url:'register.php',
	method:'POST',
	data:{mobile:mobile, name:name, email:email, conf_password:conf_password},

	success:function(response){
		if (response == 1) {
			alert("Registration Success");
		}
		else{
			alert("Sorry");
		}
	}
})







})


})















</script>

