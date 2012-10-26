<?php
return array(
    'modules' => array(

        'Application',

        //Rcm Dependencies
        'DoctrineModule',
        'DoctrineORMModule',

        //RCM core and plugins
        'Rcm',
        'RcmJsonDataPluginToolkit',
        'RcmHtmlArea',
        'RcmNavigation',
        'RcmCallToActionBox',
        'RcmPortalAnnouncementBox',
        'RcmLogin',
        'RcmSocialButtons',
        'RcmRssFeed',

        //MUST BE AT BOTTOM OF DEFINITION
        'ElFinder',
    ),
    'module_listener_options' => array(
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
            './vendor/reliv',
            './vendor/reliv/RcmPlugins',
            './vendor/doctrine/doctrine-module/src',
            './vendor/doctrine/doctrine-orm-module/src',
        ),
    ),
);
