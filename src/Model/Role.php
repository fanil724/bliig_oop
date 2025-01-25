<?php

namespace Fan724\BlogOpp\Model;


class Role extends Model
{
    protected ?int $id = null;
    protected ?string $title;

    protected array $props = [
        'id' => false,
        'title' => false
    ];

    public function __construct(string $title = null)
    {
        $this->title = $title;
    }
    protected static function getTableName(): string
    {
        return 'role';
    }
}
