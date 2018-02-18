<!doctype html>
<html lang="en">
<head>
	<title>API Rush2</title>
	<link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
<div class="section">
	<div class="container">
	<div class="row">
		<a href="index.php" class="waves-effect waves-light btn">Home</a>
		<h1>Albums and Alabum bums</h1>
		<table>
			<thead>
				<thead>
				<tr>
					<th>Name</th>
					<th>Description</th>
					<th>Cover</th>
					<th>Release date</th>
					<th>Popularity</th>
				</tr>
			</thead>
			<tbody id="item_albums">
			</tbody>
		</table>
	</div>
</div>
</div>
<div class="container">
	<div class="row">
		<div class="col s8">
			<ul class="pagination">
		    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
		    <li class="active"><a href="#!">1</a></li>
		    <li class="waves-effect"><a href="/tests/Projet-Web_Rush_2/api/albums/read_paging.php?page=2">2</a></li>
		    <li class="waves-effect"><a href="/tests/Projet-Web_Rush_2/api/albums/read_paging.php?page=3">3</a></li>
		    <li class="waves-effect"><a href="/tests/Projet-Web_Rush_2/api/albums/read_paging.php?page=4">4</a></li>
		    <li class="waves-effect"><a href="/tests/Projet-Web_Rush_2/api/albums/read_paging.php?page=5">5</a></li>
		    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  		</ul>
		</div>	 
	</div>
</div>

	<script id="script_albums" type="text/template">
			
		<tr>
			<td>{{{name}}}</td>
			<td> {{{description}}}</td>
			<td><a href="{{{cover}}}"><img src="{{{cover_small}}}"></a></td>
			<td> {{{release_date}}}</td>
			<td>{{{popularity}}}</td>
		</tr>
	
	</script>

	</div>
</div>
</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="mustache.js"></script>
	<script type="text/javascript" src="api_mustache.js"></script>

</body>
</html>