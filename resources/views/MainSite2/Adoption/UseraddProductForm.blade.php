@extends('MainSite2.index', ['title' => 'GetPet.in | Adoption', 'tags' => 'getpet.in, how to sell pets in india,pet shops near me,pet shops in nagina', 'description' => 'Are pets allowed to be delivered to homes?,What is the return policy for pet food?,What types of pet food are available for delivery?,What is macaow parrot food?,How can i order pets?'])
@section('content')
    <section class="section section-xl bg-default text-md-left">
        <div class="container">
            <div class="row  featurette align-items-center justify-content-between ">
                <div>
                    @if(!isset($product))
                    <h6> <span class="font-bold" style="color: red;font-weight: bold">Note:</span> You can only add upto
                        {{ isset($leftLimit)?$leftLimit:'' }}
                        pets.</h6>
                    <hr>
                    @endif
                </div>
            </div>

            <form
               action="{{ isset($product) ? url('/adoption/user/edit') : url('/adoption/user/add-product') }}" 
                class="mt-4 row" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="productId" id="" value="{{ isset($product) ? $product->id : '' }}">
                <div class=" d-flex col-6 flex-row " style="flex-wrap:wrap">
                    <label for="exampleInputEmail1">Pet Title <span style="color: red"> *</span></label>
                    <input type="text" name="title" class="form-control mt-2" id="exampleInputEmail1"
                        value="{{ isset($product) ? $product->title : '' }}" aria-describedby="emailHelp"
                        placeholder="Title">
                    @error('title')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class=" d-flex col-4 flex-row " style="flex-wrap:wrap">
                    <label for="exampleInputEmail1">Category<span style="color: red"> *</span></label>
                    <select {{ isset($product) ? 'disabled' : '' }} class="form-select" id="search-form" type="text"
                        name="category">
                        <option value="0">-- Choose --</option>
                        @foreach ($cats as $item)
                            <option
                                @if (isset($product)) @if ($product->category == $item->main_cat_id)
                                selected @endif
                                @endif value="{{ $item->main_cat_id }}">{{ $item->main_cat_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class=" d-flex col-6 flex-row mt-4" style="flex-wrap:wrap">
                    <label for="exampleInputEmail1">Image <span style="color: red"> *</span></label>
                    <input type="file" name="Image" class="form-control mt-2" id="PMainImage"
                        aria-describedby="emailHelp">
                    @error('Image')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class=" d-flex col-4 flex-row mt-5 align-items-center" style="flex-wrap:wrap">
                    <img id="PpreviewMainImage" class=""
                        @if (isset($product)) src="{{ ('/storage/app/public/User/Adoption/' . $product->image) }}" @endif
                        style="object-fit: contain;height: 50px;">
                </div>
                <div class=" d-flex col-10 flex-row mt-4" style="flex-wrap:wrap">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="description" class="form-control mt-2" rows="3" placeholder="Write something about your pet...">
                        {{ isset($product) ? $product->description : '' }}
                    </textarea>
                    @error('description')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class=" d-flex col-10 flex-row mt-4" style="flex-wrap:wrap">
                    <button class="btn btn-primary">{{ isset($product) ? 'Update' : 'Save' }}</button>
                </div>
        </div>
        </div>
        </form>
        </div>
    </section>
@endsection
