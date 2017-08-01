<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
				rel="stylesheet"/>

		<!-- Custom CSS here -->
		<link href="css/style.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- JQuery v3.0 -->
		<script> src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"</script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<title>HTML Sandbox</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<!-- begin grid layout -->
			<img class="dylan" src="images/dylan.jpeg" alt="dylan"/>

			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2>Brewskis</h2>
						<p>A page dedicated to where we want our brewskis and what kind of brewskis we want.</p>
						<img class="random" src="https://unsplash.it/550" alt="random image"/>
					</div>
					<div class="col-md-6">
						<h2>Where We Want Our Beer</h2>
						<p>We want our beers with lunch and tacos</p>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.col-md-6 -->

				<div class="row">
					<div class="col-md-12">
						<h2>What Kind of Beer We Want</h2>
						<ul>
							<li>Modelo</li>
							<li>Heffeweissen</li>
							<li>Stout</li>
							<li>IPA</li>
						</ul>
					</div>
				</div>

				<!-- begin form -->
				<h3>Das Bier Request Form</h3>
				<form>
					<div class="form-group">
						<label for="txtName">Wie heissen Sie?</label>
						<input id="txtName" name="txtName" class="form-control" type="text" placeholder="Name">
					</div>
					<div class="form-group">
						<label for="emailEmail">Nterea Maelia</label>
						<input id="emailEmail" name="emailEmail" class="form-control" type="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="txtSubject">Bier</label>
						<input id="txtSubject" name="txtSubject" class="form-control" type="text" placeholder="Subject">
					</div>
					<div class="form-group">
						<label for="txtMessage">Message</label>
						<textarea id="txtMessage" name="txtMessage" class="form-control" cols="30" rows="10"></textarea>
					</div>
					<button class="btn btn-info" type="submit">Submit</button>
					<button class="btn btn-default" type="reset">Reset</button>
				</form>
			</div>
			<div class="col-md-7 col-md-offset-1">
				<h2>But Wait...WAT is beer</h2>
				<img src="images/smallduck.jpg" alt="WAT"/>
				<p><strong>Beer: </strong><em>noun: </em>an alcoholic beverage usually made from malted cereal grain (such
					as barley), flavored with hops, and brewed by slow fermentation</p>
				<p>a carbonated nonalcoholic or a fermented slightly alcoholic beverage with flavoring from roots or other plant parts birch beer</p>
				<p>fermented mash</p>
				<p>a drink of beer</p>
			</div>
		</div>
		</div> <!-- /.container -->
		</div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<small></small>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>