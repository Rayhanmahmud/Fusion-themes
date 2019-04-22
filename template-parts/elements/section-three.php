<?php 


function section_three(){


vc_map(array(

      'name' => __('Section three','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'section_three',
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
                'param_name' => 'sec_icon_grp',
                'params' => array(
                             
                                  array(

                                    'param_name' => 'icon',
                                    'type' => 'iconpicker',
                                    'heading'=> 'Icons',      
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
                                    array(

                                    'param_name' => 'icon_one',
                                    'type' => 'iconpicker',
                                    'heading'=> 'Icons',      
                                ),
                                  array(

                                        'param_name' => 'sec_title_one',
                                        'type' => 'textfield',
                                        'heading'=> 'Title',      
                                    ),
                                    

                                    array(

                                        'param_name' => 'sec_description_one',
                                        'type' => 'textarea',
                                        'heading'=> 'Description',
                                        
                                    ),
                                    array(

                                    'param_name' => 'icon_two',
                                    'type' => 'iconpicker',
                                    'heading'=> 'Icons',      
                                ),
                                  array(

                                        'param_name' => 'sec_title_two',
                                        'type' => 'textfield',
                                        'heading'=> 'Title',      
                                    ),
                                    

                                    array(

                                        'param_name' => 'sec_description_two',
                                        'type' => 'textarea',
                                        'heading'=> 'Description',
                                        
                                    ),
                      )
         
         

      )
      )

  ));



}
add_action("vc_before_init","section_three");



function project_section_three($attr){

 extract(
shortcode_atts(array(
  
  'sec_icon_grp' => '',
 'header_title' => '',
 'header_description' => '',
 'icon' => '',
 'sec_title' => '',
 'sec_description' => '',
 'icon_one' => '',
 'sec_title_one' => '',
 'sec_description_one' => '',
 'icon_two' => '',
 'sec_title_two' => '',
 'sec_description_two' => '',

 
 
),$attr)
);

ob_start();
?>

<div class="wrapper style4">
				<section class="container">
					<header class="major">
						<h2><?php echo esc_html($header_title);?></h2>
						<span class="byline"><?php echo esc_html($header_description);?></span>
					</header>
					<div class="row flush">

<?php 

 $sec_icon_key=vc_param_group_parse_atts($sec_icon_grp);

 foreach($sec_icon_key as $sec_icon_value){

?>
						<div class="4u">
							<ul class="special-icons">
								<li>
									<span class="<?php echo esc_attr($sec_icon_value['icon']);?>"></span>
									<h3><?php echo esc_html($sec_icon_value['sec_title']);?></h3>
									<p><?php echo esc_html($sec_icon_value['sec_description']);?></p>
								</li>
                                    <br/>
                                	<li>
									<span class="<?php echo esc_attr($sec_icon_value['icon_one']);?>"></span>
									<h3><?php echo esc_html($sec_icon_value['sec_title_one']);?></h3>
									<p><?php echo esc_html($sec_icon_value['sec_description_one']);?></p>
								</li>
                                  <br/>
                                	<li>
									<span class="<?php echo esc_attr($sec_icon_value['icon_two']);?>"></span>
									<h3><?php echo esc_html($sec_icon_value['sec_title_two']);?></h3>
									<p><?php echo esc_html($sec_icon_value['sec_description_two']);?></p>
								</li>
								   <br/>
							</ul>

						</div>
                     

 <?php } ?>


					</div>
				</section>
			</div>
			
						
                        


<?php

return ob_get_clean();




}
add_shortcode("section_three","project_section_three");




















?>