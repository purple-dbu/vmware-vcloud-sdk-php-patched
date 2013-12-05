<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__.'/library')
;

return new Sami($iterator, array(
    'theme'                => 'bootstrap',
    'title'                => 'VMware vCloud SDK for PHP - patched version',
    'build_dir'            => __DIR__.'/docs/api',
    'cache_dir'            => __DIR__.'/.sami',
    'default_opened_level' => 2,
));