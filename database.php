<?php
class database
{
    function init_db()
    {
        try {

            $host = '172.17.0.1';
            $dbname = 'crud';
            $charset =  'utf8';
            $user =   'root';
            $password =  'NodeSol786';
            $db = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=$charset",
                $user,
                $password
            );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        return $db;
    }
}
