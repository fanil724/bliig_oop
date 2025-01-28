<?php

namespace Fan724\BlogOpp\Interfaces;

interface IRender
{
    public function renderTemplate($template, $params = []);
}
