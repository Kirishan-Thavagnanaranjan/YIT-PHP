<!DOCTYPE html>
<html>
<head>
<title>Employees</title>
</head>
<body>
<?php
 $employees = [
 "Kirishan" => [
	"January" => 100000,
	"February" => 30000,
	"March" => 20000,
	"April"=> 40000,
	"May" => 40000,
	"June" => 24000,
	"July"=> 50000,
	"August" => 60000,
	"September" => 540000,
	"October" => 500000
	],
	
 "Kirishanth" =>[
	"April"=> 40000,
	"May" => 40000,
	"June" => 24000,
	"July"=> 50000,
	"August" => 60000,
	"September" => 54000,
	"October" => 54000,
	"November" => 60000,
	"December" =>50000
	
	],
	
 "Lilaniya" => [ 
	"January" => 10000,
	"February" => 30000,
	"March" => 20000,
	"April"=> 40000,
	"May" => 40000,
	"June" => 24000,
	"July"=> 50000,
	"November" => 60000,
	"December" =>50000
	]
	]
?>
<?php $months=["January","February","March","April","May","June","July","August","September","October","November","December"]; 
		function calTax($total){
			if ($total>1000000){
				return $total*0.08 ;
			}
			else {
				return $total *0.03;
			}
		}
		
		function calNetTotal($total,$tax){
			return $total - $tax ;
		}
?>

<table border=1>
	<tr>
		<th>Employee Name</th>
		<?php for($i=0; $i<12; $i++){ ?>
		<th><?php echo $months[$i] ?></th>
		<?php } ?>
		<th>Total</th>
		<th>Tax</th>
		<th>Net Total</th>
	</tr>
	<?php
	$monthlyTotal = array_fill_keys($months,0);
	foreach($employees as $name => $salaryArr){ 
		$total= 0;?>
	<tr>
		<td><?php echo $name ?> </td>
		<?php foreach($months as $m){?>
		<td> 
			<?php 
			$salary = isset($salaryArr[$m])? $salaryArr[$m] : 0;
			echo $salary;
			?>
		</td>
		<?php $total += $salary; 
		$monthlyTotal[$m] += $salary; } ?>
		<td> <?php echo $total ?> </td>
		<td><?php $tax = calTax($total); echo $tax;  ?></td>
		<td><?php echo calNetTotal($total,$tax) ?></td>
		
	</tr>
	
	<?php } ?>
	<tr>
		<td>Total expense</td>
		<?php
			$grandTotal = 0;
			foreach($months as $m){?>
		<td> <?php echo $monthlyTotal[$m]; ?> </td>
			<?php 
			$grandTotal += $monthlyTotal[$m];} ?>
		<td colspan=3><?php echo $grandTotal?></td>
		
	</tr>
	
</table>
</body>
</html>