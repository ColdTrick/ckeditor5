/**
 * This module can be used to bind CKEditor to a textarea
 * <code>
 *	  require(['elgg-ckeditor'], function(editor) {
 *	      editor.bind('textarea');
 *	  });
 * </code>
 *
 * @warning It's important this module is not renamed so that it ends with "/ckeditor". This can confuse
 *          the CKeditor library when it sniffs its resource directory.
 *
 * @module elgg-ckeditor
 */
define(['jquery', 'elgg', 'ckeditor/ckeditor'], function ($, elgg, CKEDITOR) {
	return {
		init: function (selector, config) {
			//config_module = config_module || DEFAULT_CONFIG_MODULE;

			//require([config_module], function (config) {
				//elggCKEditor.registerHandlers();
				//CKEDITOR = elgg.trigger_hook('prepare', 'ckeditor', null, CKEDITOR);
				
				if ($(selector).length === 0) {
					return;
				}

				CKEDITOR.create(document.querySelector(selector), config)
				.then(editor => {
					window.editor = editor;
					
					// on change updateSourceElement()
				});
/*
				$(selector).not('[data-cke-init]')
					.attr('data-cke-init', true)
					.each(function () {
						var opts = $(this).data('editorOpts') || {};

						if (opts.disabled) {
							// Editor has been disabled
							return;
						}
						delete opts.disabled;

						var visual = opts.state !== 'html';
						delete opts.state;

						var FINAL_CONFIG = $.extend({}, config, opts);
						$(this).data('elggCKEeditorConfig', FINAL_CONFIG);

						if (!visual) {
							elggCKEditor.init(this, visual);
						} else {
							CKEDITOR.ClassicEditor.create(document.getElementById(selector), FINAL_CONFIG);
							//$(this).ckeditor(elggCKEditor.init, FINAL_CONFIG);
						}
					});*/
			//});
		},
	};
});
