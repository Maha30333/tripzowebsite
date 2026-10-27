<?php
/*
 * Widget Name: Full Screen Menu
 * Author: POSIMYTH
 * Author URI: https://posimyth.com
 * 
 * @package wdesignkit
 */

use wdkit\wdkit_wbcontroller\Wdkit_Wb_Elementor_Controller;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Image_Size;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Class Wdkit_Full_Screen_Menu_59j2u825
 */
class Wdkit_Full_Screen_Menu_59j2u825 extends Widget_Base {

    /**
     * Get Widget Name.
     *
     * @since 2.5.1
     */
    public function get_name() {
        return 'wb-59j2u825';
    }

    /**
     * Get Widget Title.
     *
     * @since 2.5.1
     */
    public function get_title() {
        return esc_html__('Full Screen Menu', 'wdesignkit');
    }

    
    /**
     * Get Widget Icon.
     *
     * @since 2.5.1
     */
    public function get_icon() {
        return 'eicon-menu-toggle tpae-wdkit-logo';
    }

    /**
     * Get Widget categories.
     *
     * @since 2.5.1
     */
    public function get_categories() {
        $GG_Databash = get_option( "wkit_builder" );
        if ( (empty($GG_Databash) || $GG_Databash == false) ) {
            return array('WDesignKit');
        }else{
            if( in_array( 'WDesignKit', $GG_Databash ) ){

                return array('WDesignKit');
            }else{
                return array('WDesignKit');
            }
        }
    }

    /**
     * Get Widget keywords.
     *
     * @since 2.5.1
     */
    public function get_keywords() {
        return array('Full Screen Menu','WordPress Menu Widget','Elementor Menu');
    }

    

    /**
        * Prevent JS senitizer
        *
        * @since 1.2.4
        * */
        function wdk_senitize_js( $input ) {

            $input = preg_replace( '/&#x[0-9a-fA-F]+;/i', '', $input );

            // Remove complete iframe tags with or without content
            $input = preg_replace( '/<iframe[^>]*>.*?<\/iframe>/is', '', $input );

            // Remove incomplete iframe tags
            $input = preg_replace( '/<iframe[^>]*\/?>/is', '', $input );

            // Remove JavaScript pseudo-protocols (like javascript:)
            $input = preg_replace( '/javascript\s*:/i', '', $input );

            // Remove JavaScript event handlers (like onload, onclick, etc.)
            $input = preg_replace( '/\s*on\w+\s*=\s*(".*?"|\'.*?\'|[^>\s]+)/is', '', $input );

            // Ensure input is not overly stripped by handling invalid tags carefully
            $input = strip_tags( $input );

            return trim( $input );
        }

    

    

    /**
    * Get Widget Scripts
    *
    * @since 2.5.1
    */
    public function get_script_depends() {
        
        /**External js enqueue*/
        wp_enqueue_script( 'wd_ex_script_b2whx626', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js', array(), '2.5.1.862934', true );
wp_enqueue_script( 'wd_ex_script_3ei6cp26', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/CustomEase.min.js', array(), '2.5.1.563392', true );


        
        /** Secure upload URL (http/https) */
        $upload_dir = wp_upload_dir();
        $baseurl = set_url_scheme( $upload_dir['baseurl'], is_ssl() ? 'https' : 'http' );
        wp_enqueue_script( 'wkit_child_script_km6usj26', $baseurl.'/wdesignkit/elementor/Full-Screen-Menu_59j2u825/Full_Screen_Menu_59j2u825.js', array(), '2.5.1.393802', true );

        return [ 'wkit_child_script_km6usj26' ];
    }

    /**
    * Get Widget Styles
    *
    * @since 2.5.1
    */
    public function get_style_depends() {
        
        /**External Css enqueue*/
        

        
        /** Secure upload URL (http/https) */
        $upload_dir = wp_upload_dir();
        $baseurl = set_url_scheme( $upload_dir['baseurl'], is_ssl() ? 'https' : 'http' );
        wp_enqueue_style( 'wkit_css_1_cw7guq26', $baseurl.'/wdesignkit/elementor/Full-Screen-Menu_59j2u825/Full_Screen_Menu_59j2u825.css', false, '2.5.1.828521', 'all' );

        return [ 'wkit_css_1_cw7guq26' ];
    }

    

    /**
     * Register controls.
     *
     * @since 2.5.1
     */
    protected function register_controls() {

            $this->start_controls_section('Layout_tab_content',
            [
                'label' => esc_html__( 'Layout', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('select_i7kef925',
                array(
            
            'label' => esc_html__( 'Style', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'style-1',
            
            'options' => array( 'style-1'  => esc_html__( 'Style 1', 'wdesignkit' ),'style-2'  => esc_html__( 'Style 2', 'wdesignkit' ),'style-3'  => esc_html__( 'Style 3', 'wdesignkit' ), ),
        )
            );
$this->end_controls_section();$this->start_controls_section('Site Logo_tab_content',
            [
                'label' => esc_html__( 'Site Logo', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('select_k510b025',
                array(
            
            'label' => esc_html__( 'Logo Type', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'text',
            
            'options' => array( 'image'  => esc_html__( 'Image', 'wdesignkit' ),'text'  => esc_html__( 'Text', 'wdesignkit' ), ),
        )
            );
$this->add_control('heading_lzeiky25',
                array(
            
            'label' => esc_html__( 'Menu Closed', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            
            
            
        )
            );
$this->add_control('text_kk3ttz25',
                array(
            
            'label' => esc_html__( 'Text ', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'Wdesignkit', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            'dynamic' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'text'),
],
                ),
        )
            );
$this->add_control('iconscontrol_04dzlb25',
                array(
            
            'label' => esc_html__( 'Select Icon', 'wdesignkit' ),
            'type' => Controls_Manager::ICONS,
            'fa4compatibility' => 'icon',
            
            
            'label_block' => true,
            'skin' => 'media',
            'exclude_inline_options' => array('none'),
            
            
            'default' => array(
                'value' => 'fas fa-angle-up',
                'library' => 'fa-solid',
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'text'),
],
                ),
        )
            );
$this->add_control('media_28pnhw25',
                array(
            
            'label' => esc_html__( 'Select Image', 'wdesignkit' ),
            'type' => Controls_Manager::MEDIA,
            'ai'   => [ 'active' => false ],
            
            'default' => array(
                'url' => 'https://etemplates.wdesignkit.com/widgets/wp-content/plugins/wdesignkit/assets/images/jpg/placeholder.png',
            ),
            
            'label_block' => true,
            
            'media_types' => array("image","svg"),
           'dynamic' => array(
                'active' => true,
            ),
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'image'),
],
                ),
        )
            );
$this->add_control('heading_fh1gom25',
                array(
            
            'label' => esc_html__( 'Menu Opened', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
            
            
        )
            );
$this->add_control('text_vujl7925',
                array(
            
            'label' => esc_html__( 'Text ', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'Wdesignkit', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            'dynamic' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'text'),
],
                ),
        )
            );
$this->add_control('iconscontrol_7u4hz125',
                array(
            
            'label' => esc_html__( 'Select Icon', 'wdesignkit' ),
            'type' => Controls_Manager::ICONS,
            'fa4compatibility' => 'icon',
            
            
            'label_block' => true,
            'skin' => 'media',
            'exclude_inline_options' => array('none'),
            
            
            'default' => array(
                'value' => 'fas fa-angle-down',
                'library' => 'fa-solid',
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'text'),
],
                ),
        )
            );
$this->add_control('media_ivaksu25',
                array(
            
            'label' => esc_html__( 'Select Image', 'wdesignkit' ),
            'type' => Controls_Manager::MEDIA,
            'ai'   => [ 'active' => false ],
            
            'default' => array(
                'url' => 'https://etemplates.wdesignkit.com/widgets/wp-content/plugins/wdesignkit/assets/images/jpg/placeholder.png',
            ),
            
            'label_block' => true,
            
            'media_types' => array("image","svg"),
           'dynamic' => array(
                'active' => true,
            ),
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'image'),
],
                ),
        )
            );
