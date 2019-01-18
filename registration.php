<?php 
require('connection.php');
extract($_POST);
$imageName=$_FILES['img']['name'];
$query="insert into request values('','$n','$e','$mob',$imageName,now())";
mysqli_query($conn,$query);
mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'>Request Sent successfull !!<br/>If You Sent Valid Details Username&password Send to Your Mail</font>";


?>
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