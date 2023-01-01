<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbn= "project";

$conn= new mysqli($servername, $username, $password, $dbn);
if($conn->connect_error){
	die("Connection Failed". $conn->connect_error);
}

else{
	echo "Connection successful<br>";
}

$name = $_POST["name"];
$state = $_POST["state"];
$pin = $_POST["pin"];
$nos_bed = $_POST["nos_bed"];
$email = $_POST["email"];
$mci = $_POST["mci_reg"];
$category=$_POST["type"];
$nos_branch = $_POST["nos_branch"];
$staff = $_POST["staff"];
$add = $_POST["address"];
$pswd=$_POST["password"];
$cpswd=$_POST["confirm_password"];

$d = date('Y-m-d H:i:s');
// function Add(){
	$sql = "INSERT INTO hospital VALUES('$name','$state','$pin','$nos_bed','$email','$mci','$category','$nos_branch','$staff','$add','$pswd','$cpswd','$d')";
	// $sql = "DELETE FROM donor WHERE pin_code = '834008' ";
    if(mysqli_query($conn, $sql)){
       header("Location:success.html");

		// echo nl2br("\n$id\n $firstname\n ");
	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}

// }
// function Search(){
	// $id2= $_REQUEST['id2'];
	// $sql2= "SELECT * FROM user WHERE id='$id2' ";
	// $result= $conn->query($sql2);
	// if ($result->num_rows > 0) {
	// 	// output data of each row
	// 	while($row = $result->fetch_assoc()) {
	// 	  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. "<br>";
	// 	}
	// } 
	// else {
	// 	echo "0 results";
	// }

	// $id3= $_REQUEST['id3'];
	// $sql4= "SELECT * FROM user WHERE id='$id3' ";
	// $result2= $conn->query($sql4);
	// if ($result2->num_rows > 0){

	// 	$sql3= "DELETE FROM user WHERE id= '$id3' ";
	// 	$res= $conn->query($sql3);
	// 	echo "Id exists<br>Id deleted<br>";
		
	// }
	// else{
	// 	echo "Enter a valid id to search<br>";
	// }
	
// }
mysqli_close($conn);

?>