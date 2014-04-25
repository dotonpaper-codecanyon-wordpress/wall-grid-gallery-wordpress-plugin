<?php

/*
* Title                   : Wall/Grid Gallery (WordPress Plugin)
* Version                 : 2.0
* File                    : lang.php
* File Version            : 1.8
* Created / Last Modified : 01 October 2013
* Author                  : Dot on Paper
* Copyright               : © 2011 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Wall/Grid Gallery Translation.
*/

    $DOPWGG_lang = array();

    array_push($DOPWGG_lang, array('key' => 'DOPWGG_TITLE', 'text' => 'Wall/Grid Gallery'));

    // Loading ...
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LOAD', 'text' => 'Load data ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_GALLERIES_LOADED', 'text' => 'Galleries list loaded.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_IMAGES_LOADED', 'text' => 'Images list loaded.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_NO_GALLERIES', 'text' => 'No galleries.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_NO_IMAGES', 'text' => 'No images.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_GALLERY_LOADED', 'text' => 'Gallery data loaded.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_IMAGE_LOADED', 'text' => 'Image loaded.'));

    // Save ...
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_SAVE', 'text' => 'Save data ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_SELECT_FILE', 'text' => 'Select File'));

    // Help
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_GALLERIES_HELP', 'text' => 'Click on the "Plus" icon to add a gallery. Click on a gallery item to open the editing area. Click on the "Pencil" icon to edit galleries default settings.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_GALLERIES_EDIT_INFO_HELP', 'text' => 'Click "Submit Button" to save changes.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_GALLERY_EDIT_HELP', 'text' => 'Click on the "Plus" icon to add images. Click on an image to open the editing area. You can drag images to sort them. Click on the "Pencil" icon to edit gallery settings. Check images, select action and click "Apply" to bulk edit images.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_GALLERY_EDIT_INFO_HELP', 'text' => 'Click "Submit Button" to save changes. Images are saved automaticaly. Click "Delete Button" to delete the gallery. Click "Use Settings" to use the predefined settings; the current settings will be deleted.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_IMAGES_HELP', 'text' => 'You have 4 upload types (WordPress, AJAX, Uploadify, FTP). At least one should work.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_IMAGES_HELP_WP', 'text' => 'You can use the default WordPress Uploader. To add an image to the gallery select it from WordPress and press Insert into Post.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_IMAGES_HELP_AJAX', 'text' => 'Just a simple AJAX upload. Just select an image and the upload will start automatically.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_IMAGES_HELP_UPLOADIFY', 'text' => 'You can use this option if you want to upload a single or multiple images to your gallery. Just select the images and the upload will start automatically. Uploadify will not display the progress bar and image processing will go slower if you have a firewall enabled.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_IMAGES_HELP_FTP', 'text' => 'Copy all the images in ftp-uploads in Thumbnail Gallery plugin folder. Press Add Images to add the content of the folder to your gallery. This will take some time depending on the number and size of the images. On some servers the images names that contain other characters different from alphanumeric ones will not be uploaded. Change the names for them to work.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_IMAGE_EDIT_HELP', 'text' => 'Drag the mouse over the big image to select a new thumbnail. Click "Submit Button" to save the thumbnail, title, caption, media, lightbox media or enable/disable the image. Click "Delete Button" to delete the image.'));

    // Form
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_SELECT_ACTION', 'text' => 'Select Action'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_APPLY', 'text' => "Apply"));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_SUBMIT', 'text' => 'Submit'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DELETE', 'text' => 'Delete'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ENABLE', 'text' => 'Enable'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DISABLE', 'text' => 'Disable'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DEFAULT', 'text' => "Use Settings"));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DELETE_IMAGES_CONFIRMATION', 'text' => 'Are you sure you want to delete images?'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DELETE_IMAGES_SUBMITED', 'text' => 'Deleting images ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DELETE_IMAGES_SUCCESS', 'text' => 'You have succesfully deleted the images.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ENABLE_IMAGES_CONFIRMATION', 'text' => 'Are you sure you want to enable images?'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ENABLE_IMAGES_SUBMITED', 'text' => 'Enabling images ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ENABLE_IMAGES_SUCCESS', 'text' => 'You have succesfully enabled the images.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DISABLE_IMAGES_CONFIRMATION', 'text' => 'Are you sure you want to disable images?'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DISABLE_IMAGES_SUBMITED', 'text' => 'Disabling images ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DISABLE_IMAGES_SUCCESS', 'text' => 'You have succesfully disabled the images.'));

    //Form Text
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_FORM_ENABLED_TEXT', 'text' => 'Enabled'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_FORM_DISABLED_TEXT', 'text' => 'Disabled'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_FORM_NORMAL_TEXT', 'text' => 'Normal'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_FORM_RANDOM_TEXT', 'text' => 'Random'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_FORM_MOUSE_TEXT', 'text' => 'Mouse'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_FORM_SCROLL_TEXT', 'text' => 'Scroll'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_FORM_NONE_TEXT', 'text' => 'None'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_FORM_TOOLTIP_TEXT', 'text' => 'Tooltip'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_FORM_LABEL_TEXT', 'text' => 'Label'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_FORM_DOCUMENT_TEXT', 'text' => 'Document'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_FORM_GALLERY_TEXT', 'text' => 'Gallery'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_FORM_BOTTOM_TEXT', 'text' => 'Bottom'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_FORM_TOP_TEXT', 'text' => 'Top'));
    
    // Add Gallery
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_GALLERY_NAME', 'text' => 'New Gallery'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_GALLERY_SUBMIT', 'text' => 'Add Gallery'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_GALLERY_SUBMITED', 'text' => 'Adding gallery ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_GALERRY_SUCCESS', 'text' => 'You have succesfully added a new gallery.'));

    // Edit Galleries
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_EDIT_GALLERIES_SUBMIT', 'text' => 'Edit Galleries Default Settings'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_EDIT_GALLERIES_SUCCESS', 'text' => 'You have succesfully edited the default settings.'));

    // Edit Gallery
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_EDIT_GALLERY_SUBMIT', 'text' => 'Edit Gallery'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_EDIT_GALLERY_SUCCESS', 'text' => 'You have succesfully edited the gallery.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_EDIT_GALLERY_USE_DEFAULT_CONFIRMATION', 'text' => 'Are you sure you want to use this predefined settings. Current settings are going to be deleted?'));

    // Delete Gallery
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DELETE_GALLERY_CONFIRMATION', 'text' => 'Are you sure you want to delete this gallery?'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DELETE_GALLERY_SUBMIT', 'text' => 'Delete Gallery'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DELETE_GALLERY_SUBMITED', 'text' => 'Deleting gallery ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DELETE_GALERRY_SUCCESS', 'text' => 'You have succesfully deleted the gallery.'));

    // Add Image
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_IMAGE_SUBMIT', 'text' => 'Add Images'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_IMAGE_WP_UPLOAD', 'text' => 'Default WordPress file upload'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_IMAGE_SIMPLE_UPLOAD', 'text' => 'Simple AJAX file upload'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_IMAGE_MULTIPLE_UPLOAD', 'text' => 'Multiple files upload (Uploadify jQuery Plugin)'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_IMAGE_FTP_UPLOAD', 'text' => 'FTP file upload'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_IMAGE_SUBMITED', 'text' => 'Adding images ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_IMAGE_SUCCESS', 'text' => 'You have succesfully added a new image.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_SELECT_IMAGES', 'text' => 'Select Images'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_SELECT_FTP_IMAGES', 'text' => 'Add Images'));

    // Sort Image
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_SORT_IMAGES_SUBMITED', 'text' => 'Sorting images ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_SORT_IMAGES_SUCCESS', 'text' => 'You have succesfully sorted the images.'));

    // Edit Image
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_EDIT_IMAGE_SUBMIT', 'text' => 'Edit Image'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_EDIT_IMAGE_SUCCESS', 'text' => 'You have succesfully edited the image.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_EDIT_IMAGE_CROP_THUMBNAIL', 'text' => 'Crop Thumbnail'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_EDIT_IMAGE_CURRENT_THUMBNAIL', 'text' => 'Current Thumbnail'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_EDIT_IMAGE_TITLE', 'text' => 'Title'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_EDIT_IMAGE_CAPTION', 'text' => 'Caption'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_EDIT_IMAGE_MEDIA', 'text' => 'Media: Add videos (YouTube, Vimeo, ...), HTML, Flash, ...<br />IMPORTANT: Make sure that all the code is in one html tag. Iframe embedding code will work :).'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_EDIT_IMAGE_LINK', 'text' => 'Link'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_EDIT_IMAGE_LINK_TARGET', 'text' => 'Link Target'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_EDIT_IMAGE_ENABLED', 'text' => 'Enabled'));

    // Delete Image
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DELETE_IMAGE_CONFIRMATION', 'text' => 'Are you sure you want to delete this image?'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DELETE_IMAGE_SUBMIT', 'text' => 'Delete Image'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DELETE_IMAGE_SUBMITED', 'text' => 'Deleting image ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DELETE_IMAGE_SUCCESS', 'text' => 'You have succesfully deleted the image.'));

    // TinyMCE
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_TINYMCE_ADD', 'text' => 'Add Wall/Grid Gallery'));

    // Settings
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DEFAULT_SETTINGS', 'text' => 'Default Settings'));
    
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_GENERAL_STYLES_SETTINGS', 'text' => 'General Styles & Settings'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_GALLERY_NAME', 'text' => 'Name'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DATA_PARSE_METHOD', 'text' => 'Gallery Data Parse Method'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_WIDTH', 'text' => 'Width'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_HEIGHT', 'text' => 'Height'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_BG_COLOR', 'text' => 'Background Color'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_BG_ALPHA', 'text' => 'Background Alpha'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_NO_LINES', 'text' => 'Number of Lines'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_NO_COLUMNS', 'text' => 'Number of Columns'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_IMAGES_ORDER', 'text' => 'Images Order'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_RESPONSIVE_ENABLED', 'text' => 'Responsive Enabled'));   

    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_STYLES_SETTINGS', 'text' => 'Thumbnails Styles & Settings'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_SPACING', 'text' => 'Thumbnails Spacing'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_PADDING_TOP', 'text' => 'Thumbnails Padding Top'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_PADDING_RIGHT', 'text' => 'Thumbnails Padding Right'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_PADDING_BOTTOM', 'text' => 'Thumbnails Padding Bottom'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_PADDING_LEFT', 'text' => 'Thumbnails Padding Left'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_NAVIGATION', 'text' => 'Thumbnails Navigation'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_SCROLL_SCRUB_COLOR', 'text' => 'Thumbnails Scroll Scrub Color'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_SCROLL_BAR_COLOR', 'text' => 'Thumbnails Scroll Bar Color'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_INFO', 'text' => 'Info Thumbnails Display'));

    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_STYLES_SETTINGS', 'text' => 'Styles & Settings for a Thumbnail'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_LOADER', 'text' => 'Thumbnail Loader'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_THUMBNAIL_LOADER_SUBMITED', 'text' => 'Adding thumbnail loader...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_THUMBNAIL_LOADER_SUCCESS', 'text' => 'Thumbnail loader added.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_WIDTH', 'text' => 'Thumbnail Width'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_HEIGHT', 'text' => 'Thumbnail Height'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_WIDTH_MOBILE', 'text' => 'Mobile Thumbnail Width'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_HEIGHT_MOBILE', 'text' => 'Mobile Thumbnail Height'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_ALPHA', 'text' => 'Thumbnail Alpha'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_ALPHA_HOVER', 'text' => 'Thumbnail Alpha Hover'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_BG_COLOR', 'text' => 'Thumbnail Background Color'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_BG_COLOR_HOVER', 'text' => 'Thumbnail Background Color Hover'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_BORDER_SIZE', 'text' => 'Thumbnail Border Size'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_BORDER_COLOR', 'text' => 'Thumbnail Border Color'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_BORDER_COLOR_HOVER', 'text' => 'Thumbnail Border Color Hover'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_PADDING_TOP', 'text' => 'Thumbnail Padding Top'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_PADDING_RIGHT', 'text' => 'Thumbnail Padding Right'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_PADDING_BOTTOM', 'text' => 'Thumbnail Padding Bottom'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_PADDING_LEFT', 'text' => 'Thumbnail Padding Left'));
    
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_STYLES_SETTINGS', 'text' => 'Lightbox Styles & Settings'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_POSITION', 'text' => 'Lightbox Position'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_WINDOW_COLOR', 'text' => 'Lightbox Window Color'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_WINDOW_ALPHA', 'text' => 'Lightbox Window Alpha'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_LOADER', 'text' => 'Lightbox Loader'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_LIGHTBOX_LOADER_SUBMITED', 'text' => 'Adding lightbox loader...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_LIGHTBOX_LOADER_SUCCESS', 'text' => 'Lightbox loader added.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_BACKGROUND_COLOR', 'text' => 'Lightbox Background Color'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_BACKGROUND_ALPHA', 'text' => 'Lightbox Background Alpha'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_MARGIN_TOP', 'text' => 'Lightbox Margin Top'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_MARGIN_RIGHT', 'text' => 'Lightbox Margin Right'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_MARGIN_BOTTOM', 'text' => 'Lightbox Margin Bottom'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_MARGIN_LEFT', 'text' => 'Lightbox Margin Left'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_PADDING_TOP', 'text' => 'Lightbox Padding Top'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_PADDING_RIGHT', 'text' => 'Lightbox Padding Right'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_PADDING_BOTTOM', 'text' => 'Lightbox Padding Bottom'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_PADDING_LEFT', 'text' => 'Lightbox Padding Left'));
    
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_NAVIGATION_STYLES_SETTINGS', 'text' => 'Lightbox Navigation Styles & Settings'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_NAVIGATION_PREV', 'text' => 'Lightbox Navigation Previous Button Image'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_LIGHTBOX_NAVIGATION_PREV_SUBMITED', 'text' => 'Uploading previous button image ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_LIGHTBOX_NAVIGATION_PREV_SUCCESS', 'text' => 'Previous button image uploaded.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_NAVIGATION_PREV_HOVER', 'text' => 'Lightbox Navigation Previous Button Hover Image'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_LIGHTBOX_NAVIGATION_PREV_HOVER_SUBMITED', 'text' => 'Uploading previous button hover image ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_LIGHTBOX_NAVIGATION_PREV_HOVER_SUCCESS', 'text' => 'Previous button hover image uploaded.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_NAVIGATION_NEXT', 'text' => 'Lightbox Navigation Next Button Image'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_LIGHTBOX_NAVIGATION_NEXT_SUBMITED', 'text' => 'Uploading next button image ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_LIGHTBOX_NAVIGATION_NEXT_SUCCESS', 'text' => 'Next button image uploaded.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_NAVIGATION_NEXT_HOVER', 'text' => 'Lightbox Navigation Next Button Hover Image'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_LIGHTBOX_NAVIGATION_NEXT_HOVER_SUBMITED', 'text' => 'Uploading next button hover image ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_LIGHTBOX_NAVIGATION_NEXT_HOVER_SUCCESS', 'text' => 'Next button hover image uploaded.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_NAVIGATION_CLOSE', 'text' => 'Lightbox Navigation Close Button Image'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_LIGHTBOX_NAVIGATION_CLOSE_SUBMITED', 'text' => 'Uploading close button image ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_LIGHTBOX_NAVIGATION_CLOSE_SUCCESS', 'text' => 'Close button image uploaded.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_NAVIGATION_CLOSE_HOVER', 'text' => 'Lightbox Navigation Close Button Hover Image'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_LIGHTBOX_NAVIGATION_CLOSE_HOVER_SUBMITED', 'text' => 'Uploading close button hover image ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_ADD_LIGHTBOX_NAVIGATION_CLOSE_HOVER_SUCCESS', 'text' => 'Close button hover image uploaded.'));
    
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_CAPTION_STYLES_SETTINGS', 'text' => 'Image Caption Styles & Settings'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_CAPTION_HEIGHT', 'text' => 'Caption Height'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_CAPTION_TITLE_COLOR', 'text' => 'Caption Title Color'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_CAPTION_TEXT_COLOR', 'text' => 'Caption Text Color'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_CAPTION_SCROLL_SCRUB_COLOR', 'text' => 'Caption Scroll Scrub Color'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_CAPTION_SCROLL_BG_COLOR', 'text' => 'Caption Scroll Background Color'));
    
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_SOCIAL_SHARE_STYLES_SETTINGS', 'text' => 'Social Share Styles & Settings'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_SOCIAL_SHARE_ENABLED', 'text' => 'Social Share Enabled'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_SOCIAL_SHARE_LIGHTBOX', 'text' => 'Lightbox Social Share Button Image'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_SOCIAL_SHARE_LIGHTBOX_SUBMITED', 'text' => 'Uploading lightbox social share button image ...'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_SOCIAL_SHARE_LIGHTBOX_SUCCESS', 'text' => 'Lightbox social share button image uploaded.'));
    
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_TOOLTIP_STYLES_SETTINGS', 'text' => 'Tooltip Styles & Settings'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_TOOLTIP_BG_COLOR', 'text' => 'Tooltip Background Color'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_TOOLTIP_STROKE_COLOR', 'text' => 'Tooltip Stroke Color'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_TOOLTIP_TEXT_COLOR', 'text' => 'Tooltip Text Color'));
    
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LABEL_STYLES_SETTINGS', 'text' => 'Label Styles & Settings'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LABEL_POSITION', 'text' => 'Label Position'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LABEL_TEXT_COLOR', 'text' => 'Label Text Color'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LABEL_TEXT_COLOR_HOVER', 'text' => 'Label Text Hover Color'));
    
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_GO_TOP', 'text' => 'go top'));

    array_push($DOPWGG_lang, array('key' => 'DOPWGG_GALLERY_NAME_INFO', 'text' => 'Change gallery name.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_DATA_PARSE_METHOD_INFO', 'text' => 'Gallery Data Parse Method (AJAX, HTML). Default value: AJAX. Set the method by which the data will be parsed to the gallery.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_WIDTH_INFO', 'text' => 'Width (value in pixels). Default value: 900. Set the width of the gallery.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_HEIGHT_INFO', 'text' => 'Height (value in pixels). Default value: 0. Set the height of the gallery. If you set the value to 0 all thumbnails are going to be displayed.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_BG_COLOR_INFO', 'text' => 'Background Color (color hex code). Default value: f1f1f1. Set gallery background color.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_BG_ALPHA_INFO', 'text' => 'Background Alpha (value from 0 to 100). Default value: 100. Set gallery background alpha.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_NO_LINES_INFO', 'text' => 'Number of Lines (auto, number). Default value: 3. Set the number of lines for the grid.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_NO_COLUMNS_INFO', 'text' => 'Number of Columns (auto, number). Default value: 4. Set the number of columns for the grid.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_IMAGES_ORDER_INFO', 'text' => 'Images Order (Normal, Random). Default value: Normal. Set images order.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_RESPONSIVE_ENABLED_INFO', 'text' => 'Responsive Enabled (Enabled, Disabled). Default value: Enabled. Enable responsive layout.'));

    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_SPACING_INFO', 'text' => 'Thumbnails Spacing (value in pixels). Default value: 15. Set the space between thumbnails.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_PADDING_TOP_INFO', 'text' => 'Thumbnails Padding Top (value in pixels). Default value: 0. Set the top padding for the thumbnails.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_PADDING_RIGHT_INFO', 'text' => 'Thumbnails Padding Right (value in pixels). Default value: 0. Set the right padding for the thumbnails.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_PADDING_BOTTOM_INFO', 'text' => 'Thumbnails Padding Bottom (value in pixels). Default value: 0. Set the bottom padding for the thumbnails.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_PADDING_LEFT_INFO', 'text' => 'Thumbnails Padding Left (value in pixels). Default value: 0. Set the left padding for the thumbnails.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_NAVIGATION_INFO', 'text' => 'Thumbnails Navigation (Mouse, Scroll). Default value: Mouse. Set how you navigate through the thumbnails.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_SCROLL_SCRUB_COLOR_INFO', 'text' => 'Thumbnails Scroll Scrub Color (color hex code). Default value: 777777. Set the scroll scrub color.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_SCROLL_BAR_COLOR_INFO', 'text' => 'Thumbnails Scroll Bar Color (color hex code). Default value: e0e0e0. Set the scroll bar color.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAILS_INFO_INFO', 'text' => 'Info Thumbnails Display (None, Tooltip, Label). Default value: Tooltip. Display a small info text on the thumbnails, a tooltip or a label on bottom.'));
    
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_LOADER_INFO', 'text' => 'Thumbnail Loader (path to image). Set the loader for the thumbnails.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_WIDTH_INFO', 'text' => 'Thumbnail Width (the size in pixels). Default value: 200. Set the width of a thumbnail.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_HEIGHT_INFO', 'text' => 'Thumbnail Height (the size in pixels). Default value: 100. Set the height of a thumbnail.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_WIDTH_MOBILE_INFO', 'text' => 'Mobile Thumbnail Width (the size in pixels). Default value: 100. Set the width of a thumbnail on mobile devices.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_HEIGHT_MOBILE_INFO', 'text' => 'Mobile Thumbnail Height (the size in pixels). Default value: 50. Set the height of a thumbnail on mobile devices.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_ALPHA_INFO', 'text' => 'Thumbnail Alpha (value from 0 to 100). Default value: 80. Set the transparancy of a thumbnail.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_ALPHA_HOVER_INFO', 'text' => 'Thumbnail Alpha Hover (value from 0 to 100). Default value: 100. Set the transparancy of a thumbnail when hover.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_BG_COLOR_INFO', 'text' => 'Thumbnail Background Color (color hex code). Default value: cccccc. Set the color of a thumbnail background.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_BG_COLOR_HOVER_INFO', 'text' => 'Thumbnail Background Color Hover (color hex code). Default value: 000000. Set the color of a thumbnail background when hover.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_BORDER_SIZE_INFO', 'text' => 'Thumbnail Border Size (value in pixels). Default value: 0. Set the size of a thumbnail border.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_BORDER_COLOR_INFO', 'text' => 'Thumbnail Border Color (color hex code). Default value: cccccc. Set the color of a thumbnail border.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_BORDER_COLOR_HOVER_INFO', 'text' => 'Thumbnail Border Color Hover (color hex code). Default value: 000000. Set the color of a thumbnail border when hover.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_PADDING_TOP_INFO', 'text' => 'Thumbnail Padding Top (value in pixels). Default value: 3. Set top padding value of a thumbnail.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_PADDING_RIGHT_INFO', 'text' => 'Thumbnail Padding Right (value in pixels). Default value: 3. Set right padding value of a thumbnail.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_PADDING_BOTTOM_INFO', 'text' => 'Thumbnail Padding Bottom (value in pixels). Default value: 3. Set bottom padding value of a thumbnail.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_THUMBNAIL_PADDING_LEFT_INFO', 'text' => 'Thumbnail Padding Left (value in pixels). Default value: 3. Set left padding value of a thumbnail.'));

    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_POSITION_INFO', 'text' => 'Lightbox Position (Document, Gallery). Default value: Document. If the value is document the lightbox is displayed over the web page fitting in the browser window, else the lightbox is displayed in the gallery container.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_WINDOW_COLOR_INFO', 'text' => 'Lightbox Window Color (color hex code). Default value: 000000. Set the color for the lightbox window.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_WINDOW_ALPHA_INFO', 'text' => 'Lightbox Window Alpha (value from 0 to 100). Default value: 80. Set the transparancy for the lightbox window.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_LOADER_INFO', 'text' => 'Lightbox Loader (path to image). Set the loader for the lightbox image.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_BACKGROUND_COLOR_INFO', 'text' => 'Lightbox Background Color (color hex code). Default value: 000000. Set the color for the lightbox background.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_BACKGROUND_ALPHA_INFO', 'text' => 'Lightbox Background Alpha (value from 0 to 100). Default value: 100. Set the transparancy for the lightbox background.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_MARGIN_TOP_INFO', 'text' => 'Lightbox Margin Top (value in pixels). Default value: 70. Set top margin value for the lightbox.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_MARGIN_RIGHT_INFO', 'text' => 'Lightbox Margin Right (value in pixels). Default value: 70. Set right margin value for the lightbox.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_MARGIN_BOTTOM_INFO', 'text' => 'Lightbox Margin Bottom (value in pixels). Default value: 70. Set bottom margin value for the lightbox.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_MARGIN_LEFT_INFO', 'text' => 'Lightbox Margin Left (value in pixels). Default value: 70. Set top left value for the lightbox.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_PADDING_TOP_INFO', 'text' => 'Lightbox Padding Top (value in pixels). Default value: 10. Set top padding value for the lightbox.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_PADDING_RIGHT_INFO', 'text' => 'Lightbox Padding Right (value in pixels). Default value: 10. Set right padding value for the lightbox.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_PADDING_BOTTOM_INFO', 'text' => 'Lightbox Padding Bottom (value in pixels). Default value: 10. Set bottom padding value for the lightbox.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_PADDING_LEFT_INFO', 'text' => 'Lightbox Padding Left (value in pixels). Default value: 10. Set left padding value for the lightbox.'));
    
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_NAVIGATION_PREV_INFO', 'text' => 'Lightbox Navigation Previous Button Image (path to image). Upload the image for lightbox navigation previous button.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_NAVIGATION_PREV_HOVER_INFO', 'text' => 'Lightbox Navigation Previous Button Hover Image (path to image). Upload the image for lightbox navigation previous hover button.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_NAVIGATION_NEXT_INFO', 'text' => 'Lightbox Navigation Next Button Image (path to image). Upload the image for lightbox navigation next button.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_NAVIGATION_NEXT_HOVER_INFO', 'text' => 'Lightbox Navigation Next Button Hover Image (path to image). Upload the image for lightbox navigation next hover button.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_NAVIGATION_CLOSE_INFO', 'text' => 'Lightbox Navigation Close Button Image (path to image). Upload the image for lightbox navigation close button.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LIGHTBOX_NAVIGATION_CLOSE_HOVER_INFO', 'text' => 'Lightbox Navigation Close Button Hover Image (path to image). Upload the image for lightbox navigation close hover button.'));
    
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_CAPTION_HEIGHT_INFO', 'text' => 'Caption Height (value in pixels). Default value: 75. Set caption height.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_CAPTION_TITLE_COLOR_INFO', 'text' => 'Caption Title Color (color hex code). Default value: eeeeee. Set caption title color.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_CAPTION_TEXT_COLOR_INFO', 'text' => 'Caption Text Color (color hex code). Default value: dddddd. Set caption text color.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_CAPTION_SCROLL_SCRUB_COLOR_INFO', 'text' => 'Caption Scroll Scrub Color (color hex code). Default value: 777777. Set scroll scrub color.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_CAPTION_SCROLL_BG_COLOR_INFO', 'text' => 'Caption Scroll Background Color (color hex code). Default value: e0e0e0. Set scroll background color.'));

    array_push($DOPWGG_lang, array('key' => 'DOPWGG_SOCIAL_SHARE_ENABLED_INFO', 'text' => 'Social Share Enabled (Enabled, Disabled). Default value: Enabled. Enable AddThis Social Share.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_SOCIAL_SHARE_LIGHTBOX_INFO', 'text' => 'Lightbox Social Share Button Image (path to image). Upload the image for lightbox social share button.'));

    array_push($DOPWGG_lang, array('key' => 'DOPWGG_TOOLTIP_BG_COLOR_INFO', 'text' => 'Tooltip Background Color (color hex code). Default value: ffffff. Set tooltip background color.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_TOOLTIP_STROKE_COLOR_INFO', 'text' => 'Tooltip Stroke Color (color hex code). Default value: 000000. Set tooltip stroke color.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_TOOLTIP_TEXT_COLOR_INFO', 'text' => 'Tooltip Text Color (color hex code). Default value: 000000. Set tooltip text color.'));

    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LABEL_POSITION_INFO', 'text' => 'Label Position (Bottom, Top). Default value: Bottom. Set label position.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LABEL_TEXT_COLOR_INFO', 'text' => 'Label Text Color (color hex code). Default value: 000000. Set label text color.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_LABEL_TEXT_COLOR_HOVER_INFO', 'text' => 'Label Text Color Hover (color hex code). Default value: ffffff. Set label text hover color.'));

    // Widget    
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_WIDGET_TITLE', 'text' => 'Wall/Grid Gallery'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_WIDGET_DESCRIPTION', 'text' => 'Select the ID of the Gallery you want in the widget.'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_WIDGET_LABEL_TITLE', 'text' => 'Title:'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_WIDGET_LABEL_ID', 'text' => 'Select Gallery ID:'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_WIDGET_NO_SCROLLERS', 'text' => 'No galleries.'));
    
    // HELP
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_HELP_DOCUMENTATION', 'text' => 'Documentation'));
    array_push($DOPWGG_lang, array('key' => 'DOPWGG_HELP_FAQ', 'text' => 'FAQ'));
    
    for ($i=0; $i<count($DOPWGG_lang); $i++){
        define($DOPWGG_lang[$i]['key'], $DOPWGG_lang[$i]['text']);
    }

?>