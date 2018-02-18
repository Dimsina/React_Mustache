
$(document).ready(function(){

$.getJSON("http://localhost/tests/Projet-Web_Rush_2/api/artists/read_paging.php", {   
}).done(function(data){
    $.each(data,function(key,value){
       artists(value.id,value.name, value.description, value.bio, value.photo);
    });
})

$.getJSON("http://localhost/tests/Projet-Web_Rush_2/api/albums/read_paging.php", {	
}).done(function(data){
	$.each(data, function(key,value){
		albums(value.id, value.name, value.description, value.cover,
			value.cover_small, value.release_date, value.popularity);
	});
})

$.getJSON("http://localhost/tests/Projet-Web_Rush_2/api/tracks/read_paging.php", {
}).done(function(data){
	$.each(data, function(key,value){
		tracks(value.id, value.album,value.artist, value.name, value.track_no, value.duration, value.mp3);
	});
}); 

$.getJSON("http://localhost/tests/Projet-Web_Rush_2/api/genres/read.php",{
}).done(function(data){
	$.each(data, function(key,value){
		genres(value.name);
	});
})
});

function genres(name){
	var template_genres = $('#script_genres').html();
	var html_genres = Mustache.render(template_genres, {name});
	$('#item_genres').append(html_genres);
}

function albums(id, name, description, cover, cover_small, release_date, popularity){
	var template_albums = $('#script_albums').html();
	var html_albums = Mustache.render(template_albums, {
			id,
			name,
			description,
			cover,
			cover_small,
			release_date,
			popularity
	});
	$('#item_albums').append(html_albums);
};

function artists(id,name,description,bio,photo){
	var template_artists = $('#script_artists').html();
	var html_artists = Mustache.render(template_artists, {
		
			id,
			name,
			description,
			bio,
			photo
		});
		$('#item_artists').append(html_artists);
};

function tracks(id, album, artist, name, track_no, duration, mp3){
	var template_tracks = $('#script_tracks').html();	
	var html_tracks = Mustache.render(template_tracks, {
	
			id,
			album,
			artist,
			name,
			track_no,
			duration,
			mp3
		});
	$('#item_tracks').append(html_tracks);
};
