<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "self";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields





/**
*        
*  Homepage Layout      
*        
*        
*/ 
Redux::setSection($opt_name, array(
    'title'     => 'Homepage Layout Settings',
    'id'        => 'homepage-layout-settings',
    'desc'      => 'Manage Homepage Layout',
    'fields'    => array(
        array(
            'title'     => 'Layout Manager',
            'subtitle'  => 'Move your Layout',
            'desc'      => 'You can move your homepage layout',
            'id'        => 'self-layout-manager',
            'type'      => 'sorter',
            'options'   => array(
                'enabled'    => array(
                    'about'             => 'About US',
                    'adds'              => 'Add-area',
                    'skills'            => 'Skills', 
                    'counter'           => 'Counter', 
                    'portfolio'         => 'Portfolio', 
                    'testimonials'      => 'Testimonials', 
                    'blog-area'      => 'Blog Area', 
                    'contact-area'      => 'Contact Area', 
                ),
                'disabled'   => array(
                   
                )
            )
        )

    )
));



/**
*        
*  Header Section       
*        
*        
*/        
Redux::setSection($opt_name, array(
    'title'     => 'Header Section',
    'id'        => 'self-header-section',
    'desc'      => 'Manage Hader Section',
    'icon'      => 'el el-leaf'
));

Redux::setSection($opt_name, array(
    'title'     => 'Logo Section',
    'id'        => 'self-logo-section',
    'desc'      => 'Manage Your Logo',
    'subsection'=> true,
    'fields'    =>array(
        array(
            'title' => 'Upload Your Logo',
            'subtitle'  => 'Change Your Logo',
            'desc'      => 'You can change or modify your logo',
            'id'        => 'self-upload-logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => get_template_directory_uri().'/img/logo/corlate-logo.png'
            )
        )

    )
));





/**
*        
*  Slider Section       
*        
*        
*/            
Redux::setSection($opt_name, array(
    'title'     => 'Slider Section',
    'id'        => 'self-slider-section',
    'desc'      => 'Manage Slider Section',
    'icon'      => 'el el-home'
));


Redux::setSection($opt_name, array(
    'title'     => 'About Me',
    'id'        => 'self_about_me',
    'desc'      => 'You can add Your Info here',
    'subsection'=> true,  
    'fields'    => array(

        array(
            'title'     => 'My Name',
            'subtitle'  => 'Add My Name Here',
            'desc'      => 'Manage My Name From Here',
            'id'        => 'self-my-name',
            'type'      => 'text',
            'default'   => 'Mohammad Tajul Islam'
        ),
        array(
            'title'     => 'Project Link',
            'subtitle'  => 'Add Project Link Here',
            'desc'      => 'Your Projects At A Glalnce',
            'id'        => 'self-project-link',
            'type'      => 'text',
            'default'   => 'http://facebook.com/tajulislamdu'
        ),
        array(
            'title'     => 'Hire Me',
            'subtitle'  => 'Add Hire Me Link Here',
            'desc'      => 'Your Contact Information Here',
            'id'        => 'self-hire-me',
            'type'      => 'text',
            'default'   => 'http://tajultania.com/xyz'
        ),
        array(
            'title'     => 'My Photo',
            'subtitle'  => 'Upload Your Photo Here',
            'desc'      => 'Your Picture Upload From Here',
            'id'        => 'self-my-photo',
            'type'      => 'media',
            'default'   => array(
                 'url' => get_template_directory_uri().'/img/background/me.jpg'
            )
        )

    )  
));






/**
*        
*  Service Section       
*        
*        
*/ 
Redux::setSection($opt_name, array(
    'title' => 'Services Section',
    'id'    => 'self-services-section',
    'desc'  => 'Manage Services Section'
));


Redux::setSection($opt_name, array(
    'title'     => 'Services Area',
    'id'        => 'self-services-area',
    'desc'      => 'You can add Services Description Here',
    'subsection'=> true,
    'fields'    => array(
        array(
            'title'     => 'Services Title',
            'subtitle'  => 'Add Services Title',
            'desc'      => 'You can add services title from here',
            'id'        => 'self-services-title',
            'type'      => 'text',
            'default'   => 'What I do'
        )
    )
));









/**
*        
*  About-me Section       
*        
*        
*/        
Redux::setSection($opt_name, array(
    'title'     => 'Biography Section',
    'id'        => 'self-biography-section',
    'desc'      => 'You can Manage Your Biography From Here',

));


