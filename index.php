<?php
require_once('config.php');

$sql = "SELECT * FROM register";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>
<div class="user_table">
    <h2>Users</h2>
    <div class="create-btn">
    <a href="add.php" class="btn btn-info" role="button">Create</a>
    </div>


    <div class="table">
  <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>City</th>
        <th>Gender</th>
        <th>action</th>
      </tr>

<?php
      while($row = mysqli_fetch_array($result))
      {
?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['city'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><a class="text-primary" href="view.php?id=<?php echo $row["id"]; ?>"<i class="fa fa-fw fa-edit"></i>View</a></td>
    </tr>
    
<?php 
}     
?>

</table>
</div>
</div>
</body>
</body>
</html>