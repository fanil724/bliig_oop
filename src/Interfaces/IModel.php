<?php

namespace Fan724\BlogOpp\Interfaces;

interface IModel
{
    public static function getOne(int $id);
    public static function getAll();
}
