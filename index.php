<html>
<head>
	<meta charset="UTF-8" />
	<title>Class Member</title>
</head>
<link rel = "stylesheet" type="text/css" href="../test/css/bootstrap.css" />
<body>
<?php
include_once('Profile.php');

$obj=new Profile();
if(isset($_GET['del'])){
	//$obj->Del_Memble($_GET['del']); พิมผิดเยอะน่ะ
	echo $obj->Del_Member($_GET['del']);
}
?>
<div class="container">
		<div class="row-fluid">
		<h3>แสดงข้อมูลสมาชิก</h3>
		<?php
	foreach ($obj->Index() as $r){
	?>
		<div class='span3'>
		<div class='well'>
		<div class='pull-left'>User:<?php echo $r['mem_user'];?></div>
		<div class='pull-right'><?php echo $r['id']; ?></div>
			<hr />
			  <!--<a href='add_Profile.php?uid=".$r['id']."' class='btn btn-info'>Add Profile</a>&nbsp;-->
			<a href='add_Profile.php?uid=<?php echo $r['id']; ?>' class='btn btn-info'>Add Profile</a>&nbsp;		
			<a href="?del=<?php echo $r['id'];?>" class='btn btn-danger'>Delete</a>
			</div>
		</div>
		
	<?php				
	}
	?>
	
		</div>
	</div>
	
</body>
</html>

