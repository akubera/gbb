<?php
/*
 * index.php
 *
 * Main access point to most web content.
 *
 */

require './lib/twig/Autoloader.php';
require 'classes/post.class.php';
require 'classes/db.class.php';

/* Load Twig Classes */
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('./templates/');
$twig = new Twig_Environment($loader);

/* Parse Request */
$req = @$_GET["url"];
echo "Requested url '$req'\n";

// $routes = ['' => 'do_index'];

// $routes[$req]();
// echo "Requested url '". $req . "'\n";

DB::Create("blog.db");


// Load the database
$db = new DB("blog.db");


$do_index = function() use ($twig)
{
  print $twig->render('index.html');
};


// $post = new Post('nofile');

$error_404 = function() use ($twig)
{
  header(404);
  print $twig->render('404.html');
};

$do_index();
