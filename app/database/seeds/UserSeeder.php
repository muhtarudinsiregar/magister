<?php

class UserSeeder extends DatabaseSeeder {

  public function run(){
    $users = [
      [
        "username" => "admin",
        "password" => Hash::make("admisi2015"),
        "email"    => "admisi.pps.fti.uii@gmail.com"
      ]
    ];

    foreach ($users as $user) {
      User::create($user);
    }
  }
}