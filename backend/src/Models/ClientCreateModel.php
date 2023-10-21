<?php

namespace App\Models;

class ClientCreateModel
{
  public function __construct(
    string $name,
    string $email,
    string $birth,
    string $phone,
    string $group,
  ) {
    $this->name = $name;
    $this->email = $email;
    $this->birth = $birth;
    $this->phone = $phone;
    $this->group = $group;
  }

  public string $name;
  public string $email;
  public string $birth;
  public string $phone;
  public string $group;
}

?>