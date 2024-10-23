@if ($template_section->visibility)
    <!--=============================
        TEMPLATE START
    ==============================-->
    <section class="wsus__template mt_120 xs_mt_70 pt_115 xs_pt_80 pb_120 xs_pb_80"
        style="background: url({{ asset('frontend/images/template_bg.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 m-auto">
                    <div class="wsus__section_heading mb_25">
                        <h5>{{ $template_section->title }}</h5>
                        <h2>{{ $template_section->description }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($template_section->templates as $template)
                <div class="col-xl-3 col-md-6">
                    <div class="wsus__template_item">
                        <div class="icon">
                            <img src="{{ asset($template->image) }}" alt="template" class="img-fluid w-100">
                        </div>
                        <h4>{{ $template->templatelangfrontend->title }}</h4>
                        <p>{{ $template->templatelangfrontend->description }}</p>
                        <a target="__blank" href="{{ $template->link }}">{{__('user.Learn More')}} <i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=============================
        TEMPLATE END
    ==============================-->
    @endif
