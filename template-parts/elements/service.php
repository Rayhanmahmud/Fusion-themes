


<?php 


function section_service(){


vc_map(array(

      'name' => __('Service','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'section_service',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'header_title',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
         array(

                'type' => 'param_group',
                'heading' => 'icon section group',
                'param_name' => 'sec_icon_grp',
                'params' => array(
                       array(

                                'param_name' => 'section_icon',
                                'type' => 'iconpicker',
                                'heading'=> 'Title',            
                       ),
                           array(

                                'param_name' => 'section_title',
                                'type' => 'textfield',
                                'heading'=> 'Title',            
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
add_action("vc_before_init","section_service");



function project_section_service($attr){

 extract(
shortcode_atts(array(

 'sec_icon_grp' => '',
 'header_title' => '',
 'section_icon' => '',
 'section_title' => '',
 'section_description' => '',
 
 
),$attr)
);

ob_start();
?>


<section id="services" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html($header_title);?></h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">

<?php 

 $sec_icon_key=vc_param_group_parse_atts($sec_icon_grp);

 foreach($sec_icon_key as $sec_icon_value){

?>

          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lni-layers"></i>
              </div>
              <div class="services-content">
                <h3><a href="#"><?php echo esc_html($sec_icon_value['section_title']);?></a></h3>
                <p><?php echo esc_html($sec_icon_value['section_description']);?></p>
              </div>
            </div>
          </div>

          <?php } ?>
         
        </div>
      </div>
    </section>


<div class="about-area section-padding bg-gray">
      <div class="container">
        <div class="row">
             <?php 
            
             $args=array(
                  'post_type' => 'popular'
              );
              $sliders=new WP_Query($args);

              while($sliders->have_posts()):$sliders->the_post()
            
            ?>
          <div class="col-lg-6 col-md-12 col-xs-12 info">
            <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
              <div>
                <div class="site-heading">
           
                  <p class="mb-3">Manage Statistics</p>
                  <h2 class="section-title"><?php the_title();?></h2>
                </div>
                <div class="content">
                  <p>
                    <?php the_content();?> 
                  </p>
                  <a href="<?php the_permalink();?>" class="btn btn-common mt-3">Read More</a>
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
            <?php the_post_thumbnail('large');?>
          </div>
            <?php endwhile; ?>
        </div>
      </div>
    </div>			
						
                        


<?php

return ob_get_clean();




}
add_shortcode("section_service","project_section_service");




















?>