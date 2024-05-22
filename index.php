<?php
require_once "vendor/autoload.php";

$APP_ROOT = dirname(__DIR__);
$METHOD = $_SERVER['REQUEST_METHOD'];
$URI = $_SERVER['REQUEST_URI'];
$page = "pages/";
$php = ".php";

if($METHOD == "GET" && $URI == "/"){
  $msg = "<h2 align='center' style='color:teal;'> Welcome to SQLite Admin by Sushil Kumar (Code With Sushil).</h2>";
  echo $msg;
} else if($METHOD == "GET" && $URI == "/database"){

  require_once $page."database".$php;

} else if($METHOD == "POST" && $URI == "/database"){
  if(isset($_POST['create'])){
    $database = $_POST['database'];
    $extension = ".sqlite";
   // $cmd = "mkdir database && touch $database".$extension;
  //  $file = "database/".$database.$extension;
    
   /* if(file_exists($file)){
      $output = shell_exec($cmd);
      echo $output;
    } else {
      echo "This Database already exist.";
    } */
  }
} else {
  echo "<h2 align='center' style='color:red;'>404 - Page Not Found</h2>";
}
