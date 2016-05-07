<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<!-- sets IE rendering to IE-EDGE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!-- sets viewport width to device width, scaling 1:1 -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- fontawesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- OUR CUSTOM CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<!-- ADD YOUR JAVASCRIPT/JQUERY DOWN HERE -->

		<title>Hello Bootstrap</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">

			<header>
				<div class="container">
					<!-- begin bootstrap navbar -->
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<i class="fa fa-th fa-2x fa-spin" aria-hidden="true"></i>
						</button>
						<a class="navbar-brand" href="#">Stancenation site bootstrap remodel</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="main-menu">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More Items <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="http://www.stancenation.com/">StanceNation</a></li>
									<li><a href="http://www.stancenation.com/2015/06/22/ultra-box-hiroshima-hirotaka-fujiwaras-bmw-2002-tii/">BMW</a></li>
									<li><a href="http://www.stancenation.com/2012/06/30/tandem-of-die/">240</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</header>

			<main>
				<div class="container">
					<div class="row">

						<!--welcome section-->
						<div class="col-xs-12 well text-center">
							<h1>Jordan Vinson: Car Guru</h1>
							<p>I'm going to model this after stancenation.com because it's my favorite site and I think the layout is incredible</p>
						</div>

						<!--1st content section-->
						<div class="row">
							<div class="col-md-3">
								<div class="well">
									<h4>Section 1</h4>
									<img class="flt-center img-tiny" src="images/bmw.jpg" alt="bmwbody" height="175" widgth="100">
								</div>
							</div>
							<div class="col-md-3">
								<div class="well">
									<h4>Section 2</h4>
									<p>My left donut is missing, as is my right use lap as chair. Lick the other cats scamper sit in box meowzer!. Immediately regret falling into bathtub unwrap toilet paper hola te quiero. Eat from dog's food white cat sleeps on a black shirt hide head under blanket so no one can see.</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="well">
									<h4>Section 3</h4>
									<p>My left donut is missing, as is my right use lap as chair. Lick the other cats scamper sit in box meowzer!. Immediately regret falling into bathtub unwrap toilet paper hola te quiero. Eat from dog's food white cat sleeps on a black shirt hide head under blanket so no one can see.</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="well">
									<h4>Section 4</h4>
									<p>My left donut is missing, as is my right use lap as chair. Lick the other cats scamper sit in box meowzer!. Immediately regret falling into bathtub unwrap toilet paper hola te quiero. Eat from dog's food white cat sleeps on a black shirt hide head under blanket so no one can see.</p>
								</div>
							</div>
						</div>

						<!--2nd content section-->
						<div class="row">
							<div class="col-md-6">
								<div class="well">
									<h4>section 5</h4>
									<p>If a demo car is the résumé for a shop – Ultra Box Hiroshima certainly has a good chance of getting called back. Ultra Box of Hiroshima, Japan has been in operation since May of 2002. Ultra Box specializes in European makes, hence the shops two demo cars: this pristine BMW 2002tii and a VW Golf 2. The BMW serves as a rolling representation of the shop’s expertise. Hirotaka Fujiwara set out to build his dream car out of the vintage Bavarian for his own satisfaction along with its commercial purpose.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="well">
									<h4>section 6</h4>
									<p>Let’s paint the picture to one of the most exciting and sleepless weeks to ever happen in my life. It’s midnight and I just landed in Medford, Oregon, a small town just a few hours north of the Oregon and California border. The weather is inviting and a complete relief compared to the typical death inducing heat of Phoenix, Arizona. As I make my way curbside I immediately spot the chaperones appointed for my trip; Justin Shreeve and Joe Ayala, better known as their Internet persona Tandem Of Die. Obligatory greetings, handshakes and complaints about long flights are addressed then we’re on our way. Having only heard stories about these guys on the Internet, I really wasn’t sure what to expect for my time here. As I look out the window and gaze upon a dark and quiet Medford, silence is broken by Joe. “Hey, we’re going to make a quick stop at the liquor store ’cause we are running low on beer, it’s going to be a long night working on the cars…”. I knew I was going to get along with these guys!</p>
								</div>
							</div>
						</div>
					</div><!--/.row-->
				</div><!--/.container-->
			</main>

		</div>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="foot-content">
							First bootstrap test
						</div>
					</div>
					<div class="col-md-6">
						<div class="foot-content">
							CSS is fun
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="copyright text-center">
							&copy; 2016 car guru!
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>