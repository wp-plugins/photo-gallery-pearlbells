<?php
namespace pearlLightboxgallery;
class pearlImageStyleData {
    
    public function __construct() {         
        add_action( 'wp_enqueue_scripts', array($this,'safely_add_stylesheet') );
        add_action('wp_head', array($this,'pearl_script'));
    }
    
    public function safely_add_stylesheet() {
         wp_enqueue_style( 'magnific-popup', plugins_url('../css/magnific-popup.css', __FILE__) );
         wp_enqueue_style( 'pearl_lightbox', plugins_url('../css/styles.css', __FILE__) );
         $custom_css = '
                .pearl-lightbox li {
                     background-color: '.get_option('pearl_thumbnail_bg_color').';
                     border-color: '.get_option('pearl_thumbnail_border_color').';
                     border-style: solid;
                     border-width: '.get_option('pearl_thumbnail_border_width').';
                     border-radius: '.get_option('pearl_thumbnail_border_radius').';
                     padding: '.get_option('pearl_thumbnail_padding').';
                     margin: '.get_option('pearl_thumbnail_margin').';
                     max-width: '.get_option('pearl_thumbnail_width').';
                }
                .pearl-lightbox .pearl_title  {
                     line-height: '.get_option('pearl_thumbnail_font_size').';
                     font-size: '.get_option('pearl_thumbnail_font_size').';  
                }               
                ';
                wp_add_inline_style( 'pearl_lightbox', $custom_css );
    }
         
    public function pearl_script()
    {            
         // create array of all scripts
        $scripts = array( 'jquery' => 'js/jquery.js',
                          'popup' => 'js/popup.js',
                          'pearllightbox' => 'js/pearllightbox.js');
 
        foreach( $scripts as $key => $sc )
        {
           wp_deregister_script( $key );
           wp_register_script( $key, plugin_dir_url(dirname(__FILE__)).$sc , array('jquery') );
           wp_enqueue_script( $key );  
        }
    }
}
?>
