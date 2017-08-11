<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
					<li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
<li><a href="change-password.php"><i class="fa fa-files-o"></i>Change Password</a></li>

<li><a href="access-log.php"><i class="fa fa-file-o"></i>Access log</a></li>
<?php } else { ?>
				

				<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
				<li><a href="about.php"><i class="fa fa-info"></i> About Club</a></li>
				<li><a href="Activity.php"><i class="fa fa-calendar"></i> Club Activity</a></li>
				
				<li><a href="registration.php"><i class="fa fa-files-o"></i> Student Registration</a></li>
				<li><a href="login.php"><i class="fa fa-users"></i> Student Login</a></li>
				<li><a href="admin"><i class="fa fa-user"></i> Admin Login</a></li>
				<li><a href="contact.php"><i class="fa fa-phone"></i> Contact</a></li>
				<?php } ?>

			</ul>
		</nav>