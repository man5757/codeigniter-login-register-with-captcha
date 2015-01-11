<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<style>
		#box{
			width: 400px;
			background-color: #fff;
			margin-top:20px;
			margin-left:15%; 
			border-radius: 1em;
			box-shadow: 5px 5px 10px #888888;
			width:70em;
			padding:1em 1em 1em 1em;
		  }

		  #footer {
			text-align: center;
			padding: 1em 0;
			color: #f95252;
			font-weight: bold;
			text-shadow: 1px 1px 0px #fff;
		}
</style>
	   <title>Simple Login with CodeIgniter</title>
	   <link href="<?php echo base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"></link>
	</head>
	<body style="background:  #F7BC54;">
		<div id="box" class="container-fluid">
		<p></p>
			
			<h2>Welcome to members area, <?php echo $username; ?>!</h2>
			<p><a href="home/logout">Logout</a></p>
			<p id="footer">&copy; 2014 | Babatope Shokunbi - C0642703 </p>
		</div>
	</body>
</html>