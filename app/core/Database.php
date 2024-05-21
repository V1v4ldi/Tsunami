<?php
class Database
{
    private $host = DB_HOST;
    private $uname = DB_USER;
    private $pass = DB_PASS;
    private $sch = DB_SCHEME;

    private $dbh;
    private $stx;

    
    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->sch;
        
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->dbh = new PDO($dsn, $this->uname, $this->pass, $option);
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $this->stx = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
    
        $this->stx->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->stx->execute();
    }

    public function Allresult()
    {
        $this->execute();
        return $this->stx->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Single()
    {
        $this->execute();
        return $this->stx->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        return $this->stx->rowCount();
    }
}