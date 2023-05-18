<!DOCTYPE html>
<html lang="en">

<head>

    <title>Admin|Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script type="text/javascript">
        BASE_URL = "<?php echo url(''); ?>";
    </script>
    <!--===============================================================================================-->
</head>

<div class="content-header">
    <div class="container-fluid">
        @if (session()->has('msg-success'))
            <div class="alert alert-success">
                <span class="glyphicon glyphicon-ok">
                    {{ session('msg-success') }}
                </span>
            </div>
            {{ session()->forget('msg-success') }}
        @elseif(session()->has('msg-error'))
            {
            <div class="btn btn-danger">
                <span class="glyphicon glyphicon-ok">
                    {{ session('msg-error') }}
                </span>
            </div>
            {{ session()->forget('msg-error') }}
            }
        @endif
        <style>
            .select2-selection {
                padding: 16px !important;
                display: flex !important;
                align-items: center !important;
            }

            .card-registration .select-input.form-control[readonly]:not([disabled]) {
                font-size: 1rem;
                line-height: 2.15;
                padding-left: .75em;
                padding-right: .75em;
            }

            .card-registration .select-arrow {
                top: 13px;
            }
        </style>

        <body>

            <div class="content-header">
                <div class="container-fluid">
                    @if (session()->has('msg-success'))
                        <div class="alert alert-success">
                            <span class="glyphicon glyphicon-ok">
                                {{ session('msg-success') }}
                            </span>
                        </div>
                        {{ session()->forget('msg-success') }}
                    @elseif(session()->has('msg-error'))
                        {
                        <div class="btn btn-danger">
                            <span class="glyphicon glyphicon-ok">
                                {{ session('msg-error') }}
                            </span>
                        </div>
                        {{ session()->forget('msg-error') }}
                        }
                    @endif
                    <section class="h-100 bg-dark">
                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col">
                                    <div class="card card-registration my-4">
                                        <div class="row g-0">
                                            <div class="col-xl-6 d-none d-xl-block">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                                    alt="Sample photo" class="img-fluid"
                                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                            </div>
                                            <div class="col-xl-6">
                                                <form action="{{ url('/user/register') }}" method="post">
                                                    @csrf

                                                    <div class="card-body p-md-5 text-black">
                                                        <div class="d-flex justify-content-between">
                                                            <h3 class="mb-5 text-uppercase">Register</h3>
                                                            <a style="text-decoration:none"
                                                                href="{{ url('/') }}">Skip</a>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="form3Example1m">First
                                                                        Name*</label>
                                                                    <input name="firstName" type="text"
                                                                        id="form3Example1m"
                                                                        class="form-control form-control-lg" />
                                                                    @error('firstName')
                                                                        {{ $message }}
                                                                    @enderror


                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="form3Example1n">Last
                                                                        Name</label>
                                                                    <input name="LastName" type="text"
                                                                        id="form3Example1n"
                                                                        class="form-control form-control-lg" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label"
                                                                        for="form3Example1m1">E-mail*</label>
                                                                    <input name="Email" type="text"
                                                                        id="form3Example1m1"
                                                                        class="form-control form-control-lg" />
                                                                    @error('Email')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label"
                                                                        for="form3Example1n1">Phone*</label>
                                                                    <input name="Phone" type="number"
                                                                        id="form3Example1n1"
                                                                        class="form-control form-control-lg" />
                                                                    @error('Phone')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label"
                                                                        for="form3Example1n1">Password*</label>
                                                                    <input name="Password" type="password"
                                                                        id="form3Example1n1"
                                                                        class="form-control form-control-lg" />
                                                                    @error('Password')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label"
                                                                        for="form3Example1n1">Confirm
                                                                        Password*</label>
                                                                    <input name="ConfirmPassword" type="text"
                                                                        id="form3Example1n1"
                                                                        class="form-control form-control-lg" />
                                                                    @error('ConfirmPassword')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6 mb-4">
                                                                <label class="form-label"
                                                                    for="form3Example1n1">States</label>
                                                                <select name="state" id="statesChange"
                                                                    class="form-select searchOptions">
                                                                    <option value="1">--Choose--</option>
                                                                    @foreach ($states as $item)
                                                                        <option value={{ $item->id }}>
                                                                            {{ $item->name }}</option>
                                                                    @endforeach
                                                                    @error('state')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </select>

                                                            </div>
                                                            <div class="col-md-6 mb-4 d-flex flex-column"
                                                                id="CitiesRender">


                                                            </div>
                                                            @error('cityName')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>



                                                        <div class="form-outline mb-4">
                                                            <label class="form-label"
                                                                for="form3Example90">Pincode</label>
                                                            <input name="Pincode" type="text" id="form3Example90"
                                                                class="form-control form-control-lg" />
                                                            @error('Pincode')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>



                                                        <div class="d-flex justify-content-end pt-3">
                                                            <input type="hidden" id="userLatitude"
                                                                name="userLatitude">
                                                            <input type="hidden" id="userLongitude"
                                                                name="userLongitude">
                                                            <button type="button" class="btn btn-light btn-lg">Reset
                                                                all</button>
                                                            <button type="submit"
                                                                class="btn btn-warning btn-lg ms-2">Submit
                                                            </button>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
                        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


                    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                    <script>
                        $('.searchOptions').select2();
                    </script>
                    <script>
                        $('#statesChange').on('change', function() {
                            let city_id = $(statesChange).val();
                            getCityies(city_id)
                        })


                        function getCityies(id) {

                            $.ajax({
                                url: BASE_URL + "/getCity?cityId=" + id,
                                success: function(data) {
                                    $("#CitiesRender").html(data);
                                }
                            })
                        }

                        const getCityValue = () => {
                            if ($('#cityChange').val() == 'noCity') {
                                myfun();
                            }
                        }


                        const myfun = () => {
                            const success = (position) => {
                                if (position) {
                                    let lat = position.coords.latitude
                                    let lon = position.coords.longitude
                                    $('#userLatitude').val(lat)
                                    $('#userLongitude').val(lon)


                                }

                            }
                            const error = () => {
                                alert('PLease reset location permission')
                            }
                            navigator.geolocation.getCurrentPosition(success, error);
                        }
                    </script>

        </body>

</html>
