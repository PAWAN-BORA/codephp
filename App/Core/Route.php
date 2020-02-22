<?php
  class Route {
    public static $validRoutes = array();
    public static function set(String $route, String $classFun) {
      self::$validRoutes[] = $route;
      // print_r(self::$validRoutes);
      // echo "<pre>";
      // print_r($_SERVER['REQUEST_URI']);
      $rRoute = str_replace(BASE_FOLDER, '', $_SERVER['REQUEST_URI']);
      // print_r($rRoute);
      $routeData = explode('/', trim($rRoute, '/'));
      // print_r($routeData);
      // print_r($route);
      if($routeData[0]=='' && $route=='/') {
          if(is_string($classFun)) {
              if(strpos($classFun, '@')!==false) {
                  $data= explode('@', $classFun);
                  $controller  = $data[0];
                  $fun = $data[1];
                  $index = new $controller();
                  if(method_exists($controller, $fun)) {
                      $index->$fun(); // should be passed paramter in this method
                  } else {
                      echo "Method '$fun' dose not exist in the controller '$controller'";
                  }
              } else {
                  echo "function @ in not";
              }
          } else {
              print_r($classFun);
              echo "<br> must be string";
          }
          return;
      }
        if($routeData[0]==$route) {

            if(is_string($classFun)) {
                if(strpos($classFun, '@')!==false) {
                    $data= explode('@', $classFun);
                    $controller  = $data[0];
                    $fun = $data[1];
                    $index = new $controller();
                    if(method_exists($controller, $fun)) {
                        $index->$fun(); // should be passed paramter in this method
                    } else {
                        echo "Method '$fun' dose not exist in the controller '$controller'";
                    }
                } else {
                    echo "function @ in not";
                }
            } else {
                print_r($classFun);
                echo "<br> must be string";
            }




            // print_r($data);

            // // $controller->$fun;
            // // echo $controller;
            // // echo $fun;
            // $nam = "pawan";

        }
    }
  }

 ?>
