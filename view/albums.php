<?php
require_once("DB.php");

$albums = 'SELECT * FROM albums ORDER BY name';

$tracks = 'SELECT * , albums.name AS "name" FROM tracks ORDER BY name';
/*le nom des genres et leur description*/

$genre = 'SELECT genres.id, genres_albums.genre_id, genres.name AS "Genre" FROM genres LEFT JOIN genres_albums on genres_albums.genre_id = genres.id ORDER BY genres.name';
/*les chansons et leurs albums*/
$tracksBYalbums = 'SELECT albums.name AS "name", tracks.name AS "tracks", tracks.duration AS "duration", tracks.album_id FROM tracks LEFT JOIN albums ON albums.id = tracks.album_id ORDER BY albums.name';
/*nombre de chanson par album*/
$nbr_tracks = 'SELECT albums.name AS "name", COUNT(tracks.track_no), tracks.album_id FROM tracks LEFT JOIN albums ON albums.id = tracks.album_id GROUP BY albums.name';
/* photo de l'album et l'annee de creation de l'album+ popularité*/

$alpopto = 'SELECT albums.name AS "name", UNIX_TIMESTAMP(albums.release_date, "###-##-####") AS "date", albums.cover AS "cover", popularity AS "success" FROM albums';

$all = 'SELECT albums.name AS "name", tracks.name AS "tracks", tracks.duration AS "duration", genres.name AS "genre", albums.cover AS "cover", popularity AS "success" FROM tracks LEFT JOIN albums ON albums.id = tracks.album_id LEFT JOIN genres_albums on genres_albums.album_id = albums.id LEFT JOIN genres ON genres.id = genres_albums.genre_id WHERE albums.id = $id';