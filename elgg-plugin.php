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
		'config' => [
			'ckeditor' => [
				'Elgg\CKEditor\Config::getEditorConfig' => [],
			],
		],
		'view_vars' => [
			'input/longtext' => [
				'Elgg\CKEditor\Views::setInputLongTextIDViewVar' => [],
			],
		],
	],
];
