define(['elgg'], function(elgg) {
	return {
		language: elgg.config.current_language,
		on: {
	        change: function( evt ) {
	            console.log( evt ); 
	            CKEDITOR.dom.element.createFromHtml( '<p style="color:red">Editor contents changed!</p>' ).appendTo( CKEDITOR.document.getBody() );
	        }
	    }
	};
});
