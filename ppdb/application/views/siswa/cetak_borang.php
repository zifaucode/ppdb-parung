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
    <h4 align="center" style="margin-top:0px;"><u>BORANG ISIAN  DATA RAIHAN PRESTASI</u></h4>

  <b>A. IDENTITAS DIRI </b><br>
  <div class="col-md-4">
     
          <div class="panel-body">
            <fieldset class="content-group">
              
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                     <tr>
                      <th>Nama Siswa</th>
                      <th>:</th>
                      <td><?php echo ucwords($user->nama_lengkap); ?></td>
                    </tr>
                    <tr>
                      <th>N I S N</th>
                      <th>:</th>
                      <td><?php echo $user->nisn; ?></td>
                    </tr>
                    <tr>
                      <th>Nama Sekolah</th>
                      <th>:</th>
                      <td><?php echo ucwords($user->nama_sekolah); ?></td>
                    </tr>
                    
                </table>
              </div>
            </fieldset>
          </div>
      </div>
<br>

       <b>B.  DATA PRESTASI  (Cantumkan HANYA SATU Raihan Prestasi Tertinggi) </b><br>
   <table width="100%" border="1">
      <tr>
       
        
        
        <td rowspan="2"><b><center>Jenis Prestasi</b></center> </td>
        <td rowspan="2"><b><center>Nama Prestasi</b><br>(Tuliskan satu (1) Raihan Prestasi Tertinggi</center> </td>
        <td rowspan="2"><b><center>Keterangan</b><br>(Tuliskan Kategori Prestasi: Tkt Internasional Nasional, Kabupaten/Kota)</center> </td>
      </tr>
      <tr>
        
      </tr>
      
      
      
      
       
      <tr align="center">
        <td align="left"><center><?php echo $user->jenis_prestasi; ?></center></td>
        <td><center><?php echo $user->nama_prestasi; ?></center></td>
        <td><center><?php echo $user->tingkat_prestasi; ?></center></td>
        
       
      </tr>
      
      
    </table>
    
    <br>



   
       <b>C. Video Keterampilan dan Sertifikat Lomba</b><br>

      

      <table width="100%" border="1">
      <tr>
       
        
        
        <td rowspan="2"><center><b>Link Video</b> Keterampilan (G.Drive/Youtube)</center></td>
        <td rowspan="2"><center><b>Link Sertifikat Tertinggi</b> (G.Drive)</center></td>
      </tr>
      <tr>
        
      </tr>
      
      
      
      
       
      <tr align="center">
        <td align="left"><center><?php echo $user->linkvid_prestasi; ?></center></td>
        <td><center><?php echo $user->linksert_prestasi; ?></center></td>
        
       
      </tr>
      
      
    </table>
    
<br>  
  
<b>CATATAN : </b>
    <p>• Membuat video keterampilan cabang olahraga/seni/pramuka/hafiz qur’an dll, dimulai dengan perkenalan diri dan asal sekolah dan di upload di google drive (pastikan link tidak terkunci apabila menggunakan di google drive) atau pun di youtube</p>
    <p>•  Lampirkan bukti salah satu raihan prestasi tertinggi dalam bidang olahraga (misalnya Piagam, Medali, atau Sertifikat) dengan cara menggunggah (upload) file salinan piagam/sertifikat hasil pemindaian (scanning) di google drive (pastikan link tidak terkunci apabila menggunakan di google drive)</p>
    <p>Isi dokumen portofolio yang tercantum adalah benar ditampilkan/dilaksanakan sendiri oleh siswa yang namanya tercantum dan bertanda-tangan dibawah ini. Apabila dalam proses verifikasi ditemukan adanya ketidak-jujuran dan/atau upaya kecurangan dalam bentuk apapun secara sengaja, maka kami bersedia mempertanggungjawabkannya serta menerima keputusan yang diberikan oleh panitia seleksi PPDB SMAN 1 Parung.  </p>
    
    <br>
    <div style="float:left;">
     
      Mengetahui,,<br>
      Kepala Sekolah  <br>
      (<?php echo ucwords($user->nama_sekolah); ?>)<br>
      <br>
      <br>
      <img src="img/ttd.jpg" alt="" width="100"><br>
      <b><u>(...............................................)</u></b><br>
      NIP.
    </div>
   


    <div style="float:right;">
      Parung, <?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?> <br>
      Yang menyatakan,<br>
      Peserta Jalur Prestasi PPDB SMAN 1 Parung 2021,  <br>
      <img src="img/ttd.jpg" alt="" width="100"><br>
      <p>Materai 6000</p>
      <b><u>(   &nbsp; &nbsp;  <?php echo $user->nama_lengkap; ?>   &nbsp; &nbsp;  )</u></b><br>
      NISN.<?php echo $user->nisn; ?>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    <b>Keterangan :</b>
    <p>*     Mohon disi dengan Nama lengkap dan NISN</p>
    <p>**  Mohon diisi dengan Nama lengkap, NIP/NIK, dan dibubuhi Cap/Stempel Sekolah</p>



  </body>
</html>
