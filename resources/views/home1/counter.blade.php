@if ($counter_section->visibitliy)
<!--=============================
    ABOUT COUNTER START
==============================-->
<section class="wsus__about_counter pt_120 xs_pt_80">
    <div class="container">
        <div class="wsus__about_counter_bg">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="wsus__single_counter">
                        <div class="icon">
                            <img src="{{ asset($counter_section->home1_icon1) }}" alt="counter" class="img-fluid w-100">
                        </div>
                        <h2 class="counter">{{ $counter_section->counter1_value }}</h2>
                        <p>{{ $counter_section->counter1_title }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="wsus__single_counter">
                        <div class="icon">
                            <img src="{{ asset($counter_section->home1_icon2) }}" alt="counter" class="img-fluid w-100">
                        </div>
                        <h2 class="counter">{{ $counter_section->counter2_value }}</h2>
                        <p>{{ $counter_section->counter2_title }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="wsus__single_counter">
                        <div class="icon">
                            <img src="{{ asset($counter_section->home1_icon3) }}" alt="counter" class="img-fluid w-100">
                        </div>
                        <h2 class="counter">{{ $counter_section->counter3_value }}</h2>
                        <p>{{ $counter_section->counter3_title }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="wsus__single_counter">
                        <div class="icon">
                            <img src="{{ asset($counter_section->home1_icon4) }}" alt="counter" class="img-fluid w-100">
                        </div>
                        <h2 class="counter">{{ $counter_section->counter4_value }}</h2>
                        <p>{{ $counter_section->counter4_title }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=============================
    ABOUT COUNTER END
==============================-->
@endIf
