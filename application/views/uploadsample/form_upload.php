<html>
<head>
<title>Demo Upload File</title>
</head>
<body>
	<?php echo $error;?>
	<?php echo form_open_multipart('uploadsample/proses_upload');?>
	Judul: <br />
	<input type="text" name="judul" size = "30" /> <br/><br/>
Upload Filenya : <br /><br />
<input type="file" name="userfile" size="20" />
<br /><br />
<input type="submit" value="upload" />
</form>
</body>
</html>