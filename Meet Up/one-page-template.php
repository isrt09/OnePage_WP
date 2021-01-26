<?php get_header(); ?>
    <body id="page-top" data-spy="scroll" data-target=".side-menu">
      <?php get_template_part('/templates/content', 'nav'); ?>
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
      <div class="container">
        <!-- Start: Desc -->
        <div class="row me-row content-ct">
          <h2 class="row-title">Why This Event Is Super Cool?</h2>
          <div class="col-md-4 feature">
            <span class="ti-ticket"></span>
            <h3>Buy Early Bird Tickets</h3>
            <p>Super cool discounts if you purchase early bird tickets now. Limited tickets available with some awesome perks and goodies!</p>
          </div>
          <div class="col-md-4 feature">
            <span class="ti-microphone"></span>
            <h3>Expert Speakers</h3>
            <p>Best in class expert speakers who have extensive knowledge of the topic. All speakers are curated by the panel of experts.</p>
          </div>
          <div class="col-md-4 feature">
            <span class="ti-world"></span>
            <h3>People around the globe!</h3>
            <p>Meet the people attending this event around the globe. This will be the best opportunity to meet and greet people from your industry.</p>
          </div>
        </div>
        <!-- End: Desc -->

        <!-- Start: Speakers -->
        <div class="row me-row content-ct speaker" id="speakers">
          <h2 class="row-title">Meet the Speakers</h2>
          <div class="col-md-4 col-sm-6 feature">
            <img src="<?php echo get_template_directory_uri(); ?>/img/speaker-1.png" class="speaker-img">
            <h3>Simon Collins</h3>
            <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="<?php echo get_template_directory_uri(); ?>/img/speaker-2.png" class="speaker-img">
            <h3>Stephanie Troeth</h3>
            <p>Stephie is a user experience researcher and designer. In over 15 years of working on the web, she has worn many hats, including a product lead for a tech startup in publishing...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="<?php echo get_template_directory_uri(); ?>/img/speaker-3.png" class="speaker-img">
            <h3>Harry Roberts</h3>
            <p>Harry is a freelance designer, developer, writer, speaker and front-end architect from the UK, previously working as Senior UI Developer for Sky. He Tweets at...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="<?php echo get_template_directory_uri(); ?>/img/speaker-4.png" class="speaker-img">
            <h3>Geri Coady</h3>
            <p>Harry is a freelance designer, developer, writer, speaker and front-end architect from the UK, previously working as Senior UI Developer for Sky. He Tweets at...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="<?php echo get_template_directory_uri(); ?>/img/speaker-5.png" class="speaker-img">
            <h3>Andy Budd</h3>
            <p>Harry is a freelance designer, developer, writer, speaker and front-end architect from the UK, previously working as Senior UI Developer for Sky. He Tweets at...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="<?php echo get_template_directory_uri(); ?>/img/speaker-6.png" class="speaker-img">
            <h3>Christian Lauke</h3>
            <p>Harry is a freelance designer, developer, writer, speaker and front-end architect from the UK, previously working as Senior UI Developer for Sky. He Tweets at...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
        </div>
        <!-- End: Speakers -->
      </div>

      <!-- Start: Tickets -->
      <div class="container-fluid tickets" id="tickets">
        <div class="row me-row content-ct">
          <h2 class="row-title">Buy Tickets</h2>
          <div class="col-md-4 col-sm-6 col-md-offset-2">
            <h3>Early Bird Ticket</h3>
            <p class="price">$399</p>
            <p>All days entry pass for all the events.</p>
            <a href="#" class="btn btn-lg btn-red">Buy <small>(6 remaining)</small></a>
          </div>
          <div class="col-md-4 col-sm-6">
            <h3>Workshop Pass</h3>
            <p class="price">$199</p>
            <p>Entry pass for each workshop</p>
            <a href="#" class="btn btn-lg btn-red">Buy <small>(42 remaining)</small></a>
          </div>
        </div>
      </div>
      <!-- End: Tickets -->

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
<?php get_footer(); ?>
      