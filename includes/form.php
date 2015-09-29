<?php
namespace pearlLightboxgallery;
class pearlDisplayForm {
    
    public function __construct() {
        
        $this->optionsForm();
        $this->authorDetails();
    }
    
    public function optionsForm() {

        $displayOptionsForm = '

         <form method="post" action="'.$PHP_SELF.'">
        
           <h3>Thumbnail Settings</h3>
           <label for="pearl_thumbnail_width">Thumbnail Width :</label>
           <input type="text" name="pearl_thumbnail_width" value="'.get_option('pearl_thumbnail_width').'"/>
           <label for="pearl_thumbnail_height">Thumbnail Height :</label>
           <input type="text" name="pearl_thumbnail_height" value="'.get_option('pearl_thumbnail_height').'"/><br/>
           <label for="pearl_thumbnail_border_width">Thumbnail Border Width :</label>
           <input type="text" name="pearl_thumbnail_border_width" value="'.get_option('pearl_thumbnail_border_width').'"/>
           <label for="pearl_thumbnail_border_color">Thumbnail Border Color :</label>
           <input type="text" name="pearl_thumbnail_border_color" value="'.get_option('pearl_thumbnail_border_color').'"/><br/>
           <label for="pearl_thumbnail_border_radius">Thumbnail Border Radius :</label>
           <input type="text" name="pearl_thumbnail_border_radius" value="'.get_option('pearl_thumbnail_border_radius').'"/><br/>
           <label for="pearl_thumbnail_margin">Margin :</label>
           <input type="text" name="pearl_thumbnail_margin" value="'.get_option('pearl_thumbnail_margin').'"/>
           <label for="pearl_thumbnail_padding">Padding :</label>
           <input type="text" name="pearl_thumbnail_padding" value="'.get_option('pearl_thumbnail_padding').'"/><br/>
           <label for="pearl_thumbnail_bg_color">Bg Color :</label>
           <input type="text" name="pearl_thumbnail_bg_color" value="'.get_option('pearl_thumbnail_bg_color').'"/>
          
           <label for="pearl_lightbox_no_of_character">No of Character :</label>
           <input type="text" name="pearl_lightbox_no_of_character" value="'.get_option('pearl_lightbox_no_of_character').'"/><br/>
           <label for="pearl_thumbnail_font_size">Font size :</label>
           <input type="text" name="pearl_thumbnail_font_size" value="'.get_option('pearl_thumbnail_font_size').'"/>
           
           <input type="submit" name="submit" value="Submit"/>
      
         </form> ';
    
        echo $displayOptionsForm;
    }
    
    public function authorDetails() {
        
        $details = ' <p>Created by <a href="http://pearlbells.co.uk/" target="_blank">Pearlbells</a><br/> Follow me : <a href="http://twitter.com/#!/pearlbells" target="_blank">Twitter</a><br/>Please Donate : <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=W884YAWEDPA9U" target="_blank">Click Here</a></p>
         <p>Feel free to email me lizeipe@gmail.com for any advice or suggestion.</p>';
        echo $details;
        
    }
    
}
?>
