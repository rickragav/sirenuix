<!--=============================
        TRENDING THEME START
    ==============================-->
@if ($trending_section->visibility)
    <section class="wsus__trending_theme pt_115 xs_pt_75">
        <div class="wsus__trending_theme_bg">
            <img src="{{ asset('frontend/images/trendy_theme_bg.jpg') }}" alt="bg" class="img-fluid w-100">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="wsus__section_heading heading_left  mb_50">
                        <h5>{{ $trending_section->title }}</h5>
                        <h2>{{ $trending_section->description }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="wsus__trending_theme_slider_area">
                        <div class="row trendy_slider">

                            @php
                                $loop_count = count($trending_section->trending_products) / 4;
                                $latest_index = 0;
                                $is_break = false;
                            @endphp

                            @for ($i = 0; $i < $loop_count; $i++)
                                @php
                                    $current_index = 1;
                                    $number_of_item = 1;
                                @endphp
                                <div class="col-12">
                                    <div class="row">

                                        @foreach ($trending_section->trending_products as $trending_index => $trending_product)
                                            @if ($latest_index <= $trending_index)
                                                @if ($number_of_item <= 4)
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="wsus__trending_theme_item">
                                                            <div class="wsus__trending_theme_item_img">
                                                                <img src="{{ asset($trending_product->thumbnail_image) }}"
                                                                    alt="img" class="img-fluid w-100">
                                                            </div>
                                                            <div class="wsus__trending_theme_item_text">
                                                                <a class="title"
                                                                    href="{{ route('product-detail', $trending_product->slug) }}">{{ html_decode($trending_product->productlangfrontend->name) }}</a>
                                                                <p><span>{{ __('user.By') }}</span>
                                                                    {{ html_decode($trending_product->author->name) }}
                                                                </p>
                                                                <ul
                                                                    class="d-flex flex-wrap justify-content-between align-items-center">
                                                                    @php
                                                                        $sale = App\Models\OrderItem::where([
                                                                            'product_id' => $trending_product->id,
                                                                        ])
                                                                            ->get()
                                                                            ->count();
                                                                    @endphp
                                                                    <li>
                                                                        <span><i class="far fa-download"></i>
                                                                            {{ $sale }}
                                                                            {{ __('user.Sale') }}</span>
                                                                    </li>
                                                                    <li><a
                                                                            href="{{ route('product-detail', $trending_product->slug) }}"><i
                                                                                class="far fa-shopping-cart"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @php
                                                        $latest_index = $trending_index;
                                                    @endphp
                                                @endif

                                                @php
                                                    $number_of_item++;
                                                @endphp
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="wsus__trending_theme_single">
                        <div class="wsus__trending_theme_single_img">
                            <img src="{{ asset($trending_section->trending_offer_image) }}" alt="trendy theme"
                                class="img-fluid w-100">
                        </div>
                        <div class="wsus__trending_theme_single_text">
                            <p>{{ $trending_section->trending_offer_title1 }}</p>
                            <a class="title"
                                href="{{ $trending_section->trending_offer_link }}">{{ $trending_section->trending_offer_title2 }}</a>
                            <a class="common_btn" target="_blank"
                                href="{{ $trending_section->trending_offer_link }}">{{ __('user.Purchase Now') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
<!--=============================
        TRENDING THEME END
    ==============================-->
