<?php
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];
$conn =  mysqli_connect('localhost','root','','Register');
if ($conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into anire(UserName, Password)values(?, ?,)");
    $stmt->bind_param("ss",$UserName, $Password);
    if(!$stmt->execute())echo $stmt->error;
    echo "Registeration Successfully .....";

    $stmt->close();
    $conn->close();
}
?><br><br>
    Back To Log in<br><br>
    <h3><?php echo "Welcome". 
$YourName."!";?></h3>
    Back To Log in<br><br>
<a href=../appe.php><input type=button class="auth-btn" value='Login'></a><br>

