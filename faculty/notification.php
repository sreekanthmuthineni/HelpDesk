<?php 
$q=mysqli_query($conn,"select * from notice where user='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any notice for You !!!</h2>";
}
else
{
?>
<h2>All Notification</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>From</th>
		<th>Subject</th>
		<th>Details</th>
		<th>Date</th>
				<th>Replay</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['user1']."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['Description']."</td>";
echo "<td>".$row['Date']."</td>";

$i++;

?>
<?php
echo "<Td><a href='index.php?page=response&id=".$row['user1']."' style='color:blue'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
}

		?>
		
</table>
<?php }?>