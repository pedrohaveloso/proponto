<?php

namespace App\Data\Database;

use App\Models\ClientCreateModel;
use App\Models\ClientUpdateModel;

interface DatabaseInterface
{
  public function createClient(ClientCreateModel $client): bool;
  public function getAllClient(): array|false;
  public function deleteClient(int $id): bool;
  public function updateClient(ClientUpdateModel $client): bool;
}

?>