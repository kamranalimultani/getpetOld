@extends('MainSite2.index', ['title' => 'GetPet.in | Categories', 'tags' => 'getpet.in, how to sell pets in india,pet shops near me,pet shops in nagina', 'description' => 'All Pet Categories'])
@section('content')
    @foreach ($categories as $item)
        @php
            $slug = str_replace(' ', '-', $item->main_cat_name);
        @endphp
        <div class="m-4 row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7"><a href="{{ url('/category/' . $slug . '/' . $item->main_cat_id) }}" ><img
                        width="600" class="img-fluid rounded mb-4 mb-lg-0 "
                        src="{{ '/storage/app/public/Admin/category/' . $item->main_cat_banner_image }}" alt="..."></a>
            </div>
            <div class="col-lg-5">
                <h3 class="font-weight-light">{{ $item->main_cat_name }}</h3>
                <p>{!! $item->main_cat_paragraph !!}</p>
                <a class=" mt-2 btn btn-primary" href="{{ url('/category/' . $slug . '/' . $item->main_cat_id) }}">See
                    Products</a>
            </div>
        </div>
    @endforeach
    <div class="page-links">
        {{ $categories->links('pagination::bootstrap-4') }}
    </div>
@endsection
