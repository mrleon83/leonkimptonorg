<?php
class Database
{
	//db credentials removed for github

	//connection
	public function connect() 
	{
		try
		{
		$pdo = new PDO("mysql:host=".$this->host. ";dbname=".$this->dbname, $this->username, $this->password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "connected";
		return $pdo;
		}
		catch(PDOException $e)
		{
			echo "Connection failed " . $e->getMessage();
		}
	}

	//prepared mysql query
	public function query2($query)
	{
		$statement = self::connect()->prepare($query);
		$statement->execute();
		$data = $statement->fetchAll();
		return $data;
	}
}





