<?php

class XView
{
    private $template;
    private $data;

    public function __construct($template, &$data)
    {
        $this->template = $template;
        $this->data = $data;
    }
    
    public function render()
    {
        $d = &$this->data;
        include('templates/'.$this->template.'.html');
    }

    public function prn(&$value)
    {
        if (gettype($value) !== 'array') {
            echo $value;
            return;
        }
        if (!isset($value['module'])) {
            // do nothing
            return;
        }
        $d = &$value['data'];
        include('module-templates/'.$value['module'].'.html');
    }
}
