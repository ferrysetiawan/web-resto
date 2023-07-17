@extends('layouts.news')

@section('content')
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>News</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html">News</a></li>
                <li>Detail News</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-8 entries">

                <article class="entry entry-single">

                    <div class="entry-img">
                        <img src="{{ asset($post->thumbnail) }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="blog-single.html">{{ $post->judul }}</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                    href="blog-single.html">{{ $post->user->name }}</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                    href="blog-single.html"><time datetime="2020-01-01">{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('D MMMM Y') }}</time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        {!! $post->content !!}

                    </div>
                </article><!-- End blog entry -->
            </div><!-- End blog entries list -->

            <div class="col-lg-4">

                <div class="sidebar">

                    <h3 class="sidebar-title">Search</h3>
                    <div class="sidebar-item search-form">
                        <form action="">
                            <input type="text">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div><!-- End sidebar search formn-->

                    <h3 class="sidebar-title">Categories</h3>
                    <div class="sidebar-item categories">
                        <ul>
                            <li><a href="#">General <span>(25)</span></a></li>
                            <li><a href="#">Lifestyle <span>(12)</span></a></li>
                            <li><a href="#">Travel <span>(5)</span></a></li>
                            <li><a href="#">Design <span>(22)</span></a></li>
                            <li><a href="#">Creative <span>(8)</span></a></li>
                            <li><a href="#">Educaion <span>(14)</span></a></li>
                        </ul>
                    </div><!-- End sidebar categories-->

                    <h3 class="sidebar-title">Recent Posts</h3>
                    <div class="sidebar-item recent-posts">
                        <div class="post-item clearfix">
                            <img src="/image/gallery/lele_bakar.jpg" alt="">
                            <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="/image/gallery/daging_kemangi.jpg" alt="">
                            <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="/image/gallery/chiken_wing.jpg" alt="">
                            <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="/image/gallery/cah_kangkung.jpg" alt="">
                            <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="/image/gallery/ayam_garang_asem.jpg" alt="">
                            <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                    </div><!-- End sidebar recent posts-->

                    <h3 class="sidebar-title">Tags</h3>
                    <div class="sidebar-item tags">
                        <ul>
                            <li><a href="#">App</a></li>
                            <li><a href="#">IT</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Mac</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Studio</a></li>
                            <li><a href="#">Smart</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                    </div><!-- End sidebar tags-->

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div>

    </div>
</section>
@endsection