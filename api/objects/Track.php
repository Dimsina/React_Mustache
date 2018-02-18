<?php


class Track extends Database
{
	public $id;

	public $album_id;

	public $name;

	public $track_no;

	public $duration;

	public $mp3;

	private $table_name = "tracks";

	public function read(){
		$this->query('SELECT  tracks.id AS \'id\', albums.name AS \'album\', artists.name AS \'artist\',tracks.name AS \'name\', tracks.track_no AS \'track_no\', SEC_TO_TIME(tracks.duration) AS \'duration\',DATE_FORMAT(FROM_UNIXTIME(albums.release_date),\'%Y-%m-%d\') AS "release_date", tracks.mp3 as \'mp3\' FROM `tracks` INNER JOIN albums ON tracks.album_id = albums.id INNER JOIN artists ON artists.id = albums.artist_id');
		return $this->resultSet();
	}

	public function read_one(){
		$this->query('SELECT  tracks.id AS \'id\', albums.name AS \'album\', artists.name AS \'artist\',tracks.name AS \'name\', tracks.track_no AS \'track_no\', SEC_TO_TIME(tracks.duration) AS \'duration\',DATE_FORMAT(FROM_UNIXTIME(albums.release_date),\'%Y-%m-%d\') AS "release_date" ,tracks.mp3 as \'mp3\' FROM `tracks` INNER JOIN albums ON tracks.album_id = albums.id INNER JOIN artists ON artists.id = albums.artist_id WHERE tracks.id = :id');
		$this->bind(':id', $this->id);
		return $this->resultSet();
	}

	public function search($keyword)
	{
		$s = "%{$keyword}%";
		$this->query('SELECT tracks.id AS \'id\', albums.name AS \'album\', artists.name AS \'artist\',tracks.name AS \'name\',
 		tracks.track_no AS \'track_no\', SEC_TO_TIME(tracks.duration) AS \'duration\',DATE_FORMAT(FROM_UNIXTIME(albums.release_date),\'%Y\') AS "release_date" ,tracks.mp3 as \'mp3\' 
 		FROM `tracks` 
 		INNER JOIN albums ON tracks.album_id = albums.id 
 		INNER JOIN artists ON artists.id = albums.artist_id 
 		WHERE tracks.name LIKE :name
 		OR albums.name LIKE :album
 		OR artists.name LIKE :artists
 		OR DATE_FORMAT(FROM_UNIXTIME(albums.release_date),\'%Y\') LIKE :date
 		');
		$this->bind(':name', $s);
		$this->bind(':album', $s);
		$this->bind(':artists', $s);
		$this->bind(':date', $s);
		return $this->resultSet();
	}
	public function readPaging($from_record_num,$records_per_page){
		$this->query('SELECT  tracks.id AS \'id\', albums.name AS \'album\', artists.name AS \'artist\',tracks.name AS \'name\', tracks.track_no AS \'track_no\', SEC_TO_TIME(tracks.duration) AS \'duration\',DATE_FORMAT(FROM_UNIXTIME(albums.release_date),\'%Y-%m-%d\') AS "release_date", tracks.mp3 as \'mp3\' FROM `tracks` INNER JOIN albums ON tracks.album_id = albums.id INNER JOIN artists ON artists.id = albums.artist_id ORDER BY id LIMIT ?, ?');
		$this->bind(1, $from_record_num);
		$this->bind(2, $records_per_page);
		return $this->resultSet();
	}

	public function count(){
		$this->query('SELECT count(*) AS "total_rows" FROM genres WHERE 1');
		return $this->resultSet()[0]['total_rows'];
	}
}