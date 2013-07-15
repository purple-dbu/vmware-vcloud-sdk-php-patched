<?php

require_once 'vendor/autoload.php';

$options = getopt('h:o:u:p:');

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

ob_start();
$service = VMware_VCloud_SDK_Service::getService();
$output = ob_get_clean();
if( $output !== "\n\n" ) {
  throw new Exception('Oh no! Exception while loading VMware SDK for PHP: ' . $output);
}

$result = $service->login($options['h'], $auth, $httpConfig);

if ( ! $service instanceof VMware_VCloud_SDK_Service )
{
  throw new Exception( 'Expecting service to be an instance of ' . VMware_VCloud_SDK_Service . ', got ' . gettype($service) );
}
