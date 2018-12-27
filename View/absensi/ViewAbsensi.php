<?php
	require_once('db.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR DATA KARYAWAN</title>
	<style>
body{width:615px;font-family:arial;letter-spacing:1px;line-height:20px;}
.tbl-qa{width: 100%;font-size:0.9em;background-color: #f5f5f5;}
.tbl-qa th.table-header {padding: 5px;text-align: left;padding:10px;}
.tbl-qa .table-row td {padding:10px;background-color: #FDFDFD;vertical-align:top;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
</style>
</head>
<body>
	<center>

	<div style="text-align:right;margin:20px 0px;"><a href='indexabsensi.php?insert=add' class="button_link"><img src="crud-icon/add.png" title="Add New Record" style="vertical-align:bottom;" /> simpan absensi</a></div>
<table class="tbl-qa">
  <thead>
	<tr>
	  <th class="table-header" width="20%">NIK</th>
	  <th class="table-header" width="40%">Nama Karyawan</th>
	  <th class="table-header" width="40%">Absensi</th>
	</tr>
  </thead>
  <tbody id="table-body">
	<?php
	foreach ($data as $row){
	?>
	  <tr class="table-row">
		<td><?php echo $row["nik"]; ?></td>
		<td><?php echo $row["nama_karyawan"]; ?></td>
		<td>
			<form action="/action_page.php" method="get">
 				<input type="checkbox" name="cek" value="cek"><br>
			</form>
		</td>
	  </tr>
    <?php
		}
		
	?>
  </tbody>
</table>
</center>
</body>
</html>