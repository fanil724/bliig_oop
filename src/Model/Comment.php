<?php

namespace Fan724\BlogOpp\Model;


class Comment extends Model
{
    protected ?int $id = null;
    protected ?int $user_id;
    protected ?int $post_id;
    protected ?string $text;

    protected  array $props = [
        'id' => false,
        'user_id' => false,
        'post_id' => false,
        'text' => false
    ];

    public function __construct(int $user_id = null, int $post_id = null, string $text = null)
    {
        $this->user_id = $user_id;
        $this->post_id = $post_id;
        $this->text = $text;
    }

    protected static function getTableName(): string
    {
        return 'comments';
    }
}
