<?php

// configure your app for the production environment

$app['twig.path'] = array(__DIR__ . '/../templates');
$app['twig.options'] = array('cache' => __DIR__ . '/../var/cache/twig');

$app['elewants'] = [
    'originalblue'  => 'blue',
    'originalpink'  => 'pink',
    'laravel'       => 'red',
    'sunshinephp'   => 'yellow',
    'phpwomen'      => 'purple',
    'amsterdamphp'  => 'black',
    'phparchitect'  => 'orange',
    'zendframework' => 'green',
];