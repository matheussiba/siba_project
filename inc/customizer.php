<?php

function sibaproject_customizer( $wp_customize ){

	// Removing unnecessary sections for this project
	$wp_customize->remove_section( 'colors');
	$wp_customize->remove_section( 'static_front_page');
	$wp_customize->remove_section( 'custom_css');


	//  Sanitize Reference: https://divpusher.com/blog/wordpress-customizer-sanitization-examples/#text

	// ---- New section : INFO
	$wp_customize->add_section(
		'sec_info', array(
			'title' => __('Contact Information', 'siba-project' ),
			'description' => __('Contact Information Settings', 'siba-project' )
		)
	);
	// Address
	$wp_customize->add_setting(
		'set_info-address', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_info-address' ),
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		'set_info-address', array(
			'label' => __('Address', 'siba-project' ),
			'description' => __('Type here your address', 'siba-project' ),
			'section' => 'sec_info',
			'type' => 'textarea'
		)
	);
	// Phone
	$wp_customize->add_setting(
		'set_info-phone', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_info-phone' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_info-phone', array(
			'label' => __('Telephone', 'siba-project' ),
			'description' => __('Type your phone number here', 'siba-project' ),
			'section' => 'sec_info',
			'type' => 'text'
		)
	);
	// Whatsapp
	$wp_customize->add_setting(
		'set_info-whatsapp', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_info-whatsapp' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_info-whatsapp', array(
			'label' => __('WhatsApp', 'siba-project' ),
			'description' => __('Type your whatsapp number', 'siba-project' ),
			'section' => 'sec_info',
			'type' => 'text'
		)
	);
	// E-mail
	$wp_customize->add_setting(
		'set_info-email', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_info-email' ),
			'sanitize_callback' => 'sanitize_email'
		)
	);
	$wp_customize->add_control(
		'set_info-email', array(
			'label' => __('E-mail', 'siba-project' ),
			'description' => __('Type your e-mail here', 'siba-project' ),
			'section' => 'sec_info',
			'type' => 'text'
		)
	);
	// Twitter link
	$wp_customize->add_setting(
		'set_info-twitterlink', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_info-twitterlink' ),
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
		'set_info-twitterlink', array(
			'label' => __('Social Media Links', 'siba-project' ),
			'description' => __('Twitter account link', 'siba-project' ),
			'section' => 'sec_info',
			'type' => 'url'
		)
	);
	// Facebook link
	$wp_customize->add_setting(
		'set_info-facebooklink', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_info-facebooklink' ),
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
		'set_info-facebooklink', array(
			'label' => '' ,
			'description' => __('Facebook account link', 'siba-project' ),
			'section' => 'sec_info',
			'type' => 'url'
		)
	);
	// Instagram link
	$wp_customize->add_setting(
		'set_info-instagramlink', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_info-instagramlink' ),
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
		'set_info-instagramlink', array(
			'label' => '' ,
			'description' => __('Instagram account link', 'siba-project' ),
			'section' => 'sec_info',
			'type' => 'url'
		)
	);
	// pinterest link
	$wp_customize->add_setting(
		'set_info-pinterestlink', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_info-pinterestlink' ),
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
		'set_info-pinterestlink', array(
			'label' => '' ,
			'description' => __('Pinterest account link', 'siba-project' ),
			'section' => 'sec_info',
			'type' => 'url'
		)
	);
	// linkedin link
	$wp_customize->add_setting(
		'set_info-linkedinlink', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_info-linkedinlink' ),
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
		'set_info-linkedinlink', array(
			'label' => '' ,
			'description' => __('Linkedin account link', 'siba-project' ),
			'section' => 'sec_info',
			'type' => 'url'
		)
	);
	// Youtube link
	$wp_customize->add_setting(
		'set_info-youtubelink', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_info-youtubelink' ),
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
		'set_info-youtubelink', array(
			'label' => '' ,
			'description' => __('Youtube account link', 'siba-project' ),
			'section' => 'sec_info',
			'type' => 'url'
		)
	);

	// ---- New section : SLIDER
	$wp_customize->add_section(
		'sec_slider', array(
			'title' => __('Section: Photo Slider', 'siba-project' ),
			'description' => __('Section Settings', 'siba-project' )
		)
	);

	//Cropped Image 1
	$wp_customize->add_setting('set_slider-image1', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'set_slider-image1',
			array(
				'label'      =>  __('Image', 'siba-project' ) . ' 1',
				'description'=>  __('Dimensions', 'siba-project' ) . ': 1900x1200 px',
				'section'    => 'sec_slider',
				'width' => 1900,
				'height' => 1200
			)));

	// Phrase 1
	$wp_customize->add_setting(
		'set_slider-text1', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_slider-text1' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_slider-text1', array(
			'label' => '' ,
			'description' => __('Image sentence', 'siba-project' ) . ' 1',
			'section' => 'sec_slider',
			'type' => 'text'
		)
	);

	// Link 1
	$wp_customize->add_setting(
		'set_slider-link1', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_slider-link1' ),
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
		'set_slider-link1', array(
			'label' => '' ,
			'description' => __('Image sentence link', 'siba-project' ) . ' 1',
			'section' => 'sec_slider',
			'type' => 'url'
		)
	);


	//Crop Image 2
	$wp_customize->add_setting('set_slider-image2', array(
	    'type' => 'theme_mod',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'set_slider-image2',
			array(
				'label'      =>  __('Image', 'siba-project' ) . ' 2',
				'description'=>  __('Dimensions', 'siba-project' ) . ': 1900x1200 px',
				'section'    => 'sec_slider',
				'width' => 1900,
				'height' => 1200
			)));

	// Phrase 2
	$wp_customize->add_setting(
		'set_slider-text2', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_slider-text2' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_slider-text2', array(
			'label' => '' ,
			'description' => __('Image sentence', 'siba-project' ) . ' 2',
			'section' => 'sec_slider',
			'type' => 'text'
		)
	);
	// Link 2
	$wp_customize->add_setting(
		'set_slider-link2', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_slider-link2' ),
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
		'set_slider-link2', array(
			'label' => '' ,
			'description' => __('Image sentence link', 'siba-project' ) . ' 2',
			'section' => 'sec_slider',
			'type' => 'url'
		)
	);



	//Crop Image 3
	$wp_customize->add_setting('set_slider-image3', array(
	    'type' => 'theme_mod',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'set_slider-image3',
			array(
				'label'      =>  __('Image', 'siba-project' ) . ' 3',
				'description'=>  __('Dimensions', 'siba-project' ) . ': 1900x1200 px',
				'section'    => 'sec_slider',
				'width' => 1900,
				'height' => 1200
			)));
	// Phrase 3
	$wp_customize->add_setting(
		'set_slider-text3', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_slider-text3' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_slider-text3', array(
			'label' => '' ,
			'description' => __('Image sentence', 'siba-project' ) . ' 3',
			'section' => 'sec_slider',
			'type' => 'text'
		)
	);
	// Link 3
	$wp_customize->add_setting(
		'set_slider-link3', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_slider-link3' ),
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
		'set_slider-link3', array(
			'label' => '' ,
			'description' => __('Image sentence link', 'siba-project' ) . ' 3',
			'section' => 'sec_slider',
			'type' => 'url'
		)
	);


	//Crop Image 4
	$wp_customize->add_setting('set_slider-image4', array(
	    'type' => 'theme_mod',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'set_slider-image4',
			array(
				'label'      =>  __('Image', 'siba-project' ) . ' 4',
				'description'=>  __('Dimensions', 'siba-project' ) . ': 1900x1200 px',
				'section'    => 'sec_slider',
				'width' => 1900,
				'height' => 1200
			)));
	// Phrase 4
	$wp_customize->add_setting(
		'set_slider-text4', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_slider-text4' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_slider-text4', array(
			'label' => '' ,
			'description' => __('Image sentence', 'siba-project' ) . ' 4',
			'section' => 'sec_slider',
			'type' => 'text'
		)
	);
	// Link 4
	$wp_customize->add_setting(
		'set_slider-link4', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_slider-link4' ),
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
		'set_slider-link4', array(
			'label' => '' ,
			'description' => __('Image sentence link', 'siba-project' ) . ' 4',
			'section' => 'sec_slider',
			'type' => 'url'
		)
	);


	//Crop Image 5
	$wp_customize->add_setting('set_slider-image5', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'set_slider-image5',
			array(
				'label'      =>  __('Image', 'siba-project' ) . ' 5',
				'description'=>  __('Dimensions', 'siba-project' ) . ': 1900x1200 px',
				'section'    => 'sec_slider',
				'width' => 1900,
				'height' => 1200
			)));
	// Phrase 5
	$wp_customize->add_setting(
		'set_slider-text5', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_slider-text5' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_slider-text5', array(
			'label' => '' ,
			'description' => __('Image sentence', 'siba-project' ) . ' 5',
			'section' => 'sec_slider',
			'type' => 'text'
		)
	);
	// Link 5
	$wp_customize->add_setting(
		'set_slider-link5', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_slider-link5' ),
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
		'set_slider-link5', array(
			'label' => '' ,
			'description' => __('Image sentence link', 'siba-project' ) . ' 5',
			'section' => 'sec_slider',
			'type' => 'url'
		)
	);

	// ---- New section : Welcome
	$wp_customize->add_section(
		'sec_welcome', array(
			'title' =>  __('Section: Welcome', 'siba-project' ) ,
			'description' => __('Section settings', 'siba-project' )
		)
	);

	// Heading
	$wp_customize->add_setting(
		'set_welcome-heading', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_welcome-heading' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_welcome-heading', array(
			'label' => __('Section Title', 'siba-project' ) ,
			'description' => '',
			'section' => 'sec_welcome',
			'type' => 'text'
		)
	);

	// Title
	$wp_customize->add_setting(
		'set_welcome-title', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_welcome-title' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_welcome-title', array(
			'label' => __('Left Panel', 'siba-project' ),
			'description' => __('Title:', 'siba-project' ),
			'section' => 'sec_welcome',
			'type' => 'text'
		)
	);
	// Paragraph
	$wp_customize->add_setting(
		'set_welcome-paragraph', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_welcome-paragraph' ),
			'sanitize_callback' => 'esc_textarea'
		)
	);
	$wp_customize->add_control(
		'set_welcome-paragraph', array(
			'label' => '',
			'description' => __('Summary:', 'siba-project' ),
			'section' => 'sec_welcome',
			'type' => 'textarea'
		)
	);
	// buttontext
	$wp_customize->add_setting(
		'set_welcome-buttontext', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_welcome-buttontext' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_welcome-buttontext', array(
			'label' => '' ,
			'description' => __('Button Text:', 'siba-project' ),
			'section' => 'sec_welcome',
			'type' => 'text'
		)
	);
	// Button link
	$wp_customize->add_setting(
		'set_welcome-buttonlink', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_welcome-buttonlink' ),
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
		'set_welcome-buttonlink', array(
			'label' => '' ,
			'description' => __('Button link', 'siba-project' ) . ':',
			'section' => 'sec_welcome',
			'type' => 'url'
		)
	);

	// Video
	$wp_customize->add_setting(
		'set_welcome-videolink', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_welcome-videolink' ),
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
		'set_welcome-videolink', array(
			'label' => __('Right Panel', 'siba-project' ),
			'description' => __('Link of your video (if any):', 'siba-project' ),
			'section' => 'sec_welcome',
			'type' => 'url'
		)
	);
	//Crop Image Background
	$wp_customize->add_setting('set_welcome-imagebg', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'set_welcome-imagebg',
			array(
				'label'      =>  '',
				'description'=>  __('Choose an image for this section.', 'siba-project' ),
				'section'    => 'sec_welcome',
				'width' => 980,
				'height' => 545
			)));

	// ---- New section : COUNTER
	$wp_customize->add_section(
		'sec_counter', array(
			'title' => __('Section: Counter', 'siba-project' ) ,
			'description' => __('Section Settings', 'siba-project' )
		)
	);
	// First Counter
	$wp_customize->add_setting(
		'set_counter-number1', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_counter-number1' ),
			// 'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
		'set_counter-number1', array(
			'label' => __('First Counter', 'siba-project' ) ,
			'description' => __('Counter number', 'siba-project' ) ,
			'section' => 'sec_counter',
			'type' => 'number'
		)
	);
	$wp_customize->add_setting(
		'set_counter-text1', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_counter-text1' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_counter-text1', array(
			'label' => '' ,
			'description' => __('Text', 'siba-project' ) ,
			'section' => 'sec_counter',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'set_counter-icon1', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_counter-icon1' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_counter-icon1', array(
			'label' => '' ,
			'description' => sprintf(
				__('Counter Icon', 'siba-project' ) . ' (Ex: icon-users2). ' .  __('See more icons ', 'siba-project' ) . '<a target="_blank" href="%s">' . __('here', 'siba-project' ) .'</a>',
				get_template_directory_uri() . '/fonts/icomoon_demo/demo.html'
				),
			'section' => 'sec_counter',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'set_counter-afternumber1', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_counter-afternumber1' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_counter-afternumber1', array(
			'label' => '' ,
			'description' => __('Symbol or character after number (optional)', 'siba-project' ),
			'section' => 'sec_counter',
			'type' => 'text'
		)
	);

	// Second Counter
	$wp_customize->add_setting(
		'set_counter-number2', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_counter-number2' ),
			// 'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
		'set_counter-number2', array(
			'label' =>  __('Second counter', 'siba-project' ) ,
			'description' => __('Counter number', 'siba-project' ) ,
			'section' => 'sec_counter',
			'type' => 'number'
		)
	);
	$wp_customize->add_setting(
		'set_counter-text2', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_counter-text2' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_counter-text2', array(
			'label' => '' ,
			'description' => __('Text', 'siba-project' ) ,
			'section' => 'sec_counter',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'set_counter-icon2', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_counter-icon2' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_counter-icon2', array(
			'label' => '' ,
			'description' => sprintf(
				__('Counter Icon', 'siba-project' ) . ' (Ex: icon-user-tie). ' .  __('See more icons ', 'siba-project' ) . '<a target="_blank" href="%s">' . __('here', 'siba-project' ) .'</a>',
				get_template_directory_uri() . '/fonts/icomoon_demo/demo.html'
				),
			'section' => 'sec_counter',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'set_counter-afternumber2', array(
			'type' => 'theme_mod',
			'default' => customizer_get_theme_default( 'set_counter-afternumber2' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		'set_counter-afternumber2', array(
			'label' => '' ,
			'description' => __('Symbol or character after number (optional)', 'siba-project' ),
			'section' => 'sec_counter',
			'type' => 'text'
		)
	);

		// Third Counter
		$wp_customize->add_setting(
			'set_counter-number3', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_counter-number3' ),
				// 'sanitize_callback' => 'absint'
			)
		);
		$wp_customize->add_control(
			'set_counter-number3', array(
				'label' => __('Third counter', 'siba-project' ) ,
				'description' => __('Counter number', 'siba-project' ) ,
				'section' => 'sec_counter',
				'type' => 'number'
			)
		);
		$wp_customize->add_setting(
			'set_counter-text3', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_counter-text3' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_counter-text3', array(
				'label' => '' ,
				'description' => __('Text', 'siba-project' ) ,
				'section' => 'sec_counter',
				'type' => 'text'
			)
		);
		$wp_customize->add_setting(
			'set_counter-icon3', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_counter-icon3' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_counter-icon3', array(
				'label' => '' ,
				'description' => sprintf(
					__('Counter Icon', 'siba-project' ) . ' (Ex: icon-library). ' .  __('See more icons ', 'siba-project' ) . '<a target="_blank" href="%s">' . __('here', 'siba-project' ) .'</a>',
					get_template_directory_uri() . '/fonts/icomoon_demo/demo.html'
					),
				'section' => 'sec_counter',
				'type' => 'text'
			)
		);
		$wp_customize->add_setting(
			'set_counter-afternumber3', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_counter-afternumber3' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_counter-afternumber3', array(
				'label' => '' ,
				'description' => __('Symbol or character after number (optional)', 'siba-project' ),
				'section' => 'sec_counter',
				'type' => 'text'
			)
		);

		// Fourth Counter
		$wp_customize->add_setting(
			'set_counter-number4', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_counter-number4' ),
				// 'sanitize_callback' => 'absint'
			)
		);
		$wp_customize->add_control(
			'set_counter-number4', array(
				'label' => __('Fourth counter', 'siba-project' ) ,
				'description' => __('Counter number', 'siba-project' ) ,
				'section' => 'sec_counter',
				'type' => 'number'
			)
		);
		$wp_customize->add_setting(
			'set_counter-text4', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_counter-text4' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_counter-text4', array(
				'label' => '' ,
				'description' => __('Text', 'siba-project' ) ,
				'section' => 'sec_counter',
				'type' => 'text'
			)
		);
		$wp_customize->add_setting(
			'set_counter-icon4', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_counter-icon4' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_counter-icon4', array(
				'label' => '' ,
				'description' => sprintf(
					__('Counter Icon', 'siba-project' ) . ' (Ex: icon-smile2). ' .  __('See more icons ', 'siba-project' ) . '<a target="_blank" href="%s">' . __('here', 'siba-project' ) .'</a>',
					get_template_directory_uri() . '/fonts/icomoon_demo/demo.html'
					),
				'section' => 'sec_counter',
				'type' => 'text'
			)
		);
		$wp_customize->add_setting(
			'set_counter-afternumber4', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_counter-afternumber4' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_counter-afternumber4', array(
				'label' => '' ,
				'description' => __('Symbol or character after number (optional)', 'siba-project' ),
				'section' => 'sec_counter',
				'type' => 'text'
			)
		);

		// ---- New section : BLOG
		$wp_customize->add_section(
			'sec_blog', array(
				'title' => __('Section: Blog', 'siba-project' ),
				'description' => __('Section Settings', 'siba-project' )
			)
		);
		//Image Background
		$wp_customize->add_setting(
				'set_blog-imagebg',
				array(
						//Sanitize with custom function written on the end of the document.
						'sanitize_callback' => 'custom_sanitize_file'
				)
		);
		$wp_customize->add_control(
				new WP_Customize_Upload_Control(
						$wp_customize,
						'set_blog-imagebg',
						array(
								'label'      =>  __('Choose an image for this section', 'siba-project' ),
								'description'=>  '',
								'section'    => 'sec_blog',
								'width' => 1920,
								'height' => 650
						)
				)
		);
		// Heading
		$wp_customize->add_setting(
			'set_blog-heading', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_blog-heading' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_blog-heading', array(
				'label' => __('Section Title:', 'siba-project' ),
				'description' => '',
				'section' => 'sec_blog',
				'type' => 'text'
			)
		);
		// Title tab 1
		$wp_customize->add_setting(
			'set_blog-tabtitle1', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_blog-tabtitle1' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_blog-tabtitle1', array(
				'label' => __('Tab 1', 'siba-project' ),
				'description' => __('First Tab Title', 'siba-project' ),
				'section' => 'sec_blog',
				'type' => 'text'
			)
		);
		// Button Text 1
		$wp_customize->add_setting(
			'set_blog-buttontext1', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_blog-buttontext1' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_blog-buttontext1', array(
				'label' => '',
				'description' => __('First tab button Text:', 'siba-project' ),
				'section' => 'sec_blog',
				'type' => 'text'
			)
		);

		// Button link 1
		$wp_customize->add_setting(
			'set_blog-buttonlink1', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_blog-buttonlink1' ),
				'sanitize_callback' => 'esc_url_raw'
			)
		);
		$wp_customize->add_control(
			'set_blog-buttonlink1', array(
				'label' => '' ,
				'description' => __('Button link', 'siba-project' ) . ':',
				'section' => 'sec_blog',
				'type' => 'url'
			)
		);

		// Tab 2 - Show Section
		$wp_customize->add_setting(
			'set_blog-checkbox_showtab2', array(
			'type'				=> 'theme_mod',
			'default'        => customizer_get_theme_default( 'set_blog-checkbox_showtab2' ),
			'sanitize_callback' => 'custom_sanitize_checkbox'
		));
		$wp_customize->add_control( 'set_blog-checkbox_showtab2', array(
			'label'                 => __( 'Show Map Tab 2?', 'siba-project' ),
			'section'               => 'sec_blog',
			'type'                  => 'checkbox',
			'description'           => __( 'Choose whether to show a second tab on theme or not. If yes, contact admin to adjust it for you.', 'siba-project' )
		) );
		// Title tab 2
		$wp_customize->add_setting(
			'set_blog-tabtitle2', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_blog-tabtitle2' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_blog-tabtitle2', array(
				'label' => __('Tab 2', 'siba-project' ),
				'description' => __('Second Tab Title', 'siba-project' ),
				'section' => 'sec_blog',
				'type' => 'text'
			)
		);
		// Button Text 2
		$wp_customize->add_setting(
			'set_blog-buttontext2', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_blog-buttontext2' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_blog-buttontext2', array(
				'label' => '',
				'description' => __('Second tab button Text:', 'siba-project' ),
				'section' => 'sec_blog',
				'type' => 'text'
			)
		);
		// Button link 2
		$wp_customize->add_setting(
			'set_blog-buttonlink2', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_blog-buttonlink2' ),
				'sanitize_callback' => 'esc_url_raw'
			)
		);
		$wp_customize->add_control(
			'set_blog-buttonlink2', array(
				'label' => '' ,
				'description' => __('Button link', 'siba-project' ) . ':',
				'section' => 'sec_blog',
				'type' => 'url'
			)
		);
		// ---- New section : CLASSES
		$wp_customize->add_section(
			'sec_classes', array(
				'title' => __('Section: Classes', 'siba-project' ),
				'description' => __('Section Settings', 'siba-project' )
			)
		);
		// Title
		$wp_customize->add_setting(
			'set_classes-title', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_classes-title' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_classes-title', array(
				'label' => __('Section title:', 'siba-project' ),
				'description' => '',
				'section' => 'sec_classes',
				'type' => 'text'
			)
		);
		// Paragraph
		$wp_customize->add_setting(
			'set_classes-text', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_classes-text' ),
				'sanitize_callback' => 'esc_textarea'
			)
		);
		$wp_customize->add_control(
			'set_classes-text', array(
				'label' => __('Section description:', 'siba-project' ),
				'description' => '',
				'section' => 'sec_classes',
				'type' => 'textarea'
			)
		);
		// Button Text
		$wp_customize->add_setting(
			'set_classes-buttontext', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_classes-buttontext' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_classes-buttontext', array(
				'label' => __('Buttons Text:', 'siba-project' ),
				'description' => '',
				'section' => 'sec_classes',
				'type' => 'text'
			)
		);

		// ---- New section : TEAM
		$wp_customize->add_section(
			'sec_team', array(
				'title' => __('Section: Team', 'siba-project' ),
				'description' => __('Section Settings', 'siba-project' )
			)
		);
		// Title
		$wp_customize->add_setting(
			'set_team-title', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_team-title' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_team-title', array(
				'label' => __('Section title:', 'siba-project' ),
				'description' => '',
				'section' => 'sec_team',
				'type' => 'text'
			)
		);
		// Paragraph
		$wp_customize->add_setting(
			'set_team-text', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_team-text' ),
				'sanitize_callback' => 'esc_textarea'
			)
		);
		$wp_customize->add_control(
			'set_team-text', array(
				'label' => __('Section description:', 'siba-project' ),
				'description' => '',
				'section' => 'sec_team',
				'type' => 'textarea'
			)
		);
		// Tab 2 - Show Section
		$wp_customize->add_setting(
			'set_team-checkbox_showbutton', array(
			'type'				=> 'theme_mod',
			'default'        => customizer_get_theme_default( 'set_team-checkbox_showbutton' ),
			'sanitize_callback' => 'custom_sanitize_checkbox'
		));
		$wp_customize->add_control( 'set_team-checkbox_showbutton', array(
			'label'                 => __( 'Show Button?', 'siba-project' ),
			'section'               => 'sec_team',
			'type'                  => 'checkbox',
			'description'           => __( 'Choose whether to show a button on theme or not.', 'siba-project' )
		) );
		// Button Text
		$wp_customize->add_setting(
			'set_team-buttontext', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_team-buttontext' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_team-buttontext', array(
				'label' => __('Button', 'siba-project' ),
				'description' => __('Button Text:', 'siba-project' ) . ':',
				'section' => 'sec_team',
				'type' => 'text'
			)
		);
		// Button link 2
		$wp_customize->add_setting(
			'set_team-buttonlink', array(
				'type' => 'theme_mod',
				'default' => customizer_get_theme_default( 'set_team-buttonlink' ),
				'sanitize_callback' => 'esc_url_raw'
			)
		);
		$wp_customize->add_control(
			'set_team-buttonlink', array(
				'label' => '' ,
				'description' => __('Button link:', 'siba-project' ) . ':',
				'section' => 'sec_team',
				'type' => 'url'
			)
		);

			// ---- New section : TESTIMONIALS
			$wp_customize->add_section(
				'sec_testimonials', array(
					'title' => __('Section: Testimonials', 'siba-project' ),
					'description' => __('Section Settings', 'siba-project' )
				)
			);
			// Title
			$wp_customize->add_setting(
				'set_testimonials-title', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_testimonials-title' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_testimonials-title', array(
					'label' => __('Section title:', 'siba-project' ),
					'description' => '',
					'section' => 'sec_testimonials',
					'type' => 'text'
				)
			);
			// Paragraph
			$wp_customize->add_setting(
				'set_testimonials-text', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_testimonials-text' ),
					'sanitize_callback' => 'esc_textarea'
				)
			);
			$wp_customize->add_control(
				'set_testimonials-text', array(
					'label' => __('Section description:', 'siba-project' ),
					'description' => '',
					'section' => 'sec_testimonials',
					'type' => 'textarea'
				)
			);

			//Image Background
			$wp_customize->add_setting(
					'set_testimonials-imagebg',
					array(
							//Sanitize with custom function written on the end of the document.
							'sanitize_callback' => 'custom_sanitize_file'
					)
			);
			$wp_customize->add_control(
					new WP_Customize_Upload_Control(
							$wp_customize,
							'set_testimonials-imagebg',
							array(
									'label'      =>  __('Background Image', 'siba-project' ),
									'description'=>  __('Dimensions', 'siba-project' ) . ': 1900 x 1200px',
									'section'    => 'sec_testimonials',
									'width' => 1900,
									'height' => 1200
							)
					)
			);

			// ---- New section : WHYSTUDYHERE
			$wp_customize->add_section(
				'sec_extra', array(
					'title' => __('Section: Extras', 'siba-project' ),
					'description' => __('Section Settings', 'siba-project' )
				)
			);
			// Title
			$wp_customize->add_setting(
				'set_extra-title', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-title' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_extra-title', array(
					'label' => __('Section title:', 'siba-project' ),
					'description' => '',
					'section' => 'sec_extra',
					'type' => 'text'
				)
			);
			// Paragraph
			$wp_customize->add_setting(
				'set_extra-text', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-text' ),
					'sanitize_callback' => 'esc_textarea'
				)
			);
			$wp_customize->add_control(
				'set_extra-text', array(
					'label' => __('Section description:', 'siba-project' ),
					'description' => '',
					'section' => 'sec_extra',
					'type' => 'textarea'
				)
			);
			// 1
			$wp_customize->add_setting(
				'set_extra-title1', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-title1' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_extra-title1', array(
					'label' => __('First Box', 'siba-project' ),
					'description' => __('Title', 'siba-project' ),
					'section' => 'sec_extra',
					'type' => 'text'
				)
			);
			$wp_customize->add_setting(
				'set_extra-text1', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-text1' ),
					'sanitize_callback' => 'esc_textarea'
				)
			);
			$wp_customize->add_control(
				'set_extra-text1', array(
					'label' => '' ,
					'description' => __('Text', 'siba-project' ),
					'section' => 'sec_extra',
					'type' => 'textarea'
				)
			);
			$wp_customize->add_setting(
				'set_extra-icon1', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-icon1' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_extra-icon1', array(
					'label' => '' ,
					'description' => sprintf(
						__('Icon', 'siba-project' ) . ' (Ex: icon-checkmark). ' .  __('See more icons ', 'siba-project' ) . '<a target="_blank" href="%s">' . __('here', 'siba-project' ) .'</a>',
						get_template_directory_uri() . '/fonts/icomoon_demo/demo.html'
						),
					'section' => 'sec_extra',
					'type' => 'text'
				)
			);
			// 2
			$wp_customize->add_setting(
				'set_extra-title2', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-title2' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_extra-title2', array(
					'label' => __('Second Box', 'siba-project' ),
					'description' => __('Title', 'siba-project' ),
					'section' => 'sec_extra',
					'type' => 'text'
				)
			);
			$wp_customize->add_setting(
				'set_extra-text2', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-text2' ),
					'sanitize_callback' => 'esc_textarea'
				)
			);
			$wp_customize->add_control(
				'set_extra-text2', array(
					'label' => '' ,
					'description' => __('Text', 'siba-project' ),
					'section' => 'sec_extra',
					'type' => 'textarea'
				)
			);
			$wp_customize->add_setting(
				'set_extra-icon2', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-icon2' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_extra-icon2', array(
					'label' => '' ,
					'description' => sprintf(
						__('Icon', 'siba-project' ) . ' (Ex: icon-checkmark). ' .  __('See more icons ', 'siba-project' ) . '<a target="_blank" href="%s">' . __('here', 'siba-project' ) .'</a>',
						get_template_directory_uri() . '/fonts/icomoon_demo/demo.html'
						),
					'section' => 'sec_extra',
					'type' => 'text'
				)
			);
			// 3
			$wp_customize->add_setting(
				'set_extra-title3', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-title3' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_extra-title3', array(
					'label' => __('Third Box', 'siba-project' ),
					'description' => __('Title', 'siba-project' ),
					'section' => 'sec_extra',
					'type' => 'text'
				)
			);
			$wp_customize->add_setting(
				'set_extra-text3', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-text3' ),
					'sanitize_callback' => 'esc_textarea'
				)
			);
			$wp_customize->add_control(
				'set_extra-text3', array(
					'label' => '' ,
					'description' => __('Text', 'siba-project' ),
					'section' => 'sec_extra',
					'type' => 'textarea'
				)
			);
			$wp_customize->add_setting(
				'set_extra-icon3', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-icon3' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_extra-icon3', array(
					'label' => '' ,
					'description' => sprintf(
						__('Icon', 'siba-project' ) . ' (Ex: icon-checkmark). ' .  __('See more icons ', 'siba-project' ) . '<a target="_blank" href="%s">' . __('here', 'siba-project' ) .'</a>',
						get_template_directory_uri() . '/fonts/icomoon_demo/demo.html'
						),
					'section' => 'sec_extra',
					'type' => 'text'
				)
			);
			// 4
			$wp_customize->add_setting(
				'set_extra-title4', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-title4' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_extra-title4', array(
					'label' => __('Fourth Box', 'siba-project' ),
					'description' => __('Title', 'siba-project' ),
					'section' => 'sec_extra',
					'type' => 'text'
				)
			);
			$wp_customize->add_setting(
				'set_extra-text4', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-text4' ),
					'sanitize_callback' => 'esc_textarea'
				)
			);
			$wp_customize->add_control(
				'set_extra-text4', array(
					'label' => '' ,
					'description' => __('Text', 'siba-project' ),
					'section' => 'sec_extra',
					'type' => 'textarea'
				)
			);
			$wp_customize->add_setting(
				'set_extra-icon4', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-icon4' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_extra-icon4', array(
					'label' => '' ,
					'description' => sprintf(
						__('Icon', 'siba-project' ) . ' (Ex: icon-checkmark). ' .  __('See more icons ', 'siba-project' ) . '<a target="_blank" href="%s">' . __('here', 'siba-project' ) .'</a>',
						get_template_directory_uri() . '/fonts/icomoon_demo/demo.html'
						),
					'section' => 'sec_extra',
					'type' => 'text'
				)
			);
			// 5
			$wp_customize->add_setting(
				'set_extra-title5', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-title5' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_extra-title5', array(
					'label' => __('Fifth Box', 'siba-project' ),
					'description' => __('Title', 'siba-project' ),
					'section' => 'sec_extra',
					'type' => 'text'
				)
			);
			$wp_customize->add_setting(
				'set_extra-text5', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-text5' ),
					'sanitize_callback' => 'esc_textarea'
				)
			);
			$wp_customize->add_control(
				'set_extra-text5', array(
					'label' => '' ,
					'description' => __('Text', 'siba-project' ),
					'section' => 'sec_extra',
					'type' => 'textarea'
				)
			);
			$wp_customize->add_setting(
				'set_extra-icon5', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-icon5' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_extra-icon5', array(
					'label' => '' ,
					'description' => sprintf(
						__('Icon', 'siba-project' ) . ' (Ex: icon-checkmark). ' .  __('See more icons ', 'siba-project' ) . '<a target="_blank" href="%s">' . __('here', 'siba-project' ) .'</a>',
						get_template_directory_uri() . '/fonts/icomoon_demo/demo.html'
						),
					'section' => 'sec_extra',
					'type' => 'text'
				)
			);
			// 6
			$wp_customize->add_setting(
				'set_extra-title6', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-title6' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_extra-title6', array(
					'label' => __('Sixth Box', 'siba-project' ),
					'description' => __('Title', 'siba-project' ),
					'section' => 'sec_extra',
					'type' => 'text'
				)
			);
			$wp_customize->add_setting(
				'set_extra-text6', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-text6' ),
					'sanitize_callback' => 'esc_textarea'
				)
			);
			$wp_customize->add_control(
				'set_extra-text6', array(
					'label' => '' ,
					'description' => __('Text', 'siba-project' ),
					'section' => 'sec_extra',
					'type' => 'textarea'
				)
			);
			$wp_customize->add_setting(
				'set_extra-icon6', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_extra-icon6' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_extra-icon6', array(
					'label' => '' ,
					'description' => sprintf(
						__('Icon', 'siba-project' ) . ' (Ex: icon-checkmark). ' .  __('See more icons ', 'siba-project' ) . '<a target="_blank" href="%s">' . __('here', 'siba-project' ) .'</a>',
						get_template_directory_uri() . '/fonts/icomoon_demo/demo.html'
						),
					'section' => 'sec_extra',
					'type' => 'text'
				)
			);

			// ---- New section : Google Maps
			$wp_customize->add_section(
				'sec_maps', array(
					'title' => __('Section: Map', 'siba-project' ) ,
					'description' => ''
				)
			);
			// Map - Show Section
			$wp_customize->add_setting(
				'set_map-checkbox_showmap', array(
				'type'				=> 'theme_mod',
				'default'        => customizer_get_theme_default( 'set_map-checkbox_showmap' ),
				'sanitize_callback' => 'custom_sanitize_checkbox'
			));
			$wp_customize->add_control( 'set_map-checkbox_showmap', array(
				'label'                 => __( 'Show Map Section?', 'siba-project' ),
				'section'               => 'sec_maps',
				'type'                  => 'checkbox',
				'description'           => __( 'Choose whether to show the map on theme or not', 'siba-project' )
			) );
			// Title
			$wp_customize->add_setting(
				'set_map-title', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_map-title' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_map-title', array(
					'label' => __('Section title:', 'siba-project' ),
					'description' => '',
					'section' => 'sec_maps',
					'type' => 'text'
				)
			);
			// Paragraph
			$wp_customize->add_setting(
				'set_map-text', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_map-text' ),
					'sanitize_callback' => 'esc_textarea'
				)
			);
			$wp_customize->add_control(
				'set_map-text', array(
					'label' => __('Section description:', 'siba-project' ),
					'description' => '',
					'section' => 'sec_maps',
					'type' => 'textarea'
				)
			);

			// Map API Key
			$wp_customize->add_setting(
				'set_map-apikey', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_map-apikey' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_map-apikey', array(
					'label' => __('Google Maps Embed API key', 'siba-project' ) ,
					'description' => sprintf(
						__('Get the Google Maps Embed API key ', 'siba-project' ) . '<a target="_blank" href="%s">' . __('here', 'siba-project' ) .'</a>',
						'https://developers.google.com/maps/documentation/embed/get-api-key#get-the-api-key'
						),
					'section' => 'sec_maps',
					'type' => 'text'
				)
			);

			// ---- New section : BANNER
			$wp_customize->add_section(
				'sec_banner', array(
					'title' => __('Section: Banner', 'siba-project' ),
					'description' => __('Section Settings', 'siba-project' )
				)
			);
			// Title
			$wp_customize->add_setting(
				'set_banner-text', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_banner-text' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_banner-text', array(
					'label' => __('Banner', 'siba-project' ),
					'description' => __('Banner sentence', 'siba-project' ) . ':',
					'section' => 'sec_banner',
					'type' => 'text'
				)
			);
			// button title
			$wp_customize->add_setting(
				'set_banner-buttontext', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_banner-buttontext' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_banner-buttontext', array(
					'label' => '',
					'description' => __('Button text', 'siba-project' ) . ':',
					'section' => 'sec_banner',
					'type' => 'text'
				)
			);
			// Button link
			$wp_customize->add_setting(
				'set_banner-buttonlink', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_banner-buttonlink' ),
					'sanitize_callback' => 'esc_url_raw'
				)
			);
			$wp_customize->add_control(
				'set_banner-buttonlink', array(
					'label' => '' ,
					'description' => __('Button link', 'siba-project' ) . ':',
					'section' => 'sec_banner',
					'type' => 'url'
				)
			);

			// ---- Page Blog
			$wp_customize->add_section(
				'sec_page-blog', array(
					'title' => __('Page: Blog', 'siba-project' ),
					'description' => __('Settings of the Page Blog', 'siba-project' ),
					'panel'          => 'pages_panel',
				)
			);
			//Image Background
			$wp_customize->add_setting(
					'set_page-blog-imagebg',
					array(
							//Sanitize with custom function written on the end of the document.
							'sanitize_callback' => 'custom_sanitize_file'
					)
			);
			$wp_customize->add_control(
					new WP_Customize_Upload_Control(
							$wp_customize,
							'set_page-blog-imagebg',
							array(
									'label'      =>  __('Cover Image', 'siba-project' ),
									'description'=> __('Choose a cover image to this page. (Go to page to see the changes.)', 'siba-project'),
									'section'    => 'sec_page-blog',
									'width' => 1920,
									'height' => 650
							)
					)
			);
			// Heading
			$wp_customize->add_setting(
				'set_page-blog-heading', array(
					'type' => 'theme_mod',
					'default' => '',
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_page-blog-heading', array(
					'label' => __('Page Heading Title:', 'siba-project' ),
					'description' => __( 'Default value: Page Title. (Go to page to see the changes)', 'siba-project' ),
					'section' => 'sec_page-blog',
					'type' => 'text'
				)
			);

			// ---- Page Classes
			$wp_customize->add_section(
				'sec_page-classes', array(
					'title' => __('Page: Classes', 'siba-project' ),
					'description' => __('Settings of the Page Classes', 'siba-project' ),
					'panel'          => 'pages_panel',
				)
			);
			//Image Background
			$wp_customize->add_setting(
					'set_page-classes-imagebg',
					array(
							//Sanitize with custom function written on the end of the document.
							'sanitize_callback' => 'custom_sanitize_file'
					)
			);
			$wp_customize->add_control(
					new WP_Customize_Upload_Control(
							$wp_customize,
							'set_page-classes-imagebg',
							array(
									'label'      =>  __('Cover Image', 'siba-project' ),
									'description'=> __('Choose a cover image to this page. (Go to page to see the changes.)', 'siba-project'),
									'section'    => 'sec_page-classes',
									'width' => 1920,
									'height' => 650
							)
					)
			);
			// Heading
			$wp_customize->add_setting(
				'set_page-classes-heading', array(
					'type' => 'theme_mod',
					'default' => '',
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_page-classes-heading', array(
					'label' => __('Page Heading Title:', 'siba-project' ),
					'description' => __( 'Default value: Page Title. (Go to page to see the changes)', 'siba-project' ),
					'section' => 'sec_page-classes',
					'type' => 'text'
				)
			);

			// ---- Page Team
			$wp_customize->add_section(
				'sec_page-team', array(
					'title' => __('Page: Team', 'siba-project' ),
					'description' => __('Settings of the Page Team', 'siba-project' ),
					'panel'          => 'pages_panel',
				)
			);
			//Image Background
			$wp_customize->add_setting(
					'set_page-team-imagebg',
					array(
							//Sanitize with custom function written on the end of the document.
							'sanitize_callback' => 'custom_sanitize_file'
					)
			);
			$wp_customize->add_control(
					new WP_Customize_Upload_Control(
							$wp_customize,
							'set_page-team-imagebg',
							array(
									'label'      =>  __('Cover Image', 'siba-project' ),
									'description'=> __('Choose a cover image to this page. (Go to page to see the changes.)', 'siba-project'),
									'section'    => 'sec_page-team',
									'width' => 1920,
									'height' => 650
							)
					)
			);
			// Heading
			$wp_customize->add_setting(
				'set_page-team-heading', array(
					'type' => 'theme_mod',
					'default' => '',
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_page-team-heading', array(
					'label' => __('Page Heading Title:', 'siba-project' ),
					'description' => __( 'Default value: Page Title. (Go to page to see the changes)', 'siba-project' ),
					'section' => 'sec_page-team',
					'type' => 'text'
				)
			);

			// ---- Page About
			$wp_customize->add_section(
				'sec_page-about', array(
					'title' => __('Page: About', 'siba-project' ),
					'description' => __('Settings of the Page About', 'siba-project' ),
					'panel'          => 'pages_panel',
				)
			);
			//Image Background
			$wp_customize->add_setting(
					'set_page-about-imagebg',
					array(
							//Sanitize with custom function written on the end of the document.
							'sanitize_callback' => 'custom_sanitize_file'
					)
			);
			$wp_customize->add_control(
					new WP_Customize_Upload_Control(
							$wp_customize,
							'set_page-about-imagebg',
							array(
									'label'      =>  __('Cover Image', 'siba-project' ),
									'description'=> __('Choose a cover image to this page. (Go to page to see the changes.)', 'siba-project'),
									'section'    => 'sec_page-about',
									'width' => 1920,
									'height' => 650
							)
					)
			);
			// Heading
			$wp_customize->add_setting(
				'set_page-about-heading', array(
					'type' => 'theme_mod',
					'default' => '',
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_page-about-heading', array(
					'label' => __('Page Heading Title:', 'siba-project' ),
					'description' => __( 'Default value: Page Title. (Go to page to see the changes)', 'siba-project' ),
					'section' => 'sec_page-about',
					'type' => 'text'
				)
			);

			// ---- Page Contact
			$wp_customize->add_section(
				'sec_page-contact', array(
					'title' => __('Page: Contact', 'siba-project' ),
					'description' => __('Settings of the Page Contact', 'siba-project' ),
					'panel'          => 'pages_panel',
				)
			);
			//Image Background
			$wp_customize->add_setting(
					'set_page-contact-imagebg',
					array(
							//Sanitize with custom function written on the end of the document.
							'sanitize_callback' => 'custom_sanitize_file'
					)
			);
			$wp_customize->add_control(
					new WP_Customize_Upload_Control(
							$wp_customize,
							'set_page-contact-imagebg',
							array(
									'label'      =>  __('Cover Image', 'siba-project' ),
									'description'=> __('Choose a cover image to this page. (Go to page to see the changes.)', 'siba-project'),
									'section'    => 'sec_page-contact',
									'width' => 1920,
									'height' => 650
							)
					)
			);
			// Heading
			$wp_customize->add_setting(
				'set_page-contact-heading', array(
					'type' => 'theme_mod',
					'default' => '',
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_page-contact-heading', array(
					'label' => __('Page Heading Title:', 'siba-project' ),
					'description' => __( 'Default value: Page Title. (Go to page to see the changes)', 'siba-project' ),
					'section' => 'sec_page-contact',
					'type' => 'text'
				)
			);

			// Title Info Panel
			$wp_customize->add_setting(
				'set_page-title_info_panel', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_page-title_info_panel' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_page-title_info_panel', array(
					'label' => __('Informations Panel Title', 'siba-project' ),
					'description' => '',
					'section' => 'sec_page-contact',
					'type' => 'text'
				)
			);
			// Form Title
			$wp_customize->add_setting(
				'set_page-title_form', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_page-title_form' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_page-title_form', array(
					'label' => __('Contact Form', 'siba-project' ),
					'description' => __('Form Title:', 'siba-project' ),
					'section' => 'sec_page-contact',
					'type' => 'text'
				)
			);
			// Form Description
			$wp_customize->add_setting(
				'set_page-description_form', array(
					'type' => 'theme_mod',
					'default' => customizer_get_theme_default( 'set_page-description_form' ),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_page-description_form', array(
					'label' => '',
					'description' => __('Form Description:', 'siba-project' ),
					'section' => 'sec_page-contact',
					'type' => 'text'
				)
			);
			// Form Description
			$wp_customize->add_setting(
				'set_page-contact_form_shortcode', array(
					'type' => 'theme_mod',
					'default' => '',
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control(
				'set_page-contact_form_shortcode', array(
					'label' => __('Contact 7 Form Shortcode:', 'siba-project' ),
					'description' => __('In the admin panel: "Contact" > "Contact Form" > "Shortcode"', 'siba-project' ),
					'section' => 'sec_page-contact',
					'type' => 'text'
				)
			);




			/**
		 * Add our Header & Navigation Panel
		 */
		 $wp_customize->add_panel( 'pages_panel',
		   array(
		      'title' => __( 'Website Pages' ),
		      'description' => esc_html__( 'Adjust your Header and Navigation sections.' ), // Include html tags such as

		      'priority' => 1000, // Not typically needed. Default is 160
		      'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
		      'theme_supports' => '', // Rarely needed
		      'active_callback' => '', // Rarely needed
		   )
		);

}
add_action( 'customize_register', 'sibaproject_customizer' );

//file input sanitization function
function custom_sanitize_checkbox( $input ) {
	return ( $input === true ) ? true : false;
}

function custom_sanitize_file( $file, $setting ) {
source: https://divpusher.com/blog/wordpress-customizer-sanitization-examples/#file
		//allowed file types
		$mimes = array(
				'jpg|jpeg|jpe' => 'image/jpeg',
				'gif'          => 'image/gif',
				'png'          => 'image/png'
		);

		//check file type from file name
		$file_ext = wp_check_filetype( $file, $mimes );

		//if file has a valid mime type return it, otherwise return default
		return ( $file_ext['ext'] ? $file : $setting->default );
}
