<?php

require_once __DIR__ . '/vendor/autoload.php';

$options = getopt('h:o:u:p:a:');

$auth = array(
    'username' => $options['u'] . '@' . $options['o'],
    'password' => $options['p'],
);

$httpConfig = array(
    'proxy_host' => null,
    'proxy_port' => null,
    'proxy_user' => null,
    'proxy_password' => null,
    'ssl_verify_peer' => false,
    'ssl_verify_host' => false,
    'ssl_cafile'  => null,
);

$service = VMware_VCloud_SDK_Service::getService();
$result = $service->login($options['h'], $auth, $httpConfig, $options['a']);

if (!($service instanceof VMware_VCloud_SDK_Service)) {
    throw new Exception( 'Expecting service to be an instance of ' . VMware_VCloud_SDK_Service . ', got ' . gettype($service) );
}
