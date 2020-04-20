<?php  
	class dbConnect 
	{
		static function getConnection() 
		{
			$connectionString = "mysql:host=localhost;dbname=unn_v031587";
			$userName = "unn_v031587";
			$password = "Hayden2006";
			try 
			{
				$db = new PDO($connectionString, $userName, $password);
				return $db;
			}
			catch (PDOException $exception)
			{
				echo "Failed to connect to database ".$exception->getMessage();
				return null;
			}
		}
	}
?>