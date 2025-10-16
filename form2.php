<!DOCTYPE html>
<html>
<head>
<title>check Form</title>
</head>
<body>


<form action="save.php" method="post" autocomplete="on">
<fieldset>
<table border="1">
	<tr>
		<th colspan="2">Student Registeration</th>
	</tr>
	<tr>
		<td><label for ="fname">First Name</label></td>
		<td><input type="text" name="fname" id="fname" placeholder="Enter your first name" value="<?php echo $_POST['fname']; ?>"></td>
	</tr>
	<tr>
		<td><label for="lname">Last Name</label></td>
		<td><input type="text" name="lname" id="lname" placeholder="Enter your last name" value="<?php echo $_POST['lname']; ?>"></td>
	</tr>
	<tr>
		<td><label >Gender</label></td>
		<td><input type="radio" name="gender" id="male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { echo "checked";} ?> value="Male" /><label for="male" >Male</label> 
		<input type="radio" name="gender" id="female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { echo "checked";} ?> value="Female"/><label for="female">Female</label> </td>
	</tr>
	<tr>
		<td ><label >Subjects</label></td>
		<td>
		<?php $subjects = $_POST['subject'];?>
			<input type="checkbox" name="subject[]" id="subject1" value="maths" <?php  if(in_array("maths",$subjects)){echo "checked";}?> /><label for="subject1">Math</label><br/>
			<input type="checkbox" name="subject[]" id="subject2" value="English" <?php  if(in_array("English",$subjects)){echo "checked";}?>/><label for="subject2">English</label><br/>
			<input type="checkbox" name="subject[]" id="subject3" value="Tamil" <?php  if(in_array("Tamil",$subjects)){echo "checked";}?>/><label for="subject3">Tamil</label>
		</td>
	</tr>
	<tr>
		<td><label for="grade">Grade</label></td>
		<td>
			<select id="grade" name="grade" required>
				<option value="">--Select Grade--</option>
				<option value="10A" <?php if($_POST['grade'] == "10A" ) {echo "selected";} ?>>10 A</option>
				<option value="10B" <?php if($_POST['grade'] == "10A" ) {echo "selected";} ?>>10 B</option>
			</select>
		</td>
	<tr>
		<td><label for="opt_subjects">Optional Subjects</label></td>
		<td><select id="opt_subjects" name="opt_subjects[]" multiple>
			<option value="drama">Drama</option>
			<option value="Tamil Literature">Tamil Literature</option>
			<option value="Music">Music</option>
			<option value="Art">Art</option>
			</select>
		</td>
	</tr>
	<tr>
		<td><label for="address">Address</label></td>
		<td><textarea id="address" name="address" placeholder="Enter your address" rows="3"><?php echo $_POST['address']; ?></textarea></td>
	</tr>
	<tr>
		<td><label for="ph_number">Phone Number</label></td>
		<td><input type="tel"  id="ph_number" name="ph_number" placeholder="Enter your phone number" value="<?php echo $_POST['ph_number']; ?>"></td>
	</tr>
	<tr>
		<td><label for="email">E-mail</label></td>
		<td><input type="email"  id="email" name="email" placeholder="example@gmail.com" value="<?php echo $_POST['email']; ?>"></td>
	</tr>
	<tr>
		<td><label for="dob">Date of birth</label></td>
		<td><input type="date"  id="dob" name="dob" value="<?php echo $_POST['dob']; ?>"></td>
	</tr>
	<tr>
		<td><label for="join_date">Join date</label></td>
		<td><input type="date"  id="join_date" name="join_date" value="<?php echo $_POST['join_date']; ?>"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="checkbox" name="terms" id="terms" value="true" <?php if($_POST['terms'] == true){echo "checked";}?>>
		<label for="terms">I accept the Terms and Conditions</label></td>
	</tr>
	<tr align="center">
		<td><input type="reset" value="reset"></td>
		<td><input type="submit" formtarget="_blank" value="Submit" ></td>
	</tr>

</table>
</fieldset>
</form>

</body>

</html>
