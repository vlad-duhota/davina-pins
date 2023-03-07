<?php
if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Theme options')
->add_tab( __('Global Settings'), array(
    Field::make( 'separator', 'crb_separator', 'Header'  ),
    Field::make( 'image', 'logo', 'logo' ),
    Field::make( 'separator', 'crb_separator_2', 'Footer'  ),
    Field::make( 'text', 'footer_text', 'Footer Text' ),
    Field::make( 'text', 'footer_mail', 'Footer Email' ),
    Field::make( 'text', 'footer_tel', 'Footer tel' ),
    Field::make( 'complex', 'footer_socials', 'Socials' )
    ->add_fields( array(
       Field::make( 'text', 'footer_socials_name', 'Social name'),
       Field::make( 'text', 'footer_socials_link', 'Social link'),
     ) ),
) );




