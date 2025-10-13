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
}?>

<?php getName1();?><br/>
<?php getName2("Kirish"); ?> <br>
<?php echo getName3("Kiri","Shan");?> 

</body>

</html>
