@if ($mobile_app->visibility)
    <!--=============================
        DOWNLOAD 2 START
    ==============================-->
    <section class="wsus__download_2 pt_120 xs_pt_80 pb_120 xs_pb_80">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-md-5">
                    <div class="wsus__download_2_img">
                        <img src="{{ asset($mobile_app->home1_foreground) }}" alt="download" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-xl-6 col-md-7">
                    <div class="wsus__download_2_text">
                        <h2>{!! strip_tags(clean($mobile_app->title1),'<span>') !!}</h2>
                        <p>{{ $mobile_app->description }}</p>
                        <ul class="d-flex flex-wrap">
                            <li>
                                <a target="__blank" href="{{ $mobile_app->play_store_link }}">
                                    <img src="{{ asset('frontend/images/download_icon_3.jpg') }}" alt="download" class="img-fluid w-100">
                                </a>
                            </li>
                            <li>
                                <a target="__blank" href="{{ $mobile_app->apple_store_link }}">
                                    <img src="{{ asset('frontend/images/download_icon_4.jpg') }}" alt="download" class="img-fluid w-100">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        DOWNLOAD 2 END
    ==============================-->
    @endif
