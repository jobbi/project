<html>
<head>
	<meta charset="UTF-8" />
	<title>Add Profile</title>
</head>
<link rel = "stylesheet" type="text/css" href="../test/css/bootstrap.css" />
<body>

<?php
include_once('Profile.php');
include_once('inbox.php');
$obj=new Profile;
	//if(isset($_POST['submit'])&&isset($_GET['id'])){
		if(isset($_POST['submit'])&&isset($_GET['uid'])){
			if(isset($_POST)){
			echo $obj->add_Profile($_POST['name'],$_POST['age'],$_POST['email'],$_GET['uid']);
			//echo $obj->add_Profile($_POST['name'],$_POST['age'],$_POST['email']);
			//echo $_GET['uid'];
		}	
	}
?>
<div class="container">
		<div class="row-fluid">
			<div class="well">
		<h3>เพิ่มข้อมูล</h3>
			
			 <form action='#' method="post" /> 
				<label for="Name">name</label>
				<input type="text" name="name" />
				<label for="age">age</label>
				<input type="text" name="age" />
				<label for="email">email</label>
				<input type="text" name="email" />
				<br />
				<input type="submit" name="submit" value="Add Profile" class="btn btn-info" />
			</form>
		</div>	
		</div>
	</div>
</body>
</html>