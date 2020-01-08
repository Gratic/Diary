<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<?php view('head'); ?>
</head>
<body>
	<div class="container-fluid">
		<div class="row bg-dark">
			<div class="col">Oui</div>
			<div class="col">
				<div class="row justify-content-center">
					<div class="col-8">
						<div class="card card-body m-2">
							<div class="row align-items-center">
								<div class="col-2">
									<div class="btn btn-light"> + </div>
								</div>
								<div class="col-10">
									New page
								</div>
							</div>
							
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-8">
						<div class="card">
							<div class="card-header">
								Title of the page
								<small>Date 21/02/4561</small>
							</div>
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								<div class="card-image">
									<img class="img-fluid" src="./image/332.jpg">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col">Oui</div>
		</div>

		<footer class="footer mt-auto">Je suis le boss</footer>

	</div>
	<?php view('scripts'); ?>
</body>
</html>