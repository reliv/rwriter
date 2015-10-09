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
        'RcmI18n',
        'RcmLogin',
        'DomainRedirector',
        'RcmAngularJs',
        'RcmJquery',
        'RcmMessage',
        'RcmMessageList',
        'RcmRotatingImage',
        'RcmRssFeed',
        'RcmTabs',
        'RcmTinyMce',
        'RcmUser',
        //MUST BE AT BOTTOM OF DEFINITION
        'Application',
    ),
    'module_listener_options' => array(
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
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
