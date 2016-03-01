<!DOCTYPE html>
<html>
<head>
	<title>RUMAH PROJECT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php echo Html::style('css/bootstrap.min.css'); ?>

	<?php echo Html::style('css/font-awesome.min.css'); ?>

	<?php echo Html::style('css/styles.css'); ?>


	<?php echo Html::script('js/jquery-1.11.0.min.js'); ?>

  <?php echo Html::script('js/bootstrap.min.js'); ?>

  <?php echo Html::script('js/jquery-latest.pack.js'); ?>

  <?php echo Html::script('js/jcarousellite_1.0.1c4.js'); ?>


  <script type="text/javascript">
  $(document).ready(function() {
    // slider jumbotron
    $(".event-items").jCarouselLite({
      vertical: true,
      hoverPause:true,
      visible: 1,
      auto:500,
      speed:1000
    }); // end slider jumbotron

    // slider account and signup
    $('#login-trigger').click(function(e) {
      e.stopPropagation();
      $('#signup-content').slideUp();
      $(this).next('#login-content').slideToggle('fast');
    });
    $('#signup-trigger').click(function(e) {
      e.stopPropagation();
      $('#login-content').slideUp();
      $(this).next('#signup-content').slideToggle('fast');
    }); // end slider account and signup
  });

  // slideup account and signup
  $(document).click(function() {
    $('#login-content, #signup-content').bind('click', function(e){return false});
    $('#login-content, #signup-content').slideUp();
  }); // end slideup account and signup
  </script>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="wrap">
        <!-- Menu Top -->
				<div id="menu-top">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div> <!-- End Menu Top -->
        <!-- Menu Top Right -->
        <div id="header-right"> 
          <div id="account">
            <!-- login -->
            <a href="#" id="login-trigger" onclick="return false">
              <span class="icon"><i class="fa fa-user"></i></span> Account
            </a>
            <div id="login-content">
              <div id="login-input">
                <div class="form-group">
                    <?php echo Form::text('username', null, ['id'=>'username-login-input', 'class'=>'form-control', 'placeholder'=>'Username/email']); ?>

                </div>
                <div class="form-group">
                  <?php echo Form::password('password', ['id'=>'password-login-input', 'class'=>'form-control', 'placeholder'=>'Password']); ?>

                </div>
              </div>
              <div id="login-button">
                <?php echo Form::submit('Login', ['id'=>'login-btn', 'class'=>'btn btn-default']); ?>

              </div>
            </div> <!-- end login -->
            <!-- sign up -->
            <a href="#" id="signup-trigger" onclick="return false">
              <span class="icon"><i class="fa fa-sign-in"></i></span> Sign up
            </a>
            <div id="signup-content">
              <div id="signup-input">\
                <div class="form-group">
                    <?php echo Form::text('firstname', null, ['id'=>'firstname-signup-input', 'class'=>'form-control', 'placeholder'=>'firstname']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::text('lastname', null, ['id'=>'lastname-signup-input', 'class'=>'form-control', 'placeholder'=>'lastname']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::text('username', null, ['id'=>'username-signup-input', 'class'=>'form-control', 'placeholder'=>'Username/email']); ?>

                </div>
                <div class="form-group">
                  <?php echo Form::password('password', ['id'=>'password-signup-input', 'class'=>'form-control', 'placeholder'=>'Password']); ?>

                </div>
              </div>
              <div id="login-button">
                <?php echo Form::submit('Sign up', ['id'=>'signup-btn', 'class'=>'btn btn-default']); ?>

              </div>
            </div> <!-- end sign up -->
          </div>
          <div id="form-search">
            <?php echo Form::text('search', null, ['id'=>'search', 'placeholder'=>'search...']); ?>
            <span class="icon"><i class="fa fa-search"></i></span>
          </div>
        </div> <!-- End Menu Top Right -->
			</div>
		</nav>
    <!-- Jumbotron bootstrap slider -->
    <div id="carousel-header" class="carousel slide carousel-fade row" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <div class="slide1"></div>
        </div>
        <div class="item">
          <div class="slide2"></div>
        </div>
        <div class="item">
          <div class="slide3"></div>
        </div>
      </div>
    </div> <!-- End Jumbotron bootstrap slider -->
    <div id="content" class="row">
      <!-- LEFT MENU -->
      <div id="left-menu" class="col-lg-3">
        <div id="news">
          <div class="left-menu-header">News</div>
          <div class="left-menu-body">
            <div class="news-title">BLABLA</div>
            <div class="news-description">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="news-title">BLABLA</div>
            <div class="news-description">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
          </div>
        </div>
        <div id="events">
          <div class="left-menu-header">Events</div>
          <div class="left-menu-body">
            <div id="event-items">
              <div class="event-item">
                <div class="event-left">
                  <?php echo Form::image('../img/icon-date.png'); ?>

                </div>
                <div class="event-right">
                  <div class="event-title">Promo Akhir Tahun</div>
                  <div class="event-description">Cilandak Town Square</div>
                  <div class="event-date">7 Aug 2016, 13pm</div>
                </div>
              </div>
              <div class="event-item">
                <div class="event-left">
                  <?php echo Form::image('../img/icon-date.png'); ?>

                </div>
                <div class="event-right">
                  <div class="event-title">Promo Awal Tahun</div>
                  <div class="event-description">Cilandak Town Square</div>
                  <div class="event-date">7 Aug 2016, 13pm</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="testimonials">
          <div class="left-menu-header">Testimonials</div>
          <div class="left-menu-body">
            <div id="testimonials-comment">
              <div class="testimonial">
                <a class="testimonial-left" href="#non">
                  <img src="http://lorempixum.com/50/50/people/1" alt="" width="50" height="50">
                </a>
                <div class="testimonial-right">
                  <div class="text">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                  <p class="attribution">by <a href="#non">Joe Bloggs</a> at 14:23pm, 4th Dec
                </div>
              </div>
              <div class="testimonial">
                <a class="testimonial-left" href="#non">
                  <!-- <img src="http://lorempixum.com/50/50/people/1" alt="" width="50" height="50"> -->
                  <?php echo Form::image('../img/anonymtestimonial.png'); ?>

                </a>
                <div class="testimonial-right">
                  <div class="text">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                  <p class="attribution">by <a href="#non">Joe Bloggs</a> at 14:23pm, 4th Dec
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- END LEFT MENU -->
      <!-- RIGHT MENU -->
      <div id="right-menu" class="col-lg-9">
        <div class="col-lg-4">
          <div class="img-content">
            <?php echo Html::image('../img/item1.jpg'); ?>

          </div>
          <div class="img-description">
            <div class="content-title">
              <div class="content-title-left">Jakarta, Bintaro</div>
              <div class="content-title-right">7 M</div>
            </div>
            <div class="content-description">
              <div class="land-size content-icon"><span class="icon land-size-icon"><i class="fa fa-arrows"></i></span> 130</div>
              <div class="building-size content-icon"><span class="icon land-size-icon"><i class="fa fa-building-o"></i></span> 250</div>
              <div class="bedroom-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-bed"></i></span> 4</div>
              <div class="bathroom-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-bed"></i></span> 3</div>
              <div class="viewer-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-eye"></i></span> 1300</div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="img-content">
            <?php echo Html::image('../img/item2.jpg'); ?>

          </div>
          <div class="img-description">
            <div class="content-title">
              <div class="content-title-left">Jakarta, Bintaro</div>
              <div class="content-title-right">7 M</div>
            </div>
            <div class="content-description">
              <div class="land-size content-icon"><span class="icon land-size-icon"><i class="fa fa-arrows"></i></span> 130</div>
              <div class="building-size content-icon"><span class="icon land-size-icon"><i class="fa fa-building-o"></i></span> 250</div>
              <div class="bedroom-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-bed"></i></span> 4</div>
              <div class="bathroom-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-bed"></i></span> 3</div>
              <div class="viewer-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-eye"></i></span> 1300</div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="img-content">
            <?php echo Html::image('../img/item3.jpg'); ?>

          </div>
          <div class="img-description">
            <div class="content-title">
              <div class="content-title-left">Jakarta, Bintaro</div>
              <div class="content-title-right">7 M</div>
            </div>
            <div class="content-description">
              <div class="land-size content-icon"><span class="icon land-size-icon"><i class="fa fa-arrows"></i></span> 130</div>
              <div class="building-size content-icon"><span class="icon land-size-icon"><i class="fa fa-building-o"></i></span> 250</div>
              <div class="bedroom-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-bed"></i></span> 4</div>
              <div class="bathroom-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-bed"></i></span> 3</div>
              <div class="viewer-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-eye"></i></span> 1300</div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="img-content">
            <?php echo Html::image('../img/item3.jpg'); ?>

          </div>
          <div class="img-description">
            <div class="content-title">
              <div class="content-title-left">Jakarta, Bintaro</div>
              <div class="content-title-right">7 M</div>
            </div>
            <div class="content-description">
              <div class="land-size content-icon"><span class="icon land-size-icon"><i class="fa fa-arrows"></i></span> 130</div>
              <div class="building-size content-icon"><span class="icon land-size-icon"><i class="fa fa-building-o"></i></span> 250</div>
              <div class="bedroom-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-bed"></i></span> 4</div>
              <div class="bathroom-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-bed"></i></span> 3</div>
              <div class="viewer-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-eye"></i></span> 1300</div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="img-content">
            <?php echo Html::image('../img/item3.jpg'); ?>

          </div>
          <div class="img-description">
            <div class="content-title">
              <div class="content-title-left">Jakarta, Bintaro</div>
              <div class="content-title-right">7 M</div>
            </div>
            <div class="content-description">
              <div class="land-size content-icon"><span class="icon land-size-icon"><i class="fa fa-arrows"></i></span> 130</div>
              <div class="building-size content-icon"><span class="icon land-size-icon"><i class="fa fa-building-o"></i></span> 250</div>
              <div class="bedroom-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-bed"></i></span> 4</div>
              <div class="bathroom-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-bed"></i></span> 3</div>
              <div class="viewer-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-eye"></i></span> 1300</div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="img-content">
            <?php echo Html::image('../img/item3.jpg'); ?>

          </div>
          <div class="img-description">
            <div class="content-title">
              <div class="content-title-left">Jakarta, Bintaro</div>
              <div class="content-title-right">7 M</div>
            </div>
            <div class="content-description">
              <div class="land-size content-icon"><span class="icon land-size-icon"><i class="fa fa-arrows"></i></span> 130</div>
              <div class="building-size content-icon"><span class="icon land-size-icon"><i class="fa fa-building-o"></i></span> 250</div>
              <div class="bedroom-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-bed"></i></span> 4</div>
              <div class="bathroom-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-bed"></i></span> 3</div>
              <div class="viewer-numbers content-icon"><span class="icon land-size-icon"><i class="fa fa-eye"></i></span> 1300</div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div id="ads-banner">
            <a href="#"><?php echo Html::image('../img/ads1.jpg'); ?></a>
          </div>
        </div>
      </div> <!-- END RIGHT MENU -->
    </div>
    <!-- FOOTER -->
    <div id="footer" class="row"><p>copyright @ 2016</p></div> <!-- END FOOTER -->
	</div>
</body>
</html>