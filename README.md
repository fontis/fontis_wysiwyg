Fontis WYSIWYG Editor
=====================

Adds a chosen JavaScript WYSIWYG editor to selected admin pages.

This extension gives you the option to add a JavaScript WYSIWYG editor to specified admin page text areas. Currently available editors are:

* [TinyMCE](http://tinymce.moxiecode.com/)
* [FCKeditor](http://www.fckeditor.net/)
* [CKeditor](http://ckeditor.com/) (preliminary support)

Settings are available from the System &rarr; Configuration page, under Fontis Extensions &rarr; WYSGIWYG Editors section.

Note that by default, the file upload functionality of the included editors is disabled. If you would like to use it, set the Enable File Uploads option to 'Yes'. There is always some potential risk in allowing users to upload files to your web server, so you should only enable this functionality if you intend to use it. We have added additional checks and access controls to the file upload scripts so that only logged-in Magento administrators are able to access them, but if you don't use the upload functionality it is safer to leave it turned off.
