<?php
class Inbox{

	public $user;
	public $pass;
	public $mem_id;
	public $new_pass;
	public $uid;
	public $date;
	public $num;

	function __construct(){

		$conn = pg_connect("host=localhost port=5432 dbname=reserve user=postgres password=15052536") or die(pg_last_error());
		
		//pg_query("SET NAME UTF8"); พิมตก & รูปแบบผิด
		
		pg_query("SET NAMES 'UTF8'");
		if(!$conn ){
			echo "not";
		}else{
			echo "test complate";
		}
}

	public function Index(){
		$query=pg_query('select * from member');
		while($row=pg_fetch_array($query)){
				$data[]=$row;
		}
		return $data;
	}

	public function Add_Member($user,$pass,$mem_id){
		if(isset($user)&& isset($pass)&&isset($mem_id)){
			$query1=pg_query("INSERT INTO member(mem_user,password,id)VALUES('$user','$pass','$mem_id');");
			if($query1){
				echo "ok";
			}else{
				echo "error";
			}
		}else{
			echo "Need User & pass";
		}
	}

	public function login_member($user,$pass,$mem_id){
		if(isset($user) && isset($pass)&&isset($mem_id)){
		$query2=pg_query("SELECT mem_user,password,id FROM member WHERE mem_user='$user' AND password='$pass' AND id='$mem_id'");
				if(pg_num_rows($query2)<= 0){
					return $data[]= "ERROR";
				}else{
					return $data[] = "login complate";
				}
		}else{
			return false;
		}
	}
	
	public function Edit_Member($user,$pass,$new_pass){
		if(isset($user) && isset($pass)&& isset($new_pass)){
			$query3=pg_query("SELECT mem_user,password FROM member WHERE mem_user='$user' AND password='$pass'");
			
			if(pg_num_rows($query3)<=0){
				return $data[]="no user";
			}else{
				$statsUpdate=pg_query("UPDATE member SET password='$new_pass' WHERE mem_user='$user'");
					if($statsUpdate){
						return $data[]="edit complete";
					}
			}
		}else{
			return false;
		}
	}
	
	public function Del_Member($uid){
		if(isset($uid)){
			
			$query=pg_query("DELETE FROM member WHERE id={$uid}");
			if($query){
				return "Delete Complete";
			}
		}else{
			return false;
		}
	}
		public function CheckUser($uid){
			if(isset($uid)){
				$query = pg_query("SELECT * FROM profile WHERE id='".$uid."'");
				$num=pg_query_num_rows($query);
					if ($num>0){
						return $num;
					}else{
						return false;
					}
				}
			}	
}
?>