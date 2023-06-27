<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- bootstrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

	<section class="py-5">

		<div class="container p-3">

			<div class="row">

				<div class="col-lg-4 col-md-6 mx-auto">
					<div class="card rounded-2">

						<!-- card header -->
						<div class="card-header text-center">
							<h1 class="fw-bold">Login</h1>
						</div>

						<!-- card body -->
						<div class="card-body">

							<form action="post.php" method="post">

								<div class="mb-3">
									<label for="username" class="form-label">Username</label>
									<input type="text" name="username" id="username" placeholder="Your username" required class="form-control rounded-2">
								</div>
								<!-- user input -->

								<div class="mb-3">
									<label for="password" class="form-label">Password</label>
									<input type="password" name="password" id="username" placeholder="Your Password" required class="form-control rounded-2">
								</div>
								<!-- password input -->
								<button type="submit" name="submit" value="send" class="btn btn-primary rounded-2 w-100 fw-bold">
									Submit Now
								</button>
								<!-- button submit -->
							</form>

						</div>
					</div>
				</div>

			</div>

		</div>

	</section>

</body>

</html>