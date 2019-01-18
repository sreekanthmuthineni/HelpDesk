<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_notice.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from faculty");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any Notice found !!!</h2>";
}
else
{
?>
<h2 style="color:#00FFCC">All Notice</h2>

<table class="table table-bordered">
	<tr>
		<th colspan="7"><a href="index.php?page=add_faculty">Add New Manager</a></th>
	</tr>
	<Tr class="success">
		<th>Sr.No</th>
		<th>User Name</th>
		<th>Registration Id</th>
		<th>Mobile</th>
		<th>Gender</th>
		<th>Sent Queries</th>
		<th>Update profile</th>
				<th>Delete profile</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['gender']."</td>";

?>
<?php
echo "<Td><a href='index.php?page=response&id=".$row['email']."' style='color:blue'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "<Td><a href='index.php?page=update_notice&id=".$row['email']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo"<Td><a href='index.php?page=delete_user&id=".$row['email']."' style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>";
echo "</Tr>";
$i++;
}
?>
</table>
<?php }
?>