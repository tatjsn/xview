<?php
// TODO: autoload
// TODO: namespaces
require_once('XView.php');
require_once('modules/Button.php');

$data['title'] = 'Hello World!';
$btn = new Button(300, 200);
$btn->setLogo('LogoText');
$data['widget'] = $btn->createData();

$view = new XView('index', $data);
$view->render();
