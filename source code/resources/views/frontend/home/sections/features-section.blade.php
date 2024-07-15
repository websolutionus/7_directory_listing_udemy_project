<section id="wsus__features">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 m-auto">
                <div class="wsus__heading_area">
                    <h2>{{ $sectionTitle?->our_feature_title }}</h2>
                    <p>{{ $sectionTitle?->our_feature_sub_title }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($ourFeatures as $feature)
            <div class="col-xl-4 col-md-6">
                <div class="wsus__feature_single ">
                    <div class="icon">
                        <i class="{{ $feature->icon }}"></i>
                    </div>
                    <h5>{{ $feature->title }}</h5>
                    <p>{{ $feature->short_description }}</p>
                    <span>{{ ++$loop->index }}</span>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
