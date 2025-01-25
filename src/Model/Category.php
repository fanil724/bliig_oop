<?php

namespace Fan724\BlogOpp\Model;



class Category extends Model
{
    protected ?int $id = null;
    protected ?string $category;
    protected  array $props = [
        'id' => false,
        'category' => false
    ];

    public function __construct(string $category = null)
    {
        $this->category = $category;
    }

    protected static function getTableName(): string
    {
        return 'categories';
    }
}
