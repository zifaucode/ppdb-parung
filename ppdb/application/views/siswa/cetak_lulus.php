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
    <br>
    <h4 align="center" style="margin:0px;font-size:19px;"><u><b>S U R A T     P E N G U M U M A N</b></u></h4>
      <center>
        No :  /&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/PPDB.SMAN1PRG/<?php echo $thn_ppdb; ?>
      </center>

    <br>
    <table width="100%" border="0">
      <tr>
        <td colspan="3">Kepala SMA Negeri 1 Parung dengan ini menyatakan bahwa :</td>
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
        <td width="200">NO. PENDAFTARAN</td>
        <td width="1">:</td>
        <td><?php echo $user->no_pendaftaran; ?></td>
      </tr>
      
      <tr>
        <td>TANGGAL CETAK </td>
        <td>:</td>
        <td><?php echo date('d-m-Y'); ?></td>
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
        <td>NO. HANDPHONE (HP)</td>
        <td>:</td>
        <td><?php echo $user->no_hp_siswa; ?></td>
      </tr>
      <tr>
        <td>ASAL SEKOLAH</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_sekolah); ?></td>
      </tr>
    </table>
    <br>

    <center>
      <div style="border:1px solid black; color:red;width:50%;padding:10px;">
        <b style="font-size:20px;"><u>L U L U S</u></b>
      </div>
    </center>
    <br>

    Seleksi Peserta Didik SMA Negeri  1 Parung Jalur Prestasi tahun ajaran <?php echo $thn_ppdb; ?>/<?php echo $thn_ppdb+1; ?>.<br>
    Demikian pengumuman ini disampaikan untuk dapat digunakan sebagai mestinya.
    <br><br>
    <br><br>

    <div style="float:right;">
      Parung, <?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?> <br>
			Kepala Sekolah,  <br>
      <br>
      <br>
      <br>
      
      <b><u>Hj. Melwinda Fitri, S.Pd. , M.Pd</u></b><br>
      NIP. 196905191994122001
    </div>
    <br><br><br><br><br><br>
    <br><br>

    <?php echo $v_ket->ket_pengumuman; ?>

  </body>
</html>
