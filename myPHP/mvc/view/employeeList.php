<table>
	<?php
	//include './model/Model.php';
	foreach ($employees as $employee) {
		?>
	<tr>
		<td><?php echo $employee->id; ?></td>
		<td><?php echo $employee->name; ?></td>
		<td><?php echo $employee->salary; ?></td>
	</tr>
	<?php  	
	}
	 ?>
</table>