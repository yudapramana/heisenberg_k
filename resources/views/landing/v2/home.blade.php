@extends('layouts.landing.v2.master')

@section('title', $title)

@section('_styles')

<style>
    .blog-box {
        background-color: #f9f9f9 !important;
        min-height: 60px !important;
        max-width: 170px !important;
        padding: 30px 10px !important;
        line-height: 15px !important;
        -webkit-box-shadow: 0px 3px 7px 0px rgba(28, 31, 33, 0.15) !important;
        -moz-box-shadow: 0px 3px 7px 0px rgba(28, 31, 33, 0.15) !important;
        box-shadow: 0px 3px 7px 0px rgba(28, 31, 33, 0.15) !important;
        margin: 10px !important;
    }

    .alink {
        font-weight: 600;
        color: #29b477;
        text-decoration: none;
        letter-spacing: 1px;
        position: relative;
    }


    .greenext {
        color: #29b477;
        font-weight: 600;
        letter-spacing: 1px;
    }



    section {
        padding: 30px 0;
    }
</style>
@endsection

@section('content')


<!-- START SECTION BANNER -->
<section class="banner_section p-0 pb-2 mb-2">
    <div id="carouselExampleControls" class="banner_content_wrap carousel slide slide_height_700" data-ride="carousel">
        <div class="carousel-inner">

            @foreach($carousels as $key => $carousel)

            <div class="carousel-item @if($key == 0) active @endif background_bg overlay_bg2"
                data-img-src="{{$carousel->smaller_image}}">
                <div class="banner_slide_content">
                    <div class="container">
                        <!-- STRART CONTAINER -->

                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-md-12 col-sm-12 text-right">
                                <div class="banner_content2 text_white">
                                    <h2 class="animation animated fadeInDown" data-animation="fadeInDown"
                                        data-animation-delay="1s" style="animation-delay: 1s; opacity: 1;">PORTAL PPID
                                        KEMENAG PESISIR SELATAN</h2>
                                    {{-- <p class="animation my-4 animated fadeInUp" data-animation="fadeInUp"
                                        data-animation-delay="1.5s" style="animation-delay: 1.5s; opacity: 1;">Ipsum
                                        generators on the Internet tend to repeat predefined</p> --}}
                                    <p>
                                        <a class="btn btn-default animation animated fadeInUp" href="#"
                                            data-animation="fadeInUp" data-animation-delay="1.8s"
                                            style="animation-delay: 1.8s; opacity: 1;" data-scroll data-toggle="modal"
                                            data-target="#myModal">Daftarkan Permohonan
                                            Informasi</a>
                                    </p>
                                    <a class="btn btn-outline-white animation animated fadeInUp" href="#"
                                        data-animation="fadeInUp" data-animation-delay="1.8s"
                                        style="animation-delay: 1.8s; opacity: 1;" data-scroll data-toggle="modal"
                                        data-target="#surveiModal">Survey Kepuasan Masyarakat</a>
                                </div>
                            </div>
                        </div>

                    </div><!-- END CONTAINER-->
                </div>
            </div>

            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i
                class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i
                class="ion-chevron-right"></i></a>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="letter-spacing: 1px; font-size:x-large; font-weight:bolder">
                Halaman Konfirmasi Permohonan Informasi
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p align="center" class="pt-5">
                    &ensp;<b>PERHATIAN!!!</b><br>
                    Apakah Anda yakin ingin mendaftarkan permohonan informasi secara online?
                </p>
                <center class="pb-5">
                    <div class="hero-btns">
                        <a class="btn btn-default" href="/sect/permohonan_informasi">Ya, saya ingin mendaftar
                            online</a>&nbsp;
                        <a class="btn btn-customed-line" href="/data/detail/gK">Tidak, saya ingin mendaftar
                            manual</a>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>


<!-- Modal Survei -->
<div class="modal fade" id="surveiModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="letter-spacing: 1px; font-size:x-large; font-weight:bolder">
                Bagian Survey Kepuasan Masyarakat
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p align="center">
                    <a href="https://sikm.kemenagpessel.com/isi-survey" target="_blank"><img
                            src="{{ asset('/assets/images/survei.jpeg') }}" style="max-width: 80%;
                        height: auto;"></a>
                </p><br />
            </div>
        </div>
    </div>
