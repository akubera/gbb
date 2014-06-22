<?php

class Post {


  public function __construct($filename) {
    if (!file_exists($filename)) {
      throw new \Exception("Could not open post file '{$filename}'\n");
    }
    $contents = file_get_contents($filename);
//     $
  }

};