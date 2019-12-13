<?php  $con=mysqli_connect("localhost","root","","calling"); ?>
<html>
<head>
	<title></title>
</head>
<body style="margin:auto;">
	<table align="center" border="1" width="400">
		<tr>
			<td>Sr.No</td>
			<td>Team</td>
			<td>Sip</td>
		</tr>
		<?php
			$i=1;
			$qry=mysqli_query($con,"select * from table1");
			while($row=mysqli_fetch_array($qry))
			{
				extract($row);
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $team; ?></td>
				<td><?php echo $slot_no; ?></td>
			</tr>
			<?php
			$i++;
			}
		?>
	</table>
	<form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
</body>
</html>