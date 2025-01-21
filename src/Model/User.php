<?php

namespace Fan724\BlogOpp\Model;



class User extends Model
{
    public int $id;
    public string $name;
    protected function getTableName():string{
        return "users";
    }
}