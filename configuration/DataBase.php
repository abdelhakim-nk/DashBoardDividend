<?php
/*
* Creer plus tard un singleton de la connexion (car trop de trafic)
*/

    class ConnexionDb
    {
        public static function getConnexionDb(): PDO
        {
            return new PDO('mysql:host=localhost;dbname=finance_db;charset=utf8', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);

        }
    }
