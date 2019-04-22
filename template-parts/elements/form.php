<?php


function section_shortcode(){


vc_map(array(

      'name' => __('contact','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'section_sortcode',
      'category' => 'project',
      'icon' => 'fas fa-angry',
      'params' => array(
          array(

            'param_name' => 'content',
            'type' => 'textarea',
            'heading'=> 'Contact form 7',      
        ),
      )
)
);
}
add_action("vc_before_init","section_shortcode");

function project_section_sort($attr,$content=null){

 extract(
shortcode_atts(array(


 
 
),$attr)
);

ob_start();
?>

 
 
 <section id="contact" class="section-padding bg-gray">    
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Countact Us</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.3s">   
          <div class="col-lg-7 col-md-12 col-sm-12">
        
         
                 
             <?php 
             
             
             include_once( ABSPATH . 'wp-admin/includes/plugin.php');

     
             if(is_plugin_active('contact-form-7/wp-contact-form-7.php')){
                  echo do_shortcode($content);

             }
             
             
             
             ?>

                      

          </div>
        
         <div class="map">
              <object style="border:0; height: 280px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34015.943594576835!2d-106.43242624069771!3d31.677719472407432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d90e99d597b%3A0x6cd3eb9a9fcd23f1!2sCourtyard+by+Marriott+Ciudad+Juarez!5e0!3m2!1sen!2sbd!4v1533791187584"></object>
            </div>
      
           </div>
               </div>
 </section>   
<?php

return ob_get_clean();




}
add_shortcode("section_sortcode","project_section_sort");