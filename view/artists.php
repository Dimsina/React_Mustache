<?php
require_once("DB.php");

$artists = 'SELECT * FROM artists ORDER BY name';

$description = 'SELECT name AS "Name of artists", description AS "Description of the album" FROM artists ORDER BY description';

$bio = 'SELECT name AS "Name of artists",bio AS "Biography" FROM artists ORDER BY artists.name';

$albums = 'SELECT * FROM albums LEFT JOIN artists ON albums.artist_id = artists.id ORDER BY artists.name';

$photo = 'SELECT name AS "Name of artists", photo AS "Photos" FROM artists ORDER BY artists.name';
/*nom de l'artiste avec leurs albums la biography et la photo du groupe*/
$all = 'SELECT artists.id AS "Id", artists.name AS "Name of artists", albums.name AS "Name of albums", artists.description AS "Description of the album" , bio AS "Biography", photo AS "Photos" FROM artists INNER JOIN albums ON artists.id = albums.artist_id ORDER BY artists.name';