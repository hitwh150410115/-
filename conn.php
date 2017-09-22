<!-- 连接数据库 -->
<?php
	$conn=mysqli_connect('localhost','root','123456','weibo');
	if($conn->connect_error)
	{
		die("连接失败：".$conn->connect_error);
	}
	mysqli_query($conn,"set naems 'utf8'");
?>
