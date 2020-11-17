<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
<div class="container">
<div class="row">
<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
	<div class="leftbar p-r-20 p-r-0-sm">
		<!--  --> 
<?php include('menu.php') ?>	

</div>
</div>

<div class="col-sm-6 col-sm-12-8 col-lg-9 p-b-50">

		

		<?php 
		//kalau ada transaksi tampilkan tabel
		if($header_transaksi) { 
		?>
		<table class="table table-hover table-sm" width="30%">
			<thead>
				<tr class="bg-light" >
					<th  style="text-align: center" >NO</th>
					<th  style="text-align: center">KODE</th>
					<th  style="text-align: center">TANGGAL</th>
					<th  style="text-align: center">ITEM</th>
					<th  style="text-align: center">ONGKIR</th>
					<th  style="text-align: center">TOTAL</th>
					<th  style="text-align: center">STATUS</th>
					<th  style="text-align: center">ACTION</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1; foreach($header_transaksi as $header_transaksi) { ?>
				<tr style="text-align: center">

					<td><?php echo $i ?></td>
					<td><?php echo $header_transaksi->kode_transaksi ?></td>
					<td><?php echo date('d-m-y',strtotime($header_transaksi->tgl_cekout)) ?></td>	
					<td><?php echo $header_transaksi->total_item ?></td>
					<td><?php echo number_format($header_transaksi->ongkir) ?></td>
					<td><?php echo number_format($header_transaksi->jumlah_transaksi) ?></td>
					<td><?php echo $header_transaksi->status_bayar ?></td>
									

						<div class="btn-group">
					<td>
							<a href="<?php echo base_url('dasbor/detail/' .$header_transaksi->kode_transaksi) ?> " 
							class="btn btn-default btn-sm"><i class="fa fa-eye"></i> Detail</a>

							<a href="<?php echo base_url('dasbor/konfirmasi/' .$header_transaksi->kode_transaksi) ?> " 
							class="btn btn-default btn-sm"><i class="fa fa-credit-card"></i> Pembayaran</a>		
						</div>
					</td>

				</tr>
				<?php $i++; } ?>
			</tbody>
		</table>

		<?php
		//jika belum ada tampilkan notifikasi
		}else{ 
		?>

			<p class="alert alert-warning">
				<i class="fa fa-warning"></i>Belum ada Transaksi
			</p>

		<?php } ?>

</div>
</div>
</div>
</section>
