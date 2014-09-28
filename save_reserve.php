
<?php
include ("connect.php");

			
			$query=pg_query("INSERT INTO form_reserve (nameuser,subject,namepresident,people,amount,select_reserve,datefrom,dateto,timefrom,timeto,description) 
			VALUES ('".$_POST["nameuser_db"]."','".$_POST["subject_db"]."','".$_POST["namepresident_db"]."'
			,'".$_POST["people_db"]."','".$_POST["amount_db"]."','".$_POST["select_reserve_db"]."','".$_POST["datefrom_db"]."',
			'".$POST["dateto_db"]."','".$_POST["timefrom_db"]."','".$_POST["timeto_db"]."','".$_POST["description_db"]."')");
		if($query){
				echo "Add Profile Complete";
			}else{
				echo "error";
			}
		
?>

