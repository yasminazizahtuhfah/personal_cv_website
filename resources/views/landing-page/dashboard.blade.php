<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Landing Page 1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('landing_page')}}/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('landing_page')}}/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('landing_page')}}/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('landing_page')}}/css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{asset('landing_page')}}/fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('landing_page')}}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{asset('landing_page')}}/css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('landing_page')}}/css/style.css">

	<!-- Modernizr JS -->
	<script src="{{asset('landing_page')}}/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
                <div class="author-img" style="background-image: url('{{ asset('pas_foto/' . @$identitasData->pas_foto) }}');"></div>
				<h1 id="colorlib-logo"><a href="{{asset('landing_page')}}/index.html">{{ $identitasData->nama }}</a></h1>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Home</a></li>
						<li><a href="#" data-nav-section="about">About</a></li>
						<li><a href="#" data-nav-section="skills">Skills</a></li>
						<li><a href="#" data-nav-section="education">Education</a></li>
						<li><a href="#" data-nav-section="organization">Organization</a></li>
						<li><a href="#" data-nav-section="portofolio">Portofolio</a></li>
						<li><a href="#" data-nav-section="gallery">Gallery</a></li>
						<li><a href="#" data-nav-section="contact">Contact</a></li>
						<label class="switch">
							<input type="checkbox">
							<span class="slider round"></span>
						</label>
					</ul>
				</div>
			</nav>

			<div class="colorlib-footer">
				<p><small>&copy; <script>document.write(new Date().getFullYear());</script> . S1 - 3B/D4 Teknik Informatika</small></p>
			</div>

			<div class="text-center"><a href="{{ route('logout') }}" style="text-decoration: none; font-weight: bold;"><small>Log Out</small></a></div>

		</aside>

		<div id="colorlib-main">
			<section id="colorlib-hero" class="js-fullheight" data-section="home">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url({{asset('landing_page')}}/images/bg_1.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc">
						   					<h1>Hi! <br>I'm {{ $identitasData->nama }}</h1>
												<p>
													<a href="{{ url('/convert-pdf/' . $identitasData->nama) }}" class="btn btn-primary btn-learn" id="convertLink" data-name="{{ $identitasData->nama }}">Download CV</a>
												</p>
										</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url({{asset('landing_page')}}/images/bg_2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>I am <br>a {{ $identitasData->pekerjaan }}</h1>
											   <p>
													<a href="{{ url('/convert-pdf/' . $identitasData->nama) }}" class="btn btn-primary btn-learn" id="convertLink" data-name="{{ $identitasData->nama }}">Download CV</a>
												</p>
										</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</section>

			<section class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
										<span class="heading-meta">About Me</span>
										<h2 class="colorlib-heading">Who Am I?</h2>
										<p>
											Perkenalkan, saya adalah <strong>{{ $identitasData->nama }}</strong>, seorang <strong>{{ $identitasData->jenis_kelamin }}</strong> kelahiran <strong>{{ $identitasData->tempat_lahir }}</strong> pada tanggal <strong>{{ $identitasData->tanggal_lahir }}</strong>. Saya memeluk agama <strong>{{ $identitasData->agama }}</strong>, dan nilai-nilai tersebut telah membimbing saya dalam menjalani kehidupan sehari-hari dengan penuh kesederhanaan dan kebaikan. Meskipun saya adalah warga negara <strong>{{ $identitasData->kewarganegaraan }}</strong>, saya selalu tertarik untuk memahami berbagai budaya dan bahasa dari seluruh dunia, dan saya berharap bisa menjalin hubungan baik dengan beragam orang dari berbagai latar belakang. Saat ini, saya berstatus <strong>{{ $identitasData->status }}</strong>, saya percaya bahwa setiap tahap dalam hidup kita memiliki keindahannya sendiri, dan saya berusaha untuk belajar dan tumbuh sepanjang perjalanan ini.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="colorlib-skills" data-section="skills">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Specialty</span>
							<h2 class="colorlib-heading animate-box">My Skills</h2>
						</div>
					</div>
                    <div class="row">
                        @foreach ($skillData as $skill)
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>{{ $skill->nama_skill }}</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-{{ $loop->index + 1 }}" role="progressbar" aria-valuenow="{{ $skill->persen_skill }}"
                                            aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->persen_skill }}%">
                                            <span>{{ $skill->persen_skill }}%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

				</div>
			</section>

			<section class="colorlib-education" data-section="education">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Education</span>
							<h2 class="colorlib-heading animate-box">Education</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="timeline-centered">
								@php
									$colors = ['color-1', 'color-2', 'color-3', 'color-4', 'color-5'];
								@endphp

								@foreach($pendidikanData as $key => $pendidikan)
									@php
										$colorIndex = $key % count($colors);
										$currentColor = $colors[$colorIndex];
									@endphp

									<article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
										<div class="timeline-entry-inner">
											<div class="timeline-icon {{ $currentColor }}">
												<i class="icon-pen2"></i>
											</div>
											<div class="timeline-label">
												<h2>{{ $pendidikan->nama_instansi }} <span>{{ $pendidikan->tahun_masuk }} - {{ $pendidikan->tahun_lulus }}</span></h2>
												<p>{{ $pendidikan->nama_jurusan }}</p>
											</div>
										</div>
									</article>
								@endforeach

								<article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
									<div class="timeline-entry-inner">
										<div class="timeline-icon color-none">
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="colorlib-experience" data-section="organization">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Organization</span>
							<h2 class="colorlib-heading animate-box">Organization</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									@foreach($organisasiData as $organisasi)
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="heading{{ $organisasi->id }}">
												<h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $organisasi->id }}" aria-expanded="false" aria-controls="collapse{{ $organisasi->id }}">{{ $organisasi->nama_organisasi }}
													</a>
												</h4>
											</div>
											<div id="collapse{{ $organisasi->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $organisasi->id }}">
												<div class="panel-body">
													<p><strong>{{ $organisasi->jabatan }}</strong> <span>{{ $organisasi->tahun_awal }} - {{ $organisasi->tahun_akhir }}</span></p>
												</div>
											</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="colorlib-blog" data-section="portofolio">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Portofolio</span>
							<h2 class="colorlib-heading">Portofolio</h2>
						</div>
					</div>
					<div class="row">
						@foreach($portofolioData as $portofolio)
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<div class="blog-img">
									<img src="{{ asset('foto_proyek/' . $portofolio->foto_proyek) }}" class="img-responsive" alt="{{ $portofolio->nama_proyek }}">
								</div>
								<div class="desc">
									<h3>{{ $portofolio->nama_proyek }}</h3>
									<p>{{ $portofolio->deskripsi }}</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</section>

			<section class="colorlib-work" data-section="gallery">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Gallery</span>
							<h2 class="colorlib-heading animate-box">Gallery</h2>
						</div>
					</div>
					<div class="row">
						@foreach ($galeriData as $galeri)
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="project" style="background-image: url('{{ asset('foto/' . @$galeri->foto) }}');">
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</section>

			<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Get in Touch</span>
							<h2 class="colorlib-heading">Contact</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-globe-outline"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="#">{{ $kontakData->email }}</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map"></i>
								</div>
								<div class="colorlib-text">
									<p>{{ $kontakData->alamat }}</p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="tel://">{{ $kontakData->no_telepon }}</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->

	<!-- jQuery -->
	<script src="{{asset('landing_page')}}/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('landing_page')}}/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="{{asset('landing_page')}}/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="{{asset('landing_page')}}/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="{{asset('landing_page')}}/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="{{asset('landing_page')}}/js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="{{asset('landing_page')}}/js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="{{asset('landing_page')}}/js/main.js"></script>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
		  const toggleSwitch = document.querySelector('input[type="checkbox"]');
		  const storageKey = 'landingPageToggleState';
	  
		  // Check if toggle state is stored in local storage
		  const savedToggleState = localStorage.getItem(storageKey);
		  if (savedToggleState === 'true') {
			toggleSwitch.checked = false;
		  }
	  
		  toggleSwitch.addEventListener('change', function () {
			// Update local storage with the toggle state
			localStorage.setItem(storageKey, this.checked);
	  
			// Get the current URL path
			const currentPage = window.location.pathname;
	  
			if (this.checked) {
			  // Landing page 1 is selected
			  // Redirect to /dashboard2/{name}
			  const name = extractNameFromPath(currentPage);
			  window.location.href = `/dashboard2/${name}`;
			} else {
			  // Landing page 2 is selected
			  // Redirect to /dashboard/{name}
			  const name = extractNameFromPath(currentPage);
			  window.location.href = `/dashboard/${name}`;
			}
		  });
	  
		  // Function to extract name from the URL path
		  function extractNameFromPath(path) {
			const parts = path.split('/');
			const nameIndex = parts.indexOf('dashboard') + 1;
			return parts[nameIndex];
		  }
	  
		  // Additional code to handle toggle state when landing on page 2
		  const currentPage = window.location.pathname;
		  if (currentPage.startsWith('/dashboard2/')) {
			toggleSwitch.checked = true; // Set toggle to "on" on page 2
		  }
		});
	  </script>	  
	</body>
</html>

