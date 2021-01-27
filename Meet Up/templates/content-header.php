<?php 

/*Template Name: Header or Slider*/ 
?>

<?php 
    function get_slider(){
       ob_start();
       ?>
     <body id="page-top" data-spy="scroll" data-target=".side-menu"> 
<div class="container-fluid">
        <!-- Start: Header -->
        <div class="row hero-header" id="home">
          <div class="col-md-7">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo">
            <h1>Attend the most awaited WordPress Conference of 2021</h1>
            <h3>to start you up with your business!</h3>
            <h4>20<sup>th</sup> to 22<sup>nd</sup>  July, 2021</h4>
            <a href="#" class="btn btn-lg btn-red">Buy Tickets Now <span class="ti-arrow-right"></span></a>

          </div>
          <div class="col-md-5 hidden-xs">
            <img src="<?php echo get_template_directory_uri(); ?>/img/rocket.png" class="rocket animated bounce">
          </div>
        </div>
        <!-- End: Header -->
      </div>
       <nav class="side-menu">
    <ul>
      <li class="hidden active">
        <a class="page-scroll" href="#page-top"></a>
      </li>
      <li>
        <a href="#home" class="page-scroll">
          <span class="menu-title">Home</span>
          <span class="dot"></span>
        </a>
      </li>
      <li>
        <a href="#speakers" class="page-scroll">
          <span class="menu-title">Speakers</span>
          <span class="dot"></span>
        </a>
      </li>
      <li>
        <a href="#tickets" class="page-scroll">
          <span class="menu-title">Buy Tickets</span>
          <span class="dot"></span>
        </a>
      </li>
      <li>
        <a href="#schedule" class="page-scroll">
          <span class="menu-title">Schedule</span>
          <span class="dot"></span>
        </a>
      </li>
    </ul>
  </nav>  
  <?php return ob_get_clean(); }
  add_shortcode('slider','get_slider');
 ?>



