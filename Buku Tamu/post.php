<?php 
    if(!empty($_POST['nama'])and !empty($_POST['keperluan'])) {
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $alamat=$_POST['alamat'];
        $kota=$_POST['kota'];
        $keperluan=$_POST['keperluan'];
        $tgl = date('D, d M Y - H:i:s');
        $text = stripcslashes(htmlspecialchars($keperluan));

        $ln = rand(1,2);

        $fp = fopen('db.html','a');
        fwrite($fp, "<div class='list$1'></div class='hr'><div align='right'>$tgl</div><div> <b>Nama: $nama</b> <br> <b>Email: $email</b> <br> <b>Alamat: $alamat</b> <br> <b>Kota: $kota</b> <br> <b>Keperluan: $keperluan</b>  </div>");
        fclose($fp);
    }

    header  ('location:bukutamu.php')
?>