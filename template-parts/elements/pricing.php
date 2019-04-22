


<?php 


function section_pricings(){


vc_map(array(

      'name' => __('Pricing','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'section_pricing',
      'category' => 'project',
      'icon' => 'fas fa-angry',
      'params' => array(

        array(

            'param_name' => 'title_one',
            'type' => 'textfield',
            'heading'=> 'Pricing',      
        ),
        array(

            'param_name' => 'title_two',
            'type' => 'textfield',
            'heading'=> '$10',      
        ),
        array(

            'param_name' => 'title_three',
            'type' => 'textfield',
            'heading'=> '/mo',      
        ),
        array(

            'param_name' => 'title_four',
            'type' => 'textfield',
            'heading'=> 'PRO',      
        ),
        array(

            'param_name' => 'title_five',
            'type' => 'textfield',
            'heading'=> '1 user',      
        ),
        array(

            'param_name' => 'title_six',
            'type' => 'textfield',
            'heading'=> '10 GB storage',      
        ),
        array(

            'param_name' => 'title_seven',
            'type' => 'textfield',
            'heading'=> 'Email support',      
        ),
        array(

            'param_name' => 'title_nine',
            'type' => 'textfield',
            'heading'=> 'Lifetime updates',      
        ),
        array(

            'param_name' => 'title_ten',
            'type' => 'textfield',
            'heading'=> 'BUY NOW',      
        ),
        array(

            'param_name' => 'title_eleven',
            'type' => 'textfield',
            'heading'=> '$35',      
        ),
        array(

            'param_name' => 'title_twe',
            'type' => 'textfield',
            'heading'=> ' /mo',      
        ),
        array(

            'param_name' => 'title_thir',
            'type' => 'textfield',
            'heading'=> 'PLUS',      
        ),
        array(

            'param_name' => 'title_fourteen',
            'type' => 'textfield',
            'heading'=> '10 user',      
        ),
        array(

            'param_name' => 'title_fifteen',
            'type' => 'textfield',
            'heading'=> '30 GB storage',      
        ),
        array(

            'param_name' => 'title_sixteen',
            'type' => 'textfield',
            'heading'=> 'Priority email support',      
        ),
        array(

            'param_name' => 'title_seventeen',
            'type' => 'textfield',
            'heading'=> 'Lifetime updates',      
        ),
        array(

            'param_name' => 'title_eightteen',
            'type' => 'textfield',
            'heading'=> 'BUY NOW',      
        ),
        array(

            'param_name' => 'title_nineteen',
            'type' => 'textfield',
            'heading'=> '$150',      
        ),
        array(

            'param_name' => 'title_twen',
            'type' => 'textfield',
            'heading'=> '/mo',      
        ),
        array(

            'param_name' => 'title_tone',
            'type' => 'textfield',
            'heading'=> 'PREMIUM',      
        ),
        array(

            'param_name' => 'title_ttwo',
            'type' => 'textfield',
            'heading'=> 'Unlimited users',      
        ),
        array(

            'param_name' => 'title_tthree',
            'type' => 'textfield',
            'heading'=> 'Unlimited storage',      
        ),
        array(

            'param_name' => 'title_tfour',
            'type' => 'textfield',
            'heading'=> '24/7 support',      
        ),
        array(

            'param_name' => 'title_tfive',
            'type' => 'textfield',
            'heading'=> 'Lifetime updates',      
        ),
        array(

            'param_name' => 'title_tsix',
            'type' => 'textfield',
            'heading'=> 'BUY NOW',      
        ),
        

         

         

      )

  ));



}
add_action("vc_before_init","section_pricings");



function project_section_pricing($attr){

 extract(
shortcode_atts(array(

 'title_one' => '',
 'title_two' => '',
 'title_three' => '',
 'title_four' => '',
 'title_five' => '',
 'title_six' => '',
 'title_seven' => '',
 'title_nine' => '',
 'title_ten' => '',
 'title_eleven' => '',
 'title_twe' => '',
 'title_thir' => '',
 'title_fourteen' => '',
 'title_fifteen' => '',
 'title_sixteen' => '',
 'title_seventeen' => '',
 'title_eightteen' => '',
 'title_nineteen' => '',
 'title_twen' => '',
 'title_tone' => '',
 'title_ttwo' => '',
 'title_tthree' => '',
 'title_tfour' => '',
 'title_tfive' => '',
 'title_tsix' => '',

 
 
),$attr)
);

ob_start();
?>

<section id="pricing" class="section-padding">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html($title_one);?></h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="table wow fadeInLeft" data-wow-delay="1.2s">
              <div class="icon-box">
                <i class="lni-package"></i>
              </div>
              <div class="pricing-header">
                <p class="price-value"><?php echo esc_html($title_two);?><span> <?php echo esc_html($title_three);?></span></p>
              </div>
              <div class="title">
                <h3><?php echo esc_html($title_four);?></h3>
              </div>
              <ul class="description">
                <li><?php echo esc_html($title_five);?></li>
                <li><?php echo esc_html($title_six);?></li>
                <li><?php echo esc_html($title_seven);?></li>
                <li><?php echo esc_html($title_nine);?></li>
              </ul>
              <button class="btn btn-common"><?php echo esc_html($title_ten);?></button>
            </div> 
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 active">
            <div class="table wow fadeInUp" id="active-tb" data-wow-delay="1.2s">
              <div class="icon-box">
                <i class="lni-drop"></i>
              </div>
              <div class="pricing-header">
                <p class="price-value"><?php echo esc_html($title_eleven);?><span> <?php echo esc_html($title_twe);?></span></p>
              </div>
              <div class="title">
                <h3><?php echo esc_html($title_thir);?></h3>
              </div>
              <ul class="description">
                <li><?php echo esc_html($title_fourteen);?></li>
                <li><?php echo esc_html($title_fifteen);?></li>
                <li><?php echo esc_html($title_sixteen);?></li>
                <li><?php echo esc_html($title_seventeen);?></li>
              </ul>
              <button class="btn btn-common"><?php echo esc_html($title_eightteen);?></button>
           </div> 
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="table wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon-box">
                <i class="lni-star"></i>
              </div>
              <div class="pricing-header">
                <p class="price-value"><?php echo esc_html($title_nineteen);?><span> <?php echo esc_html($title_twen);?></span></p>
              </div>
              <div class="title">
                <h3><?php echo esc_html($title_tone);?></h3>
              </div>
              <ul class="description">
                <li><?php echo esc_html($title_ttwo);?></li>
                <li><?php echo esc_html($title_tthree);?></li>
                <li><?php echo esc_html($title_tfour);?></li>
                <li><?php echo esc_html($title_tfive);?></li>
              </ul>
              <button class="btn btn-common"><?php echo esc_html($title_tsix);?></button>
            </div> 
          </div>
        </div>
      </div>
    </section>

			
						
                        


<?php

return ob_get_clean();




}
add_shortcode("section_pricing","project_section_pricing");




















?>