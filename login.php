<?php  
$DbLogin = new MySqlConn;  
$dbconn = pg_connect("host=localhost port=5432 dbname=reserve user=postgres password=15052536");
if (isset($_POST['login'])) {  
  
$data = array(  
    'username' => $_POST['username'],  
    'password' => $_POST['password'],  
);  
  
$DbLogin->where($data, 'and');  
$num = $DbLogin->num_rows('members');  
if ($num > 0) {  
    echo '<font color="blue">ไชโย Login สำเร็จแล้ว....</font>';  
}  
else {  
    echo 'อ้าว!.. Username หรือ Password ไม่ถูกต้องนะ';  
}  
  
}  
?>