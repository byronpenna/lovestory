<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php $this->load->view("parts/universalInclude.php") ?>
	<!-- estilos -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("resources/css/index/style.css") ?> >
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("resources/css/index/media.css") ?> >
	<!-- scripts -->
		<script type="text/javascript" src=<?php echo base_url("resources/js/index/script.js") ?> ></script>
		<script type="text/javascript" src=<?php echo base_url("resources/js/index/functions.js") ?> ></script>
</head>
<body>
	<div class = "container">
		<div class="wrapper">
			<form action=<?php echo site_url("welcome/login") ?> method="post" name="Login_Form" class="form-signin">       
			    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
				  <hr class="colorgraph"><br>
				  
				  <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />
				  <input type="password" class="form-control" name="Pass" placeholder="Password" required=""/>     		  
				 
				  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
				  <a href=<?php echo site_url("welcome/register") ?> class="btn btn-lg btn-success btn-block" >Login</button>  			
			</form>			
		</div>
	</div>
</body>
</html>