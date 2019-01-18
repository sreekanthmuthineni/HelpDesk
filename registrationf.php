<?php 
require('connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
//dob

//image
$imageName=$_FILES['img']['name'];


//encrypt your password


$query="insert into request values('','$e','$n','$mob','$imageName,now())";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'>Registration successfull !!</font>";
}
}
?>
<h2>Registration Form</h2>
		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
							<tr>
					<td>Enter Your Registration Id</td>
					<Td><input type="text"  class="form-control" name="e" required/></td>
				</tr>
								<tr>
					<td>Enter Your Email</td>
					<Td><input  type="email"  class="form-control" name="n" required/></td>
				</tr>
								<tr>
					<td>Enter Your Mobile </td>
					<Td><input  class="form-control" type="number" name="mob" required/></td>
				</tr>

				<tr>
					<td>Choose Valid Identity </td>
					<Td><input class="form-control" type="file" name="img" required/></td>
				</tr>
				<td>Select Department</td>
					<Td>
					CSE<input type="radio" name="hob[]" value="m1" required/>
				IT<input type="radio" name="hob[]" value="f1"/>	
				ECE<input type="radio" name="hob[]" value="m2" required/>
				EEE<input type="radio" name="hob[]" value="f2"/>	
				MECHANICAL<input type="radio" name="hob[]" value="m3" required/>
				CIVIL<input type="radio" name="hob[]" value="f3"/>	
				
					</td>
				</tr>
				
				
	
				<tr>					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Send" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>