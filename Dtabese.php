<?php
// namespace ApexMerca;
// use PDO;
// use PDOException;
class Dtabese
{

    private string $host = "localhost";
    private string $database = "ApexMercatoe";
    private string $username = "root";
    private string $password = "";
    public static  ?Dtabese $instce = null;
    private  ?PDO $pdo;

    private function __construct()
    {

        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    public static function getInstnce()
    {
        if (self::$instce === null) {
            self::$instce = new Dtabese();
        }
        return self::$instce;
    }


    public function getConnexion()
    {
        return $this->pdo;
    }
}
