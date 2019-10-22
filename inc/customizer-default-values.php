<?php
function customizer_get_theme_default( $setting ) {

    $lorem_ipsum_text = 'Quisque rutrum. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.';

    $defaults = array(
      // Section Info
      'set_info-address'=> __('1st Harpst St., Arcata, USA', 'siba-project' ),
      'set_info-email'=>  __('email@mydomain.com', 'siba-project' ),
      'set_info-phone'=> __('(99) 99999-9999', 'siba-project' ),
      'set_info-whatsapp'=> __('+1 (99) 99999-9999', 'siba-project' ),
      'set_info-twitterlink'=> 'http://www.twitter.com',
      'set_info-facebooklink'=> 'http://www.facebook.com',
      'set_info-instagramlink'=> 'http://www.instagram.com',
      'set_info-pinterestlink'=> 'http://www.pinterest.com',
      'set_info-linkedinlink'=> 'http://www.linkedin.com',
      'set_info-youtubelink'=> 'http://www.youtube.com',

      // Section Slider
      'set_slider-text1'=> __('Clean. Simple. Sincere', 'siba-project' ),
      'set_slider-link1'=> '',
      'set_slider-text2'=> '',
      'set_slider-link2'=> '',
      'set_slider-text3'=> '',
      'set_slider-link3'=> '',
      'set_slider-text4'=> '',
      'set_slider-link4'=> '',
      'set_slider-text5'=> '',
      'set_slider-link5'=> '',

      // Section Welcome
      'set_welcome-heading'=> __('Welcome', 'siba-project' ),
      'set_welcome-title'=> __('About Us', 'siba-project' ),
      'set_welcome-paragraph'=> __('Type an introduction about your business (between 20-30 words) in here', 'siba-project' ),
      'set_welcome-buttontext'=> __('Read More', 'siba-project' ),
      'set_welcome-buttonlink'=> get_site_url() . "/#",
      'set_welcome-videolink'=> 'https://www.youtube.com/watch?v=Vear0bWXcOQ',

      // Section Counter
      'set_counter-number1'=> '1000',
      'set_counter-text1'=> __('Students', 'siba-project' ),
      'set_counter-icon1'=> 'icon-users2',
      'set_counter-afternumber1'=> '',
      'set_counter-number2'=> '1000',
      'set_counter-text2'=> __('Teachers', 'siba-project' ),
      'set_counter-icon2'=> 'icon-users2',
      'set_counter-afternumber2'=> '',
      'set_counter-number3'=> '100',
      'set_counter-text3'=> __('Health', 'siba-project' ),
      'set_counter-icon3'=> 'icon-heart3',
      'set_counter-afternumber3'=> '%',
      'set_counter-number4'=> '100',
      'set_counter-text4'=> __('Happy', 'siba-project' ),
      'set_counter-icon4'=> 'icon-happy',
      'set_counter-afternumber4'=> '%',

      // Section Blog
      'set_blog-heading'=> __('Highlights', 'siba-project' ),
      'set_blog-tabtitle1'=> __('Featured News', 'siba-project' ),
      'set_blog-buttontext1'=> __('See All', 'siba-project' ),
      'set_blog-buttonlink1'=> get_site_url() . "/#",
      'set_blog-checkbox_showtab2'=> false,
      'set_blog-tabtitle2'=> __('Upcoming Events', 'siba-project' ),
      'set_blog-buttontext2'=> __('See All', 'siba-project' ),
      'set_blog-buttonlink2'=> get_site_url() . "/#",

      // Section Classes
      'set_classes-title'=> __('Our Classes', 'siba-project' ),
      'set_classes-text'=> __('(Optional text)', 'siba-project' ),
      'set_classes-buttontext'=> __('More Details', 'siba-project' ),

      // Section Team
      'set_team-title' => __('Our Team', 'siba-project' ),
      'set_team-text' => __('(Optional text)', 'siba-project' ),
      'set_team-checkbox_showbutton'=> true,
      'set_team-buttontext'=> __('See All Team', 'siba-project' ),
      'set_team-buttonlink'=> get_site_url() . "/#",

      // Section Testimonials
      'set_testimonials-title'=> __('Testimonials', 'siba-project' ),
      'set_testimonials-text' => __('(Optional text)', 'siba-project' ),

      // Section Extras
      'set_extra-title'=> __('Why to Study here?', 'siba-project' ),
      'set_extra-text'=> __('(Optional text)', 'siba-project' ),
      'set_extra-title1'=> __('Inspiring Title', 'siba-project' ),
      'set_extra-text1'=> $lorem_ipsum_text,
      'set_extra-icon1'=> 'icon-checkmark',
      'set_extra-title2'=> __('Inspiring Title', 'siba-project' ),
      'set_extra-text2'=> $lorem_ipsum_text,
      'set_extra-icon2'=> 'icon-checkmark',
      'set_extra-title3'=> __('Inspiring Title', 'siba-project' ),
      'set_extra-text3'=> $lorem_ipsum_text,
      'set_extra-icon3'=> 'icon-checkmark',
      'set_extra-title4'=> __('Inspiring Title', 'siba-project' ),
      'set_extra-text4'=> $lorem_ipsum_text,
      'set_extra-icon4'=> 'icon-checkmark',
      'set_extra-title5'=> __('Inspiring Title', 'siba-project' ),
      'set_extra-text5'=> $lorem_ipsum_text,
      'set_extra-icon5'=> 'icon-checkmark',
      'set_extra-title6'=> __('Inspiring Title', 'siba-project' ),
      'set_extra-text6'=> $lorem_ipsum_text,
      'set_extra-icon6'=> 'icon-checkmark',

      // Section Map
      'set_map-checkbox_showmap'=> false,
      'set_map-apikey'=> '',
      'set_map-title'=> __('Our Location', 'siba-project' ),
      'set_map-text'=> __('(Optional text)', 'siba-project' ),

      // Section Banner
      'set_banner-text'=> __('Get in Touch!', 'siba-project' ),
      'set_banner-buttontext'=> __('Subscribe Now', 'siba-project' ),
      'set_banner-buttonlink'=> get_site_url() . "/#",

      // Section Page Contact
      'set_page-title_info_panel'=> __('Business Name', 'siba-project' ),
      'set_page-title_form'=> __('Send Us a Message', 'siba-project' ),
      'set_page-description_form'=> __( 'Contact us via form below:', 'siba-project' ),

    );

    if (array_key_exists($setting, $defaults)) {
        return $defaults[$setting];
    }else{
      return '';
    }

}
