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
$email = $_POST["email"];
$state = $_POST["state"];
$mob=$_POST["mob"];


// header("Location:https://www.formget.com/app/");
// function Add(){
	$sql = "INSERT INTO volunteer VALUES('$name','$email','$state','$mob')";
	// $sql = "DELETE FROM donor WHERE pin_code = '834008' ";
    if(mysqli_query($conn, $sql)){
       header("Location:success3.html");

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