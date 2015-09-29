<?php
namespace pearlLightboxgallery;
class pearlImageOptionsValues {

    public function add_options()
    {
        // Add options to set thumbnail style
        add_option('pearl_thumbnail_width','120px','','yes');
        add_option('pearl_thumbnail_border_color','#cccccc','','yes');
        add_option('pearl_thumbnail_border_width','1px','','yes');
        add_option('pearl_thumbnail_padding','1%','','yes');
        add_option('pearl_thumbnail_margin','1%','','yes');
        add_option('pearl_thumbnail_border_radius','3px','','yes');
        add_option('pearl_thumbnail_font_size','12px','','yes');
        add_option('pearl_thumbnail_bg_color','#f0f0f0','','yes');
        add_option('pearl_lightbox_no_of_character','24','','yes');
    }
    
    public function update_options() {
        
        $ok = false;
        $message = '';
        $optionValues = $_POST;
   
        foreach($optionValues as $key => $value){
            
          if ( get_option( $key ) !== false ) {
            update_option($key,$value);
			$ok = true;
          }
            
        }
        
        if($ok)
            $message = '<div id="message" class="updated fade"><p>Options Saved</p></div>';
        else
            $message = '<div id="message" class="error fade"><p>Failed to save options</p></div> ';
        echo $message;
          
    }
    
    public function delete_options()
    {
        delete_option('pearl_thumbnail_width');
        delete_option('pearl_thumbnail_border_color');
        delete_option('pearl_thumbnail_border_width');
        delete_option('pearl_thumbnail_padding');
        delete_option('pearl_thumbnail_margin');
        delete_option('pearl_thumbnail_bg_color');
        delete_option('pearl_lightbox_no_of_character');
        delete_option('pearl_thumbnail_border_radius');
        delete_option('pearl_thumbnail_font_size');

    }  
}
?>
