<?php

namespace Fan724\BlogOpp\Model;

class User extends Model
{
    //public ?int $id = null;
    public ?string $name;
    public ?int $role_id;

    public function __construct(string $name = null, int $role_id = null)
    {
        $this->name = $name;
        $this->role_id = $role_id;
    }

    protected function getTableName(): string
    {
        return 'users';
    }
}
