<?php 


function section_team(){


vc_map(array(

      'name' => __('Section team','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'section_team',
      'category' => 'project',
      'icon' => 'fa fa-bank',
      'params' => array(

        array(

            'param_name' => 'header_title',
            'type' => 'textfield',
            'heading'=> 'Header Title',      
        ),
        

         array(

            'param_name' => 'header_description',
            'type' => 'textarea',
            'heading'=> 'Header Description',
            
        ),
        array(

                'type' => 'param_group',
                'heading' => 'icon section group',
                'param_name' => 'sec_image_grp',
                'params' => array(
                             
                                  array(

                                    'param_name' => 'image',
                                    'type' => 'attach_image',
                                    'heading'=> 'image',      
                                ),
                                  array(

                                        'param_name' => 'sec_title',
                                        'type' => 'textfield',
                                        'heading'=> 'Title',      
                                    ),
                                    

                                    array(

                                        'param_name' => 'sec_description',
                                        'type' => 'textarea',
                                        'heading'=> 'Description',
                                        
                                    ),
                                    
                      )
         
         

      )
      )

  ));



}
add_action("vc_before_init","section_team");



function project_section_team($attr){

 extract(
shortcode_atts(array(
  
  'sec_image_grp' => '',
 'header_title' => '',
 'header_description' => '',
 'image' => '',
 'sec_title' => '',
 'sec_description' => '',
 

 
 
),$attr)
);

ob_start();
?>


<div class="wrapper style5">
				<section id="team" class="container">
					<header class="major">
						<h2><?php echo esc_html($header_title);?></h2>
						<span class="byline"><?php echo esc_html($header_description);?></span>
					</header>
					<div class="row">
<?php 

 $sec_img_key=vc_param_group_parse_atts($sec_image_grp);

 foreach($sec_img_key as $sec_img_value){

?>

						<div class="3u">
                           <?php 
  $fec_image = wp_get_attachment_image_src($sec_img_value['image'],'full');

  if($fec_image ){ ?>

   <a href="#" class="image"><img src="<?php echo esc_url($fec_image[0]);?>" alt="<?php echo esc_url($fec_image[0]);?>"></a>

  <?php
  }
?>
    
							
							<h3><?php echo esc_html($sec_img_value['sec_title']);?></h3>
                            <br/>
							<p><?php echo esc_html($sec_img_value['sec_description']);?></p>
						</div>


			 <?php } ?>			


					</div>
				</section>
			</div>

                      


<?php

return ob_get_clean();




}
add_shortcode("section_team","project_section_team");




















?>