<?php
include ("connect.php");

			
			$query=pg_query("INSERT INTO form_fix (namefix,datefix,timefix,select_reserve,tool1,description1) 
			VALUES ('".$_POST["namefix_db"]."','".$_POST["datefix_db"]."','".$_POST["timefix_db"]."'
			,'".$_POST["select_reserve_db"]."','".$_POST["tool1_db"]."','".$_POST["description1_db"]."')");
		if($query){
				echo "Add Profile Complete";
			}else{
				echo "error";
			}
		
?>
