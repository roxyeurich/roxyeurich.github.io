<?php
/**
 * Title: featuredr Lite Element
 *
 * Description: Slides three images having optional custom links
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category Cyber Chimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v3.0 (or later)
 * @link     http://www.cyberchimps.com/
 */

// Don't load directly
if( !defined( 'ABSPATH' ) ) {
	die( '-1' );
}
// Add Slider page options
add_action( 'init', 'cyberchimps_featured_lite_page_options' );

function cyberchimps_featured_lite_page_options() {
    /**
     * Set up Portfolio Lite on Page options
     */

    // set directory
    $directory = get_template_directory_uri();

    $page_fields	= array(
        // Image one
        array(
        		'name'    => __( 'Featured Area Title', 'parallax' ),
        		'id'      => 'featuredarea_title',
        		'std'     => __( 'This is Featured Area Title', 'parallax' ),
        		'type'    => 'text',
        		'section' => 'cyberchimps_featuredarea_section',
        		'heading' => 'cyberchimps_blog_heading'
        ),
        array(
        		'name'    => __( 'Featured Area Text', 'parallax' ),
        		'id'      => 'featuredarea_text',
        		'std'     => __( 'Here you can place Featured Area Text.', 'parallax' ),
        		'type'    => 'editor',
        		'section' => 'cyberchimps_featuredarea_section',
        		'heading' => 'cyberchimps_blog_heading'
        ),        
        array(
        		'name'    => __( 'Featured Area Button1 Text', 'parallax' ),
        		'id'      => 'featuredarea_button1_text',
        		'class'   => 'featuredarea_button1_toggle',
        		'std'     => __( 'Free Responsive Themes', 'parallax' ),
        		'type'    => 'text',
        		'section' => 'cyberchimps_featuredarea_section',
        		'heading' => 'cyberchimps_blog_heading'
        ),
		array(
				'name'    => __( 'Featured Area Button1 URL', 'parallax' ),
				'id'      => 'featuredarea_button1_url',
				'class'   => 'featuredarea_button1_toggle',
				'std'     => '',
				'type'    => 'text',
				'section' => 'cyberchimps_featuredarea_section',
				'heading' => 'cyberchimps_blog_heading'
        ),
    	array(
    			'name'    => __( 'Featured Area Button2 Text', 'parallax' ),
    			'id'      => 'featuredarea_button2_text',
    			'class'   => 'featuredarea_button2_toggle',
    			'std'     => __( 'Explore Pro Themes', 'parallax' ),
    			'type'    => 'text',
    			'section' => 'cyberchimps_featuredarea_section',
    			'heading' => 'cyberchimps_blog_heading'
    		),
    	array(
    			'name'    => __( 'Featured Area Button2 URL', 'parallax' ),
    			'id'      => 'featuredarea_button2_url',
    			'class'   => 'featuredarea_button2_toggle',
    			'std'     => '',
    			'type'    => 'text',
    			'section' => 'cyberchimps_featuredarea_section',
    			'heading' => 'cyberchimps_blog_heading'
    	),
    array(
    		'name'    => __( 'Featured Area Background Image', 'parallax' ),
    		'id'      => 'featuredarea_backgroundimage',
    		'class'   => 'custom_featuredbg_options_toggle',
    		'std'     => '',
    		'type'    => 'single_image',
    		'section' => 'cyberchimps_featuredarea_section',
    		'heading' => 'cyberchimps_blog_heading'
    		)
    		
    );
    /*
     * configure your meta box
     */
    $page_config = array(
        'id'				=> 'featured_lite_options', // meta box id, unique per meta box
        'title'				=> __( 'Featured Lite Options', 'cyberchimps_core' ), // meta box title
        'pages'				=> array( 'page' ), // post types, accept custom post types as well, default is array('post'); optional
        'context'			=> 'normal', // where the meta box appear: normal (default), advanced, side; optional
        'priority'			=> 'low', // order of meta box: high (default), low; optional
        'fields'			=> $page_fields, // list of meta fields (can be added by field arrays)
        'local_images'		=> false, // Use local or hosted images (meta box images for add/remove)
        'use_with_theme'	=> true //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
    );

    /*
     * Initiate your meta box
     */
    $page_meta = new Cyberchimps_Meta_Box( $page_config );
}

