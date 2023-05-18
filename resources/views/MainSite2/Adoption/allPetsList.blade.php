@extends('MainSite2.index', ['title' => 'GetPet.in | Adoption', 'tags' => 'getpet.in, how to sell pets in india,pet shops near me,pet shops in nagina', 'description' => 'Are pets allowed to be delivered to homes?,What is the return policy for pet food?,What types of pet food are available for delivery?,What is macaow parrot food?,How can i order pets?'])
@section('content')
    @include('MainSite2.Common.BreadCrum', [
        'backPage' => 'Adoption',
        'backPageUrl' => '/adoption',
        'currentPage' => 'Adoption Pets',
        'currentPageUrl' => '/adoption/pets',
        'desc' => 'Welcome to our pet store! We are a pet shop that specializes in all things related to pets.',
    ])
    @if (session()->has('msg-success'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok" id="show-success-request">
                {{ session('msg-success') }}
            </span>
        </div>
        {{ session()->forget('msg-success') }}
    @elseif(session()->has('msg-error'))
        <div class="btn btn-danger mt-4">
            <span class="glyphicon glyphicon-ok">
                {{ session('msg-error') }}
            </span>
        </div>
        {{ session()->forget('msg-error') }}
    @endif
    <style>
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .show {
            display: block
        }

        .spinner {
            width: 40px;
            height: 40px;
            position: fixed;
            top: 50%;
            left: 50%;
        }

        .double-bounce1,
        .double-bounce2 {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: #ffd33b;
            opacity: 0.6;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
            animation: sk-bounce 2.0s infinite ease-in-out;
        }

        .double-bounce2 {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }

        @-webkit-keyframes sk-bounce {

            0%,
            100% {
                -webkit-transform: scale(0.0)
            }

            50% {
                -webkit-transform: scale(1.0)
            }
        }

        @keyframes sk-bounce {

            0%,
            100% {
                transform: scale(0.0);
                -webkit-transform: scale(0.0);
            }

            50% {
                transform: scale(1.0);
                -webkit-transform: scale(1.0);
            }
        }
    </style>
    <div class="overlay " id="loading-overlay">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <section class="section section-xl bg-default text-md-left">
        <div class="container">
            <h2 class="">Explore <b style="color: #ffd33b">Pets</b></h2>
            <h6 style="letter-spacing: 3px;color: grey;font-size: 10px" class="mt-2">Find your next family member, adopt a
                pet today.
            </h6>
            <div class="row  featurette align-items-center justify-content-between">
                <div class="col-sm-6 col-md-3">
                    <form class="rd-search form-search" action="search-results.html">
                        <div class="form-wrap">
                            {{-- <label class="form-label rd-input-label" for="search-form">Search ...</label> --}}
                            <input placeholder="Search.." class="form-input" id="pet-adoption-search"
                                onkeyup="filterAdoptionPets()" type="text" name="s" autocomplete="off">
                            {{-- <button class="button-search  icon   fa-search" type="submit"></button> --}}
                        </div>
                    </form>
                </div>
                <div class="form-wrap col-sm-6 col-md-2 mt-3 ">
                    <select class="form-select" onchange="filterAdoptionPets(this)" id="adoption-filter-category"
                        type="text" name="s" autocomplete="off">
                        <option value="0">-- Filter --</option>
                        <option value="1">Near Me</option>
                        <option value="2">Cats</option>
                        <option value="3">Birds</option>
                    </select>
                </div>
            </div>
            <hr class="mt-4">
            <div id="adoption-pets-table-main">
                @include('MainSite2.Adoption.ProductTable')
            </div>
        </div>
        </div>
        </div>
        </div>
        <div></div>
        </div>
    </section>
    <div class="modal fade  mt-5" id="modal-adoption-request" style=" padding-right: 17px;" aria-modal="true"
        role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Request for adoption</h4>
                    <button type="button" onclick="closeRquestModal()" class="close" style="border: none;background:none;"
                        data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body" style="text-align: start">
                    <h5>Please fill proper details to get response from owner.</h5>
                    <input type="hidden" name="" value="" id="HiddenAdoptionpetID" type="text">
                    <label for="exampleInputEmail1" class="mt-3">Name<span style="color: red">*</span></label>
                    <input {{ isset($user) ? 'readonly' : '' }} value="{{ isset($user) ? $user->user_name : '' }}"
                        type="" class="form-control" name="" id="adoptionReqName" type="text"
                        placeholder="Name">

                    <label for="exampleInputEmail1" class="mt-3">Phone<span style="color: red">*</span></label>
                    <input value="{{ isset($user) ? $user->user_phone : '' }}" {{ isset($user) ? 'readonly' : '' }}
                        type="" class="form-control" name="" id="adoptionPhone" type="text"
                        placeholder="Phone">


                    <label for="exampleInputEmail1" class="mt-3">City<span style="color: red">*</span></label>
                    <select type="" class="form-select" name="" id="adoptionCityId">
                        <option value="">--Choose--</option>
                        @foreach ($cities as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <span class="text-danger error-cityId " style="display: none">
                        City is required
                    </span>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" onclick="sendAdoptionRequest()" class="btn btn-danger">Send Request</button>

                </div>
            </div>
        </div>
    </div>
    {{-- logni modal --}}
    
    <script>
        function filterAdoptionPets() {
            let catID = $('#adoption-filter-category').val();
            let search = $('#pet-adoption-search').val();
            $('body').css('overflow', 'hidden');
            $('#loading-overlay').addClass('show');
            if (catID == 1 && catID != 0) {

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        let latitude = position.coords.latitude;
                        let longitude = position.coords.longitude;
                        // Do something with the coordinates, e.g. display them on a map
                        ajaxFilter(catID ?? "", latitude, longitude, search)
                    });
                } else {
                    // Handle the case where geolocation is not supported
                }
            } else {

                ajaxFilter(catID, 0, 0, search)
            }

        }

        function ajaxFilter(catID, latitude, longitude, search) {
            $.ajax({
                url: BASE_URL + "/adoption/filter/?catId=" + catID + "&lat=" + latitude + "&long=" + longitude +
                    "&search=" + search,
                success: function(data) {
                    if (data) {
                        $('body').css('overflow', 'scroll');
                        $('#loading-overlay').removeClass('show');
                    }

                    $("#adoption-pets-table-main").html(data);
                },
            });
        }


        function closeRquestModal() {
            $("#modal-adoption-request").modal('hide')
        }


        function sendAdoptionRequest(petId) {
            let User_Email = "<?php echo session('user_email'); ?>";


            let name = $('#adoptionReqName').val();
            let phone = $('#adoptionPhone').val();
            let cityId = $('#adoptionCityId').val();
            let petID = $('#HiddenAdoptionpetID').val();;



            if (!cityId) {
                $('#loading-overlay').removeClass('show');
                $(".error-cityId").show()
                return;
            }
            
            $('#loading-overlay').addClass('show');
            $.ajax({
                url: BASE_URL + "/adoption/req/?name=" + name + "&phone=" + phone + "&cityId=" + cityId +
                    "&petID=" + petID,
                success: function(data) {
                    if (data.message == "true") {
                    window.location='/adoption/pets';
                        closeRquestModal();
                        $('#show-success-request').text("Request has been sent!");
                        $('#adoptionReqName').val('');
                        $('#adoptionPhone').val('');
                        $('#adoptionCityId').val('');
                        $('#HiddenAdoptionpetID').val('');
                        $('#loading-overlay').removeClass('show');
                    }


                },
            });
        }
    </script>
@endsection
