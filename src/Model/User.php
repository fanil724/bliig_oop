<?php

namespace Fan724\BlogOpp\Model;

class User extends Model
{
    protected ?int $id = null;
    protected ?string $name;
    protected ?int $role_id;

    protected array $props = [
        'id' => false,
        'name' => false,
        'role_id' => false,
    ];

    public function __construct(string $name = null, int $role_id = null)
    {
        $this->name = $name;
        $this->role_id = $role_id;
    }

    public static function getName()
    {
        return $_SESSION['login'] ?? false;
    }

    public static function isAdmin(): bool
    {
        return $_SESSION['login'] === 'admin';
    }

    protected  static function getTableName(): string
    {
        return 'users';
    }
}
