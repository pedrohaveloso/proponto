<?php

namespace App\Routes;

use App\Controllers\ClientController;
use App\Utils\Methods;
use App\Utils\Router;

class Routes extends Router
{
  public function routes()
  {
    $this->createGroup(
      pathName: 'client',
      group: function () {
        $this->createRoute(
          path: '/client',
          method: Methods::post->value,
          function: function () {
            $controller = new ClientController();
            $status = $controller->createClient();

            if (!$status) {
              http_response_code(400);
              return;
            }

            return;
          }
        );

        $this->createRoute(
          path: '/client',
          method: Methods::get->value,
          function: function () {
            $controller = new ClientController();
            $status = $controller->getAllClient();

            if (!$status) {
              http_response_code(400);
              return;
            }

            echo json_encode($status);
            return;
          }
        );

        $this->createRoute(
          path: '/client',
          method: Methods::put->value,
          function: function () {
            $controller = new ClientController();
            $status = $controller->updateClient();

            if (!$status) {
              http_response_code(400);
              return;
            }

            return;
          }
        );

        $this->createRoute(
          path: '/client',
          method: Methods::delete->value,
          function: function () {
            $controller = new ClientController();
            $status = $controller->deleteClient();

            if (!$status) {
              http_response_code(400);
              return;
            }

            return;
          }
        );
      }
    );
  }
}

?>