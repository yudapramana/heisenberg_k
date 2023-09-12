<header class="header_wrap dark_skin hover_menu_style3">
    <div class="top-header bg_blue border-0 light_skin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 col-sm-5 col-8">
                    <ul class="list_none social_icons border_social rounded_social social_white">
                        <li><a href="https://www.facebook.com/kemenagpessel.painan"><i
                                    class="ion-social-facebook"></i></a></li>
                        {{-- <li><a href="#"><i class="ion-social-twitter"></i></a></li> --}}
                        {{-- <li><a href="#"><i class="ion-social-googleplus"></i></a></li> --}}
                        <li><a href="https://youtube.com/@kantorkemenagpessel2940"><i
                                    class="ion-social-youtube-outline"></i></a></li>
                        <li><a href="https://www.instagram.com/kemenag_pesisir_selatan"><i
                                    class="ion-social-instagram-outline"></i></a></li>
                    </ul>
                </div>

                <div class="col-md-8 col-sm-7 col-4">
                    <a href="/register"
                        class="btn btn-outline-white btn-sm float-right d-sm-block d-none">Registrasi</a>
                    <div class="lng_dropdown lng_dropdown_white float-right mr-sm-3">
                        <a href="{{ route('login') }}"
                            class="btn btn-outline-white btn-sm float-right d-sm-block d-none">login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a class="navbar-brand m-auto" href="/">
                        <img class="logo_light" src="{{ asset('assets/images/logo/ppid_blacked_cropped.png') }}"
                            alt="logo" />
                        <img class="logo_dark" src="{{ asset('assets/images/logo/ppid_blacked_cropped.png') }}"
                            alt="logo" />
                        <img class="logo_default" src="{{ asset('assets/images/logo/ppid_blacked_cropped.png') }}"
                            alt="logo" />
                    </a>
                </div>
                <div class="col-md-9 d-none d-md-block">
                    <ul class="list_none header_info justify-content-end">
                        <li>
                            <i class="ti-email"></i>
                            <div class="hd_info">
                                <p>Email</p>
                                <span>pessel@kemenag.go.id</span>
                            </div>
                        </li>
                        <li>
                            <i class="ti-location-pin"></i>
                            <div class="hd_info">
                                <p>Alamat</p>
                                <span>Jln. Imam Bonjol, IV Jurai</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler float-none" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav">

                        @foreach($landingmenuitems as $key => $menuitem)

                        @if(count($menuitem->children[0]) == 0)
                        <li><a class="nav-link @if (request()->segment(1) == '') @endif " target="{{$menuitem->target}}"
                                href="@if($menuitem->target == '_self') {{ config('isec.base_url') . '/'.$menuitem->slug}} @else {{$menuitem->slug}} @endif">{{$menuitem->title}}</a>
                        </li>
                        @else

                        <li class="dropdown">
                            <a data-toggle="dropdown" class="nav-link dropdown-toggle"
                                href="@if($menuitem->target == '_self') {{'/'.$menuitem->slug}} @else {{$menuitem->slug}} @endif">{{$menuitem->title}}</a>
                            <div class="dropdown-menu">
                                <ul>
                                    @foreach($menuitem->children[0] as $k2 => $menuitem2)

                                    @if(count($menuitem2->children[0]) == 0)
                                    <li>
                                        <a class="dropdown-item nav-link nav_item" target="{{$menuitem2->target}}"
                                            href="@if($menuitem2->target == '_self') {{ config('isec.base_url') .  '/'.$menuitem2->slug}} @else {{$menuitem2->slug}} @endif">{{$menuitem2->title}}</a>
                                    </li>
                                    @else
                                    <li>
                                        <a class=" dropdown-item menu-link dropdown-toggler"
                                            href="@if($menuitem2->target == '_self') {{ config('isec.base_url') .  '/'.$menuitem2->slug}} @else {{$menuitem2->slug}} @endif">{{$menuitem2->title}}</a>


                                        <div class="dropdown-menu">
                                            <ul>
                                                @foreach($menuitem2->children[0] as $k2 => $menuitem3)
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        target="{{$menuitem3->target}}"
                                                        href="@if($menuitem3->target == '_self') {{ config('isec.base_url') .  '/'.$menuitem3->slug}} @else {{$menuitem3->slug}} @endif">{{$menuitem3->title}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                    </li>

                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </li>

                        @endif
                        @endforeach


                        {{-- <li><a class="nav-link" href="demo-medical/about.html">About Us</a></li>

                        <li><a class="nav-link" href="gallery.html">Gallery</a></li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Blog</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item"
                                            href="demo-medical/blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item"
                                            href="demo-medical/blog-detail.html">Blog Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="nav-link" href="demo-medical/contact.html">Contact Us</a></li> --}}
                    </ul>
                </div>
                {{-- <div class="search_box">
                    <form>
                        <div class="radius_input">
                            <input type="text" class="form-control" required="" placeholder="Search...">
                        </div>
                        <button type="submit" name="submit" value="Submit"><i
                                class="ion-ios-search-strong"></i></button>
                    </form>
                </div> --}}
            </nav>
        </div>
    </div>
</header>