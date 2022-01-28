/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */
CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config
	config.allowedContent=true;
	 config.removeFormatAttributes='';
	 
	 config.toolbar = [
                { name: 'save', items: [ 'savebtn','Undo','Redo' ] },
                { name: 'clipboard', items: [ 'Cut','Copy','Paste','PasteText','PasteFromWord'] },
                { name: 'document', items: [ 'Find','Replace'] },
               
                { name: 'lists', items: [ 'NumberedList','BulletedList','Outdent','Indent'] },
                { name: 'insert', items: [ 'Image','Table','Smiley','SpecialChar'] },
                { name: 'link', items: ['Link','Unlink'] },
             
                { name: 'basicstyles', items: [ 'Font','FontSize','Bold','Italic','Underline','Strike','Subscript','Superscript'] },
                
                { name: 'align', items: [ 'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'] }
        ];
	 
	 
	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
	
		{ name: 'styles',items:['Styles','Format','Font','FontSize'] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
//	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	//config.removeDialogTabs = 'image:advanced;link:advanced';
	config.contentsCss = [ 'https://fingertips.co.in/assets/mastercss/bootstrap.css', 'https://fingertips.co.in/assets/mastercss/design.css' ];
	config.extraPlugins = 'youtube,colorbutton,panelbutton,floatpanel';
//	config.extraPlugins = 'font';

	
};
CKEDITOR.config.allowedContent = true;
CKEDITOR.dtd.$removeEmpty.span = 0;
CKEDITOR.dtd.$removeEmpty.i = 0;
CKEDITOR.dtd.$removeEmpty.p = 0;
CKEDITOR.config.fillEmptyBlocks = false;