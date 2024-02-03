<?php
use App\Library\SEOMeta;
?>
<!DOCTYPE html>
<html>
   <head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{ asset($company->avatar_file_name) }}" type="image/jpg">

    {{-- Meta tag --}}
    {!! SEOMeta::$extraMeta !!}

    @stack('metaTag')

	<!-- style -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{  asset('assets/css/all.css')  }}"  >
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/aos.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<!-- Animate CSS -->
	<link href="{{ asset('assets/js/animate/animate.css') }}" rel="stylesheet">

	<!-- script -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			AOS.init({
            offset: 200,
            duration: 600,
            easing: 'ease-in-sine',
            delay: 100,
            });
		});
		$(document).on('click', '.panel-heading span.clickable', function(e){
            var $this = $(this);
            if(!$this.hasClass('panel-collapsed')) {
                $this.parents('.panel').find('.panel-body').slideUp();
                $this.addClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
            } else {
                $this.parents('.panel').find('.panel-body').slideDown();
                $this.removeClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
            }
        })

	</script>
	<div id="fb-root"></div>
    <script>
        (
            function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1718982828365487&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk')
        );
    </script>
   </head>
   <body>
	<div class="__wrapper">
		<!-- header window -->
		<div class="__header ">
			<div class="__header_group">
				{{-- <!--div class="__header_logo">
					<div class="container">
						<div class="col-md-2 __header_logo_relative">
							<a href="" class="__logo">
								<img src="{{ asset('assets/img/logo.png')}}">
							</a>
						</div>
					</div>
				</div--> --}}
				<div class="__header_contact">
					<div class="container">
					<div class="offset-md-3 col-md-9">
							<div class="__contact_list">
								<ul class="__contact_item __contact_item_1">

								</ul>
								<ul class="__contact_item __contact_item_2">
                                    <li><a href="{{ $company->facebook }}" target="_bank"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="{{ $company->website }}"><i class="fab fa-youtube"></i></a></li>
									<li><a href="{{ $company->gooofle }}"><i class="fab fa-google"></i></a></li>
									<li> <a href="?lang=en"> <img src="{{ asset('assets/img/en.png')}}" alt="English"> EN </a> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="__header_menu">
					<div class="container">
						<div class="offset-md-1 col-md-11">
							<div class="__menu_group">
								<ul class="__menu_list">
                                    <li>
										<a href="/" class="{{ request()->is('/') ? '__active' : '' }}">
											Trang chủ
										</a>
									</li>
                                    @foreach ($service_groups as $service_group)
									<li>
										<a href="{{ route('service_groups', $service_group->slug) }}" class="{{ request()->url() == route('service_groups', $service_group->slug) ? '__active' : '' }}">
											{{ $service_group->name }}
										</a>
									</li>
                                    @endforeach
									<li>
										<a href="ho-tro" class="{{ request()->is('/ho-tro') ? '__active' : '' }}">
											Hỗ trợ
										</a>
									</li>
								</ul>
								<div class="__menu_search">
									<form>
										<div>
											<button><i class="fas fa-search"></i></button>
											<div class="__menu_search_makeup">
												<input type="text" name="" placeholder="Search...">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header mobile -->

		<div class="__header_mobile">
			<div class="container">
				<div class="__header_mobile_nav">
					<a href="" class="__logo">
						<img src="{{ asset($company->avatar_file_name)}}">
					</a>
					<div>
						<a href="" class="__open_menu_mobile">
							<i class="fas fa-bars"></i>
						</a>
					</div>
				</div>
				<ul class="__menu_list __header_mobile_nav_list">
					<li>
						<a href="/" class="{{ request()->is('/') ? '__active' : '' }}">
							Trang chủ
						</a>
					</li>
					@foreach ($service_groups as $service_group)
                    <li>
                        <a href="{{ route('service_groups', $service_group->slug) }}" class="{{ request()->url() == route('service_groups', $service_group->slug) ? '__active' : '' }}">
                            {{ $service_group->name }}
                        </a>
                    </li>
                    @endforeach
					<li>
						<a href="ho-tro" class="{{ request()->is('/ho-tro') ? '__active' : '' }}">
							Hỗ trợ
						</a>
					</li>
				</ul>
			</div>
		</div>
