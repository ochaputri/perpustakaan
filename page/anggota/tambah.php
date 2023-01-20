<script type="text/javascript">
    function validasi(form){
        if (form.nis.value=="") {
            alert("NIS Tidak Boleh Kosong");
            form.nis.focus();
            return(false);
        }if (form.nama.value=="") {
            alert("Nama Tidak Boleh Kosng");
            form.nama.focus();
            return(false);
        }if (form.tmpt_lahir.value=="") {
            alert("tempat Lahir Tidak Boleh Kosong");
            form.tmpt_lahir.focus();
            return(false);
        }if (form.kelas.value=="") {
            alert("Kelas Tidak Boleh Kosong");
            form.tmpt_lahir.focus();
            return(false);
        }if (form.tgl.value=="") {
            alert("Tanggal Tidak Boleh Kosong");
            form.tgl.focus();
            return(false);
        }
        return(true);
    }
</script>

<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data Anggota
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            
            <form method="POST" onsubmit="return validasi(this)">
                <div class="form-group">
                    <label>NIS</label>
                    <input class="form-control" name="nis" id="nis" />
                    
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" id="nama" />
                    
                </div>

                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" name="tmpt_lahir" id="tmpt_lahir" />
                    
                </div>

                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="date" name="tgl_lahir" id="tgl" />
                    
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label><br/>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="l" name="jk"  /> Laki-laki
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="p" name="jk"  /> Perempuan
                    </label>
                    
                    
                </div>

                 <div class="form-group">
                    <label> Kelas</label>
                    <select class="form-control" name="kelas">
                        <option> == Pilih Kelas ==</option>
                        <option value="VIIA">VIIA</option>
                        <option value="VIIB">VIIB</option>
                        <option value="VIIC">VIIC</option>
                        <option value="VIID">VIID</option>
                        <option value="VIIE">VIIE</option>
                        <option value="VIIF">VIIF</option>
                        <option value="VIIG">VIIG</option>

                        <option value="VIIIA">VIIIA</option>
                        <option value="VIIIB">VIIIB</option>
                        <option value="VIIIC">VIIIC</option>
                        <option value="VIIID">VIIID</option>
                        <option value="VIIIE">VIIIE</option>
                        <option value="VIIIF">VIIIF</option>
                        <option value="VIIIG">VIIIG</option>

                        <option value="IXA">IXA</option>
                        <option value="IXB">IXB</option>
                        <option value="IXC">IXC</option>
                        <option value="IXD">IXD</option>
                        <option value="IXE">IXE</option>
                        <option value="IXF">IXF</option>
                        <option value="IXG">IXG</option>
                    </select>
                </div>

                <div>
                	
                	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
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
 		
 		$sql = $koneksi->query("insert into tb_anggota (nis, nama, tempat_lahir, tgl_lahir, jk, kelas )values('$nis', '$nama', '$tmpt_lahir', '$tgl_lahir', '$jk', '$kelas')");

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
                             
                             

