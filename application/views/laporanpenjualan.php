<!DOCTYPE html>
<html lang="en" dir="ltr"><head>
    <meta charset="utf-8">
    <title></title>
    <link href="<?= base_url('asset/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <style media="screen">
    .table1 {
  font-family: sans-serif;
  color: #444;
  border-collapse: collapse;
  width: 50%;
  border: 1px solid #f2f5f7;
}

.table1 tr th{
  background: #35A9DB;
  color: #fff;
  font-weight: normal;
  width: 80px;
}

.table1, th, td {
  padding: 8px 20px;
  text-align: center;
}

.table1 tr:hover {
  background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
  background-color: #f2f2f2;
}
  	</style>
  </head><body>

<?php
$i = 0;
$total = 0;
// var_dump($query);die;
 ?>
<h1 align="center">Bukit Waruwangi</h1>
<h1 align="center">Laporan Penjualan Pada Bulan <?= $bulan ?> tahun <?= $tahun ?></h1><br><br>

   <div class="tabel">
   	<table class="table1">
   			<tr>
   				<th width="15px">No</th>
          <th width="15px">Id Pesanan</th>
          <th width="100px">Tanggal Pesan</th>
   				<th width="60px">Nama Pelanggan</th>
          <th width="30px">BANK</th>
          <th width="100px">Total</th>
   			</tr>
        <?php foreach ($query as $key): ?>
          <?php
          $i++;
          $total += $key['total_bayar']; ?>
   			<tr>
   				<td><?= $i; ?></td>
          <td><?= $key['order_id']; ?></td>
          <td><?= substr($key['tgl_pesan'], 0, 10)  ?></td>
   				<td><?= $key['nama_pelanggan']; ?></td>
          <td><?= $key['bank']; ?></td>
          <td>Rp. <?= $key['total_bayar']; ?></td>
   			</tr>
      <?php endforeach; ?>

        <tr align ="right">
          <td colspan="2">JUMLAH KESELURUHAN</td>
          <td colspan="4">Rp. <?= $total; ?></td>
        </tr>
   		</table>
   </div>


  </body></html>
