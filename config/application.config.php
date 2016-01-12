<?php

return array(
    'modules' => array(
        //Rcm Dependencies
        'DoctrineModule',
        'DoctrineORMModule',

        //RCM core and plugins
        'Rcm',
        'Reliv\ElFinder',
        'RcmActionButton',
        'RcmAdmin',
        'Reliv\RcmApiLib',
        'RcmCallToActionBox',
        'Reliv\RcmConfig',
        'RcmDynamicNavigation',
        'RcmHtmlArea',
        'RcmHtmlPurifier',
        'RcmLogin',
        'DomainRedirector',
        'RcmAngularJs',
        'RcmJquery',
        'RcmRotatingImage',
        'RcmRssFeed',
        'RcmTabs',
        'RcmTinyMce',
        'Rcm\DefaultTheme',
        'Rcm\Install',
        'RcmUser',
        'AssetManager'
    ),
    'module_listener_options' => array(
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
            'data/rcm/config.php'
        ),
        'module_paths' => array(
            './module',
            './vendor',
            './vendor/reliv',
            './vendor/reliv/rcm-plugins',
            './vendor/doctrine/doctrine-module/src',
            './vendor/doctrine/doctrine-orm-module/src',
        ),
    ),
);

