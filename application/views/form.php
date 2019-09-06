<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add User</title>
</head>
<body>
	<?php echo form_open('crud/save_customer'); ?>
		<div>Name: <input type="text" name="txtName" /></div><br>
		<div>Phone: <input type="text" name="txtPhone" /></div><br>
		<div>Address: <input type="text" name="txtAddress" /></div><br>
		<input type="submit" value="submit" />
	</form>
</body>
</html>