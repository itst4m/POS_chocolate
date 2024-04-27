<script>
	document.title="Tambah Barang";
	document.getElementById('barang').classList.add('active');
	
</script>

<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Tambah Barang</h3>
				<form class="form-input" method="post" action="handler.php?action=tambah_barang">
					<input type="text" name="no_po" placeholder="No PO" required="required">
					<input type="text" name="tanggal_po" placeholder="Tanggal PO" required="required">
					<input type="text" name="pembuat_po" placeholder="Pembuat PO" required="required" >
					<input type="text" name="nama_barang" placeholder="Nama Barang" required="required">
					<input type="number" name="harga_barang" placeholder="Harga Barang" id="harga" value="<?php echo $_POST["harga_barang"]?>" required="required">
					<input type="number" name="jumlah_barang" placeholder="Jumlah Barang" id="jumlah" value="<?php echo $_POST["jumlah_barang"]?>" required="required">

					<?php
					$harga_barang=$_POST["$harga_barang"];
					$jumlah_barang=$_POST["$jumlah_barang"];
					$perkalian = $harga_barang*$jumlah_barang;
					
					?>

					<button class="btnblue"   onclick="ens()"  value="hasil"> Proses</button>
					<input type="number" id="total" name="total_po" placeholder="Total PO" required="required" readonly>
					<select style="width: 372px;cursor: pointer;" required="required" name="kategori">
						<option value="">Payment :</option>
						<option value="">Done</option>
						<option value="">Pending</option>
					</select>
					<select style="width: 372px;cursor: pointer;" required="required" name="kategori">
						<option value="">Keterangan :</option>
						<option value="">Done</option>
						<option value="">Pending</option>
					</select>
					<button class="btnblue"type="submit"><i class="fa fa-save"></i> Simpan</button>
					<a href="barang.php" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
				</form>
			</div>
		</div>
	</div>
	<script>
			function ens(){
		var j = document.getElementById("harga").value * document.getElementById("jumlah").value
		document.getElementById("total").value = j
		console.log(j)
		}
	</script>
</div>
