<?php
class index
{
    public function __construct()
    {
    }
    public function getNameServer()
    {
        return 'bonjour kandji';
    }
}
$params = [
    'uri' => 'http://localhost:8888/server/index.php'
];
$server = new SoapServer(null, $params);
$server->setClass('index');
$server->handle();
