<?php
$header = <<<EOF
This file is part of the light/php-cs-fixer-config.
(c) 2016-2016 lichunqiang <light-li@hotmail.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$config = new Light\CS\Config\Config($header);
$config->getFinder()->in(__DIR__.'/src');
$cacheDir = getenv('TRAVIS') ? getenv('HOME') . '/.php-cs-fixer' : __DIR__;
$config->setCacheFile($cacheDir . '/.php_cs.cache');
return $config;