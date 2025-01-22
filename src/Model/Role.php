<?php

namespace Fan724\BlogOpp\Model;


class Role extends Model
{
    // public ?int $id = null;
    public ?string $title;

    public function __construct(string $title = null)
    {
        $this->title = $title;
    }
    protected function getTableName(): string
    {
        return 'role';
    }
}
