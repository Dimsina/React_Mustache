<?php
/**
 * Created by PhpStorm.
 * User: $H9V000-FVGTHRVM61R4
 * Date: 17/02/2018
 * Time: 11:03
 */


class Album extends Database
{
	public $id;

	public $artist_id;

	public $name;

	public $description;

	public $cover;

	public $cover_small;

	public $release_date;

	public $popularity;

	private $table_name = "albums";

	public function read(){
		$this->query('SELECT albums.id AS "id", albums.name AS "name", genres.name AS "genre", tracks.name AS "tracks", albums.cover 
		AS "cover", albums.cover_small AS "cover_small", albums.description AS "description" , DATE_FORMAT(FROM_UNIXTIME(albums.release_date),\'%Y-%m-%d\') AS "release_date" ,albums.popularity 
		AS "popularity" FROM albums 
		LEFT JOIN tracks ON albums.id = tracks.album_id 
		LEFT JOIN genres_albums ON genres_albums.album_id = albums.id 
		LEFT JOIN genres ON genres.id = genres_albums.genre_id');
		return $this->resultSet();
	}

	public function read_one(){
		$this->query('SELECT albums.id AS "id", albums.name AS "name", genres.name AS "genre", tracks.name AS "tracks", albums.cover 
		AS "cover", albums.cover_small AS "cover_small", albums.description as "description" , DATE_FORMAT(FROM_UNIXTIME(albums.release_date),\'%Y-%m-%d\') as "release_date" ,albums.popularity 
		AS "popularity" FROM albums 
		LEFT JOIN tracks ON albums.id = tracks.album_id 
		LEFT JOIN genres_albums on genres_albums.album_id = albums.id 
		LEFT JOIN genres ON genres.id = genres_albums.genre_id WHERE albums.id = :id');
		$this->bind('id',$this->id);
		return $this->resultSet();
	}

	public function readPaging($from_record_num,$records_per_page){
		$this->query('SELECT albums.id AS "id", albums.name AS "name", genres.name AS "genre", albums.cover 
		AS "cover", albums.cover_small AS "cover_small", albums.description AS "description" , DATE_FORMAT(FROM_UNIXTIME(albums.release_date),\'%Y-%m-%d\') AS "release_date" ,albums.popularity 
		AS "popularity" FROM albums 
		LEFT JOIN genres_albums ON genres_albums.album_id = albums.id 
		LEFT JOIN genres ON genres.id = genres_albums.genre_id ORDER BY albums.id LIMIT ?, ?');

		$this->bind(1, $from_record_num);
		$this->bind(2, $records_per_page);
		return $this->resultSet();
	}

	public function count(){
		$this->query('SELECT count(*) AS "total_rows" FROM albums WHERE 1');
		return $this->resultSet()[0]['total_rows'];
	}


}