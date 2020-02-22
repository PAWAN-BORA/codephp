<?php
define("BASE_FOLDER", "codephp");
define("BASE_URL", "http://localhost/codephp/");
// echo BASE_URL;
require_once('Routes.php');
function __autoload($class_name) {
  if(file_exists("./App/Core/".$class_name.'.php')) {
      require_once("./App/Core/".$class_name.'.php');

  } else if(file_exists('./App/Controllers/'.$class_name.'.php')) {
      require_once('./App/Controllers/'.$class_name.'.php');
  }
}
// echo "<br>".$_GET['url']."<br>";
//http://localhost/codephp/sdfsdfsd/s8sdfs/skdfjs/idked/
// echo "<pre>";
// print_r($_SERVER);
// echo "<br>".$_SERVER['PATH_INFO'];


?>
