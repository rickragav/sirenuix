@if ($home1_blog_section->visibility)
<!--=============================
    BLOG START
==============================-->
<section class="wsus__blog pt_115 xs_pt_75 pb_120 xs_pb_80">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 m-auto">
                <div class="wsus__section_heading mb_20">
                    <h5>{{ $home1_blog_section->title }}</h5>
                    <h2>{{ $home1_blog_section->description }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($home1_blog_section->blogs as $blog)
            <div class="col-xl-4 col-md-6">
                <div class="wsus__blog_3">
                    <div class="wsus__blog_3_img">
                        <img src="{{ asset($blog->image) }}" alt="blog" class="img-fluid w-100">
                    </div>
                    <div class="wsus__blog_3_text">
                        <a class="categori" href="javascript:;">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M') }}</a>
                        <a class="title" href="{{ route('blog', $blog->slug) }}">{{ $blog->bloglanguagefrontend->title }}</a>
                        <p class="description">{{ $blog->bloglanguagefrontend->short_description }}</p>
                        <ul>
                            <li>
                                <div class="img">
                                    <img src="{{ asset($blog->admin->image) }}" alt="author" class="img-fluid w-100">
                                </div>
                                <p><span>{{__('user.By')}}</span> {{ $blog->admin->name }} </p>
                            </li>

                            <li><a href="{{ route('blog', $blog->slug) }}">{{__('user.Read More')}}</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--=============================
    BLOG END
==============================-->
@endif
