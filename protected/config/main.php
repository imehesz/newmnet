<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'mehesz.net',
    'defaultController' => 'site/home',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName' => false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'db'=>array(
			'connectionString' => MEHESZ_DB_CONNECTION_STRING,
		),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
                array(
					'class'=>'CWebLogRoute',
				),
                */
			),
		),
		'image'=>array(
			'class'=>'ext.imageapi.CImage',
			'presets'=>array(
				'200x150'=>array(
					'cacheIn'=> 'webroot.cache.200x150',
					'actions'=>array(
						'scaleAndCrop'=>array(
							'width'=>200,    
							'height'=>150
						),
					),
				),
				'500x350'=>array(
					'cacheIn'=> 'webroot.cache.500x350',
					'actions'=>array(
						'scaleAndCrop'=>array(
							'width'=>500,    
							'height'=>350
						),
					),
				),

			), 
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'    => 'imehesz@gmail.com',
        'slogan'        => '&gt; making the web. better.',
	),

    'theme' => 'halcyon',

    'modules'=>array(
        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'1cf1341e094bf98fb92b6f5decbc21de',
        ),
    ),
);