// Action for Slider Lite
add_action( 'featured_lite', 'cyberchimps_featured_lite_content' );

function cyberchimps_featured_lite_content() {
	global $wp_query, $post;

	// Set directory uri
	$directory_uri = get_template_directory_uri();
	$slide         = array();
	$link          = array();

	if( is_page() ) {
		$featuredarea_title                     = ( get_post_meta( $post->ID, 'featuredarea_title', true ) ) ? get_post_meta( $post->ID, 'featuredarea_title', true ) : '';
		$featuredarea_text                      = ( get_post_meta( $post->ID, 'featuredarea_text', true ) ) ? get_post_meta( $post->ID, 'featuredarea_text', true ) : '';
		$featuredarea_button1_text              = ( get_post_meta( $post->ID, 'featuredarea_button1_text', true ) ) ? get_post_meta( $post->ID, 'featuredarea_button1_text', true ) : '';
		$featuredarea_button1_url               = ( get_post_meta( $post->ID, 'featuredarea_button1_url', true ) ) ? get_post_meta( $post->ID, 'featuredarea_button1_url', true ) : '';
		$featuredarea_button2_text              = (  get_post_meta( $post->ID, 'featuredarea_button2_text', true ) ) ? get_post_meta( $post->ID, 'featuredarea_button2_text', true ) : '';
		$featuredarea_button2_url               = ( get_post_meta( $post->ID, 'featuredarea_button2_url', true ) ) ? get_post_meta( $post->ID, 'featuredarea_button2_url', true ) : '';
		$featuredarea_backgroundimage           = ( get_post_meta( $post->ID, 'featuredarea_backgroundimage', true ) ) ? get_post_meta( $post->ID, 'featuredarea_backgroundimage', true ) : '';
			
	}
	else {
	
		$featuredarea_title = cyberchimps_get_option( 'bl_featuredarea_title', 'CyberChimps' );
		$featuredarea_text                      = cyberchimps_get_option( 'bl_featuredarea_text', 'CyberChimps' );
		$featuredarea_button1_text              = cyberchimps_get_option( 'bl_featuredarea_button1_text', 'CyberChimps' );
		$featuredarea_button1_url               = cyberchimps_get_option( 'bl_featuredarea_button1_url', 'CyberChimps' );
		$featuredarea_button2_text              = cyberchimps_get_option( 'bl_featuredarea_button2_text', 'CyberChimps' );
		$featuredarea_button2_url               = cyberchimps_get_option( 'bl_featuredarea_button2_url', 'CyberChimps' );
		$featuredarea_backgroundimage		= cyberchimps_get_option( 'bl_featuredarea_backgroundimage', 'CyberChimps' );
	}
	
	$i = 0;
	?>
	<style>
    #featured_lite_section{  background: none repeat scroll 0 0; background-image: url('<?php echo $featuredarea_backgroundimage;?>');background-size: cover;}
</style>
			<!-- FeaturedArea without button -->
			<div id="featuredarea_container" class="row">
				<div id="featuredarea" class="col-md-12" >
					<div class="featuredarea-content-container">
						<div class="featuredarea-content">							
							<div class="featured-text-container">
								<h2 class="featured-title" ><?php echo $featuredarea_title ?></h2>
								<div class="featured-text" ><?php echo $featuredarea_text ?></div>
								<div class="featured-buttons">
									<?php if( !empty( $featuredarea_button1_text ) ){ ?> 
										<a href="<?php echo $featuredarea_button1_url; ?>" class="btn btn-large btn-primary featured-button1"><?php echo $featuredarea_button1_text; ?></a>
									<?php } ?>
									<?php if( !empty( $featuredarea_button2_text ) ){ ?> 
										<a href="<?php echo $featuredarea_button2_url; ?>" class="btn btn-large btn-primary featured-button2"><?php echo $featuredarea_button2_text; ?></a>								
									<?php } ?>
								</div>						
							</div>						
						</div>
						<!-- #featuredarea-text -->
					</div>
				</div>
				<!-- .row-fluid .span12 -->
			</div><!-- row-fluid -->
			
<?php
}

?>
