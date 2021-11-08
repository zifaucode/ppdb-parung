<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $judul_web; ?></title>
    <base href="<?php echo base_url();?>"/>
  	<link rel="icon" type="image/png" href="assets/images/favicon.png"/>
    <style>
    table {
        border-collapse: collapse;
    }
    thead > tr{
      background-color: #0070C0;
      color:#f1f1f1;
    }
    thead > tr > th{
      background-color: #0070C0;
      color:#fff;
      padding: 10px;
      border-color: #fff;
    }
    th, td {
      padding: 2px;
    }

    th {
        color: #222;
    }
    body{
      font-family:Calibri;
    }
    </style>
  </head>
  <body onload="window.print();">
    <?php $this->load->view('kop_lap'); ?>
    <h4 align="center" style="margin-top:0px;"><u>PERNYATAAN KEASLIAN</u></h4>
    <b><center>
      PEMBUATAN KARYA/PENAMPILAN/TULISAN <br>
      DALAM DOKUMEN PORTOFOLIO</center>
    </b>
    <br>

    <table width="100%" border="0">
      <tr>
        <td width="200">NO. PENDAFTARAN</td>
        <td width="1">:</td>
        <td><?php echo $user->no_pendaftaran; ?></td>
      </tr>
      
      <tr>
        <td>TANGGAL CETAK </td>
        <td>:</td>
        <td><?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?></td>
      </tr>
  
      <tr>
        <td>NISN</td>
        <td>:</td>
        <td><?php echo $user->nisn; ?></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $user->nik; ?></td>
      </tr>
      <tr>
        <td>NAMA LENGKAP</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_lengkap); ?></td>
      </tr>
      
     <tr>
        <td>ALAMAT</td>
        <td>:</td>
        <td><?php echo ucwords($user->alamat_siswa); ?></td>
      </tr>
      <tr>
        <td>ASAL SEKOLAH</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_sekolah); ?></td>
      </tr>
      <tr>
        <td>NO HP (SISWA)</td>
        <td>:</td>
        <td><?php echo $user->no_hp_siswa; ?></td>
      </tr>
      
      <tr>
        <td>NAMA ORANG TUA /WALI</td>
        <td>:</td>
        <td></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">AYAH</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_ayah); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">IBU</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_ibu); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">WALI</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_wali); ?></td>
      </tr>
      <tr>
        <td>NO HP (Ortu)</td>
        <td>:</td>
        <td><?php echo $user->no_hp_ayah; ?></td>
      </tr>
      
     
    </table>
    <br>
    <br>
    <p>Saya yang bertanda-tangan di bawah ini, menyatakan bahwa isi dokumen portofolio (karya, penampilan, dan/atau tulisan) yang diunggah adalah benar dibuat/dikerjakan/dilaksanakan sendiri dan bukan merupakan karya, penampilan, dan/atau tulisan yang dibuat oleh orang lain. Apabila dalam proses evaluasi ditemui adanya ketidak-sesuaian, ketidak-jujuran dan/atau upaya kecurangan dalam bentuk apapun secara sengaja, maka saya <b>bersedia mempertanggungjawabkannya dan menerima keputusan apapun </b>yang diberikan oleh  pelaksana seleksi Jalur Prestasi di SMA N 1 Parung. </p>

    <br>
    <br>

    <div style="float:right;">
      Parung, <?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?> <br>
      Yang menyatakan,<br>
			Peserta Jalur Prestasi PPDB SMAN 1 Parung 2021,  <br>
      <img src="img/ttd.jpg" alt="" width="100"><br>
      <br>
      <br>
      <br>
      <b><u>(...............................................)</u></b><br>
      tuliskan nama lengkap
    </div>
    <br><br><br><br><br><br><br><br><br><br>

    <b><u>PANITIA PPDB SMAN 1 PARUNG 2021</u></b>
    <br>
    

  </body>
</html>
