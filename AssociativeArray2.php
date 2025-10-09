<!DOCTYPE html>
<html>
<head>
<title>Student marks</title>
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

<table border="1">
	<tr>
		<th>Student Name</th>
		<th>Maths</th>
		<th>Tamil</th>
		<th>Science</th>
		<th>Total</th>
		<th>Average</th>
	</tr>
		
		<?php foreach($marks as $name => $subjects ){ 
		$total = 0;
		$avg = 0;
		?>
			<tr>
				<td><?php echo $name; ?> </td>
				 <?php foreach ($subjects as $subject => $mark) { ?>
					<td><?php  echo $mark; ?> </td>
					<?php $total = $total +$mark; ?>
					<?php } ?>
					<td> <?php echo $total ?> </td>
					<?php $avg = $total/count($subjects);?>
					<td><?php echo round($avg,2); ?></td>
				
				
			</tr>
		<?php } ?>
		
	

</table>
	
	
	
	
	
	
	
	
	
</body>
</html>