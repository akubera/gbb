<?php

class DB {


  public function __construct($filename) {
    if (!file_exists($filename)) {
      throw new \Exception("Could not open database at '{$filename}'\n");
    }
    $db = new SQLite3($filename);
//     $db->open($filename);
  }


  static function create($filename) {
    $db = new SQLite3($filename);
    $db->exec('
      CREATE TABLE people (name);
      INSERT INTO people VALUES ("Émilie");
      INSERT INTO people VALUES ("Zebra");
      INSERT INTO people VALUES ("Emile");
      INSERT INTO people VALUES ("Arthur");
    ');
  }

};