<?php
require_once('config.php');

$sql = "SELECT * FROM register where id='".$_GET['id']."'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
      <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div class="heding">
	<div class="h2">
			View User
		</div>
    
 
<?php
      while($row = mysqli_fetch_array($result))
      {
?>
<br>
<div class="view_table">
  <div class="tr">
    <tr>
        <label for ="name">Name</label>
        <td><?php echo $row['name'];?></td><br>
        
        <br><label for="city">City</label>
        <td><?php echo $row['city'];?></td><br><br>
        
        <label for ="gender">Gender</label>
        <td><?php echo $row['gender'];?></td><br>
    </tr>
</div>
    
<?php 
}     
?>
  </table><br>
  <div class="back">
  <input type="button" value="Back" class="btn btn-primary" onclick="history.back()">
</div>
</div>
</body>
</html>
