<?php
require_once("DB.php");

$search_tracks = 'SELECT name AS "tracks" FROM tracks ORDER BY name';

$search_album = 'SELECT name AS "Album name" FROM albums ORDER BY name';

$search_artists = 'SELECT name AS "Artists" FROM artists ORDER BY name';
/*ici genre est déjà couplée a d'autres table
*/$search_genre = 'SELECT genres.name AS "Genre" FROM genres LEFT JOIN genres_albums on genres_albums.genre_id = genres.id ORDER BY genres.name';
/*ou celle-la pour simplement le nom du genre*/
$search_genre = 'SELECT name AS "Genre" FROM genres ORDER BY name';