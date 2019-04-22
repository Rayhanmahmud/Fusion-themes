<?php 


function section_two(){


vc_map(array(

      'name' => __('Section two','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'section_two',
      'category' => 'project',
      'icon' => 'fas fa-angry',
      'params' => array(

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
            array(

            'param_name' => 'button_title',
            'type' => 'textfield',
            'heading'=> 'Button name',      
        ),

         

      )

  ));



}
add_action("vc_before_init","section_two");



function project_section_two($attr){

 extract(
shortcode_atts(array(

 'section_title' => '',
 'section_description' => '',
 'button_title' => '',

 
 
),$attr)
);

ob_start();
?>

<div class="wrapper style3">
				<section class="container">
					<header class="major">
						<h2><?php echo esc_html($section_title);?></h2>
					</header>
					<p><?php echo esc_html($section_description);?></p>
                    <br/>
					<a href="#" class="button alt"><?php echo esc_html($button_title);?></a>
				</section>
			</div>


			
						
                        


<?php

return ob_get_clean();




}
add_shortcode("section_two","project_section_two");




















?>