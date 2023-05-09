<?php

########################################################################
# Extension Manager/Repository config file for ext "base_pdf".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'DOMPDF Library',
    'description' => 'This provides the DOMPDF library. It also includes the libraries html5lib, php-css-parser, php-font-lib and php-svg-lib.',
    'category' => 'misc',
    'version' => '2.0.5',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Fabien Ménager, Brian Sweeney, Gabriel Bull, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
