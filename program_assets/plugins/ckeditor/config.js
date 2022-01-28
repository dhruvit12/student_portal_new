/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
		config.format_tags = 'p;h1;h2;h3;pre';
		
		
        //the next line add the new font to the combobox in CKEditor
        

	// Simplify the dialog windows.
	//config.removeDialogTabs = 'image:advanced;link:advanced';
	config.contentsCss = [ 'https://fingertips.co.in/assets/mastercss/bootstrap.css', 'https://fingertips.co.in/assets/mastercss/design.css' , 'https://fingertips.co.in/assets/fonts/roboto/roboto.css' ];
	config.font_names = 'Roboto/robotoregular;' + config.font_names;
	config.extraPlugins = 'youtube,colorbutton,panelbutton,floatpanel';
};
