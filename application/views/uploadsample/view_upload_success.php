<html>
<head>
<title>Demo Upload File</title>
</head>
<body>
<h3>Proses Upload Berhasil !!!</h3>
<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
<p><?php echo anchor('uploadsample', 'Coba lagi !'); ?></p>
</body>
</html>