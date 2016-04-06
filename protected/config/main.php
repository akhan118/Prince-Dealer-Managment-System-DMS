<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

Yii::setPathOfAlias('chartjs', dirname(__FILE__).'/../extensions/yii-chartjs');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Prince',
    
        'theme'=>'abound',

	// preloading 'log' component
	'preload'=>array('log','bootstrap','chartjs'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array('test','om','Gtest',
		// uncomment the following to enable the Gii tool
		

                'vehicle'=>array('defaultController'=>'vehicle'),
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'nokia',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
            
              
		
	),

	// application components
	'components'=>array(
            
                'chartjs' => array('class' => 'chartjs.components.ChartJs'),
            
                'bootstrap'=>array(
                    'class'=>'ext.yiibooster.components.Bootstrap',
                ),
            
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
//		'urlManager'=>array(
//			'urlFormat'=>'path',
//                    'showScriptName'=>false,
//			'rules'=>array(
//				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
//				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
//				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
//			),
//		),
//		
//		'db'=>array(
//			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
//		),
		// uncomment the following to use a MySQL database
		
//		'db'=>array(
//			'connectionString' => 'mysql:host=localhost;dbname=test',
//			'emulatePrepare' => true,
//			'username' => 'root',
//			'password' => 'root',
//			'charset' => 'utf8',
//		),
            
//            
//                'db'=>array(
//'connectionString' => 'mysql:host=autopanda.db.7369443.hostedresource.com;dbname=autopanda',
//
//		'db'=>array(
//			'connectionString' => 'mysql:host=localhost;dbname=test',
//			'emulatePrepare' => true,
//			'username' => 'root',
//			'password' => 'root',
//			'charset' => 'utf8',
//		),
//            
            
                'db'=>array(
'connectionString' => 'mysql:host=autopanda1.db.7369443.hostedresource.com;dbname=autopanda1',
			'emulatePrepare' => true,
			'username' => 'autopanda',
			'password' => 'Legend@95',
			'username' => 'autopanda1',
			'password' => 'Legend@95',
			'charset' => 'utf8',
		),
//		
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
				
//				array(
//					'class'=>'CWebLogRoute',
//				),
				
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);