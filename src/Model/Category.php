<?php

namespace Fan724\BlogOpp\Model;


class Category extends Model
{
    public int $id;
    public string $title;



    protected function getTableName(): string
    {
        return 'categoryes';
    }
}
