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
    <h4 align="center" style="margin-top:0px;"><u>BUKTI PENDAFTARAN</u></h4>
    <b><center>
      PANITIA PENERIAMAAN PESERTA DIDIK BARU (PPDB) <br>
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
        <td>NO. HP (Siswa)</td>
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
      NIP. 000000000
    </div>
    <br><br><br><br><br><br><br><br><br><br>

    

  </body>
</html>
