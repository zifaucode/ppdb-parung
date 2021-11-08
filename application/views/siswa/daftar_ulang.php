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
    <?php $this->load->view('kop_lap'); ?><br>
    <h4 align="center" style="margin-top:0px;"><u>LEMBAR DAFTAR ULANG PPDB</u></h4>
    <b><center>
      SMA NEGERI 1 PARUNG <br>
      TAHUN PELAJARAN <?php echo $thn_ppdb; ?> / <?php echo $thn_ppdb+1; ?></center>
    </b>
    <br>

    <table width="100%" border="0">
      <tr>
        <td width="200">NO. PENDAFTARAN</td>
        <td width="1">:</td>
        <td><?php echo $user->no_pendaftaran; ?></td>
      </tr>
      <tr>
        <td>NAMA LENGKAP</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_lengkap); ?></td>
      </tr>
      <tr>
        <td>JALUR PRESTASI</td>
        <td>:</td>
        <td><?php echo ucwords($user->jenis_prestasi); ?></td>
      </tr>
      <tr>
        <td>NAMA PRESTASI</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_prestasi); ?> &nbsp; &nbsp; &nbsp; ( TINGKAT : <?php echo ucwords($user->tingkat_prestasi); ?> )</td>
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
        <td>JENIS KELAMIN</td>
        <td>:</td>
        <td><?php echo $user->jk; ?></td>
      </tr>
      <tr>
        <td>TEMPAT, TANGGAL LAHIR</td>
        <td>:</td>
        <td><?php echo "$user->tempat_lahir, ".$this->Model_data->tgl_id($user->tgl_lahir); ?></td>
      </tr>
      <tr>
        <td>AGAMA</td>
        <td>:</td>
        <td><?php echo $user->agama; ?></td>
      </tr>
      
      
      
     

       <tr>
        <td>NO. HP (Siswa)</td>
        <td>:</td>
        <td><?php echo $user->no_hp_siswa; ?></td>
      </tr>
      
      
      <tr>
        <td>NO. HP (Ortu)</td>
        <td>:</td>
        <td><?php echo $user->no_hp_ayah; ?></td>
      </tr>
      <tr>
        <td>ASAL SEKOLAH</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_sekolah); ?></td>
      </tr>
     
    </table>
    <br>

    <div style="float:right;">
      Parung, <?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?> <br>
			Ketua Panitia PPDB,  <br>
      <img src="img/ttd.jpg" alt="" width="100"><br>
      <br>
      <br>
      <br>
      <b><u>DRA.MUSAROFAH, M.Pd.</u></b><br>
      NIP. 196704121988112002
    </div>
    <br><br><br><br><br><br><br><br><br><br>

    <b><u>Siapkan Berkas Berikut Ketika anda melakukan Daftar Ulang :</u></b>
    <br>
    <table width="100%" border="0" style="margin-left:5px;">
      <tr>
        <td width="1">1.</td>
        <td>Cetak Lembar Daftar Ulang</td>
        <td width="1">:</td>
        <td>Tempel Didepan Map</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Cetak Bukti LULUS, Deskripsi Capaian, Keaslian DOC, dan Borang isian Data</td>
        <td>:</td>
        <td>Masing-Masing 1 lembar</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Pas foto berwarna ukuran 3 x 4</td>
        <td>:</td>
        <td>2 lembar</td>
      </tr>
      
      <tr>
        <td>4.</td>
        <td>Foto copy KTP Orang Tua</td>
        <td>:</td>
        <td>1 lembar</td>
      </tr>
      
       
     
      <tr>
        <td>5.</td>
        <td>Foto copy Kartu Keluarga KK</td>
        <td>:</td>
        <td>1 lembar</td>
      </tr>
      <br>
       
        <td colspan="3"><b>Semua berkas dimasukan kedalam map , <br>laki – laki  &nbsp; &nbsp; &nbsp; = <font color="red">warna merah</font> <br>perempuan &nbsp;= <font color="blue">warna biru</font></b></td>
      
    </table>

  </body>
</html>
