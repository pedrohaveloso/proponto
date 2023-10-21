<?php

namespace App\Utils;

use App\Utils\Methods;
use App\Utils\RequestMethod;
use App\Utils\RequestPath;
use Closure;

class Router
{
  /**
   * Cria uma nova rota e a executa caso os métodos
   * e caminhos da requisição estejam de acordo.
   * 
   * @param string $path
   * @param string $method
   * @param Closure $function
   * 
   * @return void
   */
  public static function createRoute(
    string $path,
    string $method,
    Closure $function,
  ) {
    $requestMethod = RequestMethod::getRequestMethod();
    if ($requestMethod != $method)
      return;

    $requestUri = RequestPath::getRequestPath();
    if ($requestUri != $path)
      return;

    $function();
  }


  /**
   * Cria um grupo de rotas e o executa caso o caminho
   * da requisição esteja de acordo.
   * 
   * @param string $pathName
   * @param Closure $group
   *
   * @return void
   */
  public static function createGroup(
    string $pathName,
    Closure $group,
  ) {
    $requestUri = RequestPath::getRequestPath();

    $requestUri = explode('/', $requestUri);

    if ($requestUri[1] != $pathName)
      return;

    $group();
  }
}

?>