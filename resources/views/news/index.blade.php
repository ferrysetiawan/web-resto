@extends('layouts.news')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>News</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>News</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<!-- section news -->
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center">
                <span class="subheading">Our News</span>
                <h2>Recent News</h2>
            </div>
        </div>
        <div class="row d-flex">
            @foreach ($posts as $item)
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
        </div>
    </div>
</section>
<!-- end section news -->
@endsection
