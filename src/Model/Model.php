<?php
namespace Fan724\BlogOpp\Model;
use Fan724\BlogOpp\Core\Db;
use Fan724\BlogOpp\Interfaces\IModel;

abstract class Model implements IModel
{
    protected DB $db;
    abstract  protected function getTableName():string;
    public function __construct(DB $db)
    {
        $this->db = $db;
    }
    public function getOne(int $id){
        $sql="SELECT * FROM {$this->getTableName()} WHERE id=$id".PHP_EOL;
        return $this->db->queryOne($sql);
    }

    public function getAll(){
        $sql="SELECT * FROM {$this->getTableName()}".PHP_EOL;
        return $this->db->queryAll($sql);
    }


}