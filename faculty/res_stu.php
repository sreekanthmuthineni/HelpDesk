<?php 
extract($_POST);
if(isset($add))
{

	if($details=="" || $sub=="" || $user=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		foreach($user as $v)
		{
mysqli_query($conn,"insert into notice values('','$v','{$_SESSION['admin']}','$sub','$details',now())");
		}
		
		$err="<font color='green'>Notice added Successfully</font>";	
	}
}
?>
<center><h2 style="color: blue">Response to Faculty</h2></center>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	<center>
	<div class="row">
		<div class="col-sm-4">Enter Subject</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Enter Details</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control" rows="10" cols="100"></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Select User</div>
		<div class="col-sm-5">
		<select name="user[]" multiple="multiple" class="form-control" required>
			<?php 

$sql=mysqli_query($conn,"select * from user where email='".$_GET['id']."'");

	while($r=mysqli_fetch_array($sql))
	{
		echo "<option value='".$r['email']."'>".$r['name']."</option>";
	}				?>
		</select>
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
			<center>
		<input type="submit" value="Add New Notice" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</center>
		</div>
	</div>
</center>
</form>	