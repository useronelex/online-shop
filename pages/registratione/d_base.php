<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
if ($_POST['']);
$file=fopen('mes.txt','a+');
fputs($file,$_POST['mes']);
fclose($file);
echo 'Успешно';
?>
</body>
</html>

