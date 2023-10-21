<?php

namespace App\Utils;

enum Methods: string
{
  case post = 'POST';
  case get = 'GET';
  case put = 'PUT';
  case delete = 'DELETE';
}

?>