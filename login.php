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
    echo '<font color="blue">��� Login ���������....</font>';  
}  
else {  
    echo '����!.. Username ���� Password ���١��ͧ��';  
}  
  
}  
?>