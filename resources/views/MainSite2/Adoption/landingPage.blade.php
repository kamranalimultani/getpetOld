@extends('MainSite2.index', ['title' => 'GetPet.in | Adoption', 'tags' => 'getpet.in, how to sell pets in india,pet shops near me,pet shops in nagina', 'description' => 'Are pets allowed to be delivered to homes?,What is the return policy for pet food?,What types of pet food are available for delivery?,What is macaow parrot food?,How can i order pets?'])
@section('content')
    @include('MainSite2.Common.BreadCrum', [
        'backPage' => 'Pages',
        'backPageUrl' => '/',
        'currentPage' => 'Adoption',
        'currentPageUrl' => '/adoption',
        'desc' => 'Welcome to our pet store! We are a pet shop that specializes in all things related to pets.',
    ])
    <section class="section section-xl bg-default text-md-left">
        <div class="container">
            <div class="row  featurette">
                <div class="col-md-12">
                    <h2 class="featurette-heading ">Stop buying.<span class="text-muted">Start adopting!</span></h2>
                    <p class="lead" style="font-size: 19px;line-height:120%">In the India, it is estimated that around 6.5
                        million companion animals enter
                        animal shelters each year. Of these, approximately 3.3 million are dogs and 3.2 million are cats.
                        Unfortunately, not all of these animals are adopted, and around 1.5 million companion animals are
                        euthanized in shelters each year. It is not clear how many of these animals were discarded by their
                        owners versus other reasons.</p>
                    <div class="d-flex justify-content-center">
                        <a href="{{ url('/adoption/pets') }}" class="primary btn btn-primary mt-4 ">Explore Pets</a>
                        <a style="margin-left: 10px;text-transform: uppercase;font-weight: bold"
                            onclick="listPetsforAdoption()" class=" btn btn-secondary mt-4 ">List Pets</a>

                    </div>
                </div>
                {{-- <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                        style="width: 500px; height: 500px;"
                        src="https://imgs.search.brave.com/3SbSxmMWpoYqFn3VNGSnZC3fzXpAeSzwH_4OCJh7AK0/rs:fit:990:990:1/g:ce/aHR0cHM6Ly9lNHA3/YzlpMy5zdGFja3Bh/dGhjZG4uY29tL3dw/LWNvbnRlbnQvdXBs/b2Fkcy8yMDE3LzAz/LzI4LTEzLTk5MHg5/OTAuanBnP2l2PTQ5"
                        data-holder-rendered="true">
                </div> --}}
                <input type="hidden" id="adoptionPopUp" value="{{ session()->has('userName') ? session('userName') : '' }}">
            </div>
        </div>

    </section>
    <div class="modal fade show" id="pleaseLogin" style=" padding-right: 17px;margin-top:150px" aria-modal="true"
        role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="border: none">
                    <h4 class="modal-title"></h4>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> --}}
                    {{-- <span aria-hidden="true">×</span> --}}
                    </button>
                </div>

                <div class="modal-body">
                    <h4>Please login or sign up for listing pets!</h4>
                    <input type="hidden" name="deleteCategory" id="deleteCategory" type="text">
                </div>
                <div class="modal-footer justify-content-center" style="border: none">

                    <a onclick="closeModal()" class="btn btn-danger">ok!</a>

                </div>
            </div>
        </div>
    </div>
    <script>
        function listPetsforAdoption(data) {
            var sessionValue = $("#adoptionPopUp").val();
            if (!sessionValue) {
                $('#blur-body').show()
                $('#pleaseLogin').show()
            } else {
                window.location = "/adoption/listing-dashboard"
            }


        }

        function closeModal() {
            $('#blur-body').hide()
            $('#pleaseLogin').hide()
        }
    </script>
@endsection