Redux::setSection($opt_name, array(
    'title'     => 'My Biodata',
    'id'        => 'self-biodata',
    'desc'      => 'Manage Your Biodata',
   
    'subsection'=> true,
    'fields'    => array(
        array(
            'title'     => 'Your Photo',
            'subtitle'  => 'Upload Your Photo From Here',
            'desc'      => 'You can upload your photo from here',
            'id'        => 'self-your-photo',
            'type'      => 'media',
            'default'   => array(
                'url' => get_template_directory_uri().'/img/background/me.jpg'
            )
        ),
        array(
            'title'     => 'Section Title',
            'subtitle'  => 'Manage Section Title',
            'desc'      => 'You may change section title and default is Introduction',
            'id'        => 'self-introduction-section-title',
            'type'      => 'text',
            'default'   => 'Introdcution'
        ),
        array(
            'title'     => 'Section Content',
            'subtitle'  => 'Manage Section Title',
            'desc'      => 'You may change section title and default is Introduction',
            'id'        => 'self-introduction-content-section',
            'type'      => 'textarea',
            'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est a minus, adipisci asperiores totam? Ab optio, cum impedit cupiditate numquam, unde! Expedita nisi, dolorem minus qui accusamus unde delectus consectetur.'
        ),
        array(
            'title'     => 'Section Short Content',
            'subtitle'  => 'Manage Section Short Content',
            'desc'      => 'You may change section Short ',
            'id'        => 'self-short-content-section',
            'type'      => 'textarea',
            'default'   => '<li>Date Of Birth : 02 June, 1986</li>
                            <li>Profession: Web Developer</li>
                            <li>State: New york</li>
                            <li>Country: Amirica</li>'
        ),
        array(
            'title'     => 'Download CV',
            'subtitle'  => 'Manage Your CV',
            'desc'      => 'You may linkup your cv here',
            'id'        => 'self-cv-section',
            'type'      => 'text',
            'default'   => 'http://tajul.com/download'
        )

    )
));


/**
*
*
* Contact Area
*
*/
Redux::setSection($opt_name, array(
        'title' => 'Contact Area',
        'id'    => 'self-contact-area',
        'desc'  => 'Manage Counter Area',
        'icon'  => 'el el-fire'
));


Redux::setSection($opt_name, array(
    'title'     => 'Contact Info Area',
    'id'        => 'self-contact-info-area',
    'desc'      => 'Manage Contact Info',
    'subsection'=> true,
    'fields'    => array(
        array(
            'title'         => 'Contact Info Title',
            'subtitle'      => 'Add Contact Info Title',
            'desc'          => 'You can add contact info title',
            'id'            => 'self-contact-info-title',
            'type'          => 'text',
            'default'       => 'Contact info'

        ),
        array(
            'title'         => 'Contact Info Title Icon',
            'subtitle'      => 'Add Contact Info Title Icon',
            'desc'          => 'You can add icon for Title',
            'id'            => 'self-contact-title-icon',
            'type'          => 'text'
        ),
        array(
            'title'         => 'Contact Address',
            'subtitle'      => 'Add Contact Address',
            'desc'          => 'You can add contact address from here',
            'id'            => 'self-contact-address',
            'type'          => 'text',
            'default'       => 'Dapa-Idrakpur, Fatullah'
        ),
        array(
            'title'         => 'Contact Phone',
            'subtitle'      => 'Add Contact Phone',
            'desc'          => 'You can add contact Phone from here',
            'id'            => 'self-contact-phone',
            'type'          => 'text',
            'default'       => '+8801961926400'
        ),
        array(
            'title'         => 'Contact Email',
            'subtitle'      => 'Add Contact Email',
            'desc'          => 'You can add contact Email from here',
            'id'            => 'self-contact-email',
            'type'          => 'text',
            'default'       => 'tajaulislamdu@gmail.com'
        )


    )
));



/**
*
*
* Footer Area
*
*/
Redux::setSection($opt_name, array(
        'title' => 'Footer Area',
        'id'    => 'self-footer-area',
        'desc'  => 'Manage Footer Area',
        'icon'  => 'el el-fire'
));

Redux::setSection($opt_name, array(
        'title'     => 'Company Copyinfo',
        'id'        => 'self-company-copyinfo',
        'desc'      => 'Manage Company Copyinfo',
        'subsection'=> true,
        'fields'    => array(
            array(
                'title'         => 'Running Year',
                'subtitle'      => 'Add Running Year',
                'id'            => 'self-running-year',
                'desc'          => 'Manage Running Year From here',
                'type'          => 'text'
            ),
            array(
                'title'         => 'Name of Company',
                'subtitle'      => 'Add Name of Company',
                'id'            => 'self-name-of-company',
                'desc'          => 'Manage Company Name From here',
                'type'          => 'text'
            ),
        )
));
