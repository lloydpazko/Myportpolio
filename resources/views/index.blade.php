
		<!--about start -->
		<section id="about" class="about">
			<div class="section-heading text-center">
				<h2>about me</h2>
			</div>
			<div class="container">
				<div class="about-content">
					<div class="row">
						<div class="col-sm-6">
							<div class="single-about-txt">
								<h3>
									{{ $getrecord[0]->position }}
								</h3>
								<p>
									{{ $getrecord[0]->description }}
								</p>
								<div class="row">
									<div class="col-sm-4">
										<div class="single-about-add-info">
											<h3>phone</h3>
											<p>{{ $getrecord[0]->phone }}</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-about-add-info">
											<h3>email</h3>
											<p>{{ $getrecord[0]->email }}</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-about-add-info">
											<h3>website</h3>
											<p>{{ $getrecord[0]->website }}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-offset-1 col-sm-5">
							<div class="single-about-img">
                                @if(@$getrecord[0]->profile)
                            <img src="{{ url('admincss/assets/img/'.@$getrecord[0]->profile) }}" alt="profile_image"/>
                                @endif
								<div class="about-list-icon">
									<ul>
										<li>
											<a href="https://www.facebook.com/MicrosoftLP2024/">
												<i  class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										<li>
											<a href="https://www.linkedin.com/in/lloydpaliuanan/">
												<i  class="fa fa-linkedin" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										<li>
											<a href="https://www.instagram.com/lloydpazko/">
												<i  class="fa fa-instagram" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->


									</ul><!-- / ul -->
								</div><!-- /.about-list-icon -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/.about-->
		<!--about end -->

		<!--education start -->
		<section id="education" class="education">
			<div class="section-heading text-center">
				<h2>education</h2>
			</div>
			<div class="container">
				<div class="education-horizontal-timeline">
					<div class="row">
                        @foreach($getrecord4 as $getrecord4)
						<div class="col-sm-4">
							<div class="single-horizontal-timeline">
								<div class="experience-time">
									<h2>{{ $getrecord4->year }}</h2>
									<h3>{{ $getrecord4->course }}</h3>
								</div><!--/.experience-time-->
								<div class="timeline-horizontal-border">
									<i class="fa fa-circle" aria-hidden="true"></i>
									<span class="single-timeline-horizontal"></span>
								</div>
								<div class="timeline">
									<div class="timeline-content">
										<h4 class="title">
											{{ $getrecord4->school }}
										</h4>
										<h5>{{ $getrecord4->address }}</h5>
										<p class="description">
                                            {{ $getrecord4->description }}
										</p>
									</div><!--/.timeline-content-->
								</div><!--/.timeline-->
							</div>
						</div>@endforeach
					</div>
				</div>
			</div>
		</section><!--/.education-->
		<!--education end -->

		<!--skills start -->
		<section id="skills" class="skills">
				<div class="skill-content">
					<div class="section-heading text-center">
						<h2>skills</h2>
					</div>
					<div class="container">
						<div class="row">
                            @foreach($getrecord3 as $getrecord3)
							<div class="col-md-6">
								<div class="single-skill-content">
									<div class="barWrapper">
										<span class="progressText">{{ $getrecord3->name }}</span>
										<div class="single-progress-txt">
											<div class="progress ">
												<div class="progress-bar" role="progressbar" aria-valuenow="{{ $getrecord3->percentage }}" aria-valuemin="10" aria-valuemax="{{ $getrecord3->percentage }}" style="">

												</div>
											</div>
											<h3>{{ $getrecord3->percentage }}%</h3>
										</div>
								</div>
							</div>
						</div>@endforeach<!-- /.row -->
					</div><!-- /.container -->
				</div><!-- /.skill-content-->

		</section><!--/.skills-->
		<!--skills end -->

		<!--experience start -->
		<section id="experience" class="experience">
			<div class="section-heading text-center">
				<h2>experience</h2>
			</div>
			<div class="container">
				<div class="experience-content">
						<div class="main-timeline">
                            @foreach($getrecord2 as $getrecord2)
							<ul>
								<li>
									<div class="single-timeline-box fix">
										<div class="row">
											<div class="col-md-5">
												<div class="experience-time text-right">
													<h2>{{ $getrecord2->year }}</h2>
													<h3>{{ $getrecord2->position_designation }}</h3>
												</div><!--/.experience-time-->
											</div><!--/.col-->
											<div class="col-md-offset-1 col-md-5">
												<div class="timeline">
													<div class="timeline-content">
														<h4 class="title">
															<span><i class="fa fa-circle" aria-hidden="true"></i></span>
															{{ $getrecord2->campany }}
														</h4>
														<h5>{{ $getrecord2->address }}</h5>
														<p class="description">
															{{ $getrecord2->description }}
														</p>
													</div><!--/.timeline-content-->
												</div><!--/.timeline-->
											</div><!--/.col-->
										</div>
									</div><!--/.single-timeline-box-->
								</li>
							</ul>
                            @endforeach
						</div><!--.main-timeline-->
					</div><!--.experience-content-->
			</div>

		</section><!--/.experience-->
		<!--experience end -->

		<!--profiles start -->
		<section id="profiles" class="profiles">
			<div class="profiles-details">
				<div class="section-heading text-center">
					<h2>profiles</h2>
				</div>
				<div class="container">
					<div class="profiles-content">
						<div class="row">
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="flaticon-themeforest"></i></a>
										<div class="profile-icon-name">themeforest</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-themeforest"></i></a>
											<div class="profile-icon-name">themeforest</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="flaticon-dribbble"></i></a>
										<div class="profile-icon-name">dribbble</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-dribbble"></i></a>
											<div class="profile-icon-name">dribbble</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="flaticon-behance-logo"></i></a>
										<div class="profile-icon-name">behance</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-behance-logo"></i></a>
											<div class="profile-icon-name">behance</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile profile-no-border">
									<div class="profile-txt">
										<a href=""><i class="flaticon-github-logo"></i></a>
										<div class="profile-icon-name">github</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-github-logo"></i></a>
											<div class="profile-icon-name">github</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="profile-border"></div>
						<div class="row">
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="flaticon-flickr-website-logo-silhouette"></i></a>
										<div class="profile-icon-name">flickR</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-flickr-website-logo-silhouette"></i></a>
											<div class="profile-icon-name">flickR</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="flaticon-smug"></i></a>
										<div class="profile-icon-name">smungMung</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-smug"></i></a>
											<div class="profile-icon-name">smungMung</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="flaticon-squarespace-logo"></i></a>
										<div class="profile-icon-name">squareSpace</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-squarespace-logo"></i></a>
											<div class="profile-icon-name">squareSpace</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile profile-no-border">
									<div class="profile-txt">
										<a href=""><i class="flaticon-bitbucket-logotype-camera-lens-in-perspective"></i></a>
										<div class="profile-icon-name">bitBucket</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-bitbucket-logotype-camera-lens-in-perspective"></i></a>
											<div class="profile-icon-name">bitBucket</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section><!--/.profiles-->
		<!--profiles end -->

		<!--portfolio start -->
		<section id="portfolio" class="portfolio">
			<div class="portfolio-details">
				<div class="section-heading text-center">
					<h2>portfolio</h2>
				</div>
				<div class="container">
					<div class="portfolio-content">
						<div class="isotope">
							<div class="row">

								<div class="col-sm-4">
									<div class="item">
										<img src="assets/images/portfolio/p1.jpg" alt="portfolio image"/>
										<div class="isotope-overlay">
											<a href="#">
												ui/ux design
											</a>
										</div><!-- /.isotope-overlay -->
									</div><!-- /.item -->
									<div class="item">
										<img src="assets/images/portfolio/p2.jpg" alt="portfolio image"/>
										<div class="isotope-overlay">
											<a href="#">
												ui/ux design
											</a>
										</div><!-- /.isotope-overlay -->
									</div><!-- /.item -->
								</div><!-- /.col -->

								<div class="col-sm-4">
									<div class="item">
										<img src="assets/images/portfolio/p3.jpg" alt="portfolio image"/>
										<div class="isotope-overlay">
											<a href="#">
												web design
											</a>
										</div><!-- /.isotope-overlay -->
									</div><!-- /.item -->
								</div><!-- /.col -->

								<div class="col-sm-4">
									<div class="item">
										<img src="assets/images/portfolio/p4.jpg" alt="portfolio image"/>
										<div class="isotope-overlay">
											<a href="#">
												web development
											</a>
										</div><!-- /.isotope-overlay -->
									</div><!-- /.item -->
									<div class="item">
										<img src="assets/images/portfolio/p5.jpg" alt="portfolio image"/>
										<div class="isotope-overlay">
											<a href="#">
												web development
											</a>
										</div><!-- /.isotope-overlay -->
									</div><!-- /.item -->
								</div><!-- /.col -->
							</div><!-- /.row -->
						</div><!--/.isotope-->
					</div><!--/.gallery-content-->
				</div><!--/.container-->
			</div><!--/.portfolio-details-->

		</section><!--/.portfolio-->
		<!--portfolio end -->

		<!--clients start -->
		<section id="clients" class="clients">
			<div class="section-heading text-center">
				<h2>clients</h2>
			</div>
			<div class="clients-area">
				<div class="container">
					<div class="owl-carousel owl-theme" id="client">
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c1.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c2.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c3.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c4.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c5.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c6.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c7.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
					</div><!--/.owl-carousel-->
				</div><!--/.container-->
			</div><!--/.clients-area-->

		</section><!--/.clients-->

		</section><!--/.clients-->
		<!--clients end -->

		<!--contact start -->
		<section id="contact" class="contact">
			<div class="section-heading text-center">
				<h2>contact me</h2>
			</div>
			<div class="container">
				<div class="contact-content">
					<div class="row">
						<div class="col-md-offset-1 col-md-5 col-sm-6">
							<div class="single-contact-box">
								<div class="contact-form">
									<form>
										<div class="row">
											<div class="col-sm-6 col-xs-12">
												<div class="form-group">
												  <input type="text" class="form-control" id="name" placeholder="Name*" name="name">
												</div><!--/.form-group-->
											</div><!--/.col-->
											<div class="col-sm-6 col-xs-12">
												<div class="form-group">
													<input type="email" class="form-control" id="email" placeholder="Email*" name="email">
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea class="form-control" rows="8" id="comment" placeholder="Message" ></textarea>
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="row">
											<div class="col-sm-12">
												<div class="single-contact-btn">
													<a class="contact-btn" href="#" role="button">submit</a>
												</div><!--/.single-single-contact-btn-->
											</div><!--/.col-->
										</div><!--/.row-->
									</form><!--/form-->
								</div><!--/.contact-form-->
							</div><!--/.single-contact-box-->
						</div><!--/.col-->
						<div class="col-md-offset-1 col-md-5 col-sm-6">
							<div class="single-contact-box">
								<div class="contact-adress">
									<div class="contact-add-head">
										<h3>browny star</h3>
										<p>uI/uX designer</p>
									</div>
									<div class="contact-add-info">
										<div class="single-contact-add-info">
											<h3>phone</h3>
											<p>{{ $getrecord[0]->phone }}</p>
										</div>
										<div class="single-contact-add-info">
											<h3>email</h3>
											<p>{{ $getrecord[0]->email }}</p>
										</div>
										<div class="single-contact-add-info">
											<h3>website</h3>
											<p>{{ $getrecord[0]->website }}</p>
										</div>
									</div>
								</div><!--/.contact-adress-->
								<div class="hm-foot-icon">
									<ul>
										<li><a href="https://www.facebook.com/MicrosoftLP2024/"><i class="fa fa-facebook"></i></a></li><!--/li-->
										<li><a href="https://www.linkedin.com/in/lloydpaliuanan/"><i class="fa fa-linkedin"></i></a></li><!--/li-->
										<li><a href="https://www.instagram.com/lloydpazko/"><i class="fa fa-instagram"></i></a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-icon-->
							</div><!--/.single-contact-box-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.contact-content-->
			</div><!--/.container-->

		</section><!--/.contact-->
		<!--contact end -->
