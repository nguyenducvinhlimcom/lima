<!-- footer -->
<div class="__footer">
    <div class="__footer_top">
        <div class="container">
            <div><img class="logo-f" src="{{ asset($company->avatar_file_name)}}"></div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="__title">
                        <h5>
                            Liên hệ với chúng tôi
                        </h5>
                    </div>
                    <ul class="__footer_ul">
                        <li>
                            <a>
                                <i class="fas fa-home"></i>
                                <span>
                                    {{ $company->address }}
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:{{$company->telephone}}">
                                <i class="fal fa-phone"></i>
                                <span>
                                    {{ $company->telephone }}
                                </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <i class="fas fa-envelope-open"></i>
                                <span>
                                    {{ $company->email }}
                                </span>
                            </a>
                        </li>
                    </ul>

                </div>

                <div class="col-lg-3">
                    <div class="__title">
                        <h5>
                            Dịch vụ {{ $company->company_name }}
                        </h5>
                    </div>

                    <ul class="__footer_ul __footer_ul2">
                        @foreach ($service_groups as $service_group)
                        <li>
                            <a href="{{ route('service_groups', $service_group->slug) }}" >
                                {{ $service_group->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>

                </div>

                <div class="col-lg-3">
                    <div class="__title">
                        <h5>
                            Fanpage Update
                        </h5>
                    </div>
                    <ul class="__footer_ul __footer_ul3">
                        <li>
                            <a href="{{ $company->facebook }}" target="_bank">
                                <div>
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                                <span>
                                    Facebook
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $company->website }}">
                                <div>
                                    <i class="fab fa-google"></i>
                                </div>
                                <span>
                                    Google
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fab fa-twitter"></i>
                                </div>
                                <span>
                                    Twitter
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="#" target="_bank">
                                <div>
                                    <i class="fab fa-youtube"></i>
                                </div>
                                <span>
                                    Youtube
                                </span>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-3">
                    <div class="__title">
                        <h5>
                            Giờ mở cửa
                        </h5>
                    </div>

                    <ul class="__footer_ul __footer_ul2">
                        <li>
                            <a href="">
                                THỨ HAI - THỨ SÁU: 9.00 AM - 10.00 AM
                            </a>
                        </li>
                        <li>
                            <a href="">
                                THỨ BẢY: 7.30 AM - 8.00 PM
                            </a>
                        </li>
                        <li>
                            <a href="">
                                CHỦ NHẬT: CLOSE
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- move top -->
<a href="" class="__move_top __moveTop">
    <i class="fas fa-chevron-up"></i>
</a>
</div>
</body>
