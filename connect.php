<?php 

$connect = pg_connect("host=localhost port=5432 password=15052536 user=postgres dbname=reserve") or die(pg_last_error());

		if(!$connect ){
		echo "not";
		}
		else{
		echo "เชื่อมต่อผ่าน";
		}
		  pg_close($connection);
		?>