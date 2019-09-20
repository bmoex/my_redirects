<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'My Redirects',
    'description' => 'Maintain your own redirects in the backend',
    'category' => 'module',
    'version' => '4.2.1',
    'state' => 'obsolete',
    'uploadFolder' => false,
    'clearCacheOnLoad' => true,
    'author' => 'Benjamin Serfhos',
    'author_email' => 'benjamin@serfhos.com',
    'author_company' => 'Rotterdam School of Management, Erasmus University',
    'constraints' => [
        'depends' => [
            'typo3' => '8.5.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'KoninklijkeCollective\\MyRedirects\\' => 'Classes',
        ],
    ],
];