</div>

<!-- END SECTION BANNER -->

<!-- START SECTION BANNER -->
{{-- <section class="p-0">
    <div class="container-fluid no-padding">
        <div class="row no-gutters">
            <div class="col-md-3 col-sm-6 text-center">
                <div class="icon_box icon_box_style_7 bg-dark text_white h-100">
                    <div class="box_icon mb-3">
                        <img width="40%" src="https://ppid.sumbarprov.go.id/images/icon/dip.png" alt="icon1">
                    </div>
                    <div class="icon_box_content">
                        <a href="https://ppid.sumbarprov.go.id/home/dip">
                            <h5>Daftar Informasi Publik</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="icon_box icon_box_style_7 bg_blue text_white h-100">
                    <div class="box_icon mb-3">
                        <img width="40%" src="https://ppid.sumbarprov.go.id/images/icon/permohonan_informasi.png"
                            alt="icon2">
                    </div>
                    <div class="icon_box_content">
                        <a
                            href="https://ppid.sumbarprov.go.id/home/pages/41-tata-cara-pengajuan-informasi-dan-keberatan-informasi.html">
                            <h5>Permohonan Informasi</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="icon_box icon_box_style_7 bg_dark_blue text_white h-100">
                    <div class="box_icon mb-3">
                        <img width="40%" src="https://ppid.sumbarprov.go.id/images/icon/statistik.png" alt="icon3">
                    </div>
                    <div class="icon_box_content">
                        <a href="https://ppid.sumbarprov.go.id/home/statistik">
                            <h5>Statistik</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="icon_box icon_box_style_7 bg-dark text_white h-100">
                    <div class="box_icon mb-3">
                        <img width="40%" src="https://ppid.sumbarprov.go.id/images/icon/member.png" alt="icon4">
                    </div>
                    <div class="icon_box_content">
                        <a href="https://ppid.sumbarprov.go.id/registrasi">
                            <h5>Registrasi</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- END SECTION BANNER -->

{{-- TESTING --}}
<section class="blog mb-0">
    <div class="container">
        <div class="row animation justify-content-center" data-animation="fadeInLeft" data-animation-delay="0.2s">

            <div class="col-sm-6 col-md-6 col-lg-4 blog-box">
                <center>
                    <img src="{{ asset('assets/images/logo_ptsp.png') }}"><br><br>
                    <a class="alink" href="https://ptsp.kemenagpessel.com/">PTSP</a>
                </center>
            </div>
            {{-- <div class="col-sm-6 col-md-6 col-lg-4 blog-box">
                <center>
                    <img src="https://ppid.kemenag.go.id/v4/images/jdih-logo.png" width="70"><br><br>
                    <a class="alink" href="https://jdih.kemenag.go.id/">Produk Hukum</a>
                </center>
            </div> --}}
            <div class="col-sm-6 col-md-6 col-lg-4 blog-box">
                <center>
                    <img src="{{ asset('assets/images/logo_datuak.png') }}"><br><br>
                    <a class="alink" href="https://datuak.kemenagpessel.com">Satu Data</a>
                </center>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 blog-box">
                <center>
                    <img src="https://ppid.kemenag.go.id/v4/images/dumas-logo-transparent.png" width="70"><br><br>
                    <a class="alink" href="https://simwas.kemenag.go.id/~dumas/">Dumas dan <i>Whistleblowing
                            System</i></a>
                </center>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 blog-box">
                <center>
                    <img src="https://ppid.kemenag.go.id/v4/images/logo_kemenag.png" width="70"><br><br>
                    <a class="alink" href="https://pesisirselatan.kemenag.go.id">Link Website</a>
                </center>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 blog-box">
                <center>
                    <img src="https://ppid.kemenag.go.id/v4/images/logo_kemenag.png" width="70"><br><br>
                    <a class="alink" href="https://pesisirselatan.kemenag.go.id">Reformasi Birokrasi</a>
                </center>
            </div>
        </div>
    </div>

</section>
{{-- TESTING --}}

<!-- START SECTION ABOUT US -->
<section class="overflow_hide">
    <div class="container">
        <div class="row align-items-center">
            {{-- <div class="col-md-6 col-sm-12 animation" data-animation="fadeInLeft" data-animation-delay="0.1s">
                <div class="mb-4 mb-lg-0 ">
                    <img src="{{$services[0]->square_cover_image}}" alt="about_img" />
                </div>
            </div> --}}
            <div class="col-lg-6 col-sm-12 animation" data-animation="fadeInLeft" data-animation-delay="0.2s">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($activities as $key => $act)
                            <li data-target="#carouselExampleCaptions" data-slide-to="{{$key}}"
                                class="@if($key == 1) active @endif"></li>
                            @endforeach
                            {{-- <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li> --}}
                        </ol>
                        <div class="carousel-inner">
                            @foreach($activities as $key => $act)

                            <div class="carousel-item  @if($key == 0) active @endif">
                                <img src="{{$act->square_cover_image}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <small style="color:#ffffff;">{{ \Carbon\Carbon::parse($act->date)->format('d F Y')
                                        }}</small><br>
                                    <a style="color:#ffffff;"
                                        href="/act/{{$act->slug}}">{{\Illuminate\Support\Str::limit($act->name, 100,
                                        $end='...')}}&nbsp;</a>

                                </div>
                            </div>
                            @endforeach


                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>



            </div>
            <div class="col-md-6 col-sm-12 animation" data-animation="fadeInRight" data-animation-delay="0.2s">
                <div class="heading_s3 mb-md-3">
                    <span class="sub_title">Tentang</span>
                    <h2>{{$services[0]->{$titleLocale} }}</h2>
                </div>

                <p style="font-size: small; text-align:justify;">{!! nl2br($services[0]->description) !!}</p>
                <a style="font-size:smaller;"
                    href="{!! '/' .isset($services[0]->next_url) ? $services[0]->next_url : '' !!}"
                    class="btn btn-success" data-original-title="" title=""
                    aria-describedby="tooltip362623">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT US -->

