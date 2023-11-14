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
                        <h4>blog details</h4>
                        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}"> Home </a></li>
                                <li class="breadcrumb-item active" aria-current="page"> blog details</li>
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
        BLOG DETAILS START
    ===========================-->
    <section id="blog_details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="main_blog">
                        <div class="main_blog_img">
                            <img src="{{ asset($blog->image) }}" alt="blog" class="img-fluid w-100">
                        </div>
                        <ul class="main_blog_header">
                            <li><a href="javascipts:;"><i class="fal fa-calendar-alt"></i> {{ date('d M Y', strtotime($blog->created_at)) }}</a></li>
                            <li><a href="javascipts:;"><i class="fal fa-comment-dots"></i> 0 Comment</a></li>
                            <li><a href="javascipts:;"><i class="fal fa-eye"></i> {{ $blog->views }} Views</a></li>
                            <li><a href="javascipts:;"><i class="fal fa-tags"></i> {{ $blog->category->name }} </a></li>
                        </ul>
                        <h4>{{ $blog->title }}</h4>
                        {!! $blog->description !!}
                        <div class="blog_comment_area">
                            <h5 class="wsus__single_comment_heading">Total Comment 05</h5>
                            <div class="wsus__single_comment">
                                <div class="wsus__single_comment_img">
                                    <img src="images/user_large_img.jpg" alt="comment" class="img-fluid w-100">
                                </div>
                                <div class="wsus__single_comment_text">
                                    <h5>sumon jahan</h5>
                                    <span>01-Dec-2021</span>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad maxime placeat
                                        ducimus magni facilis delectus.</p>
                                </div>
                            </div>
                            @auth
                            <form class="input_comment" action="{{ route('blog-comment.store') }}" method="POST">
                                @csrf
                                <h5>post a Comment </h5>
                                <div class="row">

                                    <div class="col-xl-12">
                                        <div class="blog_single_input">
                                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                            <textarea cols="3" rows="5" placeholder="Comment" name="comment"></textarea>
                                            <button type="submit" class="read_btn">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @endauth
                            @guest
                                <div class="alert alert-warning">Please <a href="{{ route('login') }}">login</a> for add a comment!</div>
                            @endguest

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="blog_sidebar">
                        <div class="blog_search">
                            <h4>search</h4>
                            <form action="{{ route('blog.index') }}" method="GET">
                                <input type="text" placeholder="Search" name="search">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog_category">
                            <h4>Categories</h4>
                            <ul>
                                @foreach ($categories as $category)
                                <li><a href="{{ route('blog.index', ['category' => $category->slug]) }}">{{ $category->name }} <span>{{ $category->blogs_count }}</span></a></li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="sidebar_blog">
                            <h4>Popular Post</h4>
                            <a href="#" class="sidebar_blog_single">
                                <div class="sidebar_blog_img">
                                    <img src="images/location_1.jpg" alt="blog" class="imgofluid w-100">
                                </div>
                                <div class="sidebar_blog_text">
                                    <h5>One Thing Separates Creators From Consumers</h5>
                                    <p> <span>Jul 29 2021 </span> 2 Comment </p>
                                </div>
                            </a>
                            <a href="#" class="sidebar_blog_single">
                                <div class="sidebar_blog_img">
                                    <img src="images/location_2.jpg" alt="blog" class="imgofluid w-100">
                                </div>
                                <div class="sidebar_blog_text">
                                    <h5>Should Startups Care About Profitability?</h5>
                                    <p> <span>Jul 29 2021 </span> 2 Comment </p>
                                </div>
                            </a>
                            <a href="#" class="sidebar_blog_single">
                                <div class="sidebar_blog_img">
                                    <img src="images/location_3.jpg" alt="blog" class="imgofluid w-100">
                                </div>
                                <div class="sidebar_blog_text">
                                    <h5>The Best Delicious Coffee Shop In Bangkok China.</h5>
                                    <p> <span>Jul 29 2021 </span> 2 Comment </p>
                                </div>
                            </a>
                            <a href="#" class="sidebar_blog_single">
                                <div class="sidebar_blog_img">
                                    <img src="images/location_4.jpg" alt="blog" class="imgofluid w-100">
                                </div>
                                <div class="sidebar_blog_text">
                                    <h5>List Of Benifits And Impressive Listeo Services</h5>
                                    <p> <span>Jul 29 2021 </span> 2 Comment </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        BLOG DETAILS END
    ===========================-->
@endsection
