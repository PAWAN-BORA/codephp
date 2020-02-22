<?php

  class Index extends Controller {

      public function start()
      {
          $data = ['name'=>'pawan'];

          self::createView("index", $data);
      }
      public function about() {
          self::createView("AboutUs");
      }
      public function contact() {
          self::createView("ContactUs"); 
      }

  }

 ?>
