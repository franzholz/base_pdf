<?php

########################################################################
# Extension Manager/Repository config file for ext "base_pdf".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'DOMPDF Library',
    'description' => 'This provides the DOMPDF library. Consider to install the extensions base_font, base_htmlparser and base_svg .
    ',
    'category' => 'misc',
    'version' => '3.0.0',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Fabien Ménager, Brian Sweeney, Gabriel Bull, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-13.4.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
            'base_font' => '',
            'base_htmlparser' => '',
            'base_svg' => '',
        ],
    ],
];
