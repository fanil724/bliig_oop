<?php

namespace Fan724\BlogOpp\Interfaces;

use Fan724\BlogOpp\Model\Model;

interface IModel
{
    public static function getOne(int $id);
    public static function getAll();
}
