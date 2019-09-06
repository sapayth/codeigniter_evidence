<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload Success</title>
</head>
<body>
	<h2>Upload Success</h2>
	<ul>
		<?php foreach ($upload_data as $item => $value) : ?>
			<li><?php echo $item; ?>: <?php echo $value; ?></li>
		<?php endforeach; ?>
	</ul>
	<p><?php echo anchor('Upload', 'Upload another file'); ?></p>
</body>
</html>