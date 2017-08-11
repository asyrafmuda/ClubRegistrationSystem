<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Student Club Registration</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
function valid()
{
if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">About Club </h2>

						<div class="row">
					<div class="col-md-6 col-md-offset-3">
						 <div class="intro">
                <h2 class="text-center">Kenali MyTECC </h2>
                <p class="text-center">MyTECC merupakan sebuah persatuan pelajar di bawah Jabatan Sains Komputer, Fakulti Sains Komputer &amp; Matematik, UiTM Pahang. Persatuan ini aktif dalam menjalankan aktiviti-aktiviti khidmat masyarakat bersama anak-anak yatim, aktiviti
                    riadah gabungan pelajar dan pensyarah dan keusahawanan. </p>
            </div>
            <br>
            
						<div class="intro">
                <h2 class="text-center"><strong><span style="text-decoration: underline;">AHLI MAJLIS TERTINGGI</span></strong> </h2>
                <p class="text-center">Bertindak sebagai penggerak yang mengerakkan kelab MyTecc.c </p>
            </div>
            <div class="row people">
                <div class="col-md-4 col-sm-6 item">
                    <div class="box">
                        <h3 class="name">Asyraf Muda</h3>
                        <p class="title">AHLI MAJLIS TERTINGGI </p>
                        <p class="description">Pengerusi : Muhammad Asyraf Bin Muda</p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 item">
                    <div class="box">
                        <h3 class="name">Afiq AHBS</h3>
                        <p class="title">AHLI MAJLIS TERTINGGI</p>
                        <p class="description">Naib Pengerusi 1 : Afiq Hairul Badrul Shah</p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                
            </div>
					</div>


				</div>
						</div>
							</div>
						</div>
					</div>
				</div> 	
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>

</html>