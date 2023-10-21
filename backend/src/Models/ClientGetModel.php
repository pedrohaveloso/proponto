<?php

namespace App\Models;

class ClientGetModel
{
  public function __construct(
    int $id,
    string $name,
    string $email,
    string $birth,
    string $phone,
    string $group,
  ) {
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->birth = $birth;
    $this->phone = $phone;
    $this->group = $group;
  }

  public int $id;
  public string $name;
  public string $email;
  public string $birth;
  public string $phone;
  public string $group;
}

?>