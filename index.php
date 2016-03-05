<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="bower_components\bootstrap\dist\css/bootstrap.min.css"/>
	<script type="text/javascript" src="bower_components\bootstrap\dist\css/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--Start of Zopim Live Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
	$.src="//v2.zopim.com/?3jzQk1hmTcC1XAxqZRFFMVI8boz0siuu";z.t=+new Date;$.
	type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
	</script>
	<!--End of Zopim Live Chat Script-->

	<!--Start of Google maps api Script-->
	<script type="text/javascript">
		var map;
		var myLatLng = {lat: -7.574087, lng: 112.28609};
		function initMap() {
		  map = new google.maps.Map(document.getElementById('map'), {
		    center: myLatLng,
		    zoom: 16
		  });

		var marker = new google.maps.Marker({
		    position: myLatLng,
		    map: map,
		    title: 'Temukan aku disini !',
		    icon: 'img/marker.png'
		  });
		}


	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0O4k4_Cksn4lu0v6B6dMn2ivG-P7RMvU&callback=initMap" async defer></script>
	<!--End of Google maps api Script-->

</head>
<body>

	<div class="container-fluid">
		
		<div id='menu' class="row">
			<div class="col-md-12 text-center">
				<!-- logo -->
				<div class='logo-container'>
					<img src="img/logo.png" width="200px" />
				</div>
				<!-- navigation bar -->
				<ul class='nav nav-pills menu pull-right'>
					<li role="presentation"><a href="#home">HOME</a></li>
					<li role="presentation"><a href="#support">PORTOFOLIO</a></li>
					<li role="presentation"><a href="#pemesanan">PEMESANAN</a></li>
					<li role="presentation"><a href="#news">BERITA</a></li>
					<li role="presentation"><a href="#galeri">GELERI</a></li>
					<li role="presentation"><a href="#carapesan">CARA PESAN</a></li>
					<li role="presentation"><a href="#kontak">KONTAK</a></li>
				</ul>

			</div>
		</div>
		
		<div id='home' class="row">
			<div class="col-md-12 home text-center">
				<p> J A S A  &nbsp; B O R D I R &nbsp;<br/> P R O F E S S I O N A L </p>
				<br/>
				<div class="btn btn-xl"> PESAN SEKARANG ! </div>
			</div>		
		</div>
		
		<div id='support' class="row">
			<div class="col-md-12 support text-center">
				<p class='title'> PORTOFOLIO </p>
				<ul>
					<li>
						<img src="img/b1.jpg" width="200px">
					</li>
					<li>
						<img src="img/b2.jpg" width="200px">
					</li>
					<li>
						<img src="img/b3.jpg" width="200px">
					</li>
					<li>
						<img src="img/b4.jpg" width="200px">
					</li>
					<li>
						<img src="img/b5.jpg" width="200px">
					</li>
					<li>
						<img src="img/b6.jpg" width="200px">
					</li>
					<li>
						<img src="img/b7.jpg" width="200px">
					</li>
					<li>
						<img src="img/b8.jpg" width="200px">
					</li>

				</ul>
			</div>		
		</div>

		<div id='carapesan' class="row">
			<div class="col-md-12 text-center">
				<p class='title'> Cara Pemesanan ? </p>
				<br/>
				<ul style="margin-top: -50px">
					<li class='text-center'>
						<div class="icon-testimonial" style='background:url(img/c1.png)'></div>
						<br/>
						<div class="text-testimonial">
							<p>MENGISI FORM PEMESANAN</p>
							<span>Give your brand a voice and build meaningful relationships by talking to customers over live chat.</span>
							<br/>
						</div>
					</li>

					<li class='text-center'>
						<div class="icon-testimonial" style='background:url(img/c2.png)'></div>
						<br/>
						<div class="text-testimonial">
							<p>UPLOAD DESAIN KAMU</p>

							<span >Increase the chances of high value engagement and more sales by using proactive chat to automatically reach out to customers.</span>
							<br/>
						</div>
					</li>

					<li class='text-center'>
						<div class="icon-testimonial" style='background:url(img/c3.png)'></div>
						<br/>
						<div class="text-testimonial">
							<p>TRANSFER & TUNGGU SELAMA MAX 4 HARI</p>
							<span>Your customers aren't clones. Use advanced analytics and visitor targeting to create a unique experience for each visitor.</span>
							<br/>
						</div>
					</li>

				</ul>
				<button class='btn-pesan-carapesan'> PESAN SEKARANG ! </button>
			</div>		
		</div>

		<div id='news' class="row">
			<div class="col-md-12 news">
				<p class='title'> BERITA </p>
				<ul>
					<li>
						<img src="img/promo.jpg" width="225px">
						<span class="thead">Lorem ipsum dolor sit</span><br/>
						<span class='date'>May, 24 2017</span><br/><br/>
						<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore</p>
						<div class="btn-news pull-right"> Detail </div>
					</li>
					<li>
						<img src="img/promo.jpg" width="225px">
						<span class="thead">Lorem ipsum dolor sit</span><br/>
						<span class='date'>May, 24 2017</span><br/><br/>
						<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore</p>
						<div class="btn-news pull-right"> Detail </div>
					</li>
					<li>
						<img src="img/promo.jpg" width="225px">
						<span class="thead">Lorem ipsum dolor sit</span><br/>
						<span class='date'>May, 24 2017</span><br/><br/>
						<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore</p>
						<div class="btn-news pull-right"> Detail </div>
					</li>
					<li>
						<img src="img/promo.jpg" width="225px">
						<span class="thead">Lorem ipsum dolor sit</span><br/>
						<span class='date'>May, 24 2017</span><br/><br/>
						<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore</p>
						<div class="btn-news pull-right"> Detail </div>
					</li>
				</ul>
			</div>		
		</div>

		<div id='testimonial' class="row">
			<div class="col-md-12 text-center">
				<p class='title' style="color: white"> Apa kata mereka ? </p>
				<br/>
				<ul style="margin-top: -50px">
					<li class='text-center'>
						<div class="icon-testimonial" style='background:url(img/p1.jpg)'></div>
						<br/>
						<div class="text-testimonial">
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
							<br/>
							<span class='from'>Andre - Ceo Maximu</span>
						</div>
					</li>

					<li class='text-center'>
						<div class="icon-testimonial" style='background:url(img/p2.jpg)'></div>
						<br/>
						<div class="text-testimonial">
							<span >Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
							<br/>
							<span class="from">Andre - Ceo Maximu</span>
						</div>
					</li>

					<li class='text-center'>
						<div class="icon-testimonial" style='background:url(img/p3.jpg)'></div>
						<br/>
						<div class="text-testimonial">
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
							<br/>
							<span class='from'>Andre - Ceo Maximu</span>
						</div>
					</li>

				</ul>
			</div>		
		</div>

		<div id='map' class="row">	
		</div>
		<br/>
		<div id='contact' class="row">
			<div class="col-md-12 text-center">
				
			</div>		
		</div>

	</div>
</body>
</html>