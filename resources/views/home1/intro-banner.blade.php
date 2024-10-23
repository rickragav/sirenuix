
@if ($intro_visibility)
    <!--=============================
        BANNER  START
    ==============================-->
    <section class="wsus__banner_2" style="background: url({{ asset($intro_section->content->home1_bg) }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-md-10 m-auto">
                    <div class="wsus__banner_text_2 wow fadeInUp" data-wow-duration="1s">
                        <h1>{{ $intro_section->content->sliderlangfrontend->home1_title  }}</h1>
                        <form action="{{ route('products') }}" method="GET">
                            <input type="text" name="keyword" placeholder="{{__('user.Search your products')}}...">
                            <i class="far fa-search"></i>
                            <button class="common_btn" type="submit">{{__('user.Search')}}</button>
                        </form>
                        <ul class="wsus__banner_counter_2 d-flex flex-wrap justify-content-center mt_40">
                            <li>
                                <span class="counter">{{ $intro_section->content->total_product }}</span>
                                <span>{{__('user.k')}}+</span>
                                {{__('user.Prodcuts')}}
                            </li>
                            <li>
                                <span class="counter">{{ $intro_section->content->total_user }}</span>
                                <span>{{__('user.k')}}+</span>
                                {{__('user.Users')}}
                            </li>
                            <li>
                                <span class="counter">{{ $intro_section->content->total_sold }}</span>
                                <span>+</span>
                                {{__('user.Million Sells')}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BANNER  END
    ==============================-->
    @endif
