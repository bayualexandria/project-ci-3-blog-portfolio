/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	config.filebrowserBrowseUrl = 'http://localhost/new/asset/backend/vendor/ckfinder/browse.php?type=files';
	config.filebrowserImageBrowseUrl = 'http://localhost/new/asset/backend/vendor/ckfinder/browse.php?type=images';
	config.filebrowserFlashBrowseUrl = 'http://localhost/new/asset/backend/vendor/ckfinder/browse.php?type=flash';
	config.filebrowserUploadUrl = 'http://localhost/new/asset/backend/vendor/ckfinder/upload.php?type=files';
	config.filebrowserImageUploadUrl = 'http://localhost/new/asset/backend/vendor/ckfinder/upload.php?type=images';
	config.filebrowserFlashUploadUrl = 'http://localhost/new/asset/backend/vendor/ckfinder/upload.php?type=flash';
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.extraPlugins = 'syntaxhighlight';
	config.codeSnippet_theme = 'googlecode';

};
