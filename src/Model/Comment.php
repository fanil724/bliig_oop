<?php

namespace Fan724\BlogOpp\Model;



class Comment extends Model
{
    public int $id;
    public int $user_id;
    public int $post_id;
    public string $text;


    protected function getTableName(): string
    {
        return 'comments';
    }
}
