<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	img {
  	display: block;
  	margin-left: auto;
  	margin-right: auto;
	}
</style>
</head>
<body>
     <form action="login.php" method="post">
     	<div class="imgcontainer">
    		<img src="download.png" alt="Avatar" class="avatar"
    		style="vertical-align:top;
            width:300px;
            height:300px;
            border: solid 1px #CCC"/>
  		</div>
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>