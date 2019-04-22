

<?php 


function section_testimonial(){


vc_map(array(

      'name' => __('Testimonial','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'section_testi',
      'category' => 'project',
      'icon' => 'fas fa-angry',
      'params' => array(
           array(

                'type' => 'param_group',
                'heading' => 'testi section group',
                'param_name' => 'sec_testi_grp',
                'params' => array(
                    array(

                                'param_name' => 'feature_image',
                                'type' => 'attach_image',
                                'heading' => 'image',
                                
                            ),
                            array(

                            'param_name' => 'section_title_one',
                            'type' => 'textfield',
                            'heading'=> 'Name',      
                        ),
                        array(

                            'param_name' => 'section_title_two',
                            'type' => 'textfield',
                            'heading'=> 'Designation',      
                        ),
                        array(

                            'param_name' => 'section_description',
                            'type' => 'textarea',
                            'heading'=> 'Description',
                            
                        ),

                )
           )

        
      )

  ));



}
add_action("vc_before_init","section_testimonial");



function project_section_testimonial($attr){

 extract(
shortcode_atts(array(

 'sec_testi_grp' => '',
 'feature_image' => '',
 'section_title_one' => '',
 'section_title_two' => '',
 'section_description' => '',

 
 
),$attr)
);

ob_start();
?>

 <section id="testimonial" class="testimonial section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">


<?php 

 $sec_testi_key=vc_param_group_parse_atts($sec_testi_grp);

 foreach($sec_testi_key as $sec_testi_value){

?>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                      <?php 
  $fec_image = wp_get_attachment_image_src($sec_testi_value['feature_image'],'full');

  if($fec_image ){ ?>

     <img src="<?php echo esc_url($fec_image[0]);?>" alt="<?php echo esc_url($fec_image[0]);?>">

  <?php
  }
?>
                  
                  </div>
                  <div class="info">
                    <h2><a href="#"><?php echo esc_html($sec_testi_value['section_title_one']);?></a></h2>
                    <h3><a href="#"><?php echo esc_html($sec_testi_value['section_title_two']);?></a></h3>
                  </div>
                  <div class="content">
                    <p class="description"><?php echo esc_html($sec_testi_value['section_description']);?></p>
                    <div class="star-icon mt-3">
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-half"></i></span>
                    </div>
                  </div>
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
add_shortcode("section_testi","project_section_testimonial");




















?>