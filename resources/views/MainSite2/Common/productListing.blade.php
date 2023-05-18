<style>
  .form__group {
	 position: relative;
	 padding: 15px 0 0;
	 margin-top: 10px;
	 width: 50%;
}
 .form__field {
	 font-family: inherit;
	 width: 50%;
	 border: 0;
	 border-bottom: 2px solid #ffd33b;
	 outline: 0;
	 font-size: 1.3rem;
	 color: black;
	 padding: 7px 0;
	 background: transparent;
	 transition: border-color 0.2s;
}
 .form__field::placeholder {
	 color: transparent;
}
 .form__field:placeholder-shown ~ .form__label {
	 font-size: 1.3rem;
	 cursor: text;
	 top: 20px;
}
 .form__label {
	 position: absolute;
	 top: 0;
	 display: block;
	 transition: 0.2s;
	 font-size: 1rem;
	 color: #ffd33b;
}
 .form__field:focus {
	 padding-bottom: 6px;
	 font-weight: 700;
	 border-width: 3px;
	 border-image: linear-gradient(to right, #ffd33b, #fe4800);
	 border-image-slice: 1;
}
 .form__field:focus ~ .form__label {
	 position: absolute;
	 top: 0;
	 display: block;
	 transition: 0.2s;
	 font-size: 1rem;
	 color: #ffc800;
	 font-weight: 700;
}
/* reset input */
 .form__field:required, .form__field:invalid {
	 box-shadow: none;
}
</style>


<section >
    <div class="text-center container py-5">
      <h4 class="mt-4 mb-5"><strong>{{$catDetails->main_cat_name}}</strong></h4>

      <div class="form__group field d-flex">
        <input type="input" class="form__field" placeholder="Name" name="name" id='name' required />
        <label for="name" class="form__label">Search...</label>
      </div>
      @if (!$products->count()>0)
      <div class="mt-4">
        <h6 style="color:red"> No Data for this category</h6>
       </div>
       @else
      <div class="row">
        @foreach ($products as $item)
            
        
        <div class="col-lg-3 col-md-12 mb-3">
          <div class="card">
            <div class=""
             >
             <a href="{{url('product/details/'.$item->p_id)}}">
              <img style="cursor: pointer !important ;height: 200px;width:100%;
              object-fit: cover;"  src="{{'/storage/app/public/Admin/Products/'.$item->p_main_image}}"
                  />
                {{-- <div class="mask">
                  <div class="d-flex justify-content-start align-items-end h-100">
                    <h5><span class="badge bg-primary ms-2">New</span></h5>
                  </div>
                </div> --}}
                <div class="hover-overlay">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </div>
              </a>
            </div>
            <div class="card-body">
              <a href="{{url('product/details/'.$item->p_id)}}" class="text-reset">
                <h4 class="card-title mb-3">{{$item->p_name}}</h4>
                <h6 class="mb-3">Rs.{{$item->p_price}}</h6> 
              </a>
                <a href="{{url('product/details/'.$item->p_id)}}" title="Pay token for booking" class="m-1 btn bnt-sm btn-primary">About</a>
                <a href="{{url('product/request/'.$item->p_id)}}"    class=" m-1 btn bnt-sm btn-dark"><i class="p-1 fa-brands fa-paper-plane"></i></a>
              </div>
             
             
          </div>
        </div>
        @endforeach
        <div class="page-links">
          {{$products->links('pagination::bootstrap-4')}}
      </div>
    
     
      @endif    
      
      </div>
    </div>
  </section>
 
  
