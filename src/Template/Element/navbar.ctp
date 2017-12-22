<div class="navbar is-fixed-top is-black primary-navbar is-hidden" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
		<!-- brand logo -->
		<a href="#!" class="navbar-item">
			<img src="/img/assets/logo/switchographie-alt-white.png" alt="">
		</a>
		<!-- hamburger nav -->
		<button class="button navbar-burger is-none-radius is-none-border">
		  <span></span>
		  <span></span>
		  <span></span>
		</button>
	</div>

	<div class="navbar-menu">
		<div class="navbar-end is-family-second is-uppercase is-font-700">
			<a href="" class="navbar-item has-text-switch-orange">Bienvenue</a>
			<a href="" class="navbar-item">SwitchMe</a>
			<a href="" class="navbar-item">SwitchBlog</a>
			<a href="" class="navbar-item">Contact</a>
			<a href="" class="navbar-item">A Propos</a>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('.navbar-burger').bind('click', function(){
			$(this).toggleClass('is-active');
			$('.navbar-menu').toggleClass('is-active');
		});

		$(window).scroll(function(){ 
			if($(this).scrollTop() > 500 ){
				$('.primary-navbar').removeClass('is-hidden');
			}	
			else{
				$('.primary-navbar').addClass('is-hidden');
			}
				
		});
	});
</script>