<?php

$EM_CONF['apensoap'] = [
    'title'            => 'apensoap',
    'description'      => '',
    'category'         => 'plugin',
    'shy'              => 0,
    'version'          => '1.0.1',
    'dependencies'     => '',
    'conflicts'        => '',
    'priority'         => '',
    'loadOrder'        => '',
    'module'           => '',
    'state'            => 'stable',
    'uploadfolder'     => 0,
    'modify_tables'    => '',
    'clearcacheonload' => 0,
    'lockType'         => '',
    'author'           => 'CERDAN Yohann [Site-nGo]',
    'author_email'     => 'cerdanyohann@yahoo.fr',
    'constraints'      => [
        'depends'   => [
            'php'   => '7.0.0-7.4.99',
            'typo3' => '8.5.0-10.4.99',
        ],
        'conflicts' => [
        ],
        'suggests'  => [
        ],
    ],
];