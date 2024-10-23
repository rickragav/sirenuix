@if ($featured_section->visibility)
<!--=============================
    GALLERY 2 START
==============================-->
<section class="wsus__galley_2 pt_115 xs_pt_25">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8">
                <div class="wsus__section_heading mb_15">
                    <h5>{{ $featured_section->title }}</h5>
                    <h2>{{ $featured_section->description }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($featured_section->products as $product)
            <div class="col-xl-4 col-md-6">
                <div class="wsus__gallery_item">
                    <div class="wsus__gallery_item_img">
                        <img src="{{ asset($product->thumbnail_image) }}" alt="gallery" class="img-fluid w-100">
                        <ul class="wsus__gallery_item_overlay">
                            <li><a target="__blank" href="{{ $product->preview_link }}">{{__('user.Preview')}}</a></li>
                            <li><a href="{{ route('product-detail', $product->slug) }}">{{__('user.Buy Now')}}</a></li>
                        </ul>
                    </div>
                    <div class="wsus__gallery_item_text">
                        @php
                            $review=App\Models\Review::where(['product_id' => $product->id, 'status' => 1])->get()->average('rating');
                            $sale=App\Models\OrderItem::where(['product_id' => $product->id])->get()->count();
                        @endphp

                        <a class="title" href="{{ route('product-detail', $product->slug) }}">{{ html_decode($product->productlangfrontend->name) }}</a>

                        <p class="category">{{__('user.By')}} <span>{{ html_decode($product->author->name) }}</span> {{__('user.In')}} <a class="category"
                                href="{{ route('products', ['category' => $product->category->slug]) }}">{{ $product->category->catlangfrontend->name }}</a></p>

                        <p class="rating">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $review)
                                <i class="fas fa-star"></i>
                                @else
                                <i class="far fa-star"></i>
                                @endif
                            @endfor
                            <span>({{ $review == 0 ? 0 : $review }})</span>
                        </p>
                        <p class="price">
                            @if (session()->get('currency_position') == 'right')
                                {{ html_decode($product->regular_price * session()->get('currency_rate')) }}{{ session()->get('currency_icon') }}
                            @else
                                {{ session()->get('currency_icon') }}{{ html_decode($product->regular_price * session()->get('currency_rate')) }}
                            @endif
                        </p>

                        <div class="like_and_sell">
                            <span class="download"><i class="fas fa-arrow-to-bottom"></i>{{ $sale }} {{__('user.Sale')}}</span>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('products', ['featured' => 1]) }}" class="common_btn">{{__('user.View All')}} <i class="far fa-long-arrow-right"></i></a>
    </div>
</section>
<!--=============================
    GALLERY 2 END
==============================-->
@endif
