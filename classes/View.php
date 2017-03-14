<?php

class View
{
    protected $data = [];

    public function assign($name, $val)
    {
        $this->data[$name] = $val;
    }

    public function display($type, $template)
    {
        include __DIR__ . '/../views/' . $type . '/' . $template;
    }
}