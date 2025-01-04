<?php
function expert_hotel_booking_post_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'expert_hotel_booking_post', array(
			'priority' => 31,
			'title' => esc_html__( 'Post Option', 'expert-hotel-booking' ),
		)
	);

	/*=========================================
	Archive Post  Section
	=========================================*/
	$wp_customize->add_section(
		'expert_hotel_booking_archive_post_setting', array(
			'title' => esc_html__( 'Archive Post', 'expert-hotel-booking' ),
			'priority' => 1,
			'panel' => 'expert_hotel_booking_post',
		)
	);
	
	// Archive Post Settings 
	$wp_customize->add_setting(
		'archive_post_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'archive_post_settings',
		array(
			'type' => 'hidden',
			'label' => __('Archive Post Section Setting','expert-hotel-booking'),
			'section' => 'expert_hotel_booking_archive_post_setting',
		)
	);

	// Layouts Post
	$wp_customize->add_setting('expert_hotel_booking_blog_layout_option_setting',array(
		'default' => 'Default',
		'sanitize_callback' => 'expert_hotel_booking_sanitize_choices'
	  ));
	  $wp_customize->add_control(new Expert_Hotel_Booking_Image_Radio_Control($wp_customize, 'expert_hotel_booking_blog_layout_option_setting', array(
		'type' => 'select',
		'label' => __('Blog Post Layouts','expert-hotel-booking'),
		'section' => 'expert_hotel_booking_archive_post_setting',
		'choices' => array(
		  'Default' => esc_url(get_template_directory_uri()).'/assets/images/layout-1.png',
		  'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout-2.png',
		  'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout-3.png',
	  ))));
	
	// Post Heading Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_post_heading_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_post_heading_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Heading', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_archive_post_setting',
			'settings'    => 'expert_hotel_booking_post_heading_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Content Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_post_content_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_post_content_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Content', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_archive_post_setting',
			'settings'    => 'expert_hotel_booking_post_content_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Featured Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_post_featured_image_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_post_featured_image_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Feature Image', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_archive_post_setting',
			'settings'    => 'expert_hotel_booking_post_featured_image_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_post_date_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_post_date_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Date', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_archive_post_setting',
			'settings'    => 'expert_hotel_booking_post_date_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_post_comments_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_post_comments_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Comment', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_archive_post_setting',
			'settings'    => 'expert_hotel_booking_post_comments_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_post_author_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_post_author_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Author', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_archive_post_setting',
			'settings'    => 'expert_hotel_booking_post_author_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Tags Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_post_tags_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_post_tags_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Tags', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_archive_post_setting',
			'settings'    => 'expert_hotel_booking_post_tags_settings',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting( 'expert_hotel_booking_upgrade_page_settings_13',
    array(
        'sanitize_callback' => 'sanitize_text_field'
    )
    );
    $wp_customize->add_control( new Expert_Hotel_Booking_Control_Upgrade(
        $wp_customize, 'expert_hotel_booking_upgrade_page_settings_13',
            array(
                'priority'      => 200,
                'section'       => 'expert_hotel_booking_archive_post_setting',
                'settings'      => 'expert_hotel_booking_upgrade_page_settings_13',
                'label'         => __( 'Hotel Booking Pro comes with additional features.', 'expert-hotel-booking' ),
                'choices'       => array( __( '12+ Sections', 'expert-hotel-booking' ), __( 'One Click Demo Importer', 'expert-hotel-booking' ), __( 'Section Reordering Facility', 'expert-hotel-booking' ),__( 'Advance Typography', 'expert-hotel-booking' ),__( 'Easy Customization', 'expert-hotel-booking' ),__( '24x7 Support', 'expert-hotel-booking' ), )
            )
        )
    );

	/*=========================================
	Single Post  Section
	=========================================*/
	$wp_customize->add_section(
		'expert_hotel_booking_single_post', array(
			'title' => esc_html__( 'Single Post', 'expert-hotel-booking' ),
			'priority' => 3,
			'panel' => 'expert_hotel_booking_post',
		)
	);
	
	// Post Heading Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_single_post_heading_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_single_post_heading_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Heading', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_single_post',
			'settings'    => 'expert_hotel_booking_single_post_heading_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Content Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_single_post_content_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_single_post_content_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Content', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_single_post',
			'settings'    => 'expert_hotel_booking_single_post_content_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Featured Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_single_post_featured_image_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_single_post_featured_image_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Feature Image', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_single_post',
			'settings'    => 'expert_hotel_booking_single_post_featured_image_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_single_post_date_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_single_post_date_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Date', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_single_post',
			'settings'    => 'expert_hotel_booking_single_post_date_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_single_post_comments_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_single_post_comments_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Comment', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_single_post',
			'settings'    => 'expert_hotel_booking_single_post_comments_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_single_post_author_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_single_post_author_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Author', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_single_post',
			'settings'    => 'expert_hotel_booking_single_post_author_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Tags Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_hotel_booking_single_post_tags_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_hotel_booking_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_hotel_booking_single_post_tags_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Tags', 'expert-hotel-booking' ),
			'section'     => 'expert_hotel_booking_single_post',
			'settings'    => 'expert_hotel_booking_single_post_tags_settings',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting( 'expert_hotel_booking_upgrade_page_settings_14',
    array(
        'sanitize_callback' => 'sanitize_text_field'
    )
    );
    $wp_customize->add_control( new Expert_Hotel_Booking_Control_Upgrade(
        $wp_customize, 'expert_hotel_booking_upgrade_page_settings_14',
            array(
                'priority'      => 200,
                'section'       => 'expert_hotel_booking_single_post',
                'settings'      => 'expert_hotel_booking_upgrade_page_settings_14',
                'label'         => __( 'Hotel Booking Pro comes with additional features.', 'expert-hotel-booking' ),
                'choices'       => array( __( '12+ Sections', 'expert-hotel-booking' ), __( 'One Click Demo Importer', 'expert-hotel-booking' ), __( 'Section Reordering Facility', 'expert-hotel-booking' ),__( 'Advance Typography', 'expert-hotel-booking' ),__( 'Easy Customization', 'expert-hotel-booking' ),__( '24x7 Support', 'expert-hotel-booking' ), )
            )
        )
    );
}

add_action( 'customize_register', 'expert_hotel_booking_post_setting' );