<?php 
$u = trim($_POST['username']);
$p = trim($_POST['passwd']);



if($u == 'linhx' && $p == '123456'){
	echo "Dang nhap thanh cong";
	header('Location: index.php');
	
}
 ?>