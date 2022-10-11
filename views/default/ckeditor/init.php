<?php
/**
 * Initialize the CKEditor script
 *
 * Doing this inline enables the editor to initialize textareas loaded through ajax
 */

// someone does not want the editor enabled for this field
if (!elgg_extract('editor', $vars, true)) {
	return;
}

$id = elgg_extract('id', $vars);
if (!$id) {
	return;
}

elgg_require_css('ckeditor/editor.css');

$config = (array) elgg_trigger_plugin_hook('config', 'ckeditor', [
	'id' => $id,
	'editor_type' => elgg_extract('editor_type', $vars),
], []);

$editor_language = elgg_extract('language', $config, 'en');
if ($editor_language !== 'en' && elgg_view_exists("ckeditor/translations/{$editor_language}.js")) {
	elgg_require_js("ckeditor/translations/{$editor_language}");
}

?>
<script>
	require(['ckeditor/editor'], function (editor) {
		editor.init('#<?php echo $id; ?>', <?php echo json_encode($config); ?>);
	});
</script>
