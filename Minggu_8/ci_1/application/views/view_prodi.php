<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="" cellspacing="0">
	<tr>
		<td>No</td>
		<td>Prodi</td>
		<td>Keterangan</td>
	</tr>
<?php $nomer=1; foreach ($Mahasiswa as $row) {  ?>

	
	<TR>
		<td><?php echo $nomer; ?></td>
		<TD><?php  echo $row['prodi'];?></TD>
		<TD><?php  echo $row['keterangan'];?></TD>
	</TR>
	<?php $nomer++; ?>
<?php } ?>

</table>
</body>
</html>