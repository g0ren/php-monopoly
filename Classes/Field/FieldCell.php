<?php

namespace classes\Field;

class FieldCell
{
    public string $html;
    public function __construct(string $html)
    {
        $this->html = $html;
    }
}