<!-- START SECTION SERVICE -->
<section class="parallax_bg overlay_bg4" data-parallax-bg-image="{{ asset('demo-assets/images/service_bg99.jpg') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                <div class="text_white">
                    <div class="heading_s3 mb-md-3 heading_light text-center">
                        <h2>Daftar Informasi Tersedia</h2>
                    </div>
                    {{-- <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                        embarrassing hidden in the middle of text.</p> --}}
                </div>
            </div>
        </div>
        <div class="row animation">
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="icon_box icon_box_style_8 text_white animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">

                    <div class="icon_box_content">
                        <h4 class="font-weight-bolder">INFORMASI BERKALA</h4>
                        <p>Merupakan informasi yang wajib disediakan dan diumumkan secara berkala.</p>
                        <a href="info/informasi_berkala" class="btn btn-outline-white btn-sm">Selengkapnya</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="icon_box icon_box_style_8 text_white animation" data-animation="fadeInUp"
                    data-animation-delay="0.3s">

                    <div class="icon_box_content">
                        <h4 class="font-weight-bolder">INFORMASI SERTA MERTA</h4>
                        <p>Informasi yang berkaitan dengan hajat hidup orang banyak dan ketertiban umum</p>
                        <a href="info/informasi_serta_merta" class="btn btn-outline-white btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="icon_box icon_box_style_8 text_white animation" data-animation="fadeInUp"
                    data-animation-delay="0.4s">

                    <div class="icon_box_content">
                        <h4 class="font-weight-bolder">INFORMASI SETIAP SAAT</h4>
                        <p>Informasi yang disediakan oleh Badan Publik dan siap tersedia langsung</p>
                        <a href="info/informasi_setiap_saat" class="btn btn-outline-white btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="icon_box icon_box_style_8 text_white animation" data-animation="fadeInUp"
                    data-animation-delay="0.5s">

                    <div class="icon_box_content">
                        <h4 class="font-weight-bolder">INFORMASI DIKECUALIKAN</h4>
                        <p>informasi yang tidak dapat diakses oleh pemohon informasi publik </p>
                        <a href="info/informasi_dikecualikan" class="btn btn-outline-white btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- END SECTION SERVICE -->




