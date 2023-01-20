<?php

	$id_buku = $_GET['id_buku'];

	$sql = $koneksi->query("select * from tb_buku where id_buku='$id_buku'");

	$tampil = $sql->fetch_assoc();

	$tahun2 = $tampil['tahun_terbit'];

	$lokasi = $tampil['lokasi'];
?>

<div class="panel panel-default">
<div class="panel-heading">
		Ubah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            
            <form method="POST" >
                <div class="form-group">
                    <label>No Induk</label>
                    <input class="form-control" name="no_induk" value="<?php echo $tampil['no_induk'];?>" />
                    
                </div>

                <div class="form-group">
                    <label>Judul</label>
                    <input class="form-control" name="judul" value="<?php echo $tampil['judul'];?>" />
                    
                </div>

                <div class="form-group">
                    <label>Asal</label>
                    <input class="form-control" name="asal" value="<?php echo $tampil['asal'];?>" />
                    
                </div>

                <div class="form-group">
                    <label>Edisi</label>
                    <input class="form-control" type="number" name="edisi" value="<?php echo $tampil['edisi'];?>" />
                    
                </div>

                <div class="form-group">
                    <label>Pengarang</label>
                    <input class="form-control" name="pengarang" value="<?php echo $tampil['pengarang'];?>" />
                    
                </div>

                <div class="form-group">
                    <label>Penerbit</label>
                    <input class="form-control" name="penerbit" value="<?php echo $tampil['penerbit'];?>" />
                    
                </div>

                <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <input class="form-control" name="tanggal_masuk" value="<?php echo $tampil['tanggal_masuk'];?>" />
                    
                </div>

                 <div class="form-group">
                    <label>Tahun Terbit</label>
                    <select class="form-control" name="tahun">
                        <?php

                        	$tahun = date("Y");

                        	for ($i=$tahun-29; $i <= $tahun; $i++) { 
                        		
                        			if ($i==$tahun2 ) {

                        			echo'<option value="'.$i.'" selected>'.$i.'</option>';

                        			}else{


                        			echo'<option value="'.$i.'">'.$i.'</option>';
									}			
                        		
                        	
                        	}

                        ?>
                    </select>
                </div>

                 <div class="form-group">
                    <label>Jilid</label>
                    <input class="form-control" type="number" name="jilid" value="<?php echo $tampil['jilid'];?>" />
                    
                </div>

                <div class="form-group">
                    <label>ISBN</label>
                    <input class="form-control" name="isbn" value="<?php echo $tampil['isbn'];?>" />
                    
                </div>

                <div class="form-group">
                    <label>Jumlah Buku</label>
                    <input class="form-control" type="number" name="jumlah" value="<?php echo $tampil['jumlah_buku'];?>" />
                    
                </div>

                <div class="form-group">
                    <label> Lokasi</label>
                    <select class="form-control" name="lokasi">
                        <?php
                            $query = $koneksi->query("SELECT * FROM tb_lokasi ORDER by id_lokasi");
                            
                            while ($lokasi=$query->fetch_assoc()) {
                                echo "<option value='$lokasi[lokasi]'>$lokasi[lokasi]</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Bahasa</label>
                    <input class="form-control" name="bahasa" value="<?php echo $tampil['bahasa'];?>" />
                    
                </div>

                <div>
                	
                	<input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
                </div>
         </div>

         </form>
      </div>
 </div>  
 </div>  
 </div>


 <?php

 	$no_induk = $_POST['no_induk'];
    $judul = $_POST ['judul'];
    $asal = $_POST['asal'];
    $edisi = $_POST['edisi'];
    $pengarang = $_POST ['pengarang'];
    $penerbit = $_POST ['penerbit'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $tahun = $_POST ['tahun'];
    $jilid = $_POST['jilid'];
    $isbn = $_POST ['isbn'];
    $jumlah = $_POST ['jumlah'];
    $lokasi = $_POST ['lokasi'];
    $bahasa = $_POST['bahasa'];

 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
 		
 		$sql = $koneksi->query("UPDATE `tb_buku` SET `no_induk`='$no_induk', `judul`='$judul', `asal`='$asal', `edisi`='$edisi', `pengarang`='$pengarang', `penerbit`='$penerbit', `tanggal_masuk`='$tanggal_masuk', `tahun_terbit`='$tahun', `jilid`='$jilid', `isbn`='$isbn', `jumlah_buku`='$jumlah', `lokasi`='$lokasi', `bahasa`='$bahasa'
            where `id_buku`='$id_buku'");

 		if ($sql) {
 			?>
 				<script type="text/javascript">
 					
 					alert ("Ubah Berhasil Disimpan");
 					window.location.href="?page=buku";

 				</script>
 			<?php
 		}
 	}

 ?>
                             
                             

