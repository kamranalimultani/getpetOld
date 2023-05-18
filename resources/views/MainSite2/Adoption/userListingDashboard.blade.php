@extends('MainSite2.index', ['title' => 'GetPet.in | Adoption', 'tags' => 'getpet.in, how to sell pets in india,pet shops near me,pet shops in nagina', 'description' => 'Are pets allowed to be delivered to homes?,What is the return policy for pet food?,What types of pet food are available for delivery?,What is macaow parrot food?,How can i order pets?'])
@section('content')
    @include('MainSite2.Common.BreadCrum', [
        'backPage' => 'Adoption',
        'backPageUrl' => '/adoption',
        'currentPage' => 'My Listing',
        'currentPageUrl' => '/adoption/listing-dashboard',
        'desc' => 'Welcome to our pet store! We are a pet shop that specializes in all things related to pets.',
    ])
    @if(session()->has('msg-success'))
     <div class="alert alert-success">
        <span class="glyphicon glyphicon-ok">
        {{session('msg-success')}} 
        </span>
     </div>
     {{session()->forget('msg-success')}} 
     @elseif(session()->has('msg-error'))
     
     <div class="btn btn-danger mt-4">
        <span class="glyphicon glyphicon-ok">
        {{session('msg-error')}} 
        </span>
     </div>
     {{session()->forget('msg-error')}} 
     
     @endif
    <style>
        #main-pop-up {
            position: fixed;
            z-index: 9999;
            height: 50%;
        }

        #full-size-image {
            position: relative;

            left: 50%;
            width: 100%;
            height: 100vh;
            object-fit: contain;
            transform: translate(-50%, -50%);
            z-index: 9999;
            display: none;
        }


        #close-button {
            position: absolute;
            z-index: 9999;
            display: none;
            width: 30px;
            height: 30px;
            font-size: 14px;
            font-weight: bold;
            color: white;
            background-color: #ffa500;
            /* orange */
            border: none;
            border-radius: 50%;
            cursor: pointer;

            margin: auto;
        }

        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 0, 0, 0.5);
            filter: blur(5px);
            display: none;
            z-index: 888;
        }
    </style>
    <div id="main-pop-up">
        <img onclick="closeFullSize()" id="full-size-image" />
        {{-- <button>x</button> --}}

    </div>
    <div id="overlay"></div>
    <section class="section section-xl bg-default text-md-left">
        <div class="container">
            <div class="row  featurette align-items-center justify-content-between">
                <div class="col-sm-6 col-md-3">
                    <form class="rd-search form-search" action="search-results.html" method="GET">
                        <div class="form-wrap">
                            <label class="form-label rd-input-label" for="search-form">Search ...</label>
                            <input class="form-input" id="search-form" type="text" name="s" autocomplete="off">
                            {{-- <button class="button-search  icon   fa-search" type="submit"></button> --}}
                        </div>
                    </form>
                </div>

                <div class="form-wrap col-sm-6 col-md-2 mt-3 ">
                    <select class="form-select" id="search-form" type="text" name="s" autocomplete="off">
                        <option value="1">-- Choose --</option>
                        <option value="1">Dogs</option>
                        <option value="1">Cats</option>
                        <option value="1">Birds</option>
                    </select>
                </div>
            </div>
            <hr class="mt-4">
            <div class="row">
                <div class="col-2 d-flex ">
                    <a href="{{ url('/adoption/user/add-product') }}" class="btn btn-sm btn-primary">Add pet </a>
                </div>
            </div>
            {{-- here start l;isting --}}

            <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped"
                    style="border-collapse: collapse; border-spacing: 0; background-color: rgba(255, 211, 59, 0.8); color: black;">
                    <thead>
                        <tr>
                            <th style="width: 80px">Sr.No.</th>
                            <th style="width: 40%">Title</th>
                            <th style="width: 200px">Category</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $item)
                            <tr style="color: white">
                                <td>{{ $index + 1 }}</td>
                                <td> {{ $item->title }}</td>
                                <td>{{ $item->main_cat_name }}</td>
                                <td style="width: 15%"><img onclick="showProductImage(this)"
                                        style="width: 180px;height:80px;object-fit: contain;cursor: pointer;"
                                        src=" {{ ('/storage/app/public/User/Adoption/' . $item->image) }}" alt=""></td>
                                <td>
                                    <a href="{{url('/adoption/user/edit/'.$item->id)}}" class="btn btn-secondary">Edit</a>
                                    <button onclick="deleteUserProduct({{$item->id}})" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div></div>
        </div>

    </section>
    <div class="modal fade show mt-5" id="modal-default" style=" padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <h4 class="modal-title">Default Modal</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">×</span>
                 </button>
              </div>
              <form action="{{url('/adoption/user/delete')}}" method="POST">
                 @csrf
                 <div class="modal-body">
                    <h4>Are you sure you want to delete this pet?</h4>
                    <input  type="hidden" name="deleteID" id="deleteCategory" type="text"  >
                 </div>
                 <div class="modal-footer justify-content-between">
                   
                    <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              </div>
           </div>
        </div>
     </div>
    <script>
        function showProductImage(image) {
            var fullSizeImage = document.getElementById("full-size-image");
            fullSizeImage.src = image.src;
            fullSizeImage.style.display = "block";
            closeButton.style.display = "block";
            document.getElementById("overlay").style.display = "block";
        }

        function closeFullSize() {
            var fullSizeImage = document.getElementById("full-size-image");
            fullSizeImage.style.display = "none";
            closeButton.style.display = "none";
            document.getElementById("overlay").style.display = "none";
        };

        function closeFullImage() {
            $("#imageNameForFullPreview").hide();
        }
        function deleteUserProduct(id)
        {
            $("#modal-default").modal("show");
            $("#deleteCategory").val(id);
        }
    </script>
@endsection
