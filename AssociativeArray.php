<!DOCTYPE html>
<html>
<head>
<title>
</title>
<style>
table{
	border-style : dotted;
	border-color : red;
	border-radius:5px;
	border-collapse :collapse;
	width:600px;
}
th,td{
	padding:10px;
}

	
</style>
</head>
<body>
<?php 
$student =[
"firstName" => "Kirishan",
"lastName" => "Thavagnanaranjan",
"age" => 23,
"nic" => "200235500119"
];

?>


<table border="1" >
	<tr>
		<th>column</th> <th>values</th>
	</tr>
	<tr>
		<td>First Name</td> <td> <?php echo $student["firstName"]; ?> </td> 
	</tr>
	<tr>
		<td>Last Name</td> <td> <?php echo $student["lastName"]; ?> </td> 
	</tr>
	<tr>
		<td>Age</td> <td> <?php echo $student["age"]; ?> </td> 
	</tr>
	<tr>
		<td>NIC</td> <td> <?php echo $student["nic"]; ?> </td> 
	</tr>
</table>
<br/>

<?php 
foreach($student as $key => $values){
	echo $key ." " .$values."<br>";
}
?>
	
	
<table border="1">
	<tr>
		<th>Keys</th> <th>Values</th>
	</tr>

	<?php 
	foreach ($student as $key =>$values){ ?>
		<tr>
			<td><?php echo $key ?></td><td><?php echo $values ?></td>
		</tr>
	<?php } ?>
		
</table>
<br/>


<?php 
	$marks= [
		[70,90,40],
		[50,60,70],
		[10,20,30],
		[70,50,40],
		[76,20,40]
		];
		?>

<table border="1">
	<tr>
		<th>Mark1</th><th>Mark2</th><th>Mark3</th><th>Total</th><th>Average</th>
	</tr>
	<?php
	$arraySize = count($marks);
	for($i=0; $i<$arraySize; $i++){ 	
	$total =0;?>
		<tr>
			<?php  
				$size = count($marks[$i]);
				for($j=0; $j<$size;$j++){ ?>
					<td><?php echo $marks[$i][$j];?></td>
					<?php $total = $total +$marks[$i][$j]; ?>					
				<?php } ?>
				<td> <?php echo $total ?> </td>
				<?php $average = $total/$size; ?>
				<td> <?php echo round($average,2) ?> </td>
		</tr>
	<?php } ?>
			
</table>
</body>
</html>