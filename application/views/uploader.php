<html>
	<head>
		<title>Upload Form</title>
	</head>
	<body>
		<br>
		<br>
		<?php echo form_open_multipart('admin/uploader');?>
		
		<input type="file" name="userfile" size="20" />

		<br /><br />

		<input type="submit" value="upload" />

		<?php echo form_close(); ?>

	</body>
</html>