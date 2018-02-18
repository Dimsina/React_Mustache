<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "database_music");

class Database
{
	static protected $dbh;
	protected $stmt;

	public function query($query)
	{
		$this->stmt = $this->get_dbh()->prepare($query);
	}

	protected function get_dbh()
	{
		if (self::$dbh === null) {
			try {
				self::$dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME .";charset=utf8", DB_USER, DB_PASS);
				self::$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (Exception $e) {
				echo 'Échec lors de la connexion : ' . $e->getMessage();
			}
		}
		return self::$dbh;
	}

	public function bind($param, $value, $type = null)
	{
		if (is_null($type)) {
			switch (true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}

	public function resultSet()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function execute()
	{
		$this->stmt->execute();
	}

	public function single()
	{
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function lastInsertId()
	{
		return $this->get_dbh()->lastInsertId();
	}

	public function beginTransaction()
	{
		return $this->get_dbh()->beginTransaction();
	}

	public function endTransaction()
	{
		return $this->get_dbh()->commit();
	}

	public function create($table, $fields = array())
	{
		$columns = implode(', ', array_keys($fields));
		$values = ':' . implode(', :', array_keys($fields));
		$query = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";
		$this->query($query);
		if ($this->stmt) {
			foreach ($fields as $key => $data) {
				$this->bind(':' . $key, $data);
			}
			$this->execute();
			return  $this->lastInsertId();
		}
	}

	public function find($table, $param){
		$query = "SELECT * FROM $table ";
		foreach ($param as $clause => $value){
			if($value !== ''){
				$query .= "$clause $value ";
			}
		}
		$this->query(trim($query));
		var_dump($this->stmt);
		return $this->resultSet();
	}

	protected function getClause($param)
	{
		if (is_array($param)) {
			$clause['WHERE'] = '';
			foreach ($param as $key => $value) {
				$clause['WHERE'] .= "$key = '$value' AND ";
			}
			$clause['WHERE'] = trim(rtrim($clause['WHERE'], 'AND '));
			return $clause;
		} else {
			return FALSE;
		}
	}

}
