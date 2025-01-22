<?php

namespace Fan724\BlogOpp\Model;



class Category extends Model
{
    //public ?int $id = null;
    public ?string $category;

    public function __construct(string $category = null)
    {
        $this->category = $category;
    }

    protected function getTableName(): string
    {
        return 'categories';
    }
}
