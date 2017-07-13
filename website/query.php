<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
echo $txt = $_POST["query"];
echo '<br>';

 $db = mysqli_connect("localhost","user1","password", "tgp");
 if($db->connect_errno > 0){
	 die("Unable to connect to database [" . $db->connect_error . "]");
 }
 if($db->connect_errno == 0){
	 echo "connection is good<br />";
 }

if (mysqli_query($db, $txt)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}
 
 mysqli_close($db);
	}
	else{
		echo "Choose a file to upload";
	}
?>