<?php

namespace Fan724\BlogOpp\Model;


class Comment extends Model
{
    //public ?int $id = null;
    public ?int $user_id;
    public ?int $post_id;
    public ?string $text;

    public function __construct(int $user_id = null, int $post_id = null, string $text = null)
    {
        $this->user_id = $user_id;
        $this->post_id = $post_id;
        $this->text = $text;
    }

    protected function getTableName(): string
    {
        return 'comments';
    }
}
