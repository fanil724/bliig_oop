<?php
namespace Fan724\BlogOpp\Model;


class Post extends Model
{
    public int $id;
    public string $title;
    public string $text;

    protected function getTableName():string{
        return "posts";
    }



}