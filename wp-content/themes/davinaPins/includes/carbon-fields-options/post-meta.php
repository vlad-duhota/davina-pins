<?php

if (!defined('ABSPATH')) {
   exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// =========== ABOUT PAGE ===========

Container::make('post meta', 'Front Page')
->show_on_template('front-page.php')
->add_tab( __('First block'), array(
   Field::make( 'text', 'hero_title_1', 'Title' ), 
   Field::make( 'image', 'hero_title_img', 'Img' ),
   Field::make( 'text', 'hero_title_2', 'Title Part 2' ),
   Field::make( 'text', 'hero_title_3', 'Title Part 3' ),
   Field::make( 'image', 'hero_title_img_2', 'Img 2' ),
   Field::make( 'text', 'hero_text', 'Text' ),
   Field::make( 'complex', 'hero_list', 'List' )
   ->add_fields( array(
      Field::make( 'text', 'hero_list_title', 'Item title'),
      Field::make( 'text', 'hero_list_text', 'Item text' ),
  ) ),
  Field::make( 'complex', 'hero_brands', 'Brands List' )
  ->add_fields( array(
     Field::make( 'text', 'hero_brands_url', 'Brand site link'),
     Field::make( 'image', 'hero_brands_image', 'Brand image' ),
 ) ),
) )
->add_tab( __('Why choose us'), array(
   Field::make( 'text', 'why_title', 'Title' ), 
   Field::make( 'complex', 'why_list', 'List' )
   ->add_fields( array(
      Field::make( 'image', 'why_list_icon', 'Item icon'),
      Field::make( 'text', 'why_list_title', 'Item title' ),
      Field::make( 'text', 'why_list_text', 'Item text' ),
  ) ),
) )
->add_tab( __('Our Products'), array(
   Field::make( 'text', 'products_title', 'Title' ), 
   Field::make( 'separator', 'products_sep', 'Col 1' ),
   Field::make( 'image', 'products_img_1', 'Col Image'),
   Field::make( 'text', 'products_img_text_1', 'Col Image Text'),
   Field::make( 'complex', 'products_list_1', 'Content List' )
   ->add_fields( array(
      Field::make( 'image', 'products_list_1_img', 'Item Image(optional)'),
      Field::make( 'text', 'products_list_1_title', 'Item title(optional)' ),
      Field::make( 'text', 'products_list_1_text', 'Item text(optional)' ),
  ) ),
  Field::make( 'separator', 'products_sep_2', 'Col 2' ),
  Field::make( 'image', 'products_img_2', 'Col Image'),
  Field::make( 'text', 'products_img_text_2', 'Col Image Text'),
  Field::make( 'complex', 'products_list_2', 'Content List' )
  ->add_fields( array(
     Field::make( 'image', 'products_list_2_img', 'Item Image(optional)'),
     Field::make( 'text', 'products_list_2_title', 'Item title(optional)' ),
     Field::make( 'text', 'products_list_2_text', 'Item text(optional)' ),
 ) ),
) )
->add_tab( __('Our Story'), array(
   Field::make( 'text', 'story_line', 'Orange Line text' ), 
   Field::make( 'text', 'story_title', 'Title' ), 
   Field::make( 'image', 'story_img', 'Image'),
   Field::make( 'rich_text', 'story_text', 'Text'),
) )
->add_tab( __('What customers say about us'), array(
   Field::make( 'text', 'what_title', 'Title' ), 
   Field::make( 'text', 'what_text', 'Text' ), 
   Field::make( 'complex', 'what_slider', 'Slider' )
   ->add_fields( array(
      Field::make( 'rich_text', 'what_slider_text', 'Slide Text'),
      Field::make( 'image', 'what_slider_img', 'Person photo'),
      Field::make( 'text', 'what_slider_name', 'Person name'),
      Field::make( 'text', 'what_slider_date', 'Review date'),
  ) ),
) )
->add_tab( __('Contact Form'), array(
   Field::make( 'text', 'form_title', 'Title' ), 
   Field::make( 'image', 'form_img', 'Image' ), 
   Field::make( 'rich_text', 'form_text', 'Text' ), 
   Field::make( 'separator', 'form_sep', 'Form selects setting' ),
   Field::make( 'complex', 'form_type', 'Product Type' )
   ->add_fields( array(
      Field::make( 'text', 'form_type_option', 'Option'),
  ) ),
  Field::make( 'complex', 'form_process', 'Production Process' )
  ->add_fields( array(
     Field::make( 'text', 'form_process_option', 'Option'),
   ) ),
   Field::make( 'complex', 'form_metal', 'Metal Finish' )
   ->add_fields( array(
      Field::make( 'text', 'form_metal_option', 'Option'),
   ) ),
   Field::make( 'complex', 'attachment', 'Attachment' )
   ->add_fields( array(
      Field::make( 'text', 'form_attachment_option', 'Option'),
   ) ),
) );