<?php
    class Controller {
        public static function createView($viewName, $data=array()) {
            require_once("./Views/$viewName.php");
        }
    }

 ?>
