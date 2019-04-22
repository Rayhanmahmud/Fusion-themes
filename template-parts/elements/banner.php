<?php 


function banner_section(){


vc_map(array(

      'name' => __('Banner section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'banner_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'banner_title',
            'type' => 'textfield',
            'heading'=> 'Title one',      
        ),
         array(

            'param_name' => 'banner_title_two',
            'type' => 'textfield',
            'heading'=> 'Title two',      
        ),

         array(

            'param_name' => 'banner_description',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),
           array(

            'param_name' => 'down_title',
            'type' => 'textfield',
            'heading'=> 'Download Title',      
        ),
         array(

            'param_name' => 'button_title',
            'type' => 'textfield',
            'heading'=> 'Button Title',      
        ),
            array(

            'param_name' => 'banner_img',
            'type' => 'attach_image',
            'heading'=> 'image',      
        ),

         

      )

  ));



}
add_action("vc_before_init","banner_section");



function project_banner_section($attr){

 extract(
shortcode_atts(array(

 'banner_title' => 'This is title',
 'banner_title_two' => 'This is title',
 'banner_description' => 'This is description',
 'down_title' => 'This is description',
 'button_title' => 'This is description',
 'banner_img' => '',
 
 
),$attr)
);

ob_start();
?>

<div id="hero-area" class="hero-area-bg">
        <div class="container">      
          <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
              <div class="contents">
                <h2 class="head-title"><?php echo esc_html($banner_title);?><br><?php echo esc_html($banner_title_two);?></h2>
                <p><?php echo esc_html($banner_description);?></p>
                <div class="header-button">
                  <a href="#" class="btn btn-common"><?php echo esc_html($down_title);?></i></a>
                  <a href="#" class="btn btn-border video-popup"><?php echo esc_html($button_title);?></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
              <div class="intro-img">
                   <?php 
  $fec_image = wp_get_attachment_image_src($banner_img,'full');

  if($fec_image ){ ?>

     <img class="img-fluid" src="<?php echo esc_url($fec_image[0]);?>" alt="<?php echo esc_url($fec_image[0]);?>">

  <?php
  }
?>
   
          
              </div>            
            </div>
          </div> 
        </div> 
      </div>

	



<?php

return ob_get_clean();




}
add_shortcode("banner_section","project_banner_section");




















?>