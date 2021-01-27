<?php 

/*Template Name: Schedule*/ 

?>
<?php 
    function get_schedule(){
       ob_start();
       ?>
<!-- Start: Schedule -->
      <div class="container">
        <div class="row me-row schedule" id="schedule">
          <h2 class="row-title content-ct">Event Schedule</h2>
          <div class="col-md-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#day-1" aria-controls="home" role="tab" data-toggle="tab">Day 01 <small class="hidden-xs">(20<sup>th</sup>, October)</small></a></li>
              <li role="presentation"><a href="#day-2" aria-controls="profile" role="tab" data-toggle="tab">Day 02 <small class="hidden-xs">(21<sup>st</sup>, October)</small></a></li>
              <li role="presentation"><a href="#day-3" aria-controls="messages" role="tab" data-toggle="tab">Day 03 <small class="hidden-xs">(22<sup>nd</sup>, October)</small></a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="day-1">
                <div class="row">
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/speaker-1.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">10am to 10:30am</h4>
                        <h5>THE DESIGNER’S GUIDE TO BEING ESSENTIAL</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/speaker-2.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">10:45am to 11:30am</h4>
                        <h5>MODULAR DESIGN AT WORK</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/speaker-3.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">12:00pm to 01:30pm</h4>
                        <h5>AN INTRODUCTION TO TOUCH AND POINTER EVENTS</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/speaker-4.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">02:00pm to 03.30pm</h4>
                        <h5>WEB FONTS PERFORMANCE</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="day-2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/speaker-4.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">10am to 10:30am</h4>
                        <h5>MAKING DOG FOOD PART OF A BALANCED DIET</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/speaker-3.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">10:45am to 11:30am</h4>
                        <h5>HANDS-ON WEB AUDIO</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/speaker-2.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">12:00pm to 01:30pm</h4>
                        <h5>CONVERSION RATE OPTIMIZATION TECHNIQUES IN ECOMMERCE</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/speaker-1.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">02:00pm to 03.30pm</h4>
                        <h5>PAPER PROTOTYPING APPLICATIONS</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="day-3">
                <div class="row">
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/speaker-6.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">10am to 10:30am</h4>
                        <h5>THE DESIGNER’S GUIDE TO BEING ESSENTIAL</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/speaker-5.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">10:45am to 11:30am</h4>
                        <h5>THE DESIGNER’S GUIDE TO BEING ESSENTIAL</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/speaker-3.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">12:00pm to 01:30pm</h4>
                        <h5>THE DESIGNER’S GUIDE TO BEING ESSENTIAL</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/img/speaker-4.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">02:00pm to 03.30pm</h4>
                        <h5>THE DESIGNER’S GUIDE TO BEING ESSENTIAL</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Schedule -->
  <?php return ob_get_clean(); }
  add_shortcode('schedule','get_schedule');
 ?>