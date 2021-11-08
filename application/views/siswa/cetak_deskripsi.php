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
    <h4 align="center" style="margin-top:0px;"><u>DESKRIPSI CAPAIAN PRESATASI</u></h4>
    <center>
      <u>Tuliskan refleksi anda atas capaian prestasi terbaik yang pernah diraih</u> 
      </center>
    
    <br>
    <br>
    <br>

    <p><?php echo $user->desk_capaian; ?></p>
    

  </body>
</html>
