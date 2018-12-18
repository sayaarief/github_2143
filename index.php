<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
				crossorigin="anonymous"></script>
		<script src="TimezZ-master/src/timezz.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" 
				integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
		<script type="text/javascript">
			$(document).ready(function()
			{		
				new TimezZ('.j-timer-1', {
					date: 'February 3, 2019 00:00:00',
					daysName: 'd',
					hoursName: 'h',
					minutesName: 'm',
					secondsName: 's',
					tagNumber: 'span',
					tagLetter: 'i',
					stop: false,
				});
				
				new TimezZ('.j-timer-2', {
					date: 'February 5, 2019 00:00:00',
					daysName: 'd',
					hoursName: 'h',
					minutesName: 'm',
					secondsName: 's',
					tagNumber: 'span',
					tagLetter: 'i',
					stop: false,
				});
			});
		</script>
		<style type="text/css">			
			.timer {
			  font-size: 70px;
			}

			.timer span {
			  color: #555;
			}

			.timer i {
			  color: #bbb;
			  font-size: 40px;
			}
			
			.timerblock {
				border: 2px solid black;
				border-radius: 5px;
				padding:50px;
				margin:10px;
				font-family: 'Cinzel', serif;
			}
		</style>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" 
			  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">		
		<link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="timerblock col col-lg-5 col-md-12 col-sm-12">
					<div class="alert alert-primary" role="alert">
						<h3>Apal</h3>
						<h4>3<sup>rd</sup> February 2019</h4>
					</div>
					<h2><div align="center" class="j-timer-1"></div></h2>
				</div>		
				<div class="timerblock col col-lg-5 col-md-12 col-sm-12">
					<div class="alert alert-success" role="alert">
						<h3>Binjai</h3>
						<h4>5<sup>th</sup> February 2019</h4>
					</div>
					<h2><div align="center" class="j-timer-2"></div></h2>
				</div>
			</div>		  
		</div>
	</body>
</html>