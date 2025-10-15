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
	<caption>Submitted student Information</caption>
	<tr>
		<td>Field</td>
		<td>Value</td>
	</tr>
<?php foreach ($_POST as $key => $values){?>
	<tr>
	<td><?php echo $key; ?></td>
	<?php if(is_array($values)){?>
	<td><?php echo implode(",",$values); ?></td><?php }
	else { ?>
	<td><?php echo $values; ?></td><?php }?>
	</tr>
<?php } ?>
</table>

</body>
</html>