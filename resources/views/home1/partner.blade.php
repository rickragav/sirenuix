
@if ($partner_section->visibility)
<!--=============================
    CUSTOMER START
==============================-->
<section class="wsus__customer pt_115 xs_pt_75 mb_120 xs_mb_80" style="background: url({{ asset('frontend/images/customer_bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="wsus__section_heading mb_25">
                    <h5>{{ $partner_section->title }}</h5>
                    <h2>{{ $partner_section->description }}</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach ($partner_section->partners as $partner)
            <div class="col-xxl-2 col-sm-6 col-lg-3">
                <div class="wsus__customer_logo">
                    <a href="{{ $partner->link }}" target="__blank">
                        <img src="{{ asset($partner->logo) }}" alt="brand" class="img-fluid w-100">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12">
                <div class="wsus__go_offer" style="background: url(https://i.ibb.co/pWN05Bf/subs-bg.jpg);">
                    <p>{!! strip_tags(clean($partner_section->offer_title1),'<span>') !!}</p>
                    <span class="support">Lifetime update and 6 months support.</span>
                    <a class="common_btn" href="{{ $partner_section->offer_link }}" target="__blank">{{__('user.Go to Offer page')}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=============================
    CUSTOMER END
==============================-->
@endif
