<?php

namespace Fan724\BlogOpp\Interfaces;

interface IModel
{
    public function getOne(int $id);
    public function getAll();
}