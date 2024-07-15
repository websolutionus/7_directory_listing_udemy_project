@extends('frontend.layouts.master')

@section('contents')
  <!--=============================
    DASHBOARD START
  ==============================-->
  <section id="dashboard">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
            @include('frontend.dashboard.sidebar')
        </div>
        <div class="col-lg-9">
          <div class="dashboard_content">
            <div class="my_listing p_xm_0">
              <div class="row">
                  <div class="col-md-6">
                      <div class="visitor_rev_area">
                          <h4>Listing Reviews</h4>
                    @foreach ($reviews as $review)
                    <div class="visitor_rev_single">
                      <div class="visitor_rev_img">
                        <img style="object-fit: cover !important;
                        height: 117px !important;" src="{{ asset($review->listing->image) }}" alt="product" class="img-fluid w-100">
                      </div>
                      <div class="visitor_rev_text">
                        <a class="title" href="#">{{ truncate($review->listing->title, 20) }} <span>{{ date('M d, Y', strtotime($review->created_at)) }}</span></a>
                        <p>

                          @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $review->rating)
                            <i class="fas fa-star"></i>
                            @else
                            <i class="fas fa-star-alt"></i>
                            @endif
                          @endfor
                        </p>
                        <span class="small_text">{{ $review->review }}</span>
                        <ul>
                          {{-- <li><a href="dsahboard_review_edit.html"><i class="fal fa-edit"></i> edit</a></li>
                          <li><a href="#"><i class="fal fa-trash-alt"></i> delete</a></li> --}}
                        </ul>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>

              </div>
              <div class="col-12">
                <div id="pagination">
                    @if ($reviews->hasPages())
                        {{ $reviews->withQueryString()->links() }}
                    @endif
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=============================
    DASHBOARD START
  ==============================-->
@endsection
