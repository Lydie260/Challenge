<?php


$Names = $_POST['Names'];
$Email = $_POST['Email'];
$ID= $_POST['ID'];
$Number = $_POST['Number'];



//Database connection
$conn = mysqli_connect('localhost','root','','vote');
if($conn->connect_error){
die('Connection Failed : '.$conn->connect_error);
}else{
$stmt = $conn->prepare("insert into cand(Names,Email,ID,Number,Minister,Senator) values(?,?,?,?,?,?)");
$stmt->bind_param("ssisss",$Names,$SEmail,$ID,$Number,$Minister,$Senator);
$stmt->execute();
echo "registration submitted Successfully...";
$stmt->close();
$conn->close();
}
?>
<a href="registration.php" target="_blank">Back</a><br><br>
