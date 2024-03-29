<script type="text/javascript" >
    function validasi(form){
        if (form.judul.value=="") {
            alert("Judul Tidak Boleh Kosong");
            form.judul.focus();
            return (false);
        }if (form.pengarang.value=="") {
            alert("Pengarang Tidak Boleh Kosong");
            form.pengarang.focus();
            return(false);
        }if (form.penerbit.value=="") {
            alert("Penerbit Tidak Boleh Kosong");
            form.penerbit.focus();
            return(false);
        }if (form.isbn.value=="") {
            alert("ISBN Tidak Boleh Kosong");
            form.isbn.focus();
            return(false);
        }if (form.jumlah.value=="") {
            alert("Jumlah Buku Tidak Boleh Kosong");
            form.jumlah.focus();
            return(false);
        }if (form.asal.value=="") {
            alert("Jumlah Buku Tidak Boleh Kosong");
            form.asal.focus();
            return(false);
        }if (form.edisi.value=="") {
            alert("Jumlah Buku Tidak Boleh Kosong");
            form.edisi.focus();
            return(false);
        }if (form.tanggal_masuk.value=="") {
            alert("Jumlah Buku Tidak Boleh Kosong");
            form.tanggal_masuk.focus();
            return(false);
        }if (form.jilid.value=="") {
            alert("Jumlah Buku Tidak Boleh Kosong");
            form.jilid.focus();
            return(false);
        }if (form.bahasa.value=="") {
            alert("Jumlah Buku Tidak Boleh Kosong");
            form.bahasa.focus();
            return(false);

        return(true);
    }
</script>

<div class="panel panel-default">
<div class="panel-heading">
        Tambah Data Buku
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            
            <form method="POST" onsubmit="return validasi(this)" >
                <div class="form-group">
                    <label>No Induk</label>
                    <input class="form-control" name="no_induk" id="no_induk" />
                    
                </div>
                <div class="form-group">
                    <label>Judul</label>
                    <input class="form-control" name="judul" id="judul" />
                    
                </div>

                <div class="form-group">
                <label> Asal</label>
                <select class="form-control" name="asal">
                    <option>== Pilih ==</option>
                    <option>B</option>
                    <option>H</option>
                    <option>P</option>
                    <option>TR</option>
                </select>

                <div class="form-group">
                    <label>Edisi</label>
                    <input class="form-control" type="number" name="edisi" id="edisi" />
                    
                </div>

                <div class="form-group">
                    <label>Pengarang</label>
                    <input class="form-control" name="pengarang" id="pengrang" />
                    
                </div>

                <div class="form-group">
                    <label>Penerbit</label>
                    <input class="form-control" name="penerbit" id="penerbit" />
                    
                </div>

                <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <input class="form-control" name="tanggal_masuk" id="tanggal_masuk" />
                    
                </div>

                 <div class="form-group">
                    <label>Tahun Terbit</label>
                    <select class="form-control" name="tahun">
                        <?php
                            $tahun = date("Y");
                            for ($i=$tahun-29; $i <= $tahun; $i++) { 
                                echo'
                                    <option value="'.$i.'">'.$i.'</option>
                                ';
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Jilid</label>
                    <input class="form-control" type="number" name="jilid" id="jilid" />
                    
                </div>

                <div class="form-group">
                    <label>ISBN</label>
                    <input class="form-control" name="isbn" id="isbn" />
                    
                </div>


                <div class="form-group">
                    <label>Jumlah Buku</label>
                    <input class="form-control" type="number" name="jumlah" id="jumlah" />
                    
                </div>

                <div class="form-group">
                <label> Lokasi</label>
                <select class="form-control" name="lokasi">
                    <option>== Pilih ==</option>
                    <?php
                        $query = $koneksi->query("SELECT * FROM tb_lokasi ORDER by id_lokasi");
                        
                        while ($lokasi=$query->fetch_assoc()) {
                            echo "<option value='$lokasi[lokasi]'>$lokasi[lokasi]</option>";
                        }
                    ?>
                </select>

                <div class="form-group">
                    <label>Bahasa</label>
                    <input class="form-control" name="bahasa" id="bahasa" />
                    
                </div>
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
        
        $sql = $koneksi->query("INSERT INTO `tb_buku` (`no_induk`, `judul`, `asal`, `edisi`, `pengarang`, `penerbit`, `tanggal_masuk`, `tahun_terbit`, `jilid`, `isbn`, `jumlah_buku`, `lokasi`, `bahasa`)
        values('$no_induk', '$judul', '$asal', '$edisi', '$pengarang', '$penerbit', '$tanggal_masuk', '$tahun', '$jilid', '$isbn', '$jumlah', '$lokasi', '$bahasa')");

        if ($sql) {
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=buku";

                </script>
            <?php
        }
    }

 ?>
                             
                             

