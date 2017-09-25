jQuery(document).ready(function() {  
  
    // Код стоило-бы оптимизировать, но не было времени сделать это.  
  
    jQuery('#post_background_button').click(function() {  
     formfield = jQuery('#post_background').attr('name');  
     tb_show('', 'media-upload.php?type=image&TB_iframe=true&ETI_field=post_background');  
  
     window.send_to_editor = function(html) {  
     imgurl = jQuery('img',html).attr('src');  
     jQuery('input[name='+formfield+']').val(imgurl);  
     tb_remove();  
    }  
     return false;  
    });  
  
    jQuery('#post_preview_button').click(function() {  
     formfield = jQuery('#post_preview').attr('name');  
     tb_show('', 'media-upload.php?type=image&TB_iframe=true&ETI_field=post_preview');  
  
     window.send_to_editor = function(html) {  
     imgurl = jQuery('img',html).attr('src');  
     jQuery('input[name='+formfield+']').val(imgurl);  
     tb_remove();  
    }  
     return false;  
    });  
  
    jQuery('#post_icon_button').click(function() {  
     formfield = jQuery('#post_icon').attr('name');  
     tb_show('', 'media-upload.php?type=image&TB_iframe=true&ETI_field=post_icon');  
  
     window.send_to_editor = function(html) {  
     imgurl = jQuery('img',html).attr('src');  
     jQuery('input[name='+formfield+']').val(imgurl);  
     tb_remove();  
    }  
     return false;  
    });  
  
});  