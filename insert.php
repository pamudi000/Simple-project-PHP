<link rel="stylesheet" type="text/css" href="index.css">
<?php
require_once('config.php');

	if (isset($_POST['add']))
	 {
	 	$name = $_POST['name'];
	 	$city_name = $_POST['city_name'];
	 	$gender = $_POST['gender'];


	 	$sql = "insert into register (name,city,gender) values('$name','$city_name','$gender')";

            if ($conn->query($sql)) {
               printf("User inserted successfully.<br />");
               header('Location: index.php');
            }
            if ($conn->errno) {
               printf("Could not insert data into table: %s<br />", $conn→error);
            }
            $conn→close();


	
	

}
 
?>
