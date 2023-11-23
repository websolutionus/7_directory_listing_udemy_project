<section id="wsus__counter" style="background: url({{ asset(@$counter->background) }})">
    <div class="wsus__counter_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-6 col-md-3">
                    <div class="wsus__counter_single">
                        <span class="counter">{{ @$counter->counter_one }}</span>
                        <p>{{ @$counter->counter_title_one }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-6 col-md-3">
                    <div class="wsus__counter_single">
                        <span class="counter">{{ @$counter->counter_two }}</span>
                        <p>{{ @$counter->counter_title_two }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-6 col-md-3">
                    <div class="wsus__counter_single">
                        <span class="counter">{{ @$counter->counter_three }}</span>
                        <p>{{ @$counter->counter_title_three }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-6 col-md-3">
                    <div class="wsus__counter_single">
                        <span class="counter">{{ @$counter->counter_four }}</span>
                        <p>{{ @$counter->counter_title_four }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
