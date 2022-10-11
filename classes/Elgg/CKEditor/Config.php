<?php

namespace Elgg\CKEditor;

/**
 * Hook callbacks for editor config
 *
 * @since 5.0
 * @internal
 */
class Config {

	/**
	 * Sets the config for the editor
	 *
	 * @param \Elgg\Hook $hook 'config', 'ckeditor'
	 *
	 * @return array
	 */
	public static function getEditorConfig(\Elgg\Hook $hook) {
		$base_config = [
			'language' => elgg_get_current_language(),
		];
		
		switch ($hook->getParam('editor_type')) {
			case 'simple':
				$config = [
					'toolbar' => [
						'items' => [
							'Bold', 'Italic', 'Underline', 'Strikethrough', 'RemoveFormat'
						],
					],
// 					"[['Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat']]",
// 					removeButtons: 'Subscript,Superscript', // To have Underline back
// 					allowedContent: true,
// 					entities: false,
// 					baseHref: elgg.get_site_url(),
// 					removePlugins: 'elementspath', // no need to see elementspath
// 					extraPlugins: 'blockimagepaste',
// 					defaultLanguage: 'en',
// 					language: elgg.config.current_language,
// 					skin: 'moono-lisa',
// 					contentsCss: elgg.get_simplecache_url('elgg/wysiwyg.css'),
// 					disableNativeSpellChecker: false,
// 					disableNativeTableHandles: false,
// 					removeDialogTabs: 'image:advanced;image:Link;link:advanced;link:target',
// 					customConfig: false, //no additional config.js
// 					stylesSet: false, //no additional styles.js
				];
				break;
			default:
				$config = [
					'toolbar' => [
						'items' => [
							'Bold', 'Italic', 'Underline', 'Strikethrough',
							'|',
							'NumberedList', 'BulletedList', 'outdent', 'indent',
							'|',
							'Link', 'Unlink', 'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo',
							//,  'Image', 'Blockquote', 'Paste', 'PasteFromWord', 'Maximize',
							'|',
							'RemoveFormat',
						],
					],
					
					'image' => [
						'toolbar' => ['imageTextAlternative', 'imageStyle:inline', 'imageStyle:block', 'imageStyle:side', 'linkImage'],
					],
					'table'=> [
						'contentToolbar' => ['tableColumn', 'tableRow', 'mergeTableCells', 'tableCellProperties', 'tableProperties'],
					],

// 					removeButtons: 'Subscript,Superscript', // To have Underline back
// 					allowedContent: true,
// 					entities: false,
// 					baseHref: elgg.get_site_url(),
// 					extraPlugins: 'blockimagepaste',
// 					defaultLanguage: 'en',
// 					language: elgg.config.current_language,
// 					skin: 'moono-lisa',
// 					contentsCss: elgg.get_simplecache_url('elgg/wysiwyg.css'),
// 					disableNativeSpellChecker: false,
// 					disableNativeTableHandles: false,
// 					removeDialogTabs: 'image:advanced;image:Link;link:advanced;link:target',
// 					customConfig: false, //no additional config.js
// 					stylesSet: false, //no additional styles.js
				];
		}
		
		return array_merge($base_config, $config, (array) $hook->getValue());
	}
}
