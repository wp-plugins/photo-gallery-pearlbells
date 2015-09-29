<?php
namespace pearlLightboxgallery;
class pearlLightboxData {
    
    public function __construct() {

        add_shortcode('pearl_lightbox_display', array($this,'pearl_getImage'));
    }

    function pearl_getImage($atts, $content = null)
    {
        if(is_array($atts))
            $imageIds = explode(',', $atts['ids']);
        else
            $imageIds =& get_children( 'post_type=attachment&post_mime_type=image&post_parent=' . get_the_id() );
   
        $display_image = '<ul class="clearfix pearl-lightbox" >';
        if( isset( $atts['caption'] ) )
        $is_caption = ( $atts['caption'] == 'true') ? 1 : 0 ;
     
        foreach( $imageIds as $imageID  )
        {  
            if(is_object($imageID))
                $imageID = $imageID->ID;
            $display_image .= '<li>';
            $display_image .= '<a href="'.wp_get_attachment_url( $imageID ).'" title="'.$title.'" >';
            $display_image .= wp_get_attachment_image($imageID, 'thumbnail', false);
            $display_image .= '</a>';
          
            if( $is_caption )
            {
                $subtitle = trim(get_the_title($imageID));
                $chCount = get_option('pearl_lightbox_no_of_character');
                $title = ( strlen($subtitle) > $chCount)? substr( $subtitle, 0, $chCount ).'...':$subtitle;
                $display_image .= '<span class="pearl_title">'.$title.'</span>';
            }
            $display_image .= '</li>';

          }
          $display_image .= '</ul>';

        return $display_image;		
    }
}
?>
