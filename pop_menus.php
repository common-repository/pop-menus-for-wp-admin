<?php
/**
 * @package Pop Menus for WP-Admin
 * @author Foxinni
 * @version 1.1
 */
/*
Plugin Name: Pop Menus for WP-Admin
Plugin URI: http://foxinni.com
Description:  Pop menus rock! This simple plugin will be saving you time by creating quick and easy to use pop menus for your WP-Admin sidebar. Powered by jQuery and CSS.
Author: Foxinni
Version: 1.1
Author URI: http://foxinni.com
*/


function ts_pop_menus(){
    ?>
    <style type="text/css">
    
    #adminmenu { position: fixed;}
    * html #adminmenu { position: static}
    *+html #adminmenu { position: static}
    #adminmenu li .wp-submenu { width: 220px; margin-top: -20px; position: absolute; display: none;}
    #adminmenu li .wp-menu-toggle {display: none;}
    #adminmenu .wp-submenu ul{ border:#e3e3e3 solid!important; border-width:1px 0px 1px 0px; }
    #adminmenu  .wp-menu-separator {position: static;}
    
    /* Folded CSS */
    
    .folded #adminmenu div.wp-submenu-head, .folded #adminmenu li.wp-has-submenu div.sub-open { width: 130px; }
   
    </style>
    <script type="text/javascript">
    
    jQuery(document).ready(function(){
        
        jQuery('.wp-submenu').hide();
        
        if(jQuery('body').hasClass('folded')){  // Folded sidebar
        
        jQuery('#adminmenu > li.menu-top').hover(
            function(){
                if(jQuery.browser.msie)
                    {
                         jQuery(this).children('div.wp-submenu').css('margin-left','35px').animate({marginLeft:0},200).show();  
                     }
                     else 
                    {
                        jQuery(this).children('div.wp-submenu').css('margin-left','35px').animate({marginLeft:20},200).show();  
                    }  
            },
            function(){
                jQuery(this).children('div.wp-submenu').hide();  
            }
        );
        
        }
        else // Normal Action
        {  
        jQuery('#adminmenu > li.menu-top').hover(
            function(){
                jQuery(this).children('div.wp-submenu').css('margin-left','105px').animate({marginLeft:90},200).show();    
            },
            function(){
                jQuery(this).children('div.wp-submenu').hide();  
            }
        );
        
        }
    });
    
    </script>
<?php   
    
}

add_action('admin_head', 'ts_pop_menus');
?>