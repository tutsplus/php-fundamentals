<?php namespace App;

# PSUEDO CODE!!

class Database {
	protected $conn;
	protected $table;

	public function __construct()
	{
		// connect to the database
		$this->conn = 'connected';
	}

	public function set_table($table)
	{
		$this->table = $table;
	}

	public function insert()
	{
		//echo $this->conn;
		return 'inserted rows';
	}

	public function get($limit = 10)
	{
		return 'got the rows from the ' . $this->table . ' table.';
	}

	public function where($key, $value)
	{
		return "Return where $key equals $value.";
	}
}

$db = new Database();
$db->set_table('users');
$rows = $db->get(5);
echo $rows;