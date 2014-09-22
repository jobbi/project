<?php
include_once('Inbox.php');
class Profile extends Inbox{
public $name;
public $age;
public $email;
public $id;

	public function __construct(){
		parent::__construct();
	}
	public function ShowProfile($uid){
		if($this->CheckUser($uid)>0){
			echo "xx";
		}
	}
	public function Add_profile($name,$age,$email,$id){
		if(isset($name)&&isset($age)&&isset($email)&&isset($id)){
			$query=pg_query("INSERT INTO profile (name,age,email,id) VALUES('$name','$age','$email','$id')");
			if($query){
				return"Add Profile Complete";
			}else{
				return "error";
			}
		}	
	}
}
?>