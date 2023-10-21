<?php

namespace App\Utils;

class BodyData
{
  /**
   * Obtém o corpo da requisição em um JSON.
   * 
   * @return mixed
   */
  public static function getJsonData(): mixed
  {
    $jsonData = json_decode(file_get_contents('php://input'));

    return $jsonData;
  }

  /**
   * Checa a existência de uma lista de dados em um JSON.
   * 
   * @param object|null $jsonData
   * @param array<string> $data
   * 
   * @return bool
   */
  public static function checkDataExistenceInJson(
    object|null $jsonData,
    array $data
  ): bool {
    foreach ($data as $value) {
      if (!isset($jsonData->$value)) {
        return false;
      }
    }

    return true;
  }
}