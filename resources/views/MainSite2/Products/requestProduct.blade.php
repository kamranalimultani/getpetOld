@extends('MainSite2.index', ['title' => 'GetPet.in | ' . $product->p_name, 'tags' => 'getpet.in, how to sell pets in india,pet shops near me,pet shops in nagina', 'description' => $product->p_description])
@section('content')
    @if (session()->has('msg-success'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok">
                {{session('msg-success')}}     
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
    <div class="content-header">
        <div class="container-fluid">

            <div class=" m-3">Note: Seller will get back to you after validating your request with in 12 hours.</div> <br>
            <div class="container mt-2 mb-5">
                <img class="mt-5" style="width: 150px"
                    src="{{ '/storage/app/public/Admin/Products/' . $product->p_main_image }}" alt="">
                <h4>{{ $product->p_name }}</h4>
                <form class="" method="post" action="{{ url('/product/request') }}">
                    @csrf
                    <input type="hidden" name="productID" value="{{ $product->p_id }}">
                    <div class="row row-20 row-md-30">
                        <div class="col-lg-8">
                            <div class="row row-20 row-md-30">
                                <div class="col-sm-6">
                                    <div class="custom-form custom-form-fname text-start">
                                        <input class="form-input " id="contact-first-name-2" type="text" name="name"
                                            placeholder="Your name">
                                        @error('name')
                                            <span class="text-danger text-start">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-form text-start">
                                        <input class="form-input " id="contact-last-name-2" type="number"
                                            name="phonenumber" placeholder="Phone Number">
                                        @error('phonenumber')
                                            <span class="text-danger text-start">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-form text-start">
                                        <label class="">State</label>
                                        <select class="form-select " id="contact-phone-2" name="state"
                                            placeholder="State">
                                            <option value="">--Select--</option>
                                            @foreach ($states as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('state')
                                            <span class="text-danger text-start">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-form-email custom-form">
                                        <input class="form-input " id="senderEmail" type="number" name="quantity"
                                            placeholder="Quantity">

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="custom-form-message custom-form">
                                <label class="form-label rd-input-label d-none" for="contact-message-2">Message</label>
                                <textarea class="form-input textarea-lg " id="contact-message-2" name="message" placeholder="Messagee"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="submit-button-contact d-flex align-items-center mt-4">
                        <button class="button button-sm button-primary button-zakaria d-flex flex-row" type="submit">

                            <div id="emailSendButton" style="margin-left:10px">
                                Send Request
                        </button>


                    </div>

            </div>
            </form>
        </div>
        <script>
            function sendRequest() {

            }
        </script>
    @endsection
