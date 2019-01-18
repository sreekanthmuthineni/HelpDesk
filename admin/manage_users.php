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
$q=mysqli_query($conn,"select * from notice where user='admin@gmail.com'");
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
		<th colspan="7"><a href="index.php?page=res">Sent Queries</a></th>
	</tr>
	<Tr class="success">
		<th>Sr.No</th>
		<th>User Name</th>
		<th>From</th>
		<th>Subject</th>
		<th>Discription</th>
		<th>Replay</th>
	</Tr>
		<?php 
$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['user']."</td>";
echo "<td>".$row['user1']."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['Description']."<br/>"."</td>";
?>
<?php
echo "<Td><a href='index.php?page=response&id=".$row['user1']."' style='color:blue'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
?>
</table>
<?php }
?>