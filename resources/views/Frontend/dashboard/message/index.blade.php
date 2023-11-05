@extends('frontend.layouts.master')

@section('contents')
<section id="dashboard">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
            @include('frontend.dashboard.sidebar')
        </div>
        <div class="col-lg-9">
          <div class="dashboard_content">
            <div class="dashboard_message_area">
              <div class="row">
                <div class="col-xl-4">
                  <div class="tf__message_list">
                    <div class="nav flex-column nav-pills tf__massager_option" id="v-pills-tab" role="tablist"
                      aria-orientation="vertical">
                      @foreach ($receivers as $receiver)
                        <div class="nav-link " id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <div class="tf__single_massage d-flex">
                            <div class="tf__single_massage_img">
                                <img src="{{ asset($receiver->listingProfile->image) }}" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__single_massage_text">
                                <h4>{{ truncate($receiver->listingProfile->title, 15) }}</h4>
                                <p><i class="fas fa-crown"></i> {{ $receiver->receiverProfile->name }}</p>
                                <span class="tf__massage_time">30 min</span>
                            </div>
                            </div>
                        </div>
                      @endforeach

                    </div>
                  </div>
                </div>
                <div class="col-xl-8">
                  <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                      aria-labelledby="v-pills-home-tab" tabindex="0">
                      <div class="tf___single_chat">

                        <div class="tf__single_chat_top">
                          <div class="img">
                            <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                          </div>
                          <div class="text">
                            <h4>Charlene Reed</h4>
                            <p>active</p>
                            <a href="#">Clear Chat</a>
                          </div>
                        </div>

                        <div class="tf__single_chat_body">

                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>Cum id mundi admodum menandri, eum errem is any one
                                aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Please check your mail and come on meeting</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                        </div>
                        <form class="tf__single_chat_bottom">
                          <input type="text" placeholder="Type a message...">
                          <button class="tf__massage_btn"><i class="fas fa-paper-plane"></i></button>
                        </form>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages1" role="tabpanel"
                      aria-labelledby="v-pills-messages-tab1" tabindex="0">
                      <div class="tf___single_chat">
                        <div class="tf__single_chat_top">
                          <div class="img">
                            <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                          </div>
                          <div class="text">
                            <h4>Charlene Reed</h4>
                            <p>active</p>
                            <a href="#">Clear Chat</a>
                          </div>
                        </div>

                        <div class="tf__single_chat_body">
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>Cum id mundi admodum menandri, eum errem is any one
                                aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Please check your mail and come on meeting</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>eum errem is any one aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Mundi admodum menandri, eum errem is any one aperiri at. Ut
                                quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>Cum id mundi admodum menandri, eum errem is any one
                                aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Please check your mail and come on meeting</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                        </div>
                        <form class="tf__single_chat_bottom">
                          <input type="text" placeholder="Type a message...">
                          <button class="tf__massage_btn"><i class="fas fa-paper-plane"></i></button>
                        </form>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages2" role="tabpanel"
                      aria-labelledby="v-pills-messages-tab2" tabindex="0">
                      <div class="tf___single_chat">
                        <div class="tf__single_chat_top">
                          <div class="img">
                            <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                          </div>
                          <div class="text">
                            <h4>Charlene Reed</h4>
                            <p>active</p>
                            <a href="#">Clear Chat</a>
                          </div>
                        </div>

                        <div class="tf__single_chat_body">
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>Cum id mundi admodum menandri, eum errem is any one
                                aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Please check your mail and come on meeting</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>eum errem is any one aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Mundi admodum menandri, eum errem is any one aperiri at. Ut
                                quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>Cum id mundi admodum menandri, eum errem is any one
                                aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Please check your mail and come on meeting</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                        </div>
                        <form class="tf__single_chat_bottom">
                          <input type="text" placeholder="Type a message...">
                          <button class="tf__massage_btn"><i class="fas fa-paper-plane"></i></button>
                        </form>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages3" role="tabpanel"
                      aria-labelledby="v-pills-messages-tab3" tabindex="0">
                      <div class="tf___single_chat">
                        <div class="tf__single_chat_top">
                          <div class="img">
                            <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                          </div>
                          <div class="text">
                            <h4>Charlene Reed</h4>
                            <p>active</p>
                            <a href="#">Clear Chat</a>
                          </div>
                        </div>

                        <div class="tf__single_chat_body">
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>Cum id mundi admodum menandri, eum errem is any one
                                aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Please check your mail and come on meeting</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>eum errem is any one aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Mundi admodum menandri, eum errem is any one aperiri at. Ut
                                quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>Cum id mundi admodum menandri, eum errem is any one
                                aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Please check your mail and come on meeting</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                        </div>
                        <form class="tf__single_chat_bottom">
                          <input type="text" placeholder="Type a message...">
                          <button class="tf__massage_btn"><i class="fas fa-paper-plane"></i></button>
                        </form>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages4" role="tabpanel"
                      aria-labelledby="v-pills-messages-tab4" tabindex="0">
                      <div class="tf___single_chat">
                        <div class="tf__single_chat_top">
                          <div class="img">
                            <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                          </div>
                          <div class="text">
                            <h4>Charlene Reed</h4>
                            <p>active</p>
                            <a href="#">Clear Chat</a>
                          </div>
                        </div>

                        <div class="tf__single_chat_body">
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>Cum id mundi admodum menandri, eum errem is any one
                                aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Please check your mail and come on meeting</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>eum errem is any one aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Mundi admodum menandri, eum errem is any one aperiri at. Ut
                                quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>Cum id mundi admodum menandri, eum errem is any one
                                aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Please check your mail and come on meeting</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                        </div>
                        <form class="tf__single_chat_bottom">
                          <input type="text" placeholder="Type a message...">
                          <button class="tf__massage_btn"><i class="fas fa-paper-plane"></i></button>
                        </form>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages5" role="tabpanel"
                      aria-labelledby="v-pills-messages-tab5" tabindex="0">
                      <div class="tf___single_chat">
                        <div class="tf__single_chat_top">
                          <div class="img">
                            <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                          </div>
                          <div class="text">
                            <h4>Charlene Reed</h4>
                            <p>active</p>
                            <a href="#">Clear Chat</a>
                          </div>
                        </div>

                        <div class="tf__single_chat_body">
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>Cum id mundi admodum menandri, eum errem is any one
                                aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Please check your mail and come on meeting</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>eum errem is any one aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Mundi admodum menandri, eum errem is any one aperiri at. Ut
                                quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>Cum id mundi admodum menandri, eum errem is any one
                                aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Please check your mail and come on meeting</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                        </div>
                        <form class="tf__single_chat_bottom">
                          <input type="text" placeholder="Type a message...">
                          <button class="tf__massage_btn"><i class="fas fa-paper-plane"></i></button>
                        </form>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages6" role="tabpanel"
                      aria-labelledby="v-pills-messages-tab6" tabindex="0">
                      <div class="tf___single_chat">
                        <div class="tf__single_chat_top">
                          <div class="img">
                            <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                          </div>
                          <div class="text">
                            <h4>Charlene Reed</h4>
                            <p>active</p>
                            <a href="#">Clear Chat</a>
                          </div>
                        </div>

                        <div class="tf__single_chat_body">
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>Cum id mundi admodum menandri, eum errem is any one
                                aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Please check your mail and come on meeting</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>eum errem is any one aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Mundi admodum menandri, eum errem is any one aperiri at. Ut
                                quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>Cum id mundi admodum menandri, eum errem is any one
                                aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Please check your mail and come on meeting</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                        </div>
                        <form class="tf__single_chat_bottom">
                          <input type="text" placeholder="Type a message...">
                          <button class="tf__massage_btn"><i class="fas fa-paper-plane"></i></button>
                        </form>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
