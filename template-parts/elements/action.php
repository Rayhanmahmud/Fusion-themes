<?php 


function section_action(){


vc_map(array(

      'name' => __('Action','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'section_action',
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

            'param_name' => 'button-url',
            'type' => 'vc_link',
            'heading'=> 'Button name',      
        ),
        array(

            'param_name' => 'button_title',
            'type' => 'textfield',
            'heading'=> 'Button name',      
        ),
    


         

      )

  ));



}
add_action("vc_before_init","section_action");



function project_section_action($attr){

 extract(
shortcode_atts(array(

 'section_title' => '',
 'section_description' => '',
 'button-url' => '',
 'button_title' => '',


 
 
),$attr)
);

ob_start();
?>
<?php

	// Prepare the URL options for the view
	$url_options_string = $attr['button-url'];
	$url_options_array = explode( '|', $url_options_string );
	$url_options = array();
	foreach ( $url_options_array as $entry ) {
		$temp_array = explode( ':', $entry );
		$url_options[ $temp_array[0] ] = urldecode_deep( $temp_array[1] );
	}

?>


 <section id="cta" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">           
            <div class="cta-text">
              <h4><?php echo esc_html($section_title);?></h4>
              <p><?php echo esc_html($section_description);?> </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 text-right wow fadeInRight" data-wow-delay="0.3s">
            </br><a href="<?php echo $url = $url_options['url'];?>" class="btn btn-common"><?php echo esc_html($button_title);?></a>
          </div>
        </div>
      </div>
    </section>


   
			
						
                        


<?php

return ob_get_clean();




}
add_shortcode("section_action","project_section_action");




















?>