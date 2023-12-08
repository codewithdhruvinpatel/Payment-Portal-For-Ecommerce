<?php
	$invoice = $_POST['invoice'];
	$date = $_POST['date'];
	$fname = $_POST['fname'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$item = $_POST['item'];
    $company = $_POST['company'];
    $payment = $_POST['payment'];
    $dn = $_POST['dn'];
	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>