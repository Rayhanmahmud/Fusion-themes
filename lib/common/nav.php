 <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                 
        <?php
            wp_nav_menu(array(
              'theme_location' => 'Primary',
              'menu_class'=> 'navbar-nav mr-auto w-100 justify-content-end clearfix',
              'container'=> 'ul',
              ''
            ));

  ?>

 </ul>
             </div>
        </div>
      </nav>
      <!-- Navbar End -->
      