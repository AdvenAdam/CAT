<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Syndash - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="template/assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="template/assets/css/pace.min.css" rel="stylesheet" />
	<script src="template/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="template/assets/css/bootstrap.min.css" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="template/assets/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="template/assets/css/app.css" />
</head>

<body class="bg-login">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="template/assets/images/logo-icon.png" width="80" alt="">
										<h3 class="mt-4 font-weight-bold">Welcome</h3>
										<?php if (isset($validation)) : ?>
											<div class="col-12">
												<div class="alert alert-danger" role="alert" style="list-style: none;">
													<span><?= $validation->listErrors() ?></span>
												</div>
											</div>
										<?php endif; ?>
										<?php if (session()->getFlashdata('danger')) { ?>
											<div class="alert alert-danger fade show" role="alert">
												<span><?= session()->getFlashdata('danger'); ?></span>
											</div>
										<?php } ?>
									</div>
									<div class="login-separater text-center"> <span>LOGIN </span>
										<hr />
									</div>
									<form method="POST" action="<?= base_url('login'); ?>">

										<div class="form-group mt-4">
											<label><b>Username</b> </label>
											<input type="text" name="username" class="form-control" placeholder="Enter your username" />
										</div>
										<div class="form-group">
											<label><b>Password</b></label>
											<input type="password" name="password" class="form-control" placeholder="Enter your password" />
										</div>
										<div class="btn-group mt-3 w-100">
											<button type="submit" class="btn btn-primary btn-block">Log In</button>
											<button type="button" class="btn btn-primary"><i class="lni lni-arrow-right"></i>
											</button>
										</div>
									</form>
									<hr>
									<div class="text-center">
										<p class="mb-0">Don't have an account? <a href="authentication-register.html">Sign up</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<img src="template/assets/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>