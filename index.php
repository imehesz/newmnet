<?php

// first let's load our configuration file
$settings_file = dirname(__FILE__) . DIRECTORY_SEPARATOR . 
        'protected' . DIRECTORY_SEPARATOR .
        'mehesz' . DIRECTORY_SEPARATOR . 'settings.php';

if( ! file_exists( $settings_file ) )
{
    die( 'Missing configuration file, expected here: ' . $settings_file );
}

require_once $settings_file;

// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii-1.1.3.r2247/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', MEHESZ_YII_DEBUG );
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
