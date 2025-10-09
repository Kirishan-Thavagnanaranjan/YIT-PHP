<html>
<head>
</head>
<body>
<?php
$a= [10,"Kirishan",10.7,true];
echo $a[2];
print_r($a);

echo  "<pre>";
print_r($a);
echo "</pre>";



$arrayLength = count($a);

//using for loop
for($i=0; $i<$arrayLength; $i++){
	echo $a[$i]."<br>";
};

//using while loop
$i = 0;
while($i<$arrayLength){
	echo $a[$i]."<br>";
	$i++;
}
?>


<!--In the html list tag-->
<ol>
<?php for($i=0; $i<$arrayLength; $i++){ ?>
	 <li> <?php echo $a[$i]; ?> </li>
<?php } ?>

</ol>


</body>
</html>