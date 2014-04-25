<?php

/*
* Title                   : Wall/Grid Gallery (WordPress Plugin)
* Version                 : 2.0
* File                    : templates.php
* File Version            : 1.8
* Created / Last Modified : 01 October 2013
* Author                  : Dot on Paper
* Copyright               : © 2011 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Wall/Grid Gallery Templates Class.
*/

    if (!class_exists("DOPWGGTemplates")){
        class DOPWGGTemplates{
            function DOPWGGTemplates(){// Constructor.
            }

            function galleriesList(){// Return Template    
                global $blog_id;
?>
    <script type="text/JavaScript">
        var DOPWGG_curr_page = "Galleries List",
        DOPWGG_plugin_url = "<?php echo DOPWGG_Plugin_URL?>",
        DOPWGG_plugin_abs = "<?php echo DOPWGG_Plugin_AbsPath?>", 
<?php
    global $DOPWGG_lang;
    
    for ($i=0; $i<count($DOPWGG_lang); $i++){
        echo $DOPWGG_lang[$i]['key']." = '".$DOPWGG_lang[$i]['text']."', ";
    }
?>
        DOPWGG_END_TRANSLATION_LIST = 'End translation.';
    </script>
    <div class="wrap DOPWGG-admin">
        <h2><?php echo DOPWGG_TITLE?></h2>
        <div id="DOPWGG-admin-message"></div>
        <a href="http://envato-help.dotonpaper.net/wall-grid-gallery-wordpress-plugin.html#faq" target="_blank" class="DOPWGG-help"><?php echo DOPWGG_HELP_FAQ ?></a>
        <a href="http://envato-help.dotonpaper.net/wall-grid-gallery-wordpress-plugin.html" target="_blank" class="DOPWGG-help"><?php echo DOPWGG_HELP_DOCUMENTATION ?></a>
        
        <input type="hidden" id="blog_id" value="<?php echo $blog_id; ?>" />
        <input type="hidden" id="gallery_id" value="" />
        <br class="DOPWGG-clear" />
        <div class="main">
            <div class="column column1">
                <div class="column-header">
                    <div class="add-button">
                        <a href="javascript:dopwggAddGallery()" title="<?php echo DOPWGG_ADD_GALLERY_SUBMIT?>"></a>
                    </div>
                    <div class="edit-button">
                        <a href="javascript:dopwggShowDefaultSettings()" title="<?php echo DOPWGG_EDIT_GALLERIES_SUBMIT?>"></a>
                    </div>
                    <a href="javascript:void()" class="header-help"><span><?php echo DOPWGG_GALLERIES_HELP?></span></a>
                </div>
                <div class="column-content-container">
                    <div class="column-content">
                        &nbsp;
                    </div>
                </div>
            </div>
            <div class="column-separator"></div>
            <div class="column column2">
                <div class="column-header"></div>
                <div class="column-content-container">
                    <div class="column-content">
                        &nbsp;
                    </div>
                </div>
            </div>
            <div class="column-separator"></div>
            <div class="column column3">
                <div class="column-header"></div>
                <div class="column-content-container">
                    <div class="column-content">
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
        <br class="DOPWGG-clear" />
    </div>
<?php
            }
        }
    }
?>