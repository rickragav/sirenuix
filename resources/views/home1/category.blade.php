@if ($category_visibility)
    <!--=============================
        CATEGORY  START
    ==============================-->
    <section class="wsus__categorie_2 pt_115 xs_pt_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 m-auto">
                    <div class="wsus__section_heading mb_50">
                        <h5>{{ $category_section->title }}</h5>
                        <h2>{{ $category_section->description }}</h2>
                    </div>
                </div>
            </div>
            <div class="row category_slider_2">
                @foreach ($category_section->categories as $key=>$category)
                <div class="col-xl-3">
                    <div class="wsus__categories_item_2">
                        <div class="icon">
                            <img src="{{ asset($category->icon) }}" alt="category" class="img-fluid w-100">
                        </div>
                        <h3><a href="{{ route('products', ['category' => $category->slug]) }}">{{ $category->catlangfrontend->name }}</a></h3>
                        @php
                            $product = App\Models\Product::where('category_id', $category->id)->get();
                        @endphp
                        <p>{{ $product->count() }} {{__('user.Items')}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=============================
        CATEGORY  END
    ==============================-->
    @endif