$this->add_control('url_2yz3m025',
                array(
            
            'label' => esc_html__( 'Site URL', 'wdesignkit' ),
            'type' => Controls_Manager::URL,
            
            
            'options' => array('url','is_external','nofollow',),
            'default' => array(
                'url' => '#',
                'is_external' => true,
                'nofollow' => true,
                'custom_attributes' => '',
            ),
            
            'label_block' => true,
            'separator' => 'before',
            
            'dynamic' => array(
                'active' => true,
            ),
            
        )
            );
$this->add_control('heading_d7irwo25',
                array(
            
            'label' => esc_html__( 'Menubar', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
            
            
        )
            );
$this->add_control('text_sxyzte25',
                array(
            
            'label' => esc_html__( 'Text', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'Menu', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            
            
        )
            );
$this->end_controls_section();$this->start_controls_section('Content_tab_content',
            [
                'label' => esc_html__( 'Content', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$repeater_s4q1yh26 = new \Elementor\Repeater();

                $repeater_s4q1yh26->add_control('text_wv6stn25',
                array(
            
            'label' => esc_html__( 'Text', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'Home', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            'dynamic' => array(
                'active' => true,
            ),
            
        )
            );
$repeater_s4q1yh26->add_control('iconscontrol_ibnxvb25',
                array(
            
            'label' => esc_html__( 'Select Icon', 'wdesignkit' ),
            'type' => Controls_Manager::ICONS,
            'fa4compatibility' => 'icon',
            
            
            'label_block' => true,
            'skin' => 'media',
            'exclude_inline_options' => array('none'),
            
            
            'default' => array(
                'value' => 'far fa-user',
                'library' => 'fa-solid',
            ),
            
        )
            );
$repeater_s4q1yh26->add_control('url_twsl4o25',
                array(
            
            'label' => esc_html__( 'URL', 'wdesignkit' ),
            'type' => Controls_Manager::URL,
            
            
            'options' => array('url','is_external','nofollow',),
            'default' => array(
                'url' => '#',
                'is_external' => true,
                'nofollow' => true,
                'custom_attributes' => '',
            ),
            
            'label_block' => true,
            
            
            'dynamic' => array(
                'active' => true,
            ),
            
        )
            );

                
                $this->add_control('repeater_17v3u725',
                    array(
                
				'type' => Controls_Manager::REPEATER,
				'label' => esc_html__( 'Menu', 'wdesignkit' ),
                
                
                'label_block' => true,
                
                
				'fields' => $repeater_s4q1yh26->get_controls(),
                'default' => array(array('_id'=>uniqid('Wkit-pfjpxm26'),
'text_wv6stn25' => esc_html__('Home', 'wdesignkit'), 
'iconscontrol_ibnxvb25' => 'far fa-user', 
'url_twsl4o25' => '#', 
),
),
                
                     
                
        )
                );
$this->end_controls_section();$this->start_controls_section('Featured Video_tab_content',
            [
                'label' => esc_html__( 'Featured Video', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('switcher_krpvl825',
                array(
            
            'label' => esc_html__( 'Show Video', 'wdesignkit' ),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'wdesignkit' ),
            'label_off' => esc_html__( 'No', 'wdesignkit' ),
            
            'return_value' => 'yes',
            'default' => 'yes',
            
            'label_block' => false,
            
            
            
        )
            );
$this->add_control('media_xlwwzb25',
                array(
            
            'label' => esc_html__( 'Select Video', 'wdesignkit' ),
            'type' => Controls_Manager::MEDIA,
            'ai'   => [ 'active' => false ],
            
            'default' => array(
                'url' => 'https://etemplates.wdesignkit.com/widgets/wp-content/plugins/wdesignkit/assets/images/jpg/placeholder.png',
            ),
            
            'label_block' => true,
            
            'media_types' => array("video"),
           'dynamic' => array(
                'active' => true,
            ),
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'switcher_krpvl825', 'operator' => '==', 'value' => 'yes'),
],
                ),
        )
            );
$this->end_controls_section();$this->start_controls_section('Socials_tab_content',
            [
                'label' => esc_html__( 'Socials', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$repeater_f7phhz26 = new \Elementor\Repeater();

                $repeater_f7phhz26->add_control('text_ln79p225',
                array(
            
            'label' => esc_html__( 'Text', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'Instagram', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            'dynamic' => array(
                'active' => true,
            ),
            
        )
            );
$repeater_f7phhz26->add_control('iconscontrol_illl9225',
                array(
            
            'label' => esc_html__( 'Select Icon', 'wdesignkit' ),
            'type' => Controls_Manager::ICONS,
            'fa4compatibility' => 'icon',
            
            
            'label_block' => true,
            'skin' => 'media',
            'exclude_inline_options' => array('none'),
            
            
            'default' => array(
                'value' => 'fab fa-instagram',
                'library' => 'fa-solid',
            ),
            
        )
            );
$repeater_f7phhz26->add_control('url_bl41pi25',
                array(
            
            'label' => esc_html__( 'URL', 'wdesignkit' ),
            'type' => Controls_Manager::URL,
            
            
            'options' => array('url','is_external','nofollow',),
            'default' => array(
                'url' => '#',
                'is_external' => true,
                'nofollow' => true,
                'custom_attributes' => '',
            ),
            
            'label_block' => true,
            
            
            'dynamic' => array(
                'active' => true,
            ),
            
        )
            );

                
                $this->add_control('repeater_8uywxc25',
                    array(
                
				'type' => Controls_Manager::REPEATER,
				'label' => esc_html__( 'Links', 'wdesignkit' ),
                
                
                'label_block' => true,
                
                
				'fields' => $repeater_f7phhz26->get_controls(),
                'default' => array(array('_id'=>uniqid('Wkit-xxjom026'),
'text_ln79p225' => esc_html__('Instagram', 'wdesignkit'), 
'iconscontrol_illl9225' => 'fab fa-instagram', 
'url_bl41pi25' => '#', 
),
),
                
                     
                
        )
                );
$this->end_controls_section();$this->start_controls_section('Custom Links_tab_content',
            [
                'label' => esc_html__( 'Custom Links', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [['name' => 'select_i7kef925', 'operator' => '==', 'value' => 'style-3'],
],
                ),
            ]
        );
$this->add_control('select_0kzm4425',
                array(
            
            'label' => esc_html__( 'Icon Position', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'before',
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_i7kef925', 'operator' => '==', 'value' => 'style-1'),
array('name' => 'select_i7kef925', 'operator' => '==', 'value' => 'style-3'),
],
                ),
            'options' => array( 'before'  => esc_html__( 'Start', 'wdesignkit' ),'after'  => esc_html__( 'End', 'wdesignkit' ), ),
        )
            );
$repeater_blxwra26 = new \Elementor\Repeater();

                $repeater_blxwra26->add_control('text_943lnp25',
                array(
            
            'label' => esc_html__( 'Text', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'Custom link', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            
            
        )
            );
$repeater_blxwra26->add_control('iconscontrol_kkfpnv25',
                array(
            
            'label' => esc_html__( 'Select Icon', 'wdesignkit' ),
            'type' => Controls_Manager::ICONS,
            'fa4compatibility' => 'icon',
            
            
            'label_block' => true,
            'skin' => 'media',
            'exclude_inline_options' => array('none'),
            
            
            'default' => array(
                'value' => 'fas fa-circle',
                'library' => 'fa-solid',
            ),
            
        )
            );
$repeater_blxwra26->add_control('url_yhkh2f25',
                array(
            
            'label' => esc_html__( 'URL', 'wdesignkit' ),
            'type' => Controls_Manager::URL,
            
            
            'options' => array('url','is_external','nofollow',),
            'default' => array(
                'url' => '#',
                'is_external' => true,
                'nofollow' => true,
                'custom_attributes' => '',
            ),
            
            'label_block' => true,
            
            
            
            
        )
            );

                
                $this->add_control('repeater_eukk3e25',
                    array(
                
				'type' => Controls_Manager::REPEATER,
				'label' => esc_html__( 'Links', 'wdesignkit' ),
                
                
                'label_block' => true,
                
                
				'fields' => $repeater_blxwra26->get_controls(),
                'default' => array(array('_id'=>uniqid('Wkit-k3kfvk26'),
'text_943lnp25' => esc_html__('Custom link', 'wdesignkit'), 
'iconscontrol_kkfpnv25' => 'fas fa-circle', 
'url_yhkh2f25' => '#', 
),
),
                
                     
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_i7kef925', 'operator' => '==', 'value' => 'style-3'),
],
                ),
        )
                );
$this->end_controls_section();$this->start_controls_section('Call to Action_tab_content',
            [
                'label' => esc_html__( 'Call to Action', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [['name' => 'select_i7kef925', 'operator' => '==', 'value' => 'style-3'],
],
                ),
            ]
        );
$this->add_control('selecttemplate_cospzp25',
                array(
            
            'label' => esc_html__( 'Select Template', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => '0',
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_i7kef925', 'operator' => '==', 'value' => 'style-3'),
],
                ),
            'options' => Wdkit_Wb_Elementor_Controller::wdkit_get_templates(),
        )
            );
$this->end_controls_section();$this->start_controls_section('Extra Options_tab_content',
            [
                'label' => esc_html__( 'Extra Options', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('select_5ekv9025',
                array(
            
            'label' => esc_html__( 'Menu Position', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'fixed',
            
            'options' => array( 'fixed'  => esc_html__( 'Fixed', 'wdesignkit' ),'relative'  => esc_html__( 'Relative', 'wdesignkit' ), ),
        )
            );
$this->end_controls_section();$this->start_controls_section('Need Help ?_tab_content',
            [
                'label' => esc_html__( 'Need Help ?', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('rawhtml_av3toi25',
                array(
            
            
            'type' => Controls_Manager::RAW_HTML,
            
            'raw' => wp_kses_post( '<div class="wdk-help-main" style="height: 300px">
  <div class="wdk-help" style="margin-bottom: 15px">
    <a
      class="wdk-docs-link"
      style="color: var(--e-a-color-txt-accent);  text-decoration: none; border-color: transparent"
      href="https://store.posimyth.com/helpdesk/"
      target="_blank"
      rel="noopener noreferrer"
    >
      Raise a Ticket
    </a>
  </div>

  <div class="wdk-help" style="margin-bottom: 15px">
    <a
      class="wdk-docs-link"
      style="color: var(--e-a-color-txt-accent);  text-decoration: none; border-color: transparent"
      href="https://learn.wdesignkit.com/docs/full-screen-menu/"
      target="_blank"
      rel="noopener noreferrer"
    >
      Read Documentation
    </a>
  </div>
  <div class="wdk-help" style="margin-bottom: 15px">
    <a
      class="wdk-docs-link"
      style="color: var(--e-a-color-txt-accent);  text-decoration: none; border-color: transparent"
      href="https://roadmap.wdesignkit.com/boards/feature-requests"
      target="_blank"
      rel="noopener noreferrer"
    >
      Suggest Feature
    </a>
  </div>
  <div class="wdk-help" style="margin-bottom: 15px">
    <a
      class="wdk-docs-link"
      style="color: var(--e-a-color-txt-accent);  text-decoration: none; border-color: transparent"
      href="https://roadmap.wdesignkit.com/roadmap"
      target="_blank"
      rel="noopener noreferrer"
    >
      Plugin Roadmap
    </a>
  </div>
  <div class="wdk-help" style="margin-bottom: 15px">
    <a
      class="wdk-docs-link"
      style="color: var(--e-a-color-txt-accent);  text-decoration: none; border-color: transparent"
      href="https://www.facebook.com/wdesignkit"
      target="_blank"
      rel="noopener noreferrer"
    >
      Join Facebook Community
    </a>
  </div>
  <div class="need-help" id="elementor-panel__editor__help">
    <a
      id="elementor-panel__editor__help__link"
      href="https://wordpress.org/support/plugin/wdesignkit/"
      target="_blank"
      style="
        margin: auto;
        color: #fff;
        background: #8072fc;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: 400;
        font-size: 13px;
        letter-spacing: 0.4px;
        border: 1px solid #8072fc;
        box-shadow: 0 2px 7px 0 rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0 2px 7px 0 rgba(0, 0, 0, 0.3);
        -webkit-transition: all 0.3s ease-in;
        -o-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in;
      "
      >Need Help <i class="eicon-help-o" aria-hidden="true"></i>
    </a>
  </div>
</div>', 'wdesignkit' ),
            
            
            
            
            
        )
            );
$this->end_controls_section();

            $this->start_controls_section(
            'Site Logo (Closed)_style_secdddtion',
            [
                'label' => esc_html__( 'Site Logo (Closed)', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_xtdapb25',
                array(
            
            'label' => esc_html__( 'Top Offset', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => -500,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fscreen-header:has(.wkit-fullscreen-menu-toggle.closed)' => 'top: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_8zu2oe25',
                array(
            
            'label' => esc_html__( 'Left Offset', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-main-link' => 'left: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_jqsb9425',
                array(
            
            'label' => esc_html__( 'Icon Gap', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'em' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-main-link' => 'gap: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_3axz5i25',
                array(
            
            'label' => esc_html__( 'Icon Size', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'em' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-main-link .tp-title-icon' => 'font-size: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_wsqg3425',
                array(
            
            'label' => esc_html__( 'SVG Size', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'em' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-main-link .tp-title-icon svg' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_fdlwob25',
                
                
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'text'),
],
                ),
                'selector' => '{{WRAPPER}} .wkit-fscreen-main-logo .mnu-main-link',
			)
            );
$this->start_controls_tabs('normalhover_qmbklh25',
                array(
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'text'),
],
                ),
        )
            );
            $this->start_controls_tab(

                        'normalhover_qmbklh25_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_is5kh925',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-main-link' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_fil1rl25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-main-link .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_rk1s4z25',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-main-link .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_qmbklh25_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_xm5x6m25',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-main-link:hover' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_lc7mgo25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-main-link:hover .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_5pup5v25',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-main-link:hover .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->add_responsive_control('slider_qr4lcj25',
                array(
            
            'label' => esc_html__( 'Image Width', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'image'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .wkit-fscreen-logo-img' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_ysnjiw25',
                array(
            
            'label' => esc_html__( 'Image Height', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'image'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .wkit-fscreen-logo-img' => 'height: {{SIZE}}{{UNIT}};',)
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Site Logo (Opened)_style_secdddtion',
            [
                'label' => esc_html__( 'Site Logo (Opened)', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_duxe2y25',
                array(
            
            'label' => esc_html__( 'Top Offset', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => -500,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fscreen-header:has(.wkit-fullscreen-menu-toggle.opened)' => 'top: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_2gjhtv25',
                array(
            
            'label' => esc_html__( 'Left Offset', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main:has(.wkit-fullscreen-menu-toggle.opened) .mnu-opened ' => 'left: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_zju37w25',
                array(
            
            'label' => esc_html__( 'Icon Gap', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'em' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-opened' => 'gap: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_5mtmw125',
                array(
            
            'label' => esc_html__( 'Icon Size', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'em' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-opened .tp-title-icon' => 'font-size: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_rg1ae625',
                array(
            
            'label' => esc_html__( 'SVG Size', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'em' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-opened .tp-title-icon svg' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_59z6hf25',
                
                
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'text'),
],
                ),
                'selector' => '{{WRAPPER}} .wkit-fscreen-main-logo .mnu-opened',
			)
            );
$this->start_controls_tabs('normalhover_ritd7s25',
                array(
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'text'),
],
                ),
        )
            );
            $this->start_controls_tab(

                        'normalhover_ritd7s25_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_e090l625',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-opened' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_3e8f7s25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-opened .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_1gwd7o25',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-opened .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_ritd7s25_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_yv0p2r25',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-opened:hover' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_xlh9cf25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-opened:hover .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_n8q1lx25',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .mnu-opened:hover .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->add_responsive_control('slider_qso59e25',
                array(
            
            'label' => esc_html__( 'Image Width', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'image'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .wkit-fscreen-logo-img-open' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_59xhcd25',
                array(
            
            'label' => esc_html__( 'Image Height', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_k510b025', 'operator' => '==', 'value' => 'image'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-fscreen-main-logo .wkit-fscreen-logo-img-open' => 'height: {{SIZE}}{{UNIT}};',)
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Menubar_style_secdddtion',
            [
                'label' => esc_html__( 'Menubar', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_zmksks25',
                array(
            
            'label' => esc_html__( 'Width', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_0vzcwi25',
                array(
            
            'label' => esc_html__( 'Height', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle' => 'height: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_xnly9b25',
                
                
                
                'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .w-fscreen-menu-copy p',
			)
            );
$this->add_control('heading_vbbll125',
                array(
            
            'label' => esc_html__( 'Hamburger', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
            
            
        )
            );
$this->add_responsive_control('slider_ir1z2225',
                array(
            
            'label' => esc_html__( 'Width', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .w-fscreen-menu-bar' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_qxcxft25',
                array(
            
            'label' => esc_html__( 'Height', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .w-fscreen-menu-bar' => 'height: {{SIZE}}{{UNIT}};',)
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Menubar  Background_style_secdddtion',
            [
                'label' => esc_html__( 'Menubar  Background', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('dimension_ih104s25',
                array(
            
            'label' => esc_html__( 'Padding', 'wdesignkit' ),
            'type' => Controls_Manager::DIMENSIONS,
            
            
            'label_block' => true,
            'size_units' => array('px','%',),
            'default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            'tablet_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'mobile_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'widescreen_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fscreen-header, {{WRAPPER}} .wkit-fullscreen-menu-main .w-fscreen-menu-logo' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_1zajef25',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fscreen-header',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_v1bxar25',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fscreen-header',
        )
            );
$this->add_responsive_control('dimension_mmya4m25',
                array(
            
            'label' => esc_html__( 'Border Radius', 'wdesignkit' ),
            'type' => Controls_Manager::DIMENSIONS,
            
            
            'label_block' => true,
            'size_units' => array('px','%',),
            'default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            'tablet_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'mobile_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'widescreen_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fscreen-header' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_5wj4xh25',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fscreen-header', 
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Closed Toggle_style_secdddtion',
            [
                'label' => esc_html__( 'Closed Toggle', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_q4slez25',
                array(
            
            'label' => esc_html__( 'Right Offset', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle' => 'right: {{SIZE}}{{UNIT}};',)
        )
            );
$this->start_controls_tabs('normalhover_4dkggm25',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_4dkggm25_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_poe2qk25',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-toggle.closed .w-fscreen-menu-copy p' => 'color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_kqb1xp25',
            'label' => esc_html__( 'Background (Closed)', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.closed',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_8ae12b25',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.closed',
        )
            );
$this->add_responsive_control('dimension_aniqse25',
                array(
            
            'label' => esc_html__( 'Border Radius', 'wdesignkit' ),
            'type' => Controls_Manager::DIMENSIONS,
            
            
            'label_block' => true,
            'size_units' => array('px','%',),
            'default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            'tablet_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'mobile_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'widescreen_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.closed' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_ie8zti25',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.closed', 
        )
            );
$this->add_control('heading_mdfl6m25',
                array(
            
            'label' => esc_html__( 'Hamburger', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
            
            
        )
            );
$this->add_control('color_1d8h5l25',
                array(
            
            'label' => esc_html__( 'Hamburger Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.closed .w-fscreen-menu-bar' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_uqnexa25',
            'label' => esc_html__( 'Hamburger Background ', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            'classes' => 'background-color',
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.closed .wkit-menu-toggle-icon',
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_4dkggm25_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_6q60rg25',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-toggle.closed:hover .w-fscreen-menu-copy p' => 'color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_brcfhs25',
            'label' => esc_html__( 'Background (Closed)', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.closed:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_awwhhp25',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.closed:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_yvma9l25',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.closed:hover', 
        )
            );
$this->add_control('heading_6cjr6c25',
                array(
            
            'label' => esc_html__( 'Hamburger', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
            
            
        )
            );
$this->add_control('color_t2besg25',
                array(
            
            'label' => esc_html__( 'Hamburger Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.closed .wkit-fscreen-hamburger .w-fscreen-menu-bar' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_kfn97c25',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.closed:hover .wkit-menu-toggle-icon',
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Opened Toggle_style_secdddtion',
            [
                'label' => esc_html__( 'Opened Toggle', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_vb9k9125',
                array(
            
            'label' => esc_html__( 'Right Offset', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.opened' => 'right: {{SIZE}}{{UNIT}};',)
        )
            );
$this->start_controls_tabs('normalhover_vno7ay25',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_vno7ay25_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_34rgg325',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-toggle.opened .w-fscreen-menu-copy p' => 'color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_o6wmv825',
            'label' => esc_html__( 'Background (Opened)', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-toggle.opened',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_0d6dxk25',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.opened',
        )
            );
$this->add_responsive_control('dimension_j9htda25',
                array(
            
            'label' => esc_html__( 'Border Radius', 'wdesignkit' ),
            'type' => Controls_Manager::DIMENSIONS,
            
            
            'label_block' => true,
            'size_units' => array('px','%',),
            'default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            'tablet_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'mobile_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'widescreen_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.opened' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_z3p8rq25',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.opened', 
        )
            );
$this->add_control('heading_p4pskv25',
                array(
            
            'label' => esc_html__( 'Hamburger', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
            
            
        )
            );
$this->add_control('color_751ivb25',
                array(
            
            'label' => esc_html__( 'Hamburger Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.opened .w-fscreen-menu-bar' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_e16qma25',
            'label' => esc_html__( 'Hamburger Background ', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            'classes' => 'background-color',
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.opened .wkit-menu-toggle-icon',
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_vno7ay25_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_npt4wu25',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-toggle.opened:hover .w-fscreen-menu-copy p' => 'color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_u97vqt25',
            'label' => esc_html__( 'Background (Opened)', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-toggle.opened:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_tb2klb25',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.opened:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_r1mtta25',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.opened:hover', 
        )
            );
$this->add_control('heading_mncxkx25',
                array(
            
            'label' => esc_html__( 'Hamburger', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
            
            
        )
            );
$this->add_control('color_6sx6im25',
                array(
            
            'label' => esc_html__( 'Hamburger Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.opened:hover .w-fscreen-menu-bar' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_aw01i525',
            'label' => esc_html__( 'Hamburger Background ', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .wkit-fullscreen-menu-toggle.opened:hover .wkit-menu-toggle-icon',
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Menu Items_style_secdddtion',
            [
                'label' => esc_html__( 'Menu Items', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('choose_ty3w5725',
                array(
            
            'label' => esc_html__( 'Alignment', 'wdesignkit' ),
            
            'type' => Controls_Manager::CHOOSE,
            'options' => array(
                    'left' => array(
                        'title' => esc_html__( 'Left', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-left',
                    ),
                
                    'center' => array(
                        'title' => esc_html__( 'Center', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-center',
                    ),
                
                    'right' => array(
                        'title' => esc_html__( 'Right', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-right',
                    ),
                ),
            
            'toggle' => true,
            
            
            
            
            
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-main .w-fscreen-menu-col.col-1 .w-fscreen-links' => 'text-align: {{VALUE}}',),
        )
            );
$this->add_responsive_control('slider_ixj8e725',
                array(
            
            'label' => esc_html__( 'Top Offset', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%","em", ),
            
            
            'range' => array('px' => array(
						'min' => -500,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),'em' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-main .w-fscreen-menu-col.col-1' => 'top: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_65lnbo25',
                array(
            
            'label' => esc_html__( 'Items Gap', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),'em' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-col.col-1 .w-fscreen-links' => 'gap: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_3u5i3e25',
                array(
            
            'label' => esc_html__( 'Icon Gap', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'em' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .fscreen-link' => 'gap: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_h7dr9325',
                array(
            
            'label' => esc_html__( 'Icon Size', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'em' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .fscreen-link-container .fscreen-link .tp-title-icon' => 'font-size: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_7paw4e25',
                array(
            
            'label' => esc_html__( 'SVG Size', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'em' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .fscreen-link-container .fscreen-link .tp-title-icon svg' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_j78t5q25',
                
                
                
                'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .fscreen-link',
			)
            );
$this->start_controls_tabs('normalhover_e3t2hr25',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_e3t2hr25_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_responsive_control('slider_hbkp3o25',
                array(
            
            'label' => esc_html__( 'Text Stroke (px)', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .fscreen-link .link-txt' => '-webkit-text-stroke-width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_control('color_z9aekn25',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .fscreen-link' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_c6g7qx25',
                array(
            
            'label' => esc_html__( 'Stroke Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .fscreen-link .link-txt' => '-webkit-text-stroke-color: {{VALUE}}',),
        )
            );
$this->add_control('color_od6lr725',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .fscreen-link .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_dipmmx25',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .fscreen-link .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_e3t2hr25_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_responsive_control('slider_14uh4w25',
                array(
            
            'label' => esc_html__( 'Text Stroke (px)', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .fscreen-link:hover .link-txt' => '-webkit-text-stroke-width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_control('color_cisqwg25',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .fscreen-link:hover' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_645pcd25',
                array(
            
            'label' => esc_html__( 'Stroke Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .fscreen-link:hover .link-txt' => '-webkit-text-stroke-color: {{VALUE}}',),
        )
            );
$this->add_control('color_q9cezw25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .fscreen-link:hover .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_8crpd125',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .fscreen-link:hover .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->add_responsive_control('slider_nxopzb25',
                array(
            
            'label' => esc_html__( 'Animated border width (px)', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .fscreen-link::after ' => 'border-top-width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_control('color_e7z6l125',
                array(
            
            'label' => esc_html__( 'Animated border color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .fscreen-link::after ' => 'border-color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_e3t2hr25_active_tab',
                            array(
                                'label' => esc_html__( 'Active', 'wdesignkit' ),
                            )
                        );
$this->add_responsive_control('slider_5nzxv025',
                array(
            
            'label' => esc_html__( 'Text Stroke (px)', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .fscreen-link-container .fscreen-link.active .link-txt' => '-webkit-text-stroke-width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_control('color_qiejiz25',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .fscreen-link-container .fscreen-link.active' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_8r1t9v25',
                array(
            
            'label' => esc_html__( 'Stroke Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .fscreen-link-container .fscreen-link.active .link-txt' => '-webkit-text-stroke-color: {{VALUE}}',),
        )
            );
$this->add_control('color_m0pfcc25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .fscreen-link.active .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_vlwmuz25',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .fscreen-link.active .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Featured Video_style_secdddtion',
            [
                'label' => esc_html__( 'Featured Video', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('dimension_eo7uxj25',
                array(
            
            'label' => esc_html__( 'Padding', 'wdesignkit' ),
            'type' => Controls_Manager::DIMENSIONS,
            
            
            'label_block' => true,
            'size_units' => array('px','%',),
            'default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            'tablet_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'mobile_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'widescreen_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'switcher_krpvl825', 'operator' => '==', 'value' => 'yes'),
],
                ),
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-main.yes .fscreen-video-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_responsive_control('slider_7rbvli25',
                array(
            
            'label' => esc_html__( 'Top Offset', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => -500,
						'max' => 1000,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'switcher_krpvl825', 'operator' => '==', 'value' => 'yes'),
],
                ),
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-main.yes .fscreen-video-main' => 'top: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_a1giz325',
                array(
            
            'label' => esc_html__( 'Width', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'switcher_krpvl825', 'operator' => '==', 'value' => 'yes'),
],
                ),
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-main.yes .fscreen-video-wrapper' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_kvau8t25',
                array(
            
            'label' => esc_html__( 'Height', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'switcher_krpvl825', 'operator' => '==', 'value' => 'yes'),
],
                ),
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-main.yes .fscreen-video-wrapper' => 'height: {{SIZE}}{{UNIT}};',)
        )
            );
$this->start_controls_tabs('normalhover_0g8exg25',
                array(
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'switcher_krpvl825', 'operator' => '==', 'value' => 'yes'),
],
                ),
        )
            );
            $this->start_controls_tab(

                        'normalhover_0g8exg25_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_7kjybr25',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .w-fscreen-menu-main.yes .fscreen-video-wrapper',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_f68o4m25',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .w-fscreen-menu-main.yes .fscreen-video-wrapper',
        )
            );
$this->add_responsive_control('dimension_l1rglo25',
                array(
            
            'label' => esc_html__( 'Border Radius', 'wdesignkit' ),
            'type' => Controls_Manager::DIMENSIONS,
            
            
            'label_block' => true,
            'size_units' => array('px','%',),
            'default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            'tablet_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'mobile_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'widescreen_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            
            
            
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-main.yes .fscreen-video-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_1fxli325',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .w-fscreen-menu-main .fscreen-video-main', 
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_0g8exg25_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_d4z0mt25',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .w-fscreen-menu-main.yes .fscreen-video-wrapper:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_y2e3p325',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .w-fscreen-menu-main.yes .fscreen-video-wrapper:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_0yop0r25',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .w-fscreen-menu-main .fscreen-video-main:hover', 
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Socials_style_secdddtion',
            [
                'label' => esc_html__( 'Socials', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('choose_3d2r4d25',
                array(
            
            'label' => esc_html__( 'Alignment', 'wdesignkit' ),
            
            'type' => Controls_Manager::CHOOSE,
            'options' => array(
                    'flex-start' => array(
                        'title' => esc_html__( 'Left', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-left',
                    ),
                
                    'center' => array(
                        'title' => esc_html__( 'Center', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-center',
                    ),
                
                    'flex-end' => array(
                        'title' => esc_html__( 'Right', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-right',
                    ),
                ),
            
            'toggle' => true,
            
            
            
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_i7kef925', 'operator' => '==', 'value' => 'style-1'),
],
                ),
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-socials .fscreen-sub-col' => 'align-items: {{VALUE}}',),
        )
            );
$this->add_responsive_control('choose_2t39zq25',
                array(
            
            'label' => esc_html__( 'Alignment', 'wdesignkit' ),
            
            'type' => Controls_Manager::CHOOSE,
            'options' => array(
                    'flex-start' => array(
                        'title' => esc_html__( 'Left', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-left',
                    ),
                
                    'center' => array(
                        'title' => esc_html__( 'Center', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-center',
                    ),
                
                    'flex-end' => array(
                        'title' => esc_html__( 'Right', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-right',
                    ),
                ),
            
            'toggle' => true,
            
            
            
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_i7kef925', 'operator' => '!=', 'value' => 'style-1'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main.wkit-style-2 .w-fscreen-menu-socials.row .fscreen-sub-col, {{WRAPPER}} .wkit-fullscreen-menu-main.wkit-style-3 .w-fscreen-menu-socials.row .fscreen-sub-col' => 'justify-content: {{VALUE}}',),
        )
            );
$this->add_responsive_control('slider_syvpe325',
                array(
            
            'label' => esc_html__( 'Top Offset', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => -500,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .w-fscreen-menu-socials' => 'top: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_3z79td25',
                array(
            
            'label' => esc_html__( 'Items Gap', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-socials .fscreen-sub-col' => 'gap: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_s6imkh25',
                array(
            
            'label' => esc_html__( 'Icon Gap', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .social-link' => 'gap: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_jcgt4725',
                array(
            
            'label' => esc_html__( 'Icon Size', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'em' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .social-link .tp-title-icon' => 'font-size: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_4zvr9625',
                array(
            
            'label' => esc_html__( 'SVG Size', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'em' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .social-link .tp-title-icon svg' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_hwuk4325',
                
                
                
                'selector' => '{{WRAPPER}} .wkit-fullscreen-menu-main .social-link',
			)
            );
$this->start_controls_tabs('normalhover_xnu76k25',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_xnu76k25_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_cpflre25',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .social-link' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_x19knp25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .social-link .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_45nxpd25',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .social-link .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_xnu76k25_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_6i4st425',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .social-link:hover' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_i80jgd25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .social-link:hover .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_azwf2p25',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-fullscreen-menu-main .social-link:hover .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Custom Links_style_secdddtion',
            [
                'label' => esc_html__( 'Custom Links', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [['name' => 'select_i7kef925', 'operator' => '==', 'value' => 'style-3'],
],
                ),
            ]
        );
$this->add_responsive_control('slider_rr8pj825',
                array(
            
            'label' => esc_html__( 'Icon Gap', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_i7kef925', 'operator' => '==', 'value' => 'style-3'),
],
                ),
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-socials .w-custom-link' => 'gap: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_lfnile25',
                array(
            
            'label' => esc_html__( 'Icon Size', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'em' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_i7kef925', 'operator' => '==', 'value' => 'style-3'),
],
                ),
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-socials .w-custom-link .tp-title-icon' => 'font-size: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_7y6i2a25',
                array(
            
            'label' => esc_html__( 'SVG Size', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
						'step' => 1,
					),'em' => array(
						'min' => 0,
						'max' => 10,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_i7kef925', 'operator' => '==', 'value' => 'style-3'),
],
                ),
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-socials .w-custom-link .tp-title-icon svg' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_88z9bo25',
                
                
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_i7kef925', 'operator' => '==', 'value' => 'style-3'),
],
                ),
                'selector' => '{{WRAPPER}} .w-fscreen-menu-socials .w-custom-link',
			)
            );
$this->start_controls_tabs('normalhover_o26jdz25',
                array(
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_i7kef925', 'operator' => '==', 'value' => 'style-3'),
],
                ),
        )
            );
            $this->start_controls_tab(

                        'normalhover_o26jdz25_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_bqhn7o25',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-socials .w-custom-link' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_vvsgdm25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-socials .w-custom-link .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_hz2w0l25',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-socials .w-custom-link .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_o26jdz25_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_f3or4625',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-socials .w-custom-link:hover' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_ummvwx25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-socials .w-custom-link:hover .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_lemb2i25',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-socials .w-custom-link:hover .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Background_style_secdddtion',
            [
                'label' => esc_html__( 'Background', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('dimension_x54bx625',
                array(
            
            'label' => esc_html__( 'Padding', 'wdesignkit' ),
            'type' => Controls_Manager::DIMENSIONS,
            
            
            'label_block' => true,
            'size_units' => array('px','rem','%',),
            'default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            'tablet_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'mobile_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'widescreen_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            
            
            
            'selectors' => array('{{WRAPPER}} .w-fscreen-menu-col' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_tcj2c225',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .w-fscreen-menu',
        )
            );
$this->end_controls_section();

    }

    /**
     * Written in PHP and HTML.
     *
     * @since 2.5.1
     */
    protected function render() { 	

        $settings = $this->get_settings_for_display();
        $select_i7kef925 = !empty($settings['select_i7kef925']) ? esc_attr($settings['select_i7kef925']) : '';
$select_k510b025 = !empty($settings['select_k510b025']) ? $this->wdk_senitize_js($settings['select_k510b025']) : '';
$heading_lzeiky25 = !empty($settings['heading_lzeiky25']) ? $settings['heading_lzeiky25'] : '';
$text_kk3ttz25 = !empty($settings['text_kk3ttz25']) ? esc_attr($settings['text_kk3ttz25']) : '';
$iconscontrol_04dzlb25 = "";
                        if(!empty($settings['iconscontrol_04dzlb25']) && !empty($settings['iconscontrol_04dzlb25']['value'])){
                            ob_start();
                                \Elementor\Icons_Manager::render_icon($settings['iconscontrol_04dzlb25'],['aria-hidden'=>'true']);
                                $Icon = ob_get_contents();
                            ob_end_clean();
                            $iconscontrol_04dzlb25 .= '<span class="tp-title-icon">'.$Icon.'</span>';
                        };
$media_28pnhw25 = !empty($settings['media_28pnhw25']['url']) ? $this->wdk_senitize_js($settings['media_28pnhw25']['url']) : '';
$heading_fh1gom25 = !empty($settings['heading_fh1gom25']) ? $settings['heading_fh1gom25'] : '';
$text_vujl7925 = !empty($settings['text_vujl7925']) ? $this->wdk_senitize_js($settings['text_vujl7925']) : '';
$iconscontrol_7u4hz125 = "";
                        if(!empty($settings['iconscontrol_7u4hz125']) && !empty($settings['iconscontrol_7u4hz125']['value'])){
                            ob_start();
                                \Elementor\Icons_Manager::render_icon($settings['iconscontrol_7u4hz125'],['aria-hidden'=>'true']);
                                $Icon = ob_get_contents();
                            ob_end_clean();
                            $iconscontrol_7u4hz125 .= '<span class="tp-title-icon">'.$Icon.'</span>';
                        };
$media_ivaksu25 = !empty($settings['media_ivaksu25']['url']) ? $this->wdk_senitize_js($settings['media_ivaksu25']['url']) : '';
$url_2yz3m025_url = !empty($settings['url_2yz3m025']) && !empty($settings['url_2yz3m025']['url']) ? $this->wdk_senitize_js($settings['url_2yz3m025']['url']) : '';
$url_2yz3m025_is_external = !empty($settings['url_2yz3m025']) && !empty($settings['url_2yz3m025']['is_external']) ? '_blank' : '';
$url_2yz3m025_nofollow = !empty($settings['url_2yz3m025']) && !empty($settings['url_2yz3m025']['nofollow']) ? 'nofollow' : '';
$url_2yz3m025_custmAtr = !empty($settings['url_2yz3m025']) && !empty($settings['url_2yz3m025']['custom_attributes']) ? $settings['url_2yz3m025']['custom_attributes'] : '';
                $url_2yz3m025_atr = '';
        
                if( !empty( $url_2yz3m025_custmAtr ) ){
                    $url_2yz3m025_custmAtr = trim( $url_2yz3m025_custmAtr, " " );
                    $main_array = explode( ",", $url_2yz3m025_custmAtr );

                    foreach ( $main_array as $key => $value ) {
                        if( !empty( $value ) ){
                            $ct_array = explode( "|", $value );
                            $url_2yz3m025_atr .= $ct_array[0] .' = "'. $ct_array[1].'"';
                        }
                    }
                }$heading_d7irwo25 = !empty($settings['heading_d7irwo25']) ? $settings['heading_d7irwo25'] : '';
$text_sxyzte25 = !empty($settings['text_sxyzte25']) ? $this->wdk_senitize_js($settings['text_sxyzte25']) : '';
$switcher_krpvl825 = !empty($settings['switcher_krpvl825']) ? $settings['switcher_krpvl825'] : '';
$media_xlwwzb25 = !empty($settings['media_xlwwzb25']['url']) ? $this->wdk_senitize_js($settings['media_xlwwzb25']['url']) : '';
$select_0kzm4425 = !empty($settings['select_0kzm4425']) ? $settings['select_0kzm4425'] : '';
$selecttemplate_cospzp25 = !empty($settings['selecttemplate_cospzp25']) ? Wdkit_Wb_Elementor_Controller::wdkit_elementor()->frontend->get_builder_content_for_display( $settings['selecttemplate_cospzp25'] ) : '';
$select_5ekv9025 = !empty($settings['select_5ekv9025']) ? $this->wdk_senitize_js($settings['select_5ekv9025']) : '';
$rawhtml_av3toi25 = !empty($settings['rawhtml_av3toi25']) ? $this->wdk_senitize_js($settings['rawhtml_av3toi25']) : '';

        $repeater_17v3u725_5326 = '';
                            if ( $settings['repeater_17v3u725'] ) {
                                foreach ( $settings['repeater_17v3u725'] as $key => $r_item ) {
                                    $iconscontrol_ibnxvb25 = "";
                        if(!empty($r_item['iconscontrol_ibnxvb25']) && !empty($r_item['iconscontrol_ibnxvb25']['value'])){
                            ob_start();
                                \Elementor\Icons_Manager::render_icon($r_item['iconscontrol_ibnxvb25'],['aria-hidden'=>'true']);
                                $Icon = ob_get_contents();
                            ob_end_clean();
                            $iconscontrol_ibnxvb25 .= '<span class="tp-title-icon">'.$Icon.'</span>';
                        };
$url_twsl4o25_is_external = !empty($r_item['url_twsl4o25']) && !empty($r_item['url_twsl4o25']['is_external']) ? '_blank' : '';
$url_twsl4o25_url = !empty($r_item['url_twsl4o25']) && !empty($r_item['url_twsl4o25']['url'])? $this->wdk_senitize_js($r_item['url_twsl4o25']['url']) : '';
$url_twsl4o25_nofollow = !empty($r_item['url_twsl4o25']) && !empty($r_item['url_twsl4o25']['nofollow'])? 'nofollow' : '';

                                    $repeater_17v3u725_5326 .= '<div class="fscreen-link-container elementor-repeater-item-' .esc_attr($r_item['_id']) . '" data-repeater_17v3u725="{repeater_17v3u725}">
                        <a class="fscreen-link" href="'.$url_twsl4o25_url.'" target="'.$url_twsl4o25_is_external.'" rel="'.$url_twsl4o25_nofollow.'"><span class="link-txt">' . $this->wdk_senitize_js($r_item['text_wv6stn25']) . '</span>'.$iconscontrol_ibnxvb25.'</a>
                    </div>';
                                }
                            }$repeater_8uywxc25_rx26 = '';
                            if ( $settings['repeater_8uywxc25'] ) {
                                foreach ( $settings['repeater_8uywxc25'] as $key => $r_item ) {
                                    $iconscontrol_illl9225 = "";
                        if(!empty($r_item['iconscontrol_illl9225']) && !empty($r_item['iconscontrol_illl9225']['value'])){
                            ob_start();
                                \Elementor\Icons_Manager::render_icon($r_item['iconscontrol_illl9225'],['aria-hidden'=>'true']);
                                $Icon = ob_get_contents();
                            ob_end_clean();
                            $iconscontrol_illl9225 .= '<span class="tp-title-icon">'.$Icon.'</span>';
                        };
$url_bl41pi25_is_external = !empty($r_item['url_bl41pi25']) && !empty($r_item['url_bl41pi25']['is_external']) ? '_blank' : '';
$url_bl41pi25_url = !empty($r_item['url_bl41pi25']) && !empty($r_item['url_bl41pi25']['url'])? $this->wdk_senitize_js($r_item['url_bl41pi25']['url']) : '';
$url_bl41pi25_nofollow = !empty($r_item['url_bl41pi25']) && !empty($r_item['url_bl41pi25']['nofollow'])? 'nofollow' : '';

                                    $repeater_8uywxc25_rx26 .= '<a class="social-link elementor-repeater-item-' .esc_attr($r_item['_id']) . '" data-repeater_8uywxc25="{repeater_8uywxc25}" href="'.$url_bl41pi25_url.'" target="'.$url_bl41pi25_is_external.'" rel="'.$url_bl41pi25_nofollow.'">' . $this->wdk_senitize_js($r_item['text_ln79p225']) . ''.$iconscontrol_illl9225.'</a>';
                                }
                            }$repeater_8uywxc25_or26 = '';
                            if ( $settings['repeater_8uywxc25'] ) {
                                foreach ( $settings['repeater_8uywxc25'] as $key => $r_item ) {
                                    $iconscontrol_illl9225 = "";
                        if(!empty($r_item['iconscontrol_illl9225']) && !empty($r_item['iconscontrol_illl9225']['value'])){
                            ob_start();
                                \Elementor\Icons_Manager::render_icon($r_item['iconscontrol_illl9225'],['aria-hidden'=>'true']);
                                $Icon = ob_get_contents();
                            ob_end_clean();
                            $iconscontrol_illl9225 .= '<span class="tp-title-icon">'.$Icon.'</span>';
                        };
$url_bl41pi25_is_external = !empty($r_item['url_bl41pi25']) && !empty($r_item['url_bl41pi25']['is_external']) ? '_blank' : '';
$url_bl41pi25_url = !empty($r_item['url_bl41pi25']) && !empty($r_item['url_bl41pi25']['url'])? $this->wdk_senitize_js($r_item['url_bl41pi25']['url']) : '';
$url_bl41pi25_nofollow = !empty($r_item['url_bl41pi25']) && !empty($r_item['url_bl41pi25']['nofollow'])? 'nofollow' : '';

                                    $repeater_8uywxc25_or26 .= '<a class="social-link elementor-repeater-item-' .esc_attr($r_item['_id']) . '" data-repeater_8uywxc25="{repeater_8uywxc25}" href="'.$url_bl41pi25_url.'" target="'.$url_bl41pi25_is_external.'" rel="'.$url_bl41pi25_nofollow.'">' . $this->wdk_senitize_js($r_item['text_ln79p225']) . ''.$iconscontrol_illl9225.'</a>';
                                }
                            }$repeater_eukk3e25_dl26 = '';
                            if ( $settings['repeater_eukk3e25'] ) {
                                foreach ( $settings['repeater_eukk3e25'] as $key => $r_item ) {
                                    $iconscontrol_kkfpnv25 = "";
                        if(!empty($r_item['iconscontrol_kkfpnv25']) && !empty($r_item['iconscontrol_kkfpnv25']['value'])){
                            ob_start();
                                \Elementor\Icons_Manager::render_icon($r_item['iconscontrol_kkfpnv25'],['aria-hidden'=>'true']);
                                $Icon = ob_get_contents();
                            ob_end_clean();
                            $iconscontrol_kkfpnv25 .= '<span class="tp-title-icon">'.$Icon.'</span>';
                        };
$url_yhkh2f25_is_external = !empty($r_item['url_yhkh2f25']) && !empty($r_item['url_yhkh2f25']['is_external']) ? '_blank' : '';
$url_yhkh2f25_url = !empty($r_item['url_yhkh2f25']) && !empty($r_item['url_yhkh2f25']['url'])? $this->wdk_senitize_js($r_item['url_yhkh2f25']['url']) : '';
$url_yhkh2f25_nofollow = !empty($r_item['url_yhkh2f25']) && !empty($r_item['url_yhkh2f25']['nofollow'])? 'nofollow' : '';

                                    $repeater_eukk3e25_dl26 .= '<a class="w-custom-link elementor-repeater-item-' .esc_attr($r_item['_id']) . '" data-repeater_eukk3e25="{repeater_eukk3e25}" href="'.$url_yhkh2f25_url.'" target="'.$url_yhkh2f25_is_external.'" rel="'.$url_yhkh2f25_nofollow.'">' . $this->wdk_senitize_js($r_item['text_943lnp25']) . ''.$iconscontrol_kkfpnv25.'</a>';
                                }
                            }

        $output = '';
        $output .= '<div class="wkit-wb-Widget_59j2u825" data-wdkitunique="59j2u825">';
            $output .= '<div class="wkit-fullscreen-menu-main wkit-'.$select_i7kef925.'">
        
        <div class="wkit-fscreen-header '.$select_5ekv9025.'" data-position="'.$select_5ekv9025.'">
         <div class="wkit-fscreen-main-logo">
            <a class="mnu-main-link" href="'.$url_2yz3m025_url.'" target="'.$url_2yz3m025_is_external.'" rel="'.$url_2yz3m025_nofollow.'">'.$text_kk3ttz25.''.$iconscontrol_04dzlb25.'
            <img class="wkit-fscreen-logo-img" src="'.$media_28pnhw25.'">
            </a>
            
             <a class="mnu-opened" href="'.$url_2yz3m025_url.'" target="'.$url_2yz3m025_is_external.'" rel="'.$url_2yz3m025_nofollow.'">'.$text_vujl7925.''.$iconscontrol_7u4hz125.'
                <img class="wkit-fscreen-logo-img-open" src="'.$media_ivaksu25.'">
            </a>
         </div>
            <div class="wkit-fullscreen-menu-toggle closed">
                <div class="w-fscreen-menu-copy"><p>'.$text_sxyzte25.'</p></div>
                <div class="wkit-menu-toggle-icon">
                    <div class="wkit-fscreen-hamburger">
                        <div class="w-fscreen-menu-bar" data-position="top">   </div>
                        <div class="w-fscreen-menu-bar" data-position="middle">   </div>
                        <div class="w-fscreen-menu-bar" data-position="bottom">   </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="w-fscreen-menu">
            <div class="w-fscreen-menu-main '.$switcher_krpvl825.'">
            <div class="w-fscreen-menu-col col-1">
                <div class="w-fscreen-links">
                    '.$repeater_17v3u725_5326.'
                </div>
            </div>
         
            <div class="w-fscreen-menu-col fscreen-col-2">
                <div class="fscreen-video-main">
                <div class="fscreen-video-wrapper">
                    <video class="w-fscreen-vdo" autoplay="" muted="" loop="">
                        <source src="'.$media_xlwwzb25.'" type="video/mp4">
                    </video>
                </div>
                </div>
                <div class="wkit-email-template">'.$selecttemplate_cospzp25.'</div>
                <div class="w-fscreen-menu-socials '.$select_0kzm4425.'">
                   <div class="fscreen-sub-col">
                        '.$repeater_8uywxc25_rx26.'

                    </div>
                </div>

            </div>
            </div>
                  <div class="w-fscreen-menu-socials row '.$select_0kzm4425.'">
                    <div class="fscreen-sub-col">
                         '.$repeater_8uywxc25_or26.'
                    </div>
                    <div class="fscreen-sub-col col-2">
                        '.$repeater_eukk3e25_dl26.'
                    </div>
                </div>
        </div>
        
        </div> 
';
        $output .= '</div>';
        
        echo $output;
    }
}