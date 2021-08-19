<?php 
	require('connection.inc.php');
    require('functions.inc.php');

	$name = get_safe_value($conn,$_POST['name']);
	$email = get_safe_value($conn,$_POST['email']);
	$mobile = get_safe_value($conn,$_POST['mobile']);
	$subject = get_safe_value($conn,$_POST['subject']);
	$message = get_safe_value($conn,$_POST['message']);
	$com_time = date('Y-m-d h:i:s');
	
	$sql = "insert into contact_us(name,email,mobile,subject,message,com_time) 
	values('$name','$email','$mobile','$subject','$message','$com_time')";
	$res = mysqli_query($conn, $sql);
	echo "Successfully Inserted Data.";
	//echo "insert";
?>