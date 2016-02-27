<!DOCTYPE html>
<html>
<head>
	<title>RUMAH PROJECT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  {!! Html::style('css/bootstrap.min.css')!!}
	{!! Html::style('css/font-awesome.min.css')!!}
	{!! Html::style('css/styles.css')!!}

	{!! Html::script('js/jquery-1.12.1.min.js')!!}
  {!! Html::script('js/bootstrap.min.js')!!}
  {!! Html::script('js/jquery-latest.pack.js')!!}
  {!! Html::script('js/jcarousellite_1.0.1c4.js')!!}

  <script type="text/javascript">
  $(function() {
    $(".event-items").jCarouselLite({
      vertical: true,
      hoverPause:true,
      visible: 1,
      auto:500,
      speed:1000
    });
  });
  </script>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="wrap">
				<div id="menu-top">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
        <div id="header-right">
          <div id="form-search">
            <?php echo Form::text('search', null, ['id'=>'search', 'placeholder'=>'search...']); ?>
            <span class="icon"><i class="fa fa-search"></i></span>
          </div>
        </div>
			</div>
		</nav>
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
    </div>
    <div id="content" class="row">
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
                  {!! Form::image('../img/icon-date.png') !!}
                </div>
                <div class="event-right">
                  <div class="event-title">Promo Akhir Tahun</div>
                  <div class="event-description">Cilandak Town Square</div>
                  <div class="event-date">7 Aug 2016, 13pm</div>
                </div>
              </div>
              <div class="event-item">
                <div class="event-left">
                  {!! Form::image('../img/icon-date.png') !!}
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
                  {!! Form::image('../img/anonymtestimonial.png') !!}
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

      </div>
      <div id="right-menu" class="col-lg-9">
        tes
        <!-- {{!! Form::image('../img/') !!}} -->
      </div>
    </div>
	</div>
</body>
</html>