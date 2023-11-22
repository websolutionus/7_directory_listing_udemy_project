<section id="blog_part">
    <div class="blog_part_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__heading_area">
                        <h2>{{ $sectionTitle?->our_blog_title }}</h2>
                        <p>{{ $sectionTitle?->our_blog_sub_title }}</p>
                    </div>
                </div>
            </div>
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
        </div>
    </div>
</section>
