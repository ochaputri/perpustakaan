<?php
	

	$nis = $_GET['id'];

	$sql = $koneksi->query("select * from tb_anggota where nis = '$nis'");

	$tampil = $sql->fetch_assoc();

    $jkl = $tampil['jk'];
    $kelas = $tampil['kelas'];


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
                    <label>NIS</label>
                    <input class="form-control" name="nis" value="<?php echo $tampil['nis']?>" readonly/>
                    
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" value="<?php echo $tampil['nama']?>"/>
                    
                </div>

                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" name="tmpt_lahir" value="<?php echo $tampil['tempat_lahir']?>" />
                    
                </div>

                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir']?>"  />
                    
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label><br/>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="l" name="jk" <?php echo($jkl==l)?"checked":"";?> /> Laki-laki
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="p" name="jk" <?php echo($jkl==p)?"checked":""; ?> /> Perempuan
                    </label>
                    
                    
                </div>

                <div class="form-group">
                <label> Kelas</label>
                <select class="form-control" name="kelas">
                    <option value="VIIA" <?php if ($kelas=='VIIA') {echo "selected";} ?>>VIIA</option>
                    <option value="VIIB" <?php if ($kelas=='VIIB') {echo "selected";} ?>>VIIB</option>
                    <option value="VIIC" <?php if ($kelas=='VIIC') {echo "selected";} ?>>VIIC</option>
                    <option value="VIID" <?php if ($kelas=='VIID') {echo "selected";} ?>>VIID</option>
                    <option value="VIIE" <?php if ($kelas=='VIIE') {echo "selected";} ?>>VIIE</option>
                    <option value="VIIF" <?php if ($kelas=='VIIF') {echo "selected";} ?>>VIIF</option>
                    <option value="VIIG" <?php if ($kelas=='VIIG') {echo "selected";} ?>>VIIG</option>
                    <option value="VIIIA"<?php if ($kelas=='VIIIA') {echo "selected";} ?>>VIIIA</option>
                    <option value="VIIIB"<?php if ($kelas=='VIIIB') {echo "selected";} ?>>VIIIB</option>
                    <option value="VIIIC"<?php if ($kelas=='VIIIC') {echo "selected";} ?>>VIIIC</option>
                    <option value="VIIID"<?php if ($kelas=='VIIID') {echo "selected";} ?>>VIIID</option>
                    <option value="VIIIE"<?php if ($kelas=='VIIIE') {echo "selected";} ?>>VIIIE</option>
                    <option value="VIIIF"<?php if ($kelas=='VIIIF') {echo "selected";} ?>>VIIIF</option>
                    <option value="VIIIG"<?php if ($kelas=='VIIIG') {echo "selected";} ?>>VIIIG</option>
                    <option value="IXA"<?php if ($kelas=='IXA') {echo "selected";} ?>>IXA</option>
                    <option value="IXB"<?php if ($kelas=='IXB') {echo "selected";} ?>>IXB</option>
                    <option value="IXC"<?php if ($kelas=='IXC') {echo "selected";} ?>>IXC</option>
                    <option value="IXD"<?php if ($kelas=='IXD') {echo "selected";} ?>>IXD</option>
                    <option value="IXE"<?php if ($kelas=='IXE') {echo "selected";} ?>>IXE</option>
                    <option value="IXF"<?php if ($kelas=='IXF') {echo "selected";} ?>>IXF</option>
                    <option value="IXG"<?php if ($kelas=='IXG') {echo "selected";} ?>>IXG</option>
                </select>
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

 	$nis = $_POST ['nis'];
 	$nama = $_POST ['nama'];
 	$tmpt_lahir = $_POST ['tmpt_lahir'];
 	$tgl_lahir = $_POST ['tgl_lahir'];
 	$jk = $_POST ['jk'];
 	$kelas = $_POST ['kelas'];
 	
 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
 		
 		$sql = $koneksi->query("update  tb_anggota set nama='$nama', tempat_lahir='$tmpt_lahir', tgl_lahir='$tgl_lahir', jk='$jk', kelas='$kelas' where nis='$nis' ");
 		if ($sql) {
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Disimpan");
 					window.location.href="?page=anggota";

 				</script>
 			<?php
 		}
 	}

 ?>
                             
                             

