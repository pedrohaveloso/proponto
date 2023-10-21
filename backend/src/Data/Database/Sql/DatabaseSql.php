<?php

namespace App\Data\Database\Sql;

use App\Data\Database\DatabaseInterface;
use App\Models\ClientCreateModel;
use App\Models\ClientUpdateModel;
use Exception;
use PDO;

class DatabaseSql extends SqlConnection implements DatabaseInterface
{
  public function createClient(ClientCreateModel $client): bool
  {
    $db = self::connectDb();

    $script = <<<SCRIPT
      INSERT INTO TB_CLIENT (
        CL_NAME, CL_EMAIL, CL_BIRTH, CL_PHONE, CL_GROUP 
      ) VALUES (
        :name, :email, :birth, :phone, :group
      );
    SCRIPT;

    $query = $db->prepare($script);

    $query->bindValue(":name", $client->name);
    $query->bindValue(":email", $client->email);
    $query->bindValue(":birth", $client->birth);
    $query->bindValue(":phone", $client->phone);
    $query->bindValue(":group", $client->group);

    try {
      $status = $query->execute();
    } catch (Exception $e) {
      return false;
    }

    return $status;
  }

  public function getAllClient(): array|false
  {
    $db = self::connectDb();

    $script = <<<SCRIPT
      SELECT * FROM TB_CLIENT;
    SCRIPT;

    $query = $db->prepare($script);
    $query->execute();
    $clients = $query->fetchAll(PDO::FETCH_ASSOC);

    return $clients;
  }

  public function deleteClient(int $id): bool
  {
    $db = self::connectDb();

    $script = <<<SCRIPT
      DELETE FROM TB_CLIENT WHERE CL_ID = :id;
    SCRIPT;

    $query = $db->prepare($script);

    $query->bindValue(":id", $id);

    $status = $query->execute();

    return $status;
  }

  public function updateClient(ClientUpdateModel $client): bool
  {
    $db = self::connectDb();

    $script = <<<SCRIPT
      UPDATE TB_CLIENT 
      SET CL_NAME = :name, CL_EMAIL = :email, 
      CL_BIRTH = :birth, CL_PHONE = :phone, CL_GROUP = :group
      WHERE CL_ID = :id; 
    SCRIPT;

    $query = $db->prepare($script);

    $query->bindValue(":id", $client->id);
    $query->bindValue(":name", $client->name);
    $query->bindValue(":email", $client->email);
    $query->bindValue(":birth", $client->birth);
    $query->bindValue(":phone", $client->phone);
    $query->bindValue(":group", $client->group);

    $status = $query->execute();

    return $status;
  }
}

?>