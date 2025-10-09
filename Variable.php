<html>
<head>
<title>
</title>
</head>
<body>
<?php
$fName = "Kirishan";
$lName = "Thavagnanaranjan";
$grade = "10A";
$nic = 200235500119;
$address  =" 47 milk board road , Thirunelvely";
Echo ("<h1><center>Student Information </h1></center>
<hr>
<b>First Name</b> : <i> $fName</i></br>
<b>Last Name </b> : <i> $lName </i><br>
<b>Grade</b> : <i>$grade</i></br>
<b>NIC Number</b> : <i>$nic </i></br>
<b>Address </b>: <i> $address</i>
<hr>

<b> MY full name is $fName $lName<br></b>

");
Echo " My full name is " .$fName.$lName."<br>";
Echo 'my name is $fName <br>'; 
Echo "My name is ", $fName,  $lName,"<br>";
print  "My name is <br>";
echo "MY full name is {$fName} {$lName}<br>";


$new = "Kiri";
$$new = "shan";
echo $new ,"<br>";
echo $Kiri ."<br>";
echo $$new . "<br>";


//know about data type 
echo "-------------------<br>";
var_dump ($fName);
echo "<br>";
echo gettype($lName);
echo "<br>";



//check all data types
$num = 10;
var_dump ($num);
echo "<br>";

$dNum = 10.5;
var_dump ($dNum);
echo "<br>";

$isBool = true;
echo $isBool;
echo "<br>";
echo var_dump($isBool);
echo "<br>";
echo gettype($isBool);
?>
</body>
</html>