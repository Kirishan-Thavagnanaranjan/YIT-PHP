<!DOCTYPE html>
<html>
<head>
<title>save</title>
</head>
<body>

<?php
//print_r($_POST);
?>
<table border=1>
<?php foreach ($_POST as $key => $values){?>
	<tr>
	<td><?php echo $key; ?></td>
	<td><?php echo $values; ?></td>
	<tr>
<?php } ?>
</table>

</body>
</html>