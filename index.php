<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet"
				href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
				crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

		<!-- jQuery v3.0 -->
		<script> src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"</script>

		<!-- my javascript -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="js/geo.js"></script>

			<link type="text/css"
				src="css/style.css"
				rel="stylesheet">



		<title>JS Assignment</title>

	</head>

	<body>

		<main>
			<!-- div class="container">
				<form action="" method="post">

					<input type="text" id="profileAddress" placeholder="street"><br/>
					<input type="text" id="profileCity" placeholder="city"><br/>
					<input type="text" id="profileState" placeholder="state"><br/>
					<input type="text" id="profileZip" placeholder="zipcode"><br/>
					<input type="submit" value="register" -->
			<form action="" onsubmit="GEO()">

			<div id="floating-panel">
				<input id="address" type="textbox" value="Albuquerque, New Mexico">
				<input id="submit" type="button" value="submit">
			</div>
			<div id="map"></div>

			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKnaWmG1Pe2j6rYGfLMEY1_Mdbxs-IpeY&callback=initMap"> </script>

			<form>
		<!--/div-->
		</main>
	</body>
</html>

