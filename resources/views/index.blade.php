@extends('layouts.global')

@section('content')
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <h1>Laras Garden Resto</h1>
                <h2>The World Of Healthy & Happiness</h2>
                <a href="#about" class="btn-get-started scrollto">Explore Menu</a>
            </div>
        </div>
    </div>
</section>

<section class="section-padding-about section margin-top" id="about">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2"
                    style="background-image: url({{ asset($about->gambar) }}); background-size: cover;">

                </div>
                <div class="col-sm-7 py-5 pl-md-0 pl-4">
                    <div class="heading-section pl-lg-5 ml-md-5">
                        <span class="subheading-about">
                            About
                        </span>
                        <h2>
                            Welcome to Resto
                        </h2>
                    </div>
                    <div class="pl-lg-5 ml-md-5">
                        <p>{!! $about->deskripsi !!}</p>
                        <h3 class="mt-5">Special Recipe</h3>
                        <div class="row">
                            @foreach ($specialRecipe as $item)
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="{{ asset($item->gambar) }}" />
                                    <h6>{{ $item->judul }}</h6>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section menu -->
<section id="food_menu" class="food_menu">
    <div class="menu">
        <div class="container">
            <div class="section-header text-center mb-2">
                <p style="color: #5C7B74">Food Menu</p>
                <h2>Delicious Food Menu</h2>
            </div>
            <div class="menu-tab mt-2">
                <ul class="nav nav-pills justify-content-center">
                    @foreach ($categoryProduct as $count => $item)
                    <li class="nav-item">
                        <a class="nav-link {{ $count == 0 ? 'active' : '' }}" data-toggle="pill" href="#nav-home-{{ $item->id }}">{{ $item->nama_kategori }}</a>
                    </li>
                    @endforeach
                </ul>
                <div class="tab-content">
                    @foreach ($categoryProduct as $count=>$item)
                    <div id="nav-home-{{ $item->id }}" class="container tab-pane {{ $count == 0 ? 'active' : 'fade' }}">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-12">
                                @foreach ($item->product as $prod)
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="{{ asset($prod->gambar) }}" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>{{ $prod->nama_produk }}</span> <strong>Rp. {{ number_format($prod->harga) }}</strong></h3>
                                        <p>{{ $prod->deskripsi }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-lg-5 d-none d-lg-block">
                                <img src="{{ asset($item->gambar) }}" alt="Image">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end sectio nmenu -->
<!-- section chef -->
<section id="chef" class="chef margin-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <span class="subheading-chef">Our Chefs</span>
                    <h2>Meet Our Chefs</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($chefs as $chef)
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <img src="{{ asset($chef->gambar) }}" alt="Chef #1">
                    </div>
                    <div class="down-content">
                        <h4>{{ $chef->nama }}</h4>
                        <span>{{ $chef->posisi }}</span>
                    </div>
                </div>
            </div>
            @empty

            @endforelse

        </div>
    </div>
</section>
<!-- end section chef -->
<!-- section event -->
<section class="section-event margin-top" id="event">
    <div class="wrap-slick2">
        <div class="slick2">
            @foreach ($events as $event)
            <div class="item-slick2 item1-slick2" style="background-image: url('{{ asset($event->background) }}');">
                <div class="wrap-content-slide2 p-t-115 p-b-208">
                    <div class="container">
                        <!-- - -->
                        <div class="title-event t-center m-b-52">
                            <span class="tit2 p-l-15 p-r-15">
                                Upcomming
                            </span>

                            <h3 class="tit6 t-center p-l-15 p-r-15 p-t-3">
                                Events
                            </h3>
                        </div>

                        <!-- Block2 -->
                        <div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false" data-appear="zoomIn">
                            <!-- Pic block2 -->
                            <a href="#" class="wrap-pic-blo2 bg1-blo2"
                                style="background-image: url('{{ asset($event->thumbnail) }}');">
                                <div class="time-event size10 txt6 effect1">
                                    <span class="txt-effect1 flex-c-m t-center">
                                        {{ \Carbon\Carbon::parse($event->tanggal)->isoFormat('dddd, D MMMM Y') }} -
                                        {{ \Carbon\Carbon::parse($event->tanggal)->format('H:i') }} WIB
                                    </span>
                                </div>
                            </a>

                            <!-- Text block2 -->
                            <div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
                                <h4 class="tit7 t-center m-b-10">
                                    {{ $event->nama_event }}
                                </h4>

                                <p class="t-center">
                                    {{ $event->summary }}
                                </p>

                                <div class="clockdiv flex-sa-m flex-w w-full m-t-40" data-date="{{ $event->tanggal }}">

                                    <div class="size11 flex-col-c-m">
                                        <span id="days" class="dis-block t-center txt7 m-b-2 days">
                                            00
                                        </span>

                                        <span class="dis-block t-center txt8">
                                            Days
                                        </span>
                                    </div>

                                    <div class="size11 flex-col-c-m">
                                        <span class="dis-block t-center txt7 m-b-2 hours">
                                            00
                                        </span>

                                        <span class="dis-block t-center txt8">
                                            Hours
                                        </span>
                                    </div>

                                    <div class="size11 flex-col-c-m">
                                        <span id="minutes" class="dis-block t-center txt7 m-b-2 minutes">
                                            00
                                        </span>

                                        <span class="dis-block t-center txt8">
                                            Minutes
                                        </span>
                                    </div>

                                    <div class="size11 flex-col-c-m">
                                        <span id="seconds" class="dis-block t-center txt7 m-b-2 seconds">
                                            00
                                        </span>

                                        <span class="dis-block t-center txt8">
                                            Seconds
                                        </span>
                                    </div>
                                </div>


                                <a href="#" class="txt4 m-t-40">
                                    View Details
                                    <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="wrap-slick2-dots"></div>
    </div>
</section>
<!-- end section event -->
<!-- section news -->
<section class="ftco-section bg-light" id="news">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center">
                <span class="subheading">Our News</span>
                <h2>Recent News</h2>
            </div>
        </div>
        <div class="row d-flex">
            @foreach ($news as $item)
            <div class="col-md-4 d-flex">
                <div class="blog-entry justify-content-end">
                    <a href="blog-single.html" class="block-20" style="background-image: url({{ asset($item->thumbnail) }});">
                    </a>
                    <div class="text p-4 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4">
                            <div class="one">
                                <span class="day">{{ $item->created_at->format('d') }}</span>
                            </div>
                            <div class="two">
                                <span class="yr">{{ $item->created_at->format('Y') }}</span>
                                <span class="mos">{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('MMMM') }}</span>
                            </div>
                        </div>
                        <h3 class="heading mt-2"><a href="{{ route('news.show', $item->slug) }}">{{ $item->judul }}</a></h3>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            
            <div class="col-md-12 text-center">
                <a href="{{ route('news.index') }}" class="btn btn-info px-4 py-2">Read More</a>
            </div>
        </div>
    </div>
</section>
<!-- end section news -->
<!-- section gallery -->
<section class="gallery margin-top" id="gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="heading-section">
                    <span class="subheading-gallery">Our Gallery</span>
                    <h2>a collection of pictures to complete the memories</h2>
                </div>
            </div>
        </div>
        <div class="row g-0">
            @foreach ($galleries as $item)
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset($item->gambar) }}" class="gallery-lightbox">
                        <img src="{{ asset($item->gambar) }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- end section gallery -->
<!-- section contact -->
<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Here You Can Make A Reservation</h2>
                    </div>
                    <p>Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a eleifend riqsie, namei
                        sollicitudin urna
                        diam, sed commodo purus porta ut.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Phone Numbers</h4>
                                <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>Emails</h4>
                                <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Table Reservation</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <div id="filterDate2">
                                    <div class="input-group date" data-date-format="dd/mm/yyyy">
                                        <input name="date" id="date" type="text" class="form-control"
                                            placeholder="dd/mm/yyyy">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Message"
                                        required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button-icon">Make A
                                        Reservation</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section gallery -->
@endsection
