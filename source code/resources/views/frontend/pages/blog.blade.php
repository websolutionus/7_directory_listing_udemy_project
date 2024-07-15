@extends('frontend.layouts.master')

@section('contents')
    <!--==========================
        BREADCRUMB PART START
    ===========================-->
    <div id="breadcrumb_part">
        <div class="bread_overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center text-white">
                        <h4>blog</h4>
                        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"> Home </a></li>
                                <li class="breadcrumb-item active" aria-current="page"> blog </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==========================
        BREADCRUMB PART END
    ===========================-->


    <!--==========================
        BLOG PART START
    ===========================-->
    <section id="blog_part">
        <div class="blog_part_overlay">
            <div class="container">
                <div class="row">
                    @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="single_blog">
                            <div class="img">
                                <img src="{{ asset($blog->image) }}" alt="bloh images" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <span><i class="fal fa-calendar-alt"></i> {{ date('d M Y', strtotime($blog->created_at)) }}</span>
                                <span><i class="fas fa-user"></i> by {{ $blog->author->name }}</span>
                                <a href="{{ route('blog.show', $blog->slug) }}" class="title">{{ truncate($blog->title) }}</a>
                                <p>{{ truncate(strip_tags($blog->description), 200) }} </p>
                                <a class="read_btn" href="{{ route('blog.show', $blog->slug) }}">learn more <i
                                        class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-12">
                        <div id="pagination">
                            @if ($blogs->hasPages())
                                {{ $blogs->withQueryString()->links() }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        BLOG PART END
    ===========================-->
@endsection
