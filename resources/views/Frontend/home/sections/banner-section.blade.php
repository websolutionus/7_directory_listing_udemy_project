<section id="wsus__banner" style="background: url({{ asset(@$hero->background) }})">
    <div class="wsus__banner_overlay">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-7">
                    <div class="wsus__banner_text">
                        <h1>{!! @$hero->title !!}</h1>
                        <p>{!! @$hero->sub_title !!}</p>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-5">
                    <form action="{{ route('listings') }}" method="GET">
                        <h3>Find the Best Place Title</h3>
                        <div class="wsus__search_area">
                            <input type="text" placeholder="What we are looking for?" name="search">
                        </div>
                        <div class="wsus__search_area">
                            <select class="select_2" name="category">
                                <option value="">categories</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->slug }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="wsus__search_area">
                            <select class="select_2" name="location" >
                                <option value="">location</option>
                                @foreach ($locations as $location)
                                    <option value="{{ $location->slug }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="wsus__search_area m-0">
                            <button type="submit" class="read_btn">search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
