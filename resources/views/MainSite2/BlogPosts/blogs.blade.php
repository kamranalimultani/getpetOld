@extends('MainSite2.index', ['title' => "{$post->post_title}", 'tags' => 'getpet.in, how to sell pets in india,pet shops near me,pet shops in nagina', 'description' => strip_tags($post->post_content)])
@section('content')
    @include('MainSite2.Common.BreadCrum', [
        'backPage' => 'Pages',
        'backPageUrl' => '/',
        'currentPage' => 'Blogs & Posts',
        'currentPageUrl' => '/faqs',
        'desc' => 'Welcome to our pet store! We are a pet shop that specializes in all things related to pets.',
    ])
    <style>
        p ul {
            display: list-item !important;
            list-style: auto !important
        }

        

        p li {
            display: list-item !important;
            list-style: auto !important
        }

        

        p ol {
            display: list-item !important;
            list-style: auto !important
        }

        
    </style>
    <section class="section section-xl bg-default text-md-left">
        <div class="listing-custom container">
            <div class="row row-50 row-md-60">
                <div class="col-lg-8 col-xl-9">
                    <div class="inset-xl-right-100">
                        <div class="row row-50 row-md-60 row-lg-80">
                            <div class="col-12">
                                <article class="post post-modern box-xxl">
                                    <div class="post-modern-panel">
                                        <div><a class="post-modern-tag" href="#">{{ $post->tag_name }}</a></div>
                                        <div>
                                            <div class="post-modern-time">
                                                {{ Carbon\Carbon::parse($post->created_at)->format('d,M D Y') }}</div>
                                        </div>
                                    </div>
                                    <h3 class="post-modern-title " style="overflow-wrap: break-word;">
                                        {{ $post->post_title }}</h3>
                                    <div class="post-modern-figure"><img
                                            style="max-height:300px;object-fit: contain;margin-bottom: 20px"
                                            src="{{ '/storage/app/public/Admin/Posts/' . $post->post_image }}"
                                            width="800" height="394">
                                    </div>
                                    <article class="post post-modern box-xxl" style="overflow-wrap: break-word;">
                                        {!! $post->post_content !!}
                                    </article>
                                    <div class="single-post-bottom-panel">
                                        <div class="group-sm group-justify">
                                            <div>
                                                <div class="group-sm group-tags"><a class="link-tag"
                                                        href="#">News</a><a class="link-tag" href="#">Cats</a><a
                                                        class="link-tag" href="#">Tips</a></div>
                                            </div>
                                            <div>
                                                <div class="group-xs group-middle"><span
                                                        class="list-social-title">Share</span>
                                                    <div>
                                                        <ul class="list-inline list-social list-inline-sm">
                                                            <li><a class="icon  fa-brands fa-facebook " href="#"></a>
                                                            </li>
                                                            <li><a class="icon  fa-brands fa-instagram " href="#"></a>
                                                            </li>
                                                            <li><a class="icon fa-brands fa-whatsapp" href="#"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-12" style="margin-bottom: 70%;">
                                <h6 class="single-post-title">Related Posts</h6>
                                <div class="row row-30">
                                    @foreach ($relatedPosts as $item)
                                        <div class="col-sm-6">
                                            <article style="height: 300px" class="post post-classic box-md"><a
                                                    class="post-classic-figure"
                                                    href="{{ url('blog-post/' . $item->post_id) }}"><img
                                                        src="{{ '/storage/app/public/Admin/Posts/' . $item->post_image }}"
                                                        width="370" height="239"
                                                        style="    max-height: 170px;
                                                        object-fit: cover;"></a>
                                                <div class="post-classic-content">
                                                    <div class="post-classic-time">
                                                        <time
                                                            datetime="2020-09-08">{{ Carbon\Carbon::parse($item->created_at)->format('d,M D Y') }}</time>
                                                    </div>
                                                    <h5 class="post-classic-title"><a
                                                            href="{{ url('blog-post/' . $item->post_id) }}">{{ Str::limit($item->post_title, $limit = 70, $end = '...') }}</a>
                                                    </h5>
                                                    {{-- <p class="post-classic-text">In ornare quam viverra orci sagittis viverra orci sagittis eu volutpat odio. Non consectetur a erat nam at lectus urnaa erat nam at lectus urna.</p> --}}
                                                </div>
                                            </article>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            <div class="col-12">
                                <h6 class="single-post-title">Say something to show on our site</h6>
                                <form class="rd-form rd-mailform" data-form-output="form-output-global"
                                    data-form-type="contact" method="post" action="bat/rd-mailform.php"
                                    novalidate="novalidate">
                                    <div class="row row-20 row-md-30">
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input form-control-has-validation"
                                                    id="contact-first-name-2" type="text" name="name"
                                                    data-constraints="@Required"><span class="form-validation"></span>
                                                <label class="form-label rd-input-label" for="contact-first-name-2">First
                                                    Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input form-control-has-validation"
                                                    id="contact-last-name-2" type="text" name="name"
                                                    data-constraints="@Required"><span class="form-validation"></span>
                                                <label class="form-label rd-input-label" for="contact-last-name-2">Last
                                                    Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-wrap">
                                                <label class="form-label rd-input-label"
                                                    for="contact-message-2">Message</label>
                                                <textarea class="form-input textarea-lg form-control-has-validation form-control-last-child" id="contact-message-2"
                                                    name="phone" data-constraints="@Required"></textarea><span class="form-validation"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button button-lg button-primary button-zakaria"
                                        type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="aside row row-30 row-md-50 justify-content-md-between">
                        {{-- <div class="aside-item col-12">
              <div class="team-info box-sm"><a class="team-info-figure" href="#"><img src="images/user-4-123x123.jpg" width="123" height="123"></a>
                <h6 class="team-info-title"><a href="#">Caroline Lopez</a></h6>
                <p class="team-info-text">Etiam dignissim diam quis enim lobortis dui</p>
              </div>
              <!-- RD Search Form-->
              <form class="rd-search form-search" action="search-results.html" method="GET">
                <div class="form-wrap">
                  <label class="form-label rd-input-label" for="search-form">Search blog...</label>
                  <input class="form-input" id="search-form" type="text" name="s" autocomplete="off">
                  <button class="button-search fl-bigmug-line-search74" type="submit"></button>
                </div>
              </form>
            </div> --}}
                        <div class="aside-item col-sm-6 col-md-5 col-lg-12">
                            <h6 class="aside-title">Categories</h6>
                            <ul class="list-categories">
                                @foreach ($tags as $index => $tag)
                                    <li><a style="text-transform: capitalize"
                                            href="{{ url('blog-posts/?tag=' . $tag->tag_name) }}">{{ $tag->tag_name }}</a><span
                                            class="list-categories-number">({{ $postsCount[$index] }})</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="aside-item col-sm-6 col-lg-12">
                            <h6 class="aside-title">Latest Posts</h6>
                            <div class="row row-20 row-lg-30 gutters-10">
                                @foreach ($latestPost as $item)
                                    <div class="col-6 col-lg-12">
                                        <!-- Post Minimal-->
                                        <article class="post post-minimal">
                                            <div
                                                class="unit unit-spacing-sm flex-column flex-lg-row align-items-lg-center">
                                                <div class="unit-left"><a class="post-minimal-figure"
                                                        href="{{ url('blog-post/' . $item->post_id) }}"><img
                                                            src=" {{ '/storage/app/public/Admin/Posts/' . $item->post_image }}"
                                                            width="260" height="254"></a></div>
                                                <div class="unit-body">
                                                    <p class="post-minimal-title"><a
                                                            href="{{ url('blog-post/' . $item->post_id) }}">{{ Str::limit($item->post_title, $limit = 40, $end = '...') }}</a>
                                                    </p>
                                                    <div class="post-minimal-time">
                                                        <time
                                                            datetime="2020-03-15">{{ Carbon\Carbon::parse($item->created_at)->format('d,M D Y') }}</time>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="aside-item col-sm-6 col-md-5 col-lg-12">
                            <h6 class="aside-title">Popular tags</h6>
                            <div class="group-sm group-tags"><a class="link-tag" href="#">News</a><a
                                    class="link-tag" href="#">Articles</a><a class="link-tag"
                                    href="#">Dogs</a><a class="link-tag" href="#">Cats</a><a
                                    class="link-tag" href="#">Tips</a><a class="link-tag" href="#">Other</a>
                            </div>
                        </div>
                        {{-- <div class="aside-item col-sm-6 col-lg-12">
              <h6 class="aside-title">Archive</h6>
              <ul class="list-marked list-archives d-inline-block d-md-block">
                <li><a href="#">March 2020</a></li>
                <li><a href="#">February 2020</a></li>
                <li><a href="#">January 2020</a></li>
                <li><a href="#">December 2020</a></li>
              </ul>
            </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
