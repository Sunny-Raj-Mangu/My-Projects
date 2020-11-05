<<?php 

$con = mysqli_connect('localhost','root');

if ($con) {
	echo "Connection Successful";
} else{
	echo "No Connnection";
}

mysqli_select_db($con, 'greenit');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into userinfordata (user, email, mobile, comments)
values ('$user', '$email', '$mobile', '$comments')";

echo "$query";

mysqli_query($con, $query);





 ?>