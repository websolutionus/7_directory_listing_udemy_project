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
                    <form>
                        <h3>Find the Best Place Title</h3>
                        <div class="wsus__search_area">
                            <input type="text" placeholder="What we are looking for?">
                        </div>
                        <div class="wsus__search_area">
                            <select class="select_2" name="state">
                                <option value="">categories</option>
                                <option value="">categories 1</option>
                                <option value="">categories 2</option>
                                <option value="">categories 3</option>
                                <option value="">categories 4</option>
                                <option value="">categories 5</option>
                            </select>
                        </div>
                        <div class="wsus__search_area">
                            <select class="select_2" name="state">
                                <option value="">location</option>
                                <option value="">location 1</option>
                                <option value="">location 2</option>
                                <option value="">location 3</option>
                                <option value="">location 4</option>
                                <option value="">location 5</option>
                            </select>
                        </div>
                        <div class="wsus__search_area m-0">
                            <a href="#" class="read_btn">search</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
