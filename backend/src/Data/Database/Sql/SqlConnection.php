<?php

namespace App\Data\Database\Sql;

use PDO;

class SqlConnection
{
  private static string $dbHost = 'localhost';
  private static string $dbName = 'proponto';
  private static string $username = 'root';
  private static string $password = '';

  public static function connectDb()
  {
    $pdo = new PDO(
      'mysql:host=' . self::$dbHost . ';dbname=' . self::$dbName,
      self::$username,
      self::$password,
      array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
      )
    );

    return $pdo;
  }
}

?>