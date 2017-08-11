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
					
						<h2 class="page-title">Club Activity </h2>

						<div class="row">
					 <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-5">
                            <a href="#"><img class="img-responsive" src="img/9.jpg"></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="name">Welcome First Cycle !</h3>
                            <p class="description">ada 28 Jun 2016 bersamaan dengan hari Selasa, kelab Mytecc telah menganjurkan program Welcome First Cycle! di DK200 UiTM Raub. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-5">
                            <a href="#"><img class="img-responsive" src="img/4.jpg"></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="name">PROGRAM BUDDIES TUTOR CS110</h3>
                            <p class="description">Program ini bertujuan untuk membantu pelajar CS110 untuk meningkatkan prestasi mereka pada semester kali ini. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-5">
                            <a href="#"><img class="img-responsive" src="img/5.jpg"></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="name">PROGRAM FAMILY DAY CS110</h3>
                            <p class="description">Family Day CS110 Kelab MYTECC.c merupakan acara tradisi yang akan diadakan setiap semester pengajian</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-5">
                            <a href="#"><img class="img-responsive" src="img/6.jpg"></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="name">COMPUTER SCIENCE EDUCATION WEEK</h3>
                            <p class="description">Program ini dijalankan di UiTM Cawangan Pahang Kampus Raub adalah bertujuan untuk memberi pendedahan kepada orang awam .</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-5">
                            <a href="#"><img class="img-responsive" src="img/7.jpg"></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="name">Family Day MyTecc Bersama Anak-anak RTH</h3>
                            <p class="description">Mengeratkan hubungan silaturahim antara pelajar dan pensyarah, serta antara pelajar dengan anak-anak RTH.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-5">
                            <a href="#"><img class="img-responsive" src="img/8.jpg"></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="name">Gotong-royong dan Iftar Perdana</h3>
                            <p class="description">Program “Gotong-royong & Iftar Perdana” ini di adakan untuk membolehkan ahli-ahli persatuan Change Agents serta warga UiTM.</p>
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