 <?php
include ("conn.php");
$user=$_POST['user'];
$title=$_POST['title'];
$content=$_POST['content'];

	if($_POST['submit']){
		$sql="insert into message(user,title,contnet,lastdate)values('".$user."','".$title."','".$content."','".date('Y-m-d H:i:s',time())."')";
		echo $sql;

		mysqli_query($conn,$sql);
	}
?>


