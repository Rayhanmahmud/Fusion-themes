<?php 


function team_section(){


vc_map(array(

      'name' => __('Team section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'team_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'header_title',
            'type' => 'textfield',
            'heading'=> 'Title one',      
        ),
        array(

                'type' => 'param_group',
                'heading' => 'image section group',
                'param_name' => 'sec_img_grp',
                'params' => array(
                    array(

                            'param_name' => 'image_one',
                            'type' => 'attach_image',
                            'heading' => 'image',
                            
                        ),
                        array(

                                'param_name' => 'title_name',
                                'type' => 'textfield',
                                'heading'=> 'Name',      
                            ),
                            array(

                                'param_name' => 'image_title',
                                'type' => 'textfield',
                                'heading'=> 'Title',      
                            ),
                            
                            array(

                                'param_name' => 'image_description',
                                'type' => 'textarea',
                                'heading'=> 'Description',
                                
                            ),

                )
        )
         
  

      )

  ));



}
add_action("vc_before_init","team_section");



function project_team_section($attr){

 extract(
shortcode_atts(array(

 'sec_img_grp' => '',
 'header_title' => '',
 'image_one' => '',
 'title_name' => '',
 'image_title' => '',
 'image_description' => '',
 
 
),$attr)
);

ob_start();
?>



<section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html($header_title);?></h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
       
<?php 

 $sec_team_key=vc_param_group_parse_atts($sec_img_grp);

 foreach($sec_team_key as $sec_team_value){

?>
   <div class="col-lg-6 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                   <?php 
  $fec_image = wp_get_attachment_image_src($sec_team_value['image_one'],'full');

  if($fec_image ){ ?>

    <img class="img-fluid" src="<?php echo esc_url($fec_image[0]);?>" alt="<?php echo esc_url($fec_image[0]);?>">

  <?php
  }
?>
               
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#"><?php echo esc_html($sec_team_value['title_name']);?></a></h3>
                  <p><?php echo esc_html($sec_team_value['image_title']);?></p>
                </div>
                <p><?php echo esc_html($sec_team_value['image_description']);?></p>
                <ul class="social-icons">
                  <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- Team Item Ends -->
                  </div>
<?php } ?>
    



          


        </div>
      </div>
    </section>

	



<?php

return ob_get_clean();




}
add_shortcode("team_section","project_team_section");




















?>