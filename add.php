<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div class="wrapper">
		<div class="h2">
			Add User
		</div>
		<div class="form">
			<form  action="insert.php" method="POST">
			<div class="input_field">
				<label for="name">Name</label>
  				<input  type="text" id="name" name="name"><br>
				<label for="city">City</label>
  				<input  type="text" id="city_name" name="city_name" >
  				<div class="option">
    			<label for ="Gender">Gender</label>
    			<select name="gender">
     			<option value="male">Male</option>
      			<option value="female">Female</option>
      		</select>
      
       </div>
       		<div class="input_field">
       			<div class="save">
       		<button type="submit" name="add" class="btn btn-primary">Save</button>
       	</div>
		</div>
	</div>
</form>
</div>
</div>

</body>
</html>