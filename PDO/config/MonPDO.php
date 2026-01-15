<?php

    class MonPDO{

        private const HOST_NAME = "localhost";
        private const DB_NAME = "ticket_management";
        private const USER_NAME = "root";
        private const PASSWORD = "";

        private static $monPDOInstance = null; 

        public static function getPDO(){
            // patern siggleton -> s'assure qu'il n'y a qu'un seul objet connexion dans tt le projet
            if(is_null(self::$monPDOInstance)){
                // créer la connexion
                try{
                    $options = array(
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    );

                    $url =  "mysql:host=".self::HOST_NAME.";dbname=".self::DB_NAME;

                    self::$monPDOInstance = new PDO($url, self::USER_NAME, self::PASSWORD);
                }
                catch(\PDOException $e){
                    $message = "Erreur de la connexion à la db" . $e->getMessage();
                    die($message);
                }
                return self::$monPDOInstance;
            }
            else {
                return self::$monPDOInstance;
            }
        }


    }