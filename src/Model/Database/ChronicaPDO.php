<?php

namespace Chronica\Model\Database;

use PDO, PDOException;

class ChronicaPDO
{
    /**
     * @var PDO
     */
    static private $pdo;

    const HOSTNAME = 'localhost';
    const DATABASE = 'c5chronica';
    const USERNAME = 'c8wang';
    const PASSWORD = 'kzwtJX2W4#';

    const PDO_CHARSET = 'utf8mb4';

    public function get(): PDO
    {
        if (self::$pdo === null) self::$pdo = $this->generatePDO();
        return self::$pdo;
    }

    private function generatePDO(): PDO
    {
        $hostname = self::HOSTNAME;
        $database = self::DATABASE;
        $username = self::USERNAME;
        $password = self::PASSWORD;
        $charset = self::PDO_CHARSET;
        $dsn = "mysql:host=$hostname;dbname=$database;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false
        ];

        try
        {
            $pdo = new PDO($dsn, $username, $password, $options);
        }
        catch (PDOException $e)
        {
            echo "<pre><strong>ERREUR CRITIQUE !</strong><br/>";
            echo "Impossible de se connecter à la base de données.<br />";
            echo $e->getMessage().'</pre>';
            die();
        }

        return $pdo;
    }


}