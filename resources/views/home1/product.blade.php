@if ($product_section->visibility)
<!--=============================
    GALLERY START
==============================-->
<section class="wsus__galley mt_120 xs_mt_80 pt_115 xs_pt_75 pb_120 xs_pb_80"
    style="background: url({{ asset('frontend/images/gallery_bg2.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="wsus__section_heading mb_35">
                    <h5>{{ $product_section->title }}</h5>
                    <h2>{{ $product_section->description }}</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-7 m-auto">
                <div class="gallery_filter d-flex flex-wrap mb_5">
                    <button class=" active" data-filter="*">{{__('user.All Categories')}}</button>
                    @foreach ($product_section->categories as $category)
                    <button data-filter=".{{ $category->id }}">{{ $category->catlangfrontend->name }}</button>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row grid">
            @foreach ($product_section->products as $product)
            <div class="col-xl-4 col-md-6 {{ $product->category->id }}">
                <div class="wsus__gallery_item">
                    <div class="wsus__gallery_item_img">
                        <img src="{{ asset($product->thumbnail_image) }}" alt="gallery" class="img-fluid w-100">
                        <ul class="wsus__gallery_item_overlay">
                            <li><a target="_blank" href="{{ $product->preview_link }}">{{__('user.Preview')}}</a></li>
                            <li><a href="{{ route('product-detail', $product->slug) }}">{{__('user.Buy Now')}}</a></li>
                        </ul>
                    </div>
                    <div class="wsus__gallery_item_text">
                        <p class="price">
                            @if (session()->get('currency_position') == 'right')
                                {{ html_decode($product->regular_price * session()->get('currency_rate')) }}{{ session()->get('currency_icon') }}
                            @else
                                {{ session()->get('currency_icon') }}{{ html_decode($product->regular_price * session()->get('currency_rate')) }}
                            @endif
                        </p>
                        <a class="title" href="{{ route('product-detail', $product->slug) }}">{{ html_decode($product->productlangfrontend->name) }}</a>
                        <p class="category">{{__('user.By')}} <span>{{ html_decode($product->author->name) }}</span> {{__('user.In')}} <a class="category"
                                href="{{ route('products', ['category' => $product->category->slug]) }}">{{ $product->category->catlangfrontend->name }}</a></p>
                        <ul class="d-flex flex-wrap justify-content-between">
                            @php
                                $review=App\Models\Review::where(['product_id' => $product->id, 'status' => 1])->get()->average('rating');
                                $sale=App\Models\OrderItem::where(['product_id' => $product->id])->get()->count();
                            @endphp
                            <li>
                                <p>
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $review)
                                        <i class="fas fa-star"></i>
                                        @else
                                        <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                    <span>({{ $review == 0 ? 0 : $review }})</span>
                                </p>
                            </li>
                            <li>
                                <span class="download"><i class="far fa-download"></i> {{ $sale }} {{__('user.Sale')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--=============================
    GALLERY END
==============================-->
@endif
