<?php
function ex($s){
echo htmlspecialchars($s,ENT_COMPAT,'UTF-8');
}
session_start();
$id=$_SESSION['id'];

if(empty($id)){
	echo '请先登陆!';
exit;
}
$pwd=$_POST['pwd'];

?>
<body>
<?php ex($id);echo $id.'的密码已更改为'.$pwd;?>
