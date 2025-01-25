<?php

namespace Fan724\BlogOpp\Model;



abstract class Model extends DbModel
{
    public function __get(string $name): mixed
    {
        //TODO* Проверить по props можно ли читать это поле

        return array_key_exists($name, $this->props) ? $this->$name : null;
    }

    public function __set(string $name, $value): void
    {
        //TODO* Проверить по props можно ли писать в это поле и установите props в True
        if (array_key_exists($name, $this->props)) {
            $this->$name = $value;
            $this->props[$name] = true;
        }
    }
}
