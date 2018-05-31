<?php
	$con   = mysqli_connect("localhost","root","","db_tokojual");
	$query =mysqli_query($con,"select * from tmp_transaksi");
	$data  =mysqli_fetch_array($query);	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan FStore</title>
</head>
<body>
<form method="post">
	<table border="1px" align="center">
		<tr>
			<td>
				<div class="utama">
					<table align="center">
						<tr>
							<td width="7%" rowspan="3" align="center" valign="top">
							</td>
							<td width="93%" valign="bottom">&nbsp;FStore</td>
						</tr>
						<tr>
							<td colspan="2">Jl. Mayjen HE SUKMA</td>
						</tr>
					</table>
					<table width="500" border="1">
						<tr>
							<th>Kode Transaksi</th>
							<th>Tanggal Pembelian</th>
							<th>Total</th>     
						</tr>
						<?php
							@$sql = "SELECT * FROM transaksi";
							@$query = mysqli_query(@$con, @$sql);
							while (@$data = mysqli_fetch_array($query)) {
						?>
						<tr>
							<td align="center"><?= $data['kd_transaksi']?></td>
							<td><?= $data['tgl_pembelian']?></td>
							<td><?= $data['total']?></td>
						</tr>
						<?php } ?>
					</table>
					<table width="100%">
						<tr><td><hr></td></tr>
					</table>
					<table align="center">
						<tr>
							<td>
								&copy;<?php echo date('Y');?>FStore
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
	</table>
</form> 
</body>
</html>