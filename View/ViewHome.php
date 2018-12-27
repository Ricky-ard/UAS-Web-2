<?php
	require_once('db.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<style>
body{width:615px;font-family:arial;letter-spacing:1px;line-height:20px;}
.tbl-qa{width: 100%;font-size:0.9em;background-color: #f5f5f5;}
.tbl-qa th.table-header {padding: 5px;text-align: left;padding:10px;}
.tbl-qa .table-row td {padding:10px;background-color: #FDFDFD;vertical-align:top;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
</style>
</head>
<body>
	<table>
		<tr>
			<td>
				<div style="text-align:right;margin:20px 0px;"><a href='indexbagian.php?' class="button_link"><img src="crud-icon/add.png" title="bagian" style="vertical-align:bottom;" />BAGIAN</a></div>
			</td>
			<td>
				<div style="text-align:right;margin:20px 0px;"><a href='indexjabatan.php?' class="button_link"><img src="crud-icon/add.png" title="jabatan" style="vertical-align:bottom;" />JABATAN</a></div>
			</td>
			<td>
				<div style="text-align:right;margin:20px 0px;"><a href='indexgolongan.php?' class="button_link"><img src="crud-icon/add.png" title="golongan" style="vertical-align:bottom;" />GOLONGAN</a></div>
			</td>
			<td>
				<div style="text-align:right;margin:20px 0px;"><a href='indexkaryawan.php?' class="button_link"><img src="crud-icon/add.png" title="karyawan" style="vertical-align:bottom;" />KARYAWAN</a></div>
			</td>
			<td>
				<div style="text-align:right;margin:20px 0px;"><a href='indexpenggajian.php?' class="button_link"><img src="crud-icon/add.png" title="penggajian" style="vertical-align:bottom;" />PENGGAJIAN</a></div>
			</td>
		</tr>

	</table>
</body>
</html>