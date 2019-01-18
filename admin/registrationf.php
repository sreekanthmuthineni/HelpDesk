<?php 
require('connection.php');
extract($_POST);
if(isset($save))
{
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
$dob=$yy."-".$mm."-".$dd;
$hob=implode(",",$hob);
$imageName=$_FILES['img']['name'];
$pass=md5($p);
$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);
$query="insert into Faculty values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);
mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);
$err="<font color='blue'>Registration successfull !!</font>";
}
}
?>
<h2 style="color:blue" >Faculty Registration Form</h2>
		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Email</td>
					<Td><input  type="email"  class="form-control" name="n" required/></td>
				</tr>
				<tr>
					<td>Enter Registration Id</td>
					<Td><input type="text"  class="form-control" name="e" required/></td>
				</tr>
				
				<tr>
					<td>Enter Password </td>
					<Td><input type="password"  class="form-control" name="p" required/></td>
				</tr>
				
				<tr>
					<td>Enter  Mobile Number</td>
					<Td><input  class="form-control" type="number" name="mob" required/></td>
				</tr>
				
				<tr>
					<td>Select Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="m" required/>
				Female<input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
				
				<tr>
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
					<td>Upload Image </td>
					<Td><input class="form-control" type="file" name="img"/></td>
				</tr>
				
				<tr>
					<td>Enter Your DOB</td>
					<Td>
					<select name="yy" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="dd" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					</select>
					</td>
				</tr>
				<tr>					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Save" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>