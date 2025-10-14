<!DOCTYPE html>
<html>
<head>
<title>Function</title>
</head>
<body>
<?php function getName1(){
	echo "my name is Kirishan";
}

function getName2($name){
	echo "my name is " . $name;
}

function getName3($fName,$lName){
	return ($fName . $lName);
}
	
function sum(...$num){
	print_r($num);
}


$getName4 = function($name){
	echo "my name is ".$name;
};

$getName5 = fn($name)=> "my name is ".$name;

$sum1 = function($num1,$num2){
	return $num1+$num2;
};

$sum2 =fn($num1,$num2) => $num1+$num2;

function getStudent(...$name){
	return $name;
}


?>

<?php getName1();?><br/>
<?php getName2("Kirish"); ?> <br>
<?php echo getName3("Kiri","Shan");?> <br/>
<?php  sum(10,20,30);?><br/>
<?php $getName4("Kirishann");?><br/>
<?php echo $sum1(10,20);?><br/>
<?php echo $sum2(10,20);?><br/>
<?php echo $getName5("Kirishann");?>
<?php echo getStudent("Kirishann","kiri","shan");?>
</body>

</html>
