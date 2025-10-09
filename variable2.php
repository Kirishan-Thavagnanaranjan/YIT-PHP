<?php
$fName = "Kirishan";
$lName = "Thavagnanaranjan";
$grade = "10A";
$nic = 200235500119;
$address  =" 47 milk board road , Thirunelvely";
$isBool = true;
?>


<?php

// Echo ("<h1><center>Student Information </h1></center>
// <hr>
// <b>First Name</b> : <i> $fName</i></br>
// <b>Last Name </b> : <i> $lName </i><br>
// <b>Grade</b> : <i>$grade</i></br>
// <b>NIC Number</b> : <i>$nic </i></br>
// <b>Address </b>: <i> $address</i>
// <hr>

// <b> MY full name is {$fName} {$lName}<br></b>

// ");
// ?>
<!--
<style>
tr:nth-child(even){
	background-color : #D6EEEE ; 
}
table{
	align : center;
}
</style>

<table border = "2">
<tr>
<th colspan = "2" >
<center>Student Information</center>
</th>
</tr>
<tr>
<td><b>First Name</b></td>  <td><i> <?php echo $fName; ?></i></td>
</tr>
<tr>
<td><b>Last Name </b> </td> <td> <i><?php echo $lName; ?></i></td>
</tr>
<tr>
<td><b>Grade</b></td>  <td><i><?php echo $grade; ?></i></td>
</tr>
<tr>
<td><b>NIC Number</b></td> <td> <i><?php echo $nic; ?></i></td>
<tr>
<td><b>Address </b> </td> <td><i><?php echo $address; ?></i></td>
</tr>
</table>
-->



<?php

var_dump($nic);
$nic = (string)$nic;
var_dump($nic);
echo "<br>";

var_dump ($isBool);
$isBool = (int)$isBool;
var_dump ($isBool);



// echo $isBool;
// echo "<br>";
// echo var_dump($isBool);
// echo "<br>";
// echo gettype($isBool);
//
 ?>