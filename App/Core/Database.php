<?php
    class Database {
        public static $host = 'localhost';
        public static $dbName = 'testDB';
        public static $userName = 'root';
        public static $password = '';

        private static function connect() {
            try {
                $pdo = new PDO('mysql:host='.self::$host.'; dbname='.self::$dbName.';charset=utf8', self::$userName, self::$password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;

            } catch (\Exception $e) {
                echo "connection failed: ".$e->getMessage();
            }

        }
        public static function query($query, $prams=array()) {
            $statement = self::connect()->prepare($query);
            $statement->execute($prams);
            if(explode(' ', $query[0]=='SELECT')) {
                $data = $statement->fetchAll();
                return $data;
            }
        }

    }
?>
