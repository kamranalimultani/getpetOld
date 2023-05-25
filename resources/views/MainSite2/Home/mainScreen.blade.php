<!-- Main screen-->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @php
            $i = 0;
        @endphp
        
        @foreach ($slides as $slide)
            <div class="carousel-item {{ $i == 0 ? 'active' : ' ' }}">
                @php
                    $i++;
                @endphp
                <section style="position: relative">

                    <div style="width: 100%;">
                        <img src="{{ asset('/storage/Admin/UI/' . $slide->slider_banner) }}"
                            alt="{{ $slide->slider_banner }}"
                            style="display: block; object-fit: cover;width: -webkit-fill-available;">
                    </div>
                    <div style="position: absolute">

                        <h2 style="color: black" class="">{{ $slide->slider_heading }}</h2>
                        <h5 class="breadcrumbs-custom-text">
                            {{ strlen($slide->slider_paragraph) > 100 ? substr($slide->slider_paragraph, 0, 100) . '...' : $slide->slider_paragraph }}
                        </h5>
                        @if ($slide->slider_heading)
                            <div class="button-wrap mt-4" data-caption-animate="fadeInLeft" data-caption-delay="550"><a
                                    class="button button-sm button-primary" style="background: #ffd33b"
                                    href={{ url('/') }}>Explore Now</a>
                            </div>
                        @endif

                    </div>

                </section>
            </div>
        @endforeach
    </div>
</div>
<style>
    @media (max-width:765px) {
        .banner-image {
            display: none !important
        }
    }
</style>
