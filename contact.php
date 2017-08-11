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
					
						<h2 class="page-title">Contact Us </h2>

						<div class="row">
					 <div class="col-md-6 col-sm-6 col-xs-12" id="contact-box">
                <p id="contact-text">Jika ada pertanyaan, Please do not hesitate to contact us.

 </p>
                <div class="info-box"><i class="glyphicon glyphicon-map-marker my-info-icons"></i><span class="text-uppercase text-info">Address: </span><span>UITM Kampus Melaka, Jasin, Melaka</span></div>
                <div class="info-box"><i class="glyphicon glyphicon-envelope my-info-icons"></i><span class="text-uppercase text-info">Email: </span><span>asyrafmuda@mytecc.ca</span></div>
                <div class="info-box"><i class="glyphicon glyphicon-phone-alt my-info-icons"></i><span class="text-uppercase text-info">Phone: </span><span>09 460 2642</span></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 site-form">
                <form id="my-form">
                    <div class="form-group has-feedback">
                        <label class="control-label sr-only" for="firstname">First Name</label>
                        <input class="form-control" type="text" name="firstname" placeholder="First Name" autofocus="" id="firstname"><i class="form-control-feedback fa fa-user" aria-hidden="true"></i></div>
                    <div class="form-group has-feedback">
                        <label class="control-label sr-only" for="lastname">Last Name</label>
                        <input class="form-control" type="text" name="lastname" placeholder="Last Name" id="lastname"><i class="form-control-feedback fa fa-user" aria-hidden="true"></i></div>
                    <div class="form-group has-feedback">
                        <label class="control-label sr-only" for="phonenumber">Phone Number</label>
                        <input class="form-control" type="tel" name="phonenumber" required="" placeholder="Phone" id="phonenumber"><i class="form-control-feedback fa fa-phone" aria-hidden="true"></i></div>
                    <div class="form-group has-feedback">
                        <label class="control-label sr-only" for="email">Email Address</label>
                        <input class="form-control" type="text" name="email" required="" placeholder="Email" id="email"><i class="form-control-feedback fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="form-group has-feedback">
                        <label class="control-label sr-only" for="messages">Last Name</label>
                        <textarea class="form-control" rows="8" name="messages" required="" placeholder="Message"></textarea><i class="form-control-feedback fa fa-pencil" aria-hidden="true"></i></div>
                    <button class="btn btn-default btn-lg" type="submit" id="form-btn">SEND </button>
                </form>
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