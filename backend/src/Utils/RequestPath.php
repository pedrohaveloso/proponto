<?php

namespace App\Utils;

class RequestPath
{
  /**
   * Retorna o `path` da requisição.
   * 
   * @return string
   */
  public static function getRequestPath(): string
  {
    $requestUri = $_SERVER['REQUEST_URI'];

    return $requestUri;
  }
}

?>