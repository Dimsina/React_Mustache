<!DOCTYPE html>
<html lang="en">
<head>
	<title>Api Rush2 2view</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">Muse's Home</a>

		<div class="btn-group">
			<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Genres
			</button>
			<div class="dropdown-menu" id="item_genres">

			</div>
		</div>
		<a class="navbar-brand" href="index_albums.php">Albums bums</a>
		<a class="navbar-brand" href="index_artists.php">Welcoming Artists</a>
		<a class="navbar-brand" href="index_tracks.php">Tracks on Racks</a>
	</nav>
	<div class="container">
	<div class="row">
		<h3>Tracks</h3>
			<div class="col">
				<div id="item_tracks">

				</div>
			</div>
	</div>
	<script id="script_genres" type="text/template">
		<a class="dropdown-item" href="#">{{name}}</a>
	</script>
<script id="script_tracks" type="text/template">
		<hr>
		<div class="col-sm">
			<ul class="list-group">
				<li class="list-group-item list-group-item-dark"><a href="index_artists.php">Artists:</a> {{{artist}}}</li>
				<li class="list-group-item list-group-item-action">Song's name: {{{name}}}</li>
				<li class="list-group-item list-group-item-action">Number: {{{track_no}}}</li>
				<li class="list-group-item list-group-item-action">Duration: {{{duration}}}</li>
				<li class="list-group-item list-group-item-action">MP3: {{{mp3}}}
					<audio controls="controls"><source src="{{{mp3}}}" type="audio/mp3" /></audio></li>
				</ul>
			</div>
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="mustache.js"></script>
	<script type="text/javascript" src="api_mustache.js"></script>
	</body>
</html>