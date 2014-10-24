<?php
return array(
    'modules' => array(
        'ZnZend',
        'Api',
        'Application', // change this to your module
    ),

    'module_listener_options' => array(
        'config_glob_paths'    => array(
            '../../../config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            //getenv('ZF2_PATH'), // commented out for Travis to pass
            'module',
            'vendor',
        ),
    ),
);
