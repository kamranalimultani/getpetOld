@extends('MainSite2.index', ['title' => 'GetPet.in | ' . $product->p_name, 'tags' => 'getpet.in, how to sell pets in india,pet shops near me,pet shops in nagina', 'description' => $product->p_description])
@section('content')
    <style>
        body {
            background-color: #ecedee;


        }


        .card {
            border: none;
            overflow: hidden
        }

        .thumbnail_images ul {
            list-style: none;
            justify-content: center;
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .thumbnail_images ul li {
            margin: 5px;
            padding: 10px;
            border: 2px solid #eee;
            cursor: pointer;
            transition: all 0.5s
        }

        .thumbnail_images ul li:hover {
            border: 2px solid #000
        }

        .main_image {
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid #eee;
            height: 400px;
            width: 100%;
            overflow: hidden
        }
        .main_image img{
            padding: 20px;
    height: 80%;
    object-fit: contain;
        }

        .heart {
            height: 29px;
            width: 29px;
            background-color: #eaeaea;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .content p {
            font-size: 12px
        }

        .ratings span {
            font-size: 14px;
            margin-left: 12px
        }

        .colors {
            margin-top: 5px
        }

        .colors ul {
            list-style: none;
            display: flex;
            padding-left: 0px
        }

        .colors ul li {
            height: 20px;
            width: 20px;
            display: flex;
            border-radius: 50%;
            margin-right: 10px;
            cursor: pointer
        }

        .colors ul li:nth-child(1) {
            background-color: #6c704d
        }

        .colors ul li:nth-child(2) {
            background-color: #96918b
        }

        .colors ul li:nth-child(3) {
            background-color: #68778e
        }

        .colors ul li:nth-child(4) {
            background-color: #263f55
        }

        .colors ul li:nth-child(5) {
            background-color: black
        }

        .right-side {
            position: relative
        }

        .search-option {
            position: absolute;
            background-color: #000;
            overflow: hidden;
            align-items: center;
            color: #fff;
            width: 200px;
            height: 200px;
            border-radius: 49% 51% 50% 50% / 68% 69% 31% 32%;
            left: 30%;
            bottom: -250px;
            transition: all 0.5s;
            cursor: pointer
        }

        .search-option .first-search {
            position: absolute;
            top: 20px;
            left: 90px;
            font-size: 20px;
            opacity: 1000
        }

        .search-option .inputs {
            opacity: 0;
            transition: all 0.5s ease;
            transition-delay: 0.5s;
            position: relative
        }

        .search-option .inputs input {
            position: absolute;
            top: 200px;
            left: 30px;
            padding-left: 20px;
            background-color: transparent;
            width: 300px;
            border: none;
            color: #fff;
            border-bottom: 1px solid #eee;
            transition: all 0.5s;
            z-index: 10
        }

        .search-option .inputs input:focus {
            box-shadow: none;
            outline: none;
            z-index: 10
        }

        .search-option:hover {
            border-radius: 0px;
            width: 100%;
            left: 0px
        }

        .search-option:hover .inputs {
            opacity: 1
        }

        .search-option:hover .first-search {
            left: 27px;
            top: 25px;
            font-size: 15px
        }

        .search-option:hover .inputs input {
            top: 20px
        }

        .search-option .share {
            position: absolute;
            right: 20px;
            top: 22px
        }

        .buttons .btn {
            height: 50px;
            width: 150px;
            border-radius: 0px !important
        }
    </style>

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image"> <img
                                src="{{ '/storage/app/public/Admin/Products/' . $product->p_main_image }}"
                                id="main_product_image" width="350"> </div>
                        <div class="thumbnail_images">
                            <ul id="thumbnail">
                                <li><img onclick="changeImage(this)"
                                        src="{{ '/storage/app/public/Admin/Products/' . $product->p_main_image }}"
                                        width="70"></li>

                                @foreach ($images as $item)
                                    <li><img onclick="changeImage(this)"
                                            src="{{ '/storage/app/public/Admin/Products/' . $item->image_name }}"
                                            width="70"></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="text-align: justify !important">
                    <div class="p-3 right-side">
                        <div class="d-flex justify-content-between align-items-start">
                            <h3>{{ $product->p_name }}</h3>
                            <span class="heart"><i class='bx bx-heart'></i></span>
                        </div>
                        <div class="mt-2 pr-3 content">
                            <p>{!! $product->p_description !!}</p>
                        </div>
                        <h3>Rs. {{ $product->p_price }}</h3>


                        <div class="buttons d-flex flex-row mt-5 gap-3"> <a href="{{url('product/request/'.$item->p_id)}}" class="btn btn-outline-dark">Send Request
                            </a>
                            {{-- <a href="tel:918273783249" class="btn btn-dark">Get in touch</a> </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function changeImage(element) {

                var main_prodcut_image = document.getElementById('main_product_image');
                main_prodcut_image.src = element.src;


            }
        </script>
    @endsection
