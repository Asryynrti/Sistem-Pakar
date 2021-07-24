<!DOCTYPE html>

<html lang="en">

  <head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	
	
    <title>PENDETEKSI PENYAKIT</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

  </head>

    <!-- Header -->
    <header class="header" id="top">
      <div class="text-vertical-center">
          <center><h1><font face="Broadway" size="40">PENDAKI</font></h1>
              <h3><font face="Bradley Hand ITC">Pendeteksi Penyakit</font></h3></center>
          <h6><font face ="Chaparral Pro Light" size="20"> Selamat Datang</font></h6>
        <br>
      </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
      <div class ="text-center"
          <h2> <font face="Chaparral Pro Light" color= red size="5"> Silahkan jawablah pertanyaan-pertanyaan dibawah sesuai dengan gejala yang Anda rasakan !!! </font></h2>
        
      </div>
      <!-- /.container -->
    </section>

    <!-- Services -->
    <section id="services" class="services bg-primary text-white">
		<form  method="POST" name="input2">
		
		
<?php

error_reporting(0);

$pilihan = $_POST['pilihan'];
switch($pilihan){
				/* JIKA PILIHAN PERTAMA (1) ADALAH Tidak*/
        case 10:
	?>
	<h2>Apakah anda mengalami nyeri perut bagian atas?</h2>
			<input type="radio" name="pilihan" value="11">Ya <br>
			<input type="radio" name="pilihan" value="12">Tidak<br>
			
	<?php
	break;
							
	case 11:
	?>
	<h2>Apakah anda mengalami mual dan muntah?</h2>
			<input type="radio" name="pilihan" value="13">Ya <br>
			<input type="radio" name="pilihan" value="12">Tidak<br>
			
	<?php
			
	break;
									
	case 12:
	?>
	<h2>Apakah anda mengalami nyeri perut bagian bawah, rektrum atau sendi ?</h2>
			<input type="radio" name="pilihan" value="14">Ya <br>
			<input type="radio" name="pilihan" value="20"> Tidak<br>
	<?php
	break;
									
										
	case 13:
	?>
	<h2>Apakah Anda kehilangan nafsu makan ?</h2>
			<input type="radio" name="pilihan" value="2">Ya <br>
			<input type="radio" name="pilihan" value="17">Tidak<br>
			
	<?php
			
	break;
	
	case 14:
	?>
	<h2>Apakah anda mengalami diare ?</h2>
			<input type="radio" name="pilihan" value="15">Ya <br>
			<input type="radio" name="pilihan" value="18"> Tidak<br>
	<?php
	break;
				
									
	case 15:
	?>
	<h2>Apakah anda mengalami penurunan berat badan ?</h2>
			<input type="radio" name="pilihan" value="16">Ya <br>
			<input type="radio" name="pilihan" value="20">Tidak<br>
			
	<?php
			
	break;										
										
	case 16:
	?>
	<h2>Apakah Anda sering merasa kelelahan?</h2>
			<input type="radio" name="pilihan" value="1">Ya <br>
			<input type="radio" name="pilihan" value="21">Tidak<br>
			
	<?php
			
		break;
	
											
										
	case 1:
	?>
			<h2> Diagnosis Sementara Penyakit Anda adalah </h2>
			<h2>
			<p align=center><font color=000fff>Penyakit Crohn</font></p>
1.	Area nyeri daerah perut, perut bagian bawah, rektrum atau sendi<br>
2.	Begah, diare, mual, muntah, usus tersumbat atau flatulen<br>
3.	Kehilangan selera makan atau kelelahan <br>
4.	Rekah atau pendarahan<br>
5.      Depresi, kram, penurunan berat badan, pertumbuhan yang lambat, ruam kulit atau ilkus mulut
                        </h2>

			<input type="submit" class="btn btn-dark" name="pilihan" value="default" >
			
			
	<?php
	
			
			exit ();	
									
	case 2:
	?>
			<h2> Diagnosis Sementara Penyakit Anda adalah </h2>
			<h2>
		<p align=center><font color=000fff>Maag</font></p>
1. 	Area nyeri daerah perut atau perut bagian atas<br>
2.	Bersendawa, gangguan pencernaan, heartburn, mual atau muntah <br>
3.	Kehilangan nafsu makan </h2>
			<input type="submit" class="btn btn-warning" name="pilihan" value="default" >
			
	<?php
			exit();		
					
							/* JIKA PILIHAN PERTAMA (1) ADALAH YA*/
											
	case 17:
	?>
	<h2>Apakah anda mengalami demam tinggi lebih dari 40 derajat?</h2>
			<input type="radio" name="pilihan" value="18">Ya <br>
			<input type="radio" name="pilihan" value="19">Tidak<br>
	<?php
	break;
										
	case 18:
	?>
	<h2>Apakah anda mengalami flu ?</h2>
			<input type="radio" name="pilihan" value="20">Ya <br>
			<input type="radio" name="pilihan" value="21">Tidak<br>
	<?php
	break;
										
	case 19:
	?>
	<h2>3.	Apakah anda mengalami sakit kepala?</h2>
			<input type="radio" name="pilihan" value="21">Ya <br>
			<input type="radio" name="pilihan" value="20">Tidak<br>
	<?php
	break;
										
	case 20:
	?>
	<h2>Apakah anda mengalami batuk ?</h2>
			<input type="radio" name="pilihan" value="24">Ya <br>
			<input type="radio" name="pilihan" value="">Tidak<br>
	<?php
	break;
											
	
	case 21:
	?>
	<h2>Apakah anda mengalami sakit perut ?</h2>
			<input type="radio" name="pilihan" value="23">Ya <br>
			<input type="radio" name="pilihan" value="22">Tidak<br>
	<?php
	break;
										
	case 22:
	?>
	<h2>Apakah anda mengalami nyeri otot dan sendi ?</h2>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="">Tidak<br>
	<?php
	break;
	
	case 23:
	?>
	<h2>Apakah Anda mengalami diare ?</h2>
			<input type="radio" name="pilihan" value="4">Ya <br>
			<input type="radio" name="pilihan" value="">Tidak<br>
	<?php
	break;
	
										
	case 24:
	?>
	<h2>Apakah Anda mengalami sesak nafas ?</h2>
			<input type="radio" name="pilihan" value="3">Ya <br>
			<input type="radio" name="pilihan" value="">Tidak<br>
	<?php
	break;
	
										
	case 3:
	?>
								<h2> Diagnosis Sementara Penyakit Anda adalah </h2></br>
	<h2>							
<p align=center><font color=red>Covid-19</font></p>
1.	Lakukan karantina mandiri di rumah selama -+ 14 hari lamanya<br>
2.	Jaga kebersihan, rajin mencuci tangan <br>
3.	Lakukan sosial distancing dengan orang yang berada di rumah<br>
</h2>


								<input type="submit" class="btn btn-dark" name="pilihan" value="default" >
	<?php	
			exit();	
									
										
	case 4:
	?>
								<h2> Diagnosis Sementara Penyakit Anda adalah </h2>
								<h2>							
<p align=center><font color=red>Demam Tifoid / Gejala Tifus</font></p>
1.	Area nyeri daerah perut atau otot.<br>
2.	Begah, diare, mual, muntah atau sembelit.<br>
3.	Demam, kelelahan, kehilangan selera makan, malaise atau panas dingin.<br>
4.	Otot lemas, penurunan berat badan, ruam dengan bintik kecil berwara merah, ruam kulit atau sakit kepala<br>
</h2>								
								
								<input type="submit" class="btn btn-dark" name="pilihan" value="default" >
	<?php	
			exit();	
											
										
	case 6:
	?>
								<h2>  Diagnosis Sementara Penyakit Anda adalah </h2>
								
	<H2>
	<p align=center><font color=000fff>Demam Dengue</font></p>
1.      Area nyeri pada bagian belakang mata, daerah perut, otot, punggung, sendi atau tulang<Br>
2.      Seluruh tubuh demam, kehilangan selera makan, kelelahan<Br>
3.      Mual dan muntah<br>
4.      Bintik merah di kulit<br>
5.      Mudah Memar, pendaharan, sakit kepala atau sakit tenggorokan
	</H2>
								<input type="submit" class="btn btn-dark" name="pilihan" value="default" >
	<?php	
			exit();	
	
	
	
	default:
	?>
	<h2>Apakah anda mengalami demam ?</h2>
			<input type="radio" name="pilihan" value="17">Ya <br>
			<input type="radio" name="pilihan" value="10">Tidak<br>
	<?php
	
	break;
}


?>



					
<input  type="submit" class="btn btn-warning" name="next" value="LANJUT" >
</form>
    </section>


   <!-- Footer -->
    <footer>
	<center><a href="#about" class="btn btn-success">KEMBALI TES</a></center>
      <div class="container" id="contact">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
           
              
              
              <center><h4>
              <br>Kelompok 2</br
                  </h4></center>
              
            <center><p>UNIVERSITAS PENDIDIKAN INDONESIA
                    <br>Purwakarta, 2020</p></center>
            <center><p class="text-center">Copyright &copy; Pendeteksi Penyakit 2020</p></center>
          </div>
        </div>
      </div>
      <a id="to-top" href="#top" class="btn btn-dark btn-lg js-scroll-trigger">
        <i class="fa fa-chevron-up fa-fw fa-1x"></i>
      </a>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.js"></script>

  </body>

</html>


