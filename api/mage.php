<?php

use Sami\Sami;
use Sami\Version\GitVersionCollection;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->notName('spyc.php')
    ->in($dir = '/var/www/magallanes/Magallanes/Mage')
;

return new Sami($iterator, array(
    'theme'                => 'enhanced',
    'versions'             => '1.0',
    'title'                => 'Magallanes API',
    'build_dir'            => __DIR__.'/build/mage/%version%',
    'cache_dir'            => __DIR__.'/cache/mage2/%version%',
    'default_opened_level' => 2,
));
