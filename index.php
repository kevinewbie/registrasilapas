<?php 

include "action/koneksi.php";

$data = mysqli_query($koneksi , "SELECT * FROM tbl_datang");

// Generate No. Registrasi
$num_rows = mysqli_num_rows($data); 
if ( $num_rows <= 0 ){
	$nmr_registrasi = "Reg-". 1;
}else{
	$nmr_registrasi = "Reg-". ($num_rows + 1);
}

?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Registrasi LP BENGKALIS</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="" href="index.html"><img src="https://skillzero7.files.wordpress.com/2011/12/bground11.png" alt="Girl in a jacket" width="100" height="100"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text">
								Hubungi Kami di (0766) 21342
							</span> 

							<span class="li-text">
								Atau Ke Akun Sosial Media Kami
							</span> 
							<span class="li-social">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-instagram"></i></a> 
								<a href="#"><i class="fa fa-whatsapp"></i></a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Kunjungan Online Lapas Bengkalis</h1>
                            <div class="description">
                            	<p>
	                            	Silahkan data dibawah dengan benar
	                            	
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
                        	<form role="form" action="action/submit_form.php" method="post" class="registration-form" enctype="multipart/form-data">
                        		
                        		<fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Step 1 / 2</h3>
		                            		<p>Isi Data Sesuai KTP</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-user"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                    	<div class="form-group">
											<label for="sr-only">No. Registrasi</label>
				                        	<input type="text" placeholder="Nomor Register" class="form-first-name form-control" id="no_registrasi" name="no_registrasi" value="<?php echo $nmr_registrasi ?>" readonly>
				                        </div>
				                        <div class="form-group">
											<label for="sr-only">Nama</label>
				                        	<input type="text" placeholder="Nama Lengkap.." class="form-last-name form-control" id="nama_lengkap" name="nama_lengkap">
				                        </div>
										<div class="form-group">
											<label for="sr-only">NIK</label>
				                        	<input type="text" placeholder="NIK" class="form-last-name form-control" id="nik" name="nik">
				                        </div>
										<div class="form-group">
											<label for="sr-only">Jenis Kelamin</label>
											<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
												<option value="laki-laki">laki-Laki</option>
												<option value="perempuan">Perempuan</option>	
											</select>   
										</div>
											
											<div class="form-group">
				                        	<label for="sr-only">Tempat Lahir</label>
				                        	<input type="text" placeholder="Tempat Lahir" class="form-last-name form-control" id="tempat_lahir" name="tempat_lahir">
				                        </div>

				                        	
										<div class="form-group">
				                        	<label f="sr-only" >Tanggal Lahir</label>
				                        	<input type="date" placeholder="Tanggal Lahir" class="form-last-name form-control" id="tanggal_lahir" name="tanggal_lahir">
										</div>
										  
				                        <div class="form-group">
											<label f="sr-only" >Alamat</label>
				                        	<textarea placeholder="Alamat" 
				                        				class="form-about-yourself form-control" id="alamat" name="alamat" ></textarea>
				                        </div>
											<div class="form-group">
				                        	<label f="sr-only" >No. Telp</label>
				                        	<input type="text" placeholder="Nomor Telfon" class="form-last-name form-control" id="no_telp" name="no_telp">
				                        </div>
										
				                        <button type="button" class="btn btn-next">Next</button>
				                    </div>
			                    </fieldset>
			                    
			                   
		                       
			                    
			                    <fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Forumulir 2/2</h3>
		                            		<p>...</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-twitter"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                    	<div class="form-group">
											<label f="sr-only" >Nama Warga Binaan</label>
				                        	<input type="text" placeholder="Nama Warga Binaan" class="form-facebook form-control" id="nama_binaan" name="nama_binaan">
				                        </div>
				                        <div class="form-group">
											<label f="sr-only" >Bin.</label>
				                        	<input type="text" placeholder="Bin" class="form-twitter form-control" id="binaan" name="binaan">
										</div>
										<div class="form-group">
				                        <label for="sr-only">Kasus</label>
										<select class="form-control" id="kasus" name="kasus">
											<option value="narkoba">Narkoba (Senin-Rabu)</option>
											<option value="krimum">Kriminal Umum (Kamis-Sabtu)</option> 
										</select> 
										</div>
										<div class="form-group">
				                        <label for="sr-only">Shift</label>
										<select class="form-control" id="shift" name="shift">
											<option value="pagi">Pagi</option>
											<option value="siang">Siang</option> 
										</select> 
										</div>
										<div class="form-group">
										  <label for="sr-only">Hubungan Dengan Warga Binaan</label>
											<select class="form-control" id="hub_binaan" name="hub_binaan">
											<option value="keluarga">Keluarga</option>
											<option value="teman">Teman</option>
											<option value="saudara">Saudara</option>
											<option value="pengacara">Pengacara</option>
										</select>
										</div>
											  <div class="form-group">
											  <label for="sr-only">Tanggal Kunjungan</label>
				                        	<input type="date" placeholder="Tanggal Kunjungan" class="form-google-plus form-control" id="tanggal_kunjungan" name="tanggal_kunjungan">
				                        </div>
				                        <button type="button" class="btn btn-previous">Sebelumnya</button>
				                        <button type="submit" class="btn">DAFTAR</button>
				                    </div>
			                    </fieldset>
		                    
		                    </form>
		                    
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>