<?php

########################################################################
# Extension Manager/Repository config file for ext "base_pdf".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'DOMPDF Library',
    'description' => 'This provides the DOMPDF library.',
    'category' => 'misc',
    'version' => '0.1.0',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Fabien Ménager, Brian Sweeney, Gabriel Bull, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'php' => '7.1.0-7.3.99',
            'typo3' => '8.7.0-9.5.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
