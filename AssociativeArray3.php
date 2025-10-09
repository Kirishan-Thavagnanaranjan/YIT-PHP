<!DOCTYPE html>
<html>
<head>
<title>Student Marks</title>
<style>
table,td{
	width:25%;
}
</style>
</head>
<body>
<?php
$marks = [
	"kirishan" => [
		"maths" => 70,
		"Tamil" => 80,
		"science" => 90
		],
		
	"kirishanth" => [
		"maths" => 60,
		"Tamil" => 70,
		"science" => 80
		],
		
	"Lilaniya" => [
		"maths" => 90,
		"Tamil" => 75,
		"science" => 85
		],
		
	"Rakini" => [
		"maths" => 40,
		"Tamil" => 85,
		"science" => 88
		],
		
	"Ranjan" => [
		"maths" => 78,
		"Tamil" => 98,
		"science" => 86
		]
	];
?>


<?php foreach($marks as $name => $subjects){
	$total = 0;
	$avg = 0 ;?>
	<table border = "1" >
		<tr>
			<th colspan ="2">
				<?php echo $name;?>
			</th>
		</tr>
		
		<?php foreach($subjects as $subject => $mark){ ?>
		<tr>
			<td> <?php echo $subject; ?></td> 
			<td> <?php echo $mark; ?></td>
		</tr>
		<?php $total = $total + $mark; ?>
		<?php } ?>
		<tr>
			<td>Total</td>
			<td><?php echo $total ?></td>
		</tr>
		<?php $avg = $total/count($subjects);?>
		<tr>
			<td>Average</td>
			<td><?php echo round($avg,2) ?></td>
		</tr>
		
		
		
	</table>
	<br/>
		
<?php } ?>














</body>
</html>