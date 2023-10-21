<?php

namespace App\Controllers;

use App\Data\Database\Sql\DatabaseSql;
use App\Models\ClientCreateModel;
use App\Models\ClientGetModel;
use App\Models\ClientUpdateModel;
use App\Utils\BodyData;

const DATA = new DatabaseSql();

class ClientController
{
  public function createClient(): bool
  {
    $body = BodyData::getJsonData();

    $dataExistence = BodyData::checkDataExistenceInJson(
      $body,
      ['name', 'email', 'birth', 'phone', 'group'],
    );

    if (!$dataExistence)
      return false;

    $client = new ClientCreateModel(
      $body->name,
      $body->email,
      $body->birth,
      $body->phone,
      $body->group,
    );

    return DATA->createClient($client);
  }

  public function getAllClient(): array|false
  {
    $data = DATA->getAllClient();

    if (!$data)
      return false;

    $clients = [];

    foreach ($data as $client) {
      array_push(
        $clients,
        new ClientGetModel(
          $client['CL_ID'],
          $client['CL_NAME'],
          $client['CL_EMAIL'],
          $client['CL_BIRTH'],
          $client['CL_PHONE'],
          $client['CL_GROUP']
        )
      );
    }

    return $clients;
  }

  public function deleteClient(): bool
  {
    $body = BodyData::getJsonData();

    $dataExistence = BodyData::checkDataExistenceInJson(
      $body,
      ['id'],
    );

    if (!$dataExistence)
      return false;

    return DATA->deleteClient($body->id);
  }

  public function updateClient(): bool
  {
    $body = BodyData::getJsonData();

    $dataExistence = BodyData::checkDataExistenceInJson(
      $body,
      ['id', 'name', 'email', 'birth', 'phone', 'group'],
    );

    if (!$dataExistence)
      return false;

    $client = new ClientUpdateModel(
      $body->id,
      $body->name,
      $body->email,
      $body->birth,
      $body->phone,
      $body->group,
    );

    return DATA->updateClient($client);
  }
}

?>