<!-- START SECTION BLOG -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s3 mb-md-3 text-center">
                    <h2>Berita PPID</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="clearfix small_divider"></div>
            </div>
        </div>
        <div class="row blog_wrap justify-content-center animation" data-animation="fadeInUp"
            data-animation-delay="0.4s">
            @foreach($recent_posts as $key => $post)
            <div class="col-lg-4 col-md-6 mb-md-4 mb-2 pb-2">
                <div class="blog_post blog_style1">
                    <div class="blog_img">
                        <a href="#">
                            <img src="{{$post->cover_small}}" alt="blog_small_img1">
                        </a>
                        <span class="post_date bg_blue text-light"> {{ $post->created_at->format('F d, Y') }}</span>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h6 class="blog_title"><a href="/post/{{$post->slug}}">{{$post->title}}</a></h6>
                            <ul class="list_none blog_meta">
                                <li>by <a href="#">{{ $post->user->username }}</a></li>
                                <li><a href="#">{{$post->view_count}} Reads</a></li>
                            </ul>
                            <p>{!!\Illuminate\Support\Str::limit($post->desc, 150, $end='...')!!}</p>
                            <a href="/post/{{$post->slug}}" class="text-capitalize">Selengkapnya <i
                                    class="ti-angle-double-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- END SECTION BLOG -->


<section id="contact-us" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 animation" data-animation="fadeInRight" data-animation-delay="0.2s">
                <h4 class="greenext">Survei Kepuasan Masyarakat</h4>
                <div class="hero-btns">
                    {{-- <a data-scroll="" data-toggle="modal" data-target="#surveiModal">Survei Kepuasan Masyarakat</a>
                    --}}

                    <a class="btn btn-default animation animated fadeInUp" href="#" data-animation="fadeInUp"
                        data-animation-delay="1.8s" style="animation-delay: 1.8s; opacity: 1;" data-scroll
                        data-toggle="modal" data-target="#surveiModal">Survei Kepuasan Masyarakat</a>
                </div><br>
                <div class="modal fade" id="surveiModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <p align="center">
                                    <a href="https://sikm.kemenagpessel.com/isi-survey"><img
                                            src="images/survei.jpg"></a>
                                </p><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-6 animation" data-animation="fadeInLeft" data-animation-delay="0.2s">
                <h4 class="greenext">Jumlah Permohonan Informasi Publik</h4>
                <a href="#">
                    <h1>{{$totalpermohonanselesai}}</h1>
                </a>
            </div>
        </div>
        <br><br>
        <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            <div class="col-12">

                <table border="0">
                    <tbody>
                        <tr>
                            <td>
                                <a style="color:#000000;" href="https://www.facebook.com/kemenagpessel.painan"><img
                                        src="https://ppid.kemenag.go.id/v4/images/fb.png" width="20px"> Kemenag
                                    Pessel</a> 
                                {{-- <a style="color:#000000;" href="https://twitter.com/Kemenag_RI"><img
                                        src="https://ppid.kemenag.go.id/v4/images/twitter.png"
                                        width="20px"> @Kemenag_RI</a>  --}}
                                <a style="color:#000000;" href="https://www.instagram.com/kemenag_pesisir_selatan/"><img
                                        src="https://ppid.kemenag.go.id/v4/images/ig.png"
                                        width="20px"> @kemenag_pesisir_selatan</a> 
                                <a style="color:#000000;" href="https://youtube.com/@kantorkemenagpessel2940"><img
                                        src="https://ppid.kemenag.go.id/v4/images/yt.png" width="20px"> Kemenag
                                    Pessel</a> 
                                <a style="color:#000000;" href="https://www.tiktok.com/@kemenagpessel"><img
                                        src="https://ppid.kemenag.go.id/v4/images/tiktok.png"
                                        width="20px"> @kemenagpessel</a> 
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>


@endsection


@section('_scripts')
{{-- No Data --}}
@endsection