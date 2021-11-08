<?php $ceks = $this->session->userdata('no_pendaftaran'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB SMAN 1 PARUNG</title>
		<base href="<?php echo base_url();?>"/>

		<link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap Core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/faa.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="assets/css/freelancer.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom bxshad">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><img src="img/logo.png" alt="Logo" width="30" style="position:absolute;margin-top:-10px;"> <span style="margin-left:35px;">PPDB</span> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#about"><i class="fa fa-info-circle"></i> Informasi</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact"><i class="fa fa-phone-square"></i> Kontak Kami</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
      <?php
      if (strtolower($this->uri->segment(1)) == 'logcs') {
        $this->load->view('web/login');
      } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <img class="img-responsive" src="img/logo.png" style="margin-top:-15%;margin-bottom:-10px;" width="100">
                    <div class="intro-text"><br>
                        <span class="name shad" style="font-size:35px">PPDB SMAN 1 PARUNG</span>

                        <br>
                      <?php if ($web_ppdb->status_ppdb == 'buka') {?>
                        <span class="skills">
                        	<a href="files/POS_PPDB_SMAN1PARUNG_2021.pdf" class="btn btn-danger btn-lg"><i class="fa fa-file-pdf-o faa-pulse animated"></i> &nbsp;Download POS PPDB SMAN 1 PARUNG</a>
                        </span>
                        <br> <br>
                        
												<br>
                       
                        <span>
                       <!--  <a href="pendaftaran" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran PPDB Online</a>  -->


						 <!--  <a href="logcs" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-users faa-pulse animated"></i> &nbsp;<?php if($ceks==''){echo "Login";}else{echo "Panel";} ?> Calon Peserta Didik</a>  -->
						<br>

                        
											  </span>
                      <?php }else{ ?>
                        <span class="skills">
                        </span>
                        <br> <br>
                        <hr class="star-light">
												<br>
                        <!-- <h3>Login Calon Siswa Terdaftar di PPDB Online SMK Plus Al-Maftuh</h3> -->
                        <span>
                         <a href="javascript:void(0);" class="btn btn-success btn-lg" style="margin:5px;"><i class="fa fa-warning faa-pulse animated"></i> &nbsp;DAFTAR ULANG PPDB SMAN 1 PARUNG DITUTUP</a>
												 <br>
											  </span>
                      <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <div class="card">
    <div class="card-body">
        <div class="card-header bg-info"><center><h3>SILAHKAN PILIH</h3></center></div>
        <br>
        <br>

        
<div class="bodyku">
<!-- ----------------------------------------- -->
    <div class="cardmu">
        <center>
            <a href="pendaftaran" target="_blank"><img src="assets/images/eskul.png" width="60px" height="60px"></a>
            <a href="pendaftaran" target="_blank"><p><font color="white">Jalur Prestasi</font></p></a>
        </center>
    </div>

<!-- ----------------------------------------- -->
    <div class="cardmu">
        <center>
            <a href="#" target="_blank"><img src="assets/images/cara.png" width="60px" height="60px"></a>
            <a href="#" target="_blank"><p><font color="white">Daftar Ulang</font></p></a>
        </center>
    </div>

<!-- ----------------------------------------- -->  
   

</div>
</div>
<!-- ----------------------------------------- -->
    
<!-- ----------------------------------------- -->





</div>


<br>
<br>
<style>
.bodyku {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 10px;
}

.cardmu {
  height: 104px;
  background-color: #0394fc;
  width: 100%;
border-radius:10px;
  border:1px solid #4e6096;
  box-shadow: 0px 0px 0px 2px #9fb4f2;
}



</style>






<br>
   

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Info PPDB SMAN 1 PARUNG</h2>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2" style="text-align:justify">
                    <p>Website seleksi Jalur Prestasi Bidang Olahraga dan Daftar ulang Calon Peserta Didik</p>
                </div>
               
                <div class="col-lg-8 col-lg-offset-2 text-center page-scroll">
                    <a href="#prosedur" class="btn btn-md btn-outline">
                        <i class="fa fa-tasks"></i> Info PPDB
                    </a>&nbsp;&nbsp;
                    <a href="#" class="btn btn-md btn-outline">
                        <i class="fa fa-sign-in"></i> <?php if($ceks==''){echo "Login";}else{echo "Panel";} ?> 
                    </a>&nbsp;&nbsp;

                </div>
            </div>
        </div>
    </section>

     <section id="prosedur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>INFO PPDB</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="margin-top:-10px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                      <center> <img class="img-responsive" src="img/info_ppdb.jpeg" alt=""></center>
                    </div>
                    <br>
                    <div class="col-md-2"></div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="col-lg-12 text-center">
                                <h4>Penjelasan PPDB SMAN 1 PARUNG</h4>
                                <hr class="star-primary">
                                <ol style="font-size:18px;text-align:justify">
                                <li>Calon Peserta didik Jalur Prestasi Olahraga dan Siswa yang telah Diterima Untuk Melakukan Daftar ulang dengan Melakukan Pendaftaran Online.</li>
                                <li>Terdapat 2 Menu, Jika Verifikasi jalur prestasi <b>KLIK JALUR PRESTASI</b>, Jika Daftar ulang <b>KLIK DAFTAR ULANG</b> </li>
                                
                                <li>Panitia PPDB melakukan <b>Verifikasi dan Validasi Video Jalur Prestasi dan Berkas daftar ulang Pendaftaran</b>.</li>
                                <li>Setelah selesai Calon Siswa Menerima <b>TANDA BUKTI VERIFIKASI</b>.</li>
                                
							    <li>Jika Calon Siswa Jalur Prestasi dinyatakan <b>LULUS</b> maka Calon Siswa Wajib <b>Registrasi Daftar Ulang</b> di <b>MENU DAFTAR ULANG</b>.</li>
								</ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
		<section class="success" id="contact">
        <!-- <div class="container"> -->
            <div class="row" style="margin-top:-100px;margin-bottom:-105px;">
                <div class="col-lg-4 text-center">
                  <br><br>
                    <h2>Kontak Kami</h2>
                    <hr class="star-light">
                    
                    <span style="color:#222;"><b><i class="fa fa-phone-square"></i> (0251) 8541063</b> </span>
										&nbsp;
                    <span class="eml" style="color:#222;"><i class="fa fa-envelope"></i> ppdb.sman1parung@gmail.com</span>
                    <br>
                    <a href="https://sman1parung.sch.id" target="_blank"><h4 class="btn btn-success">SMAN 1 PARUNG</h4></a>
                </div>
                <div class="col-lg-8 text-center">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6637307483784!2d106.70901951419569!3d-6.437216664737833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e7c54f45346d%3A0xb9203eaf92204bde!2sSMA%20Negeri%201%20Parung!5e0!3m2!1sid!2sid!4v1621814229432!5m2!1sid!2sid" width="100%" height="465" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              	</div>
            </div>
        <!-- </div> -->
    </section>



    <!-- Footer -->
    <footer class="text-center">

        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; <a href="https://sman1parung.sch.id" target="_blank">PPDB SMAN 1 PARUNG</a> <?php echo date('Y'); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="assets/js/freelancer.min.js"></script>

</body>
</html>
