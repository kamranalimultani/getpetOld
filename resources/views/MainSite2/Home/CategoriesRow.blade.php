
<div class="container mt-4">
    <h3 class="mb-4">Explore <b style="color: #ffd33b">Categories</b></h3>
    <div class="row customer-logos d-flex justify-content-center" >
        @foreach ($Maincats as $cat)
            @php
                $slug = str_replace(' ', '-', $cat->main_cat_name);
            @endphp
            <div class=" col-md-3 col-lg-2 col-sm-6 mb-2 d-flex align-items-center justify-content-center" >
                
                    <a href="{{ url('category/' . $slug . '/' . $cat->main_cat_id) }}" class="banner-classic" >
                        <div style="position: relative;width:170px;height:210px">

							<img class="post post-classic box-md"
                            style="border-radius: 4px;width:170px;height:210px;object-fit: cover"
                            src="{{ asset('/storage/Admin/category/' . $cat->main_cat_small_image) }}"
                            width="200px" height="auto" alt="{{ $cat->main_cat_small_image }}">
							<div class="thumb-content md-mt-20" style="position: absolute;top: 10px;">
								<h6 style="color: white;margin-left: 10px">{{ $cat->main_cat_name }}</h6>
							</div>
						</div>
                    </a>
                
                {{-- <a href="{{url('category/'.$slug.'/'.$cat->main_cat_id)}}" class="btn btn-sm btn-primary">Check Out</a> --}}
            </div>
        @endforeach
    </div>
</div>



