<?php
require_once('modules/Logo.php');

class Button
{
    private $width;
    private $height;
    private $logoText;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function setLogo($logoText)
    {
        $this->logoText = $logoText;
    }

    public function createData()
    {
        $data['module'] = 'button';
        $data['data']['width'] = $this->width;
        $data['data']['height'] = $this->height;
        if (isset($this->logoText)) {
            $logo = new Logo($this->logoText);
            $data['data']['logo'] = $logo->createData();
        }
        return $data;
    }
}
