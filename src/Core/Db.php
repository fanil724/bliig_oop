<?php

namespace Fan724\BlogOpp\Core;

use Fan724\BlogOpp\Model\Model;
use Fan724\BlogOpp\trait\TSingletone;
use PDO;
use PDOStatement;


class Db
{

    private array $config = [
        'driver' => 'sqlite',
        'host' => 'localhost',
        'login' => '',
        'password' => '',
        'database' => 'blog.db'
    ];

    use TSingletone;

    private ?PDO $connection = null;

    private function getConnection(): PDO
    {
        if (is_null($this->connection)) {
            $this->connection = new PDO("{$this->config['driver']}:../{$this->config['database']}");
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        return $this->connection;
    }



    private function query(string $sql, array $params = []): PDOStatement
    {
        //echo "query" . PHP_EOL;
        $pdoStatement = $this->getConnection()->prepare($sql);
        $pdoStatement->execute($params);
        return $pdoStatement;
    }

    public function lastInsertId(): int
    {
        return $this->getConnection()->lastInsertId();
    }

    public function execute(string $sql, array $params = []): PDOStatement
    {
        //echo "execute" . PHP_EOL;
        return $this->query($sql, $params);
    }

    //Select where id = 1
    public function queryOne(string $sql, array $params = []): ?array
    {
        return $this->query($sql, $params)->fetch();
    }

    public function queryOneObject(string $sql, array $params, string $class): Model
    {
        $pdoStatement = $this->query($sql, $params);
        $pdoStatement->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $class);
        return $pdoStatement->fetch();
    }

    //select *
    public function queryAll($sql)
    {
        return $this->query($sql)->fetchAll();
    }
}
