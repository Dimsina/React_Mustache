<!doctype html>
<html lang="en">
<head>
	<title>API Rush2</title>
	<link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
	<div class="section">
		<div class="container-fluid">
			<div class="row">
				<div class="col S2">
					<h3> Type of :</h3>
				</div>

				<div class="container">
					<div class="section">
						<div class="row">
							<div class="col s12">
								<nav>
									<div id="item_genres">

									</div>
								</nav>
							</div>
						</div>
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
<script id="script_genres" type="text/template">
	
	 <a href="#!" class="breadcrumb">{{name}}</a>
	
</script>

	<script  id="script_albums" type="text/template">
	<div>
		<ul class="collection">
			<li class="collection-item avatar">
				<img src="{{{cover_small}}}" alt="cover small" class="circle">
				<span class="title">Album name: {{name}}</span>
				<p>Genre: {{{genre}}} </p>
				<p>Description: <br>
					{{{description}}}
				</p>
				
			</li>
			<li class="collection-item avatar">
				<i class="material-icons circle">folder</i>
				<span class="title">Release date: {{{release_date}}}</span>
				<p>Popularity: {{{popularity}}}<br>
					Cover small:</strong><a href="{{{cover}}}"><img src="{{{cover_small}}}"></a>
				</p>
				
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
				
			</li>
			<li class="collection-item avatar">
				<i class="material-icons circle">folder</i>
				<span class="title">Biography: {{{bio}}}</span>
				<p>Popularity: {{{popularity}}}<br>
					Cover small:</strong><a href="{{{photo}}}"><img src="{{{photo}}}"></a>
				</p>
				
			</li>

		</ul>
	</div>
	</script>

<script  id="script_tracks" type="text/template">
	<div>
		<ul class="collection">
			<li class="collection-item avatar">
				<i class="material-icons circle green">Aw!</i>
				<span class="title">Artists: {{{artists}}}</span>
				<p>Song's name: <br>
					{{{name}}}
				</p>
				
			</li>
			<li class="collection-item avatar">
				<i class="material-icons circle">Oi!</i>
				<span class="title">Duration: {{{duration}}}</span>
				<p>N°: {{{tracks_no}}}<br>
					MP3: <audio controls="controls"><source src="{{{mp3}}}" type="audio/mp3" /></audio>
				</p>
				
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