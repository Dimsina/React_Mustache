<?php


class Genre extends Database
{
	public $id;

	public $name;

	private $table_name = "genres";


	public function read()
	{
		$this->query('SELECT * FROM genres');
		return $this->resultSet();
	}


	public function read_one()
	{
		$this->query('SELECT * FROM genres WHERE id = :id');
		$this->bind(':id', $this->id);
		return $this->resultSet();
	}


	public function search($keyword)
	{
		$s = "%{$keyword}%";
		$this->query('SELECT * FROM genres WHERE id LIKE :id OR name LIKE :name');
		$this->bind(':id', $s);
		$this->bind(':name', $s);
		return $this->resultSet();
	}

	public function readPaging($from_record_num,$records_per_page){
		$this->query('SELECT * FROM genres ORDER BY id LIMIT ?, ?');
		$this->bind(1, $from_record_num);
		$this->bind(2, $records_per_page);
		return $this->resultSet();
	}

	public function count(){
		$this->query('SELECT count(*) AS "total_rows" FROM genres WHERE 1');
		return $this->resultSet()[0]['total_rows'];
	}
}
