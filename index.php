<?php
/*
 * index.php
 *
 * Main access point to most web content.
 *
 */

// require_once '/path/to/lib/Twig/Autoloader.php';
// Twig_Autoloader::register();
// $loader = new Twig_Loader_Filesystem('/path/to/templates');

$req = @$_GET["URL"];

function do_index()
{
  include 'templates/index.php';
}

$routes = ['' => 'do_index'];

$routes[$req]();
echo "Requested url '". $req . "'\n";

require 'classes/post.class.php';

// $post = new Post('nofile');

