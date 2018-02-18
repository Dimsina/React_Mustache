<!doctype html>
<html lang="en">
<head>
	<title>API Rush2</title>
	<link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
	<div class="section">
		<div class="row">
			<div class="col s12">
				<div class="row">
					<div class="input-field col s10">
						<i class="material-icons prefix">Search:</i>
						<input action=" index_search.php" type="text" id="autocomplete-input" class="autocomplete" style="
						margin-left:  10%;
						">
						<label for="autocomplete-input">Autocomplete</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col s4">	
				<a href="index_albums.php" class="waves-effect waves-light btn">Albums</a>	

				<h3>Alabum bums</h3>
				<span class="section"></span>		
			<div id="item_albums">

			</div>
			</div>
				<div class="col s4">	
				<a href="index_artists.php" class="waves-effect waves-light btn">Artists</a>

				<h3>Welcoming Artists</h3>
				<span class="section"></span>		
			<div id="item_artists">

			</div>
			</div>
		<div class="col s4">	
				<a href="index_tracks.php" class="waves-effect waves-light btn">Tracks</a>	

				<h3>Tracks on Racks</h3>
				<span class="section"></span>		
			<div id="item_tracks"">

			</div>
			</div>
		</div>
	</div>

	<script  id="script_albums" type="text/template">
	<div>
		<ul class="collection">
			<li class="collection-item avatar">
				<img src="{{{cover_small}}}" alt="cover small" class="circle">
				<span class="title">Album name: {{name}}</span>
				<p>Description: <br>
					{{{description}}}
				</p>
				<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
			</li>
			<li class="collection-item avatar">
				<i class="material-icons circle">folder</i>
				<span class="title">Release date: {{{release_date}}}</span>
				<p>Popularity: {{{popularity}}}<br>
					Cover small:</strong><a href="{{{cover}}}"><img src="{{{cover_small}}}"></a>
				</p>
				<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
			</li>

		</ul>
	</div>
	</script>

	<script  id="script_artists" type="text/template">
	<div>
		<ul class="collection">
			<li class="collection-item avatar">
				<img src="{{{photo}}}" alt="photo artist" class="circle">
				<span class="title">Artists: {{{name}}}</span>
				<p>Description: <br>
					{{{description}}}
				</p>
				<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
			</li>
			<li class="collection-item avatar">
				<i class="material-icons circle">folder</i>
				<span class="title">Biography: {{{bio}}}</span>
				<p>Popularity: {{{popularity}}}<br>
					Cover small:</strong><a href="{{{photo}}}"><img src="{{{photo}}}"></a>
				</p>
				<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
			</li>

		</ul>
	</div>
	</script>

<script  id="script_tracks" type="text/template">
	<div>
		<ul class="collection">
			<li class="collection-item avatar">
				<img src="{{{photo}}}" alt="photo artist" class="circle">
				<span class="title">Artists: {{{artists}}}</span>
				<p>Song's name: <br>
					{{{name}}}
				</p>
				<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
			</li>
			<li class="collection-item avatar">
				<i class="material-icons circle">folder</i>
				<span class="title">Duration: {{{duration}}}</span>
				<p>N°: {{{tracks_no}}}<br>
					MP3: <audio controls="controls"><source src="{{{mp3}}}" type="audio/mp3" /></audio>
				</p>
				<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
			</li>

		</ul>
	</div>
	</script>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="mustache.js"></script>
	<script type="text/javascript" src="api_mustache.js"></script>

</body>
</html>