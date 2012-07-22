<?php

class Logo
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function createData()
    {
        $data['module'] = 'logo';
        $data['data']['text'] = $this->text;
        return $data;
    }
}
