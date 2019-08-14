<?php
basename($_SERVER['PHP_SELF']) == 'database.class.php' ? die('No direct script access allowed') : '';

class Database
{

	protected static $connection = null;

	protected static $credentials = null;

	private static function connect()
	{
		try {
			$connection = mysqli_init();
			$connection->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);
			@$connection->real_connect(
				self::$credentials['hostname'],
				self::$credentials['user'],
				self::$credentials['password'],
				self::$credentials['database']
			);
			
			self::$connection = $connection;
		}
		catch (Exception $e) {

		}
	}

	public static function getConnection($credentials = null)
	{
		if (self::$connection == null) {
			if (self::$credentials == null) {
				self::$credentials = $credentials;
			}
			self::connect();
		}

		return self::$connection;
	}
}