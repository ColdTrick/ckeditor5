<?php

return [
	'plugin' => [
		'version' => '0.1',
	],
	'views' => [
		'default' => [
			'ckeditor/' => __DIR__ . '/vendors/ckeditor5-35.2.0/build/',
		],
	],
	'view_extensions' => [
		'elgg/wysiwyg.css' => [
			'elements/reset.css' => ['priority' => 100],
			'elements/typography.css' => ['priority' => 100],
		],
		'input/longtext' => [
			'ckeditor/init' => [],
		],
	],
	'hooks' => [
		'view_vars' => [
			'input/longtext' => [
				'Elgg\CKEditor\Views::setInputLongTextIDViewVar' => [],
			],
		],
	],
	'routes' => [
		'default:ckeditor:upload' => [
			'path' => '/ckeditor/upload',
			'controller' => \Elgg\CKEditor\Upload::class,
			'middleware' => [
				\Elgg\Router\Middleware\Gatekeeper::class,
			],
		],
	],
];
