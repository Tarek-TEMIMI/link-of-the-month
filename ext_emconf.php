<?php

/**
 * Extension Manager/Repository config file for ext "link_of_the_month".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Link of the Month',
    'description' => 'Link of the Month  description',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Coderednet\\LinkOfTheMonth\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Tarek Temimi',
    'author_email' => 'tarek.temimi@gmail.com',
    'author_company' => 'codered.net',
    'version' => '1.0.0',
];
