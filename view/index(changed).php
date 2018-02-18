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
						<input type="text" id="autocomplete-input" class="autocomplete" style="
    margin-left:  10%;
">
						<label for="autocomplete-input">Autocomplete</label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="section">
				<div class="col s2">
					<a href="index_albums.php" class="waves-effect waves-light btn">Albums</a>	
				</div>
				<div class="col s8">
					<h3>Alabum bums</h3>
					<span class="section"></span>
					<ul class="collapsible" data-collapsible="accordion">
						
						<li>
							<div class="collapsible-header"><i class="material-icons"></i>
								<div id="item_albums">

								</div>
								<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="cols s2">
					<a class="btn-floating btn-large waves-effect waves-light red">Like</a>
				</div>
			</div>		
		</div>

		<div class="row">
			<div class="section">
				<div class="col s2">
					<a href="index_artists.php" class="waves-effect waves-light btn">Artists</a>
				</div>
				<div class="col s8">
					<h3>Welcoming Artists</h3>
					<span class="section"></span>
					<ul class="collapsible" data-collapsible="accordion">
						
						<li>
							<div class="collapsible-header"><i class="material-icons"></i>
								<div id="item_artists">

								</div>
								<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col s2">
					<a class="btn-floating btn-large waves-effect waves-light red">Like</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="section">
				<div class="col s2">
					
					<a href="index_tracks.php" class="waves-effect waves-light btn">Tracks</a>
				</div>
				<div class="col s8">
					<h3>Tracks on Racks</h3>
					<span class="section"></span>
					<ul class="collapsible" data-collapsible="accordion">

						<li>
							<div class="collapsible-header"><i class="material-icons"></i>

								<div id="item_tracks">

									<div class="collapsible-body">

									</div>
								</div>
							</div>  
						</li>
					</ul>
				</div>
				<div class="col s2">
					<a class="btn-floating btn-large waves-effect waves-light red">Like</a>
					<div id="play_track">
						
					</div>
				</div>
			</div>
		</div>


	</div>


	<script id="script_albums" type="text/template">
		<hr>
		<ul>
			<li><strong>Cover small:</strong><a href="{{{cover}}}"><img src="{{{cover_small}}}"></a></li>
			<li><strong>Album name:</strong> {{name}}</li>
			<li><strong>Description:</strong> {{{description}}}</li>
			
			<li><strong>Release date:</strong> {{{release_date}}}</li>
			<li><strong>Popularity:</strong> {{{popularity}}}</li>
			
		</ul>


	</script>

	<script id="script_artists" type="text/template">
		<hr>
		<ul>
			<li><strong>Artists:</strong> {{{name}}}</li>
			<li><strong>Description:</strong> {{{description}}}</li>
			<li><strong>Biography:</strong> {{{bio}}}</li>
			<li><img src="{{{photo}}}"></li>
		</ul>


	</script>

	<script id="script_tracks" type="text/template">
		<hr>
		<ul>
			<li><strong>Artists:</strong> {{{artists}}}</li>
			<li><strong>Song's name:</strong> {{{name}}}</li>
			<li><strong>Number:</strong> {{{tracks_no}}}</li>
			<li><strong>Duration:</strong> {{{duration}}}</li>
			<li><strong>MP3:</strong>{{{mp3}}}
			<audio controls="controls"><source src="{{{mp3}}}" type="audio/mp3" /></audio></li>
		</ul>
		
	</script>

<!-- <audio><source src="{{{mp3}}}" type="audio/mpeg" class="mp3"></audio> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="mustache.js"></script>
	<script type="text/javascript" src="api_mustache.js"></script>
	<script type="text/javascript" src="collapsible.js">
	
</script>
</body>
</html>