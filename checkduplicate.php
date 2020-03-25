<?php
//	echo '<script>alert("inside checkduplicate")</script>'; 
	include 'connect.php';
	if(isset($_POST['username'])){
//		echo '<script>alert("got username as data")</script>'; 
		$username = $_POST['username'];
		$query = "select count(*) as cntuser from gauransh_user where name='".$username."'";
		$result = mysqli_query($conn,$query);
		$response  = "<span style='color:green;'>Available</span>";
		if(mysqli_num_rows($result)){
//			echo '<script>alert("username exist")</script>'; 
			$row = mysqli_fetch_array($result);
			$count = $row['cntuser'];
			if($count>0){
				$response = "<span style='color:red;'>Not Available</span>";
				}
}
echo $response;
exit();
}
?>