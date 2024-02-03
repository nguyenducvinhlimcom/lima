@extends('frontend.layout.header')
        <!-- slider -->
        <div class="__slider">
            <div class="__slider_group">
                <div class="owl-carousel">
                    @foreach ($banners as $banner)
                    <div class="__slide">
                        <div class="__slide_img">
                            <img title="{{ $banner->name }}" src="{{ asset($banner->avatar_file_name)}}" alt="{{ $banner->name }}">
                        </div>
                        <div class="__slide_content">
                            <div class="__line">
                            </div>
                            <div class="__group_button_common">
                                <a href="{{ $banner->url }}" class="__button_common">
                                    Xem nhiều hơn
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- dịch vụ -->
		<div class="__mixins">
			<div class="container">
				<div class="__mixins_bounce">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<a class="title">
								DỊCH VỤ NỔI BẬT
							</a>
						</div>
                        @foreach ($service_groups as $key=>$service_group)
						<div class="col-md-2 col-lg-2 __mixin_group {{ $key < 1 ? 'offset-lg-1' : '' }}">
							<div class="__mixin">
								<div class="service_img __mixin_icon">
									<img src="{{ asset($service_group->avatar_file_name)}}" alt="{{ $service_group->name }}">
								</div>
								<div class="__mixin_content">
									<a href="{{ route('service_groups', $service_group->slug) }}">
										{{ $service_group->name }}
									</a>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
				</div>
			</div>
		</div>
		<!-- chi tiet dich vu -->
		<div class="__introduction_6">
			<div class="container">
				<div class="__introduction_group">
					<h1>{{ $homeServiceGroups[0]->name }}</h1>
					<p>{{ $homeServiceGroups[0]->note }}</p>
					<div class="__group_button_common">
						<a href="{{ route('service_groups', $homeServiceGroups[0]->slug) }}" class="__button_common">
							Tìm hiểu thêm
						</a>
					</div>
				</div>
				<!-- slider -->
				<div class="row">
					<div class="col-md-8 col-lg-8 offset-lg-2 session-line">
						<div class="__slider_3">
							<div class="__slider_group">
								<div class="owl-carousel">
                                    @foreach ($homeServiceGroups[0]->services as $service)
									<div class="__slide">
										<div class="__slide_img">
											<img src="{{ asset($service->avatar_file_name)}}" alt="{{ $service->name }}">
										</div>
										<div class="__slide_content">
											<a href="#" class="__button_common">
												{{ $service->name }}
											</a>
										</div>
									</div>
                                    @endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- phun xăm -->
		<div class="__project_2">
			<div class="__project_list">
				<div class="__item hovereffect_3">
					<img src="{{ asset('assets/img/px_1.png')}}" alt="{{ $homeServiceGroups[1]->name }}">
					<div class="overlay">
					   <h2>{{ $homeServiceGroups[1]->name }}</h2>
					   <p>{{ $homeServiceGroups[1]->note }}</p>
					   <div class="__group_button_common">
							<a href="{{ route('service_groups', $homeServiceGroups[1]->slug) }}" class="__button_common">
								Tìm hiểu thêm
							</a>
						</div>
					</div>
				</div>
				<div class="__item hovereffect_3">
					<img src="{{ asset('assets/img/px_2.png')}}" alt="{{ $homeServiceGroups[1]->name }}">
				</div>
			</div>
		</div>
		<!-- giảm béo -->
		<div class="__introduction_2">
			<div class="container">
				<div class="__introduction_group">
					<h1>{{ $homeServiceGroups[2]->name }}</h1>
					<p>{{ $homeServiceGroups[2]->note }}</p>
					<div class="__group_button_common">
						<a href="{{ route('service_groups', $homeServiceGroups[2]->slug) }}" class="__button_common">
							Tìm hiểu thêm
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- thẩm mỹ -->
		<div class="__introduction_3">
			<div class="container">
				<div class="__introduction_group">
					<h1>{{ $homeServiceGroups[3]->name }}</h1>
					<p>{{ $homeServiceGroups[3]->note }}</p>
					<div class="__group_button_common">
						<a href="{{ route('service_groups', $homeServiceGroups[3]->slug) }}" class="__button_common">
							Tìm hiểu thêm
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="__introduction_4">
			<div class="container">
				<div class="session-product-category-2">
					<div class="row list">
                        @foreach ($homeServiceGroups[3]->services as $key=>$service)
						<div class="col-sm-3 col-lg-3 item {{ $key == 0 ? 'offset-lg-3' : '' }}">
							<a href="#" class="__item hovereffect_2">
								<img src="{{ asset($service->avatar_file_name)}}" alt="{{ $service->name }}">
								<div class="overlay">
									<h2>{{ $service->name }}</h2>
								</div>
							</a>
						</div>
                        @endforeach
					</div>
				</div>
			</div>
		</div>
        {{-- Dược - mỹ phẩm --}}
		<div class="__introduction_5">
			<div class="__slider_2">
				<div class="__slider_group">
					<div class="owl-carousel">
                        @foreach ($homeServiceGroups[4]->services as $service)
						<div class="__slide">
							<div class="__slide_img">
								<img src="{{ asset($service->avatar_file_name)}}" alt="{{ $service->name }}">
							</div>
							<div class="__slide_content">
								<h1>{{ $service->name }}</h1>
								<p>{{ $service->note }}</p>
								<div class="__line">
								</div>

								<div class="__group_button_common">
									<a href="#" class="__button_common">
										Xem nhiều hơn
									</a>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
				</div>
			</div>
		</div>
		<!-- khach hang -->
		<div class="__testmonial">
			<div class=" container">
				<div class="__title_common">
					<h1>
						ĐÁNH GIÁ CỦA KHÁCH HÀNG
					</h1>
					<p>
						Chúng tôi mang đến sự tin tưởng tuyệt đối dành cho bạn.
					</p>
				</div>

				<div class="__testmonial_group">
					<div class="__testmonial_slider">
						<div class="owl-carousel">
                            @foreach ($feedbacks as $feedback)
							<div class="__slide">
								<div class="__slide_item">
									<div class="__item_avatar">
										<img src="{{ asset($feedback->avatar_file_name) }}"  alt="{{ $feedback->name }}">
									</div>
									<p class="__item_content">
										{{ $feedback->content }}
									</p>
									<h4 class="__item_author">
										- {{ $feedback->name }} -
									</h4>
									<h5 class="__item_position">
										{{ $feedback->job }}
									</h5>
								</div>
							</div>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- gioi thieu -->
		<div class="__introduction">
			<div class="container">
				<div class="__introduction_group">
					<h1>{{ $homeServiceGroups[5]->name }}</h1>
					<p>
                        {{ $homeServiceGroups[5]->note }}
					</p>
					<div class="__group_button_common">
						<a href="{{ route('service_groups', $homeServiceGroups[5]->slug) }}" class="__button_common">
							Tìm hiểu thêm
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- du an -->
		<div class="__project">
			<div class="__title_common">
				<h1>
					<a href="{{ route('service_groups', $homeServiceGroups[6]->slug) }}">
						{{ $homeServiceGroups[6]->name }}
					</a>
				</h1>
			</div>
			<div class="__project_list">
                @foreach ($homeServiceGroups[6]->services as $service)
                <div class="__item hovereffect ">
					<img src="{{ asset($service->avatar_file_name) }}" alt="{{ $service->name }}">
					<div class="overlay">
					   <p class="date_csvc badge">Admin</p>
					   <h2>{{ $service->name }}</h2>
					</div>
				</div>
                @endforeach
			</div>
		</div>
{{-- Footer --}}
@extends('frontend.layout.footer')
