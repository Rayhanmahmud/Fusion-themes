<?php 


function feature_section(){


vc_map(array(

      'name' => __('Feature section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'feature_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'header_title',
            'type' => 'textfield',
            'heading'=> 'Header title',      
        ),
         array(

                'type' => 'param_group',
                'heading' => 'icon section group',
                'param_name' => 'left_sec_grp',
                'params' => array(
                       array(

                                'param_name' => 'left_title',
                                'type' => 'textfield',
                                'heading'=> 'Title',      
                            ),
                             array(

                                    'param_name' => 'left_description',
                                    'type' => 'textarea',
                                    'heading'=> 'Description',      
                                ),
                                   array(

                                    'param_name' => 'left_icon',
                                    'type' => 'iconpicker',
                                    'heading'=> 'Icon',      
                                ),

                )
                            ),
       
    
            array(

            'param_name' => 'feature_img',
            'type' => 'attach_image',
            'heading'=> 'image',      
        ),
         array(

                'type' => 'param_group',
                'heading' => 'icon section group',
                'param_name' => 'right_sec_grp',
                'params' => array(
                    array(

                                'param_name' => 'right_title',
                                'type' => 'textfield',
                                'heading'=> 'Title',      
                            ),
                             array(

                                    'param_name' => 'right_desc',
                                    'type' => 'textarea',
                                    'heading'=> 'Description',      
                                ),

                )
         )


         

      )

  ));



}
add_action("vc_before_init","feature_section");



function project_feature_section($attr){

 extract(
shortcode_atts(array(

 'left_sec_grp' => '',
 'right_sec_grp' => '',
 'header_title' => '',
 'left_title' => 'This is description',
 'left_description' => 'This is description',
 'left_icon' =>'',
 'feature_img' => '',
 'right_title' => '',
 'right_desc' => '',
 
 
),$attr)
);

ob_start();
?>


<section id="features" class="section-padding">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html($header_title);?></h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="content-left">

<?php 

 $sec_left_grp=vc_param_group_parse_atts($left_sec_grp);

 foreach($sec_left_grp as $sec_left_value){

?>


              <div class="box-item wow fadeInLeft" data-wow-delay="0.3s">
                <span class="icon">
                  <i class="lni-rocket"></i>
                </span>
             
                <div class="text">
                  <h4><?php echo esc_html($sec_left_value['left_title']);?></h4>
                  <p><?php echo esc_html($sec_left_value['left_description']);?></p>
                </div>
              </div>

 <?php } ?>
             


            </div>
          </div>



          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="show-box wow fadeInUp" data-wow-delay="0.3s">
                 <?php 
  $fec_image = wp_get_attachment_image_src($feature_img,'full');

  if($fec_image ){ ?>

   <img src="<?php echo esc_url($fec_image[0]);?>" alt="<?php echo esc_url($fec_image[0]);?>">

  <?php
  }
?>
    
              
            </div>
          </div>



          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="content-right">

<?php 

 $sec_right_grp=vc_param_group_parse_atts($right_sec_grp);

 foreach($sec_right_grp as $sec_right_value){

?>

              <div class="box-item wow fadeInRight" data-wow-delay="0.3s">
                <span class="icon">
                  <i class="lni-leaf"></i>
                </span>
                <div class="text">
                  <h4><?php echo esc_html($sec_right_value['right_title']);?></h4>
                  <p><?php echo esc_html($sec_right_value['right_desc']);?></p>
                </div>
              </div>

<?php } ?>
              


            </div>
          </div>
        </div>
      </div>
    </section>
	



<?php

return ob_get_clean();




}
add_shortcode("feature_section","project_feature_section");




















?>