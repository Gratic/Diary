<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test</title>
	<?php view('head'); ?>
</head>
<body class="h-100 bg-dark">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="row">
					<h1 class="col text-white text-center my-5">Lundi 01 2020</h1>
				</div>
				<div class="row">
					<div class="col">
						<ul class="list-group">
							<li class="list-group-item">Test</li>
							<li class="list-group-item">Test</li>
							<li class="list-group-item">Test</li>
							<li class="list-group-item">Test</li>
							<li class="list-group-item">Test</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="row justify-content-center">
					<div class="col-8">
						<div class="card card-body m-2">
							<div class="row align-items-center" id="btn-new-page">
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

				<div class="row justify-content-center my-1 d-none" id="pageForm">
					<div class="col-8">
						<form method="post" action="" class="form-group">
							<div class="card">
								<div class="card-header row">
									<div class="col-8">
										<input class="form-control" type="text" id="page_title" name="page_title" placeholder="Insert the title">
									</div>
									<div class="float-right col-4">
										<select class="form-control" name="page_emotion" id="page_emotion">
											<option> - - - </option>
											<option>Test</option>
											<option>Test</option>
										</select>
									</div>
								</div>
								<div class="card-body">
									<div id="blocks">
										<div class="block my-2">
											<div class="row align-items-center">
												<div class="col-8">
													<select class="form-control my-1" id="type">
														<option>Text</option>
														<option>Image</option>
													</select>
												</div>
												<div class="col">
													<div class="btn btn-danger btn-large col">Delete</div>
												</div>	
											</div>
											<textarea class="form-control"></textarea>
											<input type="file" class="form-control-file" name="">
										</div>
									</div>
									<div class="btn btn-dark btn-large col my-1" id="add">Add Bloc</div>
									<div class="btn btn-dark btn-large col my-1">Create</div>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-8" id="pages">
						<div class="card my-1">
							<div class="card-header">
								<span>Title of the page</span>
								<small>21/02/4561</small>
								<div class="float-right">Emotion</div>
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
	</div>
	<?php view('scripts'); ?>
</body>
</html>