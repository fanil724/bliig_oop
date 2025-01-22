<?php

namespace Fan724\BlogOpp\Model;

class Post extends Model
{
    //public ?int $id = null;
    public ?string $title;
    public ?string $text;
    public ?int $id_category;

    public function __construct(string $title = null, string $text = null, int $id_category = null)
    {
        $this->title = $title;
        $this->text = $text;
        $this->id_category = $id_category;
    }

    protected function getTableName(): string
    {
        return 'posts';
    }
}
