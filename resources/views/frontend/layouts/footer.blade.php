
	<!-- Start Footer Area -->
	<footer id="mt-footer" class="style1 wow fadeInUp" data-wow-delay="0.4s">
		<!-- Footer Holder of the Page -->
		<div class="footer-holder dark">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm">
						<!-- F Widget About of the Page -->
						<div class="f-widget-about">
							<div class="logo">
								<a href="#"><img src="images/logo.png" alt="Schon"></a>
							</div>
							<p>Exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<!-- Social Network of the Page -->
							<ul class="list-unstyled social-network">
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
							</ul>
							<!-- Social Network of the Page end -->
						</div>
						<!-- F Widget About of the Page end -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm">
						<div class="f-widget-news">
							<h3 class="f-widget-heading">Twitter</h3>
							<div class="news-articles">
								<div class="news-column">
									<i class="fa fa-twitter"></i>
									<div class="txt-box">
										<p>Laboris nisi ut <a href="#">#schön</a> aliquip econse- <br>quat. <a href="#">https://t.co/vreNJ9nEDt</a></p>
									</div>
								</div>
								<div class="news-column">
									<i class="fa fa-twitter"></i>
									<div class="txt-box">
										<p>Ficia deserunt mollit anim id est labo- <br>rum. incididunt ut labore et dolore <br><a href="#">https://t.co/vreNJ9nEDt</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomxs">
						<!-- Footer Tabs of the Page -->
						<div class="f-widget-tabs">
							<h3 class="f-widget-heading">Product Tags</h3>
							<ul class="list-unstyled tabs">
								<li><a href="#">Sofas</a></li>
								<li><a href="#">Armchairs</a></li>
								<li><a href="#">Living</a></li>
								<li><a href="#">Bedroom</a></li>
								<li><a href="#">Lighting</a></li>
								<li><a href="#">Tables</a></li>
								<li><a href="#">Pouf</a></li>
								<li><a href="#">Wood</a></li>
								<li><a href="#">Office</a></li>
								<li><a href="#">Outdoor</a></li>
								<li><a href="#">Kitchen</a></li>
								<li><a href="#">Stools</a></li>
								<li><a href="#">Footstools</a></li>
								<li><a href="#">Desks</a></li>
							</ul>
						</div>
						<!-- Footer Tabs of the Page -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 text-right">
						<!-- F Widget About of the Page -->
						<div class="f-widget-about">
							<h3 class="f-widget-heading">Information</h3>
							<ul class="list-unstyled address-list align-right">
								<li><i class="fa fa-map-marker"></i><address>Connaugt Road Central Suite 18B, 148 <br>New Yankee</address></li>
								<li><i class="fa fa-phone"></i><a href="tel:15553332211">+1 (555) 333 22 11</a></li>
								<li><i class="fa fa-envelope-o"></i><a href="mailto:&#105;&#110;&#102;&#111;&#064;&#115;&#099;&#104;&#111;&#110;&#046;&#099;&#104;&#097;&#105;&#114;">&#105;&#110;&#102;&#111;&#064;&#115;&#099;&#104;&#111;&#110;&#046;&#099;&#104;&#097;&#105;&#114;</a></li>
							</ul>
						</div>
						<!-- F Widget About of the Page end -->
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Holder of the Page end -->
		<!-- Footer Area of the Page -->
		
		<!-- Footer Area of the Page end -->
	</footer>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('frontend/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

	<!-- Slicknav JS -->
	<script src="{{asset('frontend/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('frontend/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('frontend/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('frontend/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('frontend/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('frontend/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('frontend/js/onepage-nav.min.js')}}"></script>
	{{-- Isotope --}}
	<script src="{{asset('frontend/js/isotope/isotope.pkgd.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('frontend/js/easing.js')}}"></script>

	<!-- Active JS -->
	<script src="{{asset('frontend/js/active.js')}}"></script>

	
	@stack('scripts')
	<script>
		setTimeout(function(){
		  $('.alert').slideUp();
		},5000);
		$(function() {
		// ------------------------------------------------------- //
		// Multi Level dropdowns
		// ------------------------------------------------------ //
			$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
				event.preventDefault();
				event.stopPropagation();

				$(this).siblings().toggleClass("show");


				if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
				}
				$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass("show");
				});

			});
		});
	</script>


	

<!-- new front end -->
	<script src="{{asset('frontend/new/js/jquery.js')}}"></script>
	<!-- include jQuery -->
	<script  src="{{asset('frontend/new/js/plugins.js')}}" ></script>
	<!-- include jQuery -->
	<script src="{{asset('frontend/new/js/jquery.main.js')}}"></script>

	  