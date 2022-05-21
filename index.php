<?php
  include "conf/info.php";
  $title="MovieRate.co";
  include_once "header.php";
?>

<script src='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css' rel='stylesheet' />
<link rel="stylesheet" href="css/style.css">

  		<!--jumbotron slide-->

	<div id="fw_al_001" class="carousel slide ps_slide_y ps_indicators_y swipe_y ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2500"> 
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#fw_al_001" data-slide-to="0" class="active"></li>
			<li data-target="#fw_al_001" data-slide-to="1"></li>
			<li data-target="#fw_al_001" data-slide-to="2"></li>
      <li data-target="#fw_al_001" data-slide-to="3"></li>
      <li data-target="#fw_al_001" data-slide-to="4"></li>
		</ol>
        
    
		<div class="carousel-inner" role="listbox">

			<!-- First Slide -->
			<div class="carousel-item active">

				<!-- Slide Background -->
				<img src="assets/img/the%20eternals.jpg" alt="fw_al_001_01">

				<!-- Slide Text Layer -->
				<div class="fw_al_001_slide">
					<h3 data-animation="animated fadeInUp"> NEWEST MOVIE</h3>
					<h1 data-animation="animated fadeInUp">THE ETERNALS</h1>

					<a href="#" data-animation="animated fadeInUp">view more</a>
				</div>
			</div>
			<!-- End of Slide -->

			<!-- Second Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/blackpink%20movie.jpg" alt="fw_al_001_02">

				<!-- Slide Text Layer -->
				<div class="fw_al_001_slide">
					<h3 data-animation="animated fadeInUp">UP COMING MOVIE</h3>
					<h1 data-animation="animated fadeInUp">BLACKPINK : KESUKAAN GW</h1>
					<a href="#" data-animation="animated fadeInUp">view more</a>
				</div>
			</div>
			<!-- End of Slide -->

			<!-- Third Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/shang-chi%20movie.jpg" alt="fw_al_001_03">

				<!-- Slide Text Layer -->
				<div class="fw_al_001_slide">
					<h3 data-animation="animated fadeInUp">NEWEST MOVIE</h3>
					<h1 data-animation="animated fadeInUp">SHANG-CHI</h1>
					<a href="#" data-animation="animated fadeInUp">view more</a>
				</div>
			</div>
			<!-- End of Slide -->
            
            <!-- Fourth Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/quite%20place.jpg" alt="fw_al_001_04">

				<!-- Slide Text Layer -->
				<div class="fw_al_001_slide">
					<h3 data-animation="animated fadeInUp">HORROR MOVIE</h3>
					<h1 data-animation="animated fadeInUp">A QUITE PLACE : PART 2</h1>
					<a href="#" data-animation="animated fadeInUp">view more</a>
				</div>
			</div>
			<!-- End of Slide -->
            
            <!-- Fifth Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/milea.jpg" alt="fw_al_001_05">

				<!-- Slide Text Layer -->
				<div class="fw_al_001_slide">
					<h3 data-animation="animated fadeInUp">INDO MOVIE</h3>
					<h1 data-animation="animated fadeInUp">MILEA</h1>
					<a href="#" data-animation="animated fadeInUp">view more</a>
				</div>
			</div>
			<!-- End of Slide -->

		</div><!-- End of Wrapper For Slides -->

	</div> <!-- End Paradise Slider -->

  <section id="content">
		<div class="col-lg-4 col-md-4">
            <?php
              include_once "api/api_toprated.php";
              foreach($toprated->results as $p){
                echo '
                <div class="card" style="list-style:none;">
                <li>
                  <a href="movie.php?id=' . $p->id . '">
                    <img src="http://image.tmdb.org/t/p/w500'. $p->poster_path . '">
                      <h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4>
                      <h5><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h5>
                  </a>
                </li>
                </div>";
              }
            ?>
		</div>
	</section>
    <ul>
      
    </ul>