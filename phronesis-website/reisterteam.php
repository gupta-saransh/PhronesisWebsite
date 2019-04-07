
<html>
	<head>
		<title>PHRONESIS'19</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
			<link href="style1.css" rel="stylesheet">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
			<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
		<link rel="shortcut icon" href="mainl2.png">
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Phronesis'19</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="sponsors.html">Sponsors</a></li>
											
											<li><a href="events.html">Events</a></li>
											<li><a href="reister.php">Register!</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
              <h2>Registration Form</h2>
              <p>Please Enter your Details</p>
              <a href="reister.php" class="button primary " style="margin-right:20px;">Individual Events</a>
              <a href="resiterteam.php" class="button primary" style="margin-top:20px;">Team Events</a>

						</header>
						<section class="wrapper style5">

							<div class="inner">
								<div>
									<?php
									include 'validate1.php';
									 echo $nameErr; ?>
								</div>
                <h3> Member 1 Details:</h3>
                <div class="col-sm-8">
                          <form class="" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                            <fieldset>
                              <div class="form-group">
                                <label for="Name" style="font-size:20px;">Team Name<i style="font-size:15px;color:red;">*</i></label>
                                <input type="text" class="form-control" id="TName"  placeholder="Enter Your Team Name" name="tname">
                              </div>
                              <div class="form-group">
                                <label for="Name" style="font-size:20px;">First Name<i style="font-size:15px;color:red;">*</i></label>
                                <input type="text" class="form-control" id="FName"  placeholder="Enter Your First Name" name="fname">
                              </div>

															<div class="form-group" style="font-size:20px;">
																<label for="Name">Email Id<i style="font-size:15px;color:red;">*</i></label>
																<input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter your Email Id" name="Email">
															</div>

                              <div class="form-group">
                                <label for="Contact" style="font-size:20px;">Contact No<i style="font-size:15px;color:red;">*</i></label>
                                <input type="text" class="form-control" id="contact"  placeholder="Enter your contact number" name="Contact">
                              </div>
                              <div class="form-group" style="font-size:20px;">
                                <label for="College">Institute Name<i style="font-size:15px;color:red;">*</i></label>
                                <input type="text" class="form-control" id="College" placeholder="Enter name of your institute" name="Institute">
                              </div>
															<div class="form-group" style="font-size:20px;">
                                <label for="Name">Gender<i style="font-size:15px;color:red;">*</i></label>

																<select name="Gender">
	 																<option value="Male">Male</option>
	 															<option value="Female">Female</option>
	 														<option value="Others">Others</option>

 															</select>
                              </div>


                            </fieldset>
                            <br>
                            <h3> Member 2 Details:</h3>
                            <p>(You can have single member team)</p>
                            <fieldset>
                              <div class="form-group">
                                <label for="Name" style="font-size:20px;">First Name</label>
                                <input type="text" class="form-control" id="FName"  placeholder="Enter Your First Name" name="fname1">
                              </div>

															<div class="form-group" style="font-size:20px;">
																<label for="Name">Email Id</label>
																<input type="text" class="form-control" id=""  placeholder="Enter your Email Id" name="Email1">
															</div>

                              <div class="form-group">
                                <label for="Contact" style="font-size:20px;">Contact No</label>
                                <input type="text" class="form-control" id="contact"  placeholder="Enter your contact number" name="Contact1">
                              </div>
                              <div class="form-group" style="font-size:20px;">
                                <label for="College">Institute Name</label>
                                <input type="text" class="form-control" id="College" placeholder="Enter name of your institute" name="Institute1">
                              </div>
															<div class="form-group" style="font-size:20px;">
                                <label for="Name">Gender</label>

																<select name="Gender1">
	 																<option value="Male">Male</option>
	 															<option value="Female">Female</option>
	 														<option value="Others">Others</option>

 															</select>
                              </div>
                              </fieldset>



<br>

															<p><h2><b>Select Your Event:</b></h2></p><p class="form-text" style="font-size:20px">(Click on the event name to know more)</p>
															<div class="form-check">
																<div class="form-check">
																	<input type="checkbox" class="form-check-input big-checkbox" id="Check1" value="GenQuiz" name="Check[]">
																	<label class="form-check-label" for="Check1" style ="font-size:20px;"><a class="fon" target="_blank" href="events.html#Quizzing">	&nbsp;GenQuiz</a></label>
																</div>
																<div class="form-check">
																	<input type="checkbox" class="form-check-input big-checkbox" id="Check2" value="Flames" name="Check[]">
																	<label class="form-check-label" for="Check2" style ="font-size:20px;"><a class="fon" target="_blank"  href="events.html#Quizzing">&nbsp;FLAMES Quiz </a></label>
																</div>
																

                              <br>
                              <center><ul class="actions">
                                <li><input type="submit" value="Submit" class="primary" /></li>
                                <li><input type="reset" value="Reset" /></li>
                              </ul></center>






                          </form>
                        </div>
							</div>
						</section>
					</article>

				<!-- Footer -->
				<footer id="footer">
					<ul class="icons">

						<li><a href="https://www.facebook.com/literaryumbrella/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/literaryumbrella/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>

						<li><a href="literaryumbrella@gmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Literary Umbrella</li>

					</ul>
				</footer>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
