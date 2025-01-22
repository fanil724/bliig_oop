<?php

namespace Fan724\BlogOpp\Core;


class   DBSQL
{
    private ?\PDO $pdo = null;
    private string $sqlquery = "";
    private string $tableName = "";
    private array $Parametr = [];
    public  function __construct(string $DBName)
    {
        // $this->pdo = new PDO("sqlite:{$database.db}");
    }

    public   function delete(string $TableName)
    {
        if ($this->tableName == "") {
            $this->tableName = $TableName;
        }
        if (str_contains($this->sqlquery, "DELETE")) {
            return $this;
        }
        $this->sqlquery = "DELETE  {$this->tableName}";
        return $this;
    }
    public   function select(string $TableName)
    {
        if ($this->tableName == "") {
            $this->tableName = $TableName;
        }
        if (str_contains($this->sqlquery, "SELECT")) {
            return $this;
        }

        $this->sqlquery = "SELECT * FROM {$this->tableName}";
        return $this;
    }

    public   function where(string $name, string $value)
    {
        if (str_contains($this->sqlquery, "WHERE")) {
            $this->sqlquery =   $this->sqlquery . " and {$name} = {$value}";
            return $this;
        }
        $this->sqlquery = $this->sqlquery . " WHERE $name = $value";
        return $this;
    }

    public   function get(): string
    {
        return $this->sqlquery . PHP_EOL;
    }
}
