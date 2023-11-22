<section id="wsus__categoryes">
    <div class="wsus__categorye_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__heading_area">
                        <h2>{{ $sectionTitle?->our_categories_title }}</h2>
                        <p>{{ $sectionTitle?->our_categories_sub_title }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($featuredCategories as $category)
                <div class="col-xl-4 col-sm-6">
                    <a href="{{ route('listings', ['category' => $category->slug]) }}" class="wsus__category_single">
                        <div class="wsus__category_img">
                            <img src="{{ asset($category->background_image) }}" alt="img" class="img-fluid w-100">
                        </div>
                        <div class="wsus__category_text">
                            <div class="wsus__category_text_center">
                                <i class="fab fa-atlassian"></i>
                                <p>{{ $category->name }}</p>
                                <span class="green">{{ $category->listings_count }} listing</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
