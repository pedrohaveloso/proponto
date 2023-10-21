<?php

namespace App\Utils;

class RequestMethod
{
  /**
   * Retorna o método da requisição.
   * 
   * @return string
   */
  public static function getRequestMethod(): string
  {
    $method = $_SERVER['REQUEST_METHOD'];

    return $method;
  }
}

?>