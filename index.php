<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
				crossorigin="anonymous"></script>
		<!--<script src="TimezZ-master/src/timezz.min.js"></script>-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" 
				integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
		<script type="text/javascript">
			$(document).ready(function()
			{				
				var startDate = moment("03/02/2019", "DD/MM/YYYY");
				var endDate = moment().toDate();
				var result = endDate.diff(startDate, 'years');
				 $('.j-timer-1').html(result);				
				/* new TimezZ('.j-timer-1', {
					date: 'February 3, 2019 11:23:00',
					daysName: 'd',
					hoursName: 'h',
					minutesName: 'm',
					secondsName: 's',
					tagNumber: 'span',
					tagLetter: 'i',
					stop: false,
				});
				
				new TimezZ('.ariesa_days', {
					date: 'April 3, 2020 00:01:00',
					daysName: 'd',
					hoursName: 'h',
					minutesName: 'm',
					secondsName: 's',
					tagNumber: 'span',
					tagLetter: 'i',
					stop: false,
				}); */
			});
		</script>
		<style type="text/css">
			body {				
				background: url("https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-137468.jpg") no-repeat center center fixed; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
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
				padding:50px;
				margin:3px;
				font-family: 'Cinzel', serif;
			}
			
			.main_display {
				text-align:center;
			}
		</style>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" 
			  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">		
		<link href='https://fonts.googleapis.com/css?family=Cinzel:700' rel='stylesheet' type='text/css'>		
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<title>idayu X arief</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="timerblock col-lg-12 col-md-12 col-sm-12">
					<div class="main_display alert alert-primary" role="alert">						
						<h2>3<sup>rd</sup> February 2019, 11:23:00</h2>
						<hr/>
						<h2><div align="center" class="j-timer-1"></div></h2>
					</div>
				</div>				
			</div>		  
		</div>
		
		<div class="container">
			<div class="row">
				<div class="timerblock col-lg-12 col-md-12 col-sm-12">
					<div class="main_display alert alert-primary" role="alert">						
						<h2>Nur Ariesa Auliya</h2>
						<h2>3<sup>rd</sup> April 2020</h2>
						<hr/>
						<h2><div align="center" class="ariesa_days"></div></h2>
						<h2><div align="center" class="ariesa_month"></div></h2>
						<h2><div align="center" class="ariesa_year"></div></h2>
					</div>
				</div>				
			</div>		  
		</div>
	</body>
</html>
