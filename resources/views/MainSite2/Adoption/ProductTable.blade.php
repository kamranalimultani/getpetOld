<div class="container mt-4">
    <div class="row">
        <div class="col-12">

            <div class="row ">
                @if (count($products) > 0)
                    @foreach ($products as $index => $item)
                        <div class="col-sm-3 mb-2">
                            <div class="" style="height:150px">
                                <a href="{{ url('adoption/pet/' . $item->id) }}">

                                    <img class=""
                                        style="border-radius: 4px;height: 150px;max-height:180px;object-fit: cover"
                                        src="{{ ('/storage/app/public/User/Adoption/' . $item->image) }}" width="200px"
                                        height="auto" alt="{{ $item->image }}">
                                </a>
                            </div>
                            <div class="thumb-content">
                                <h6 style="letter-spacing: 0;font-weight: 500">{{ $item->title }}</h6>
                            </div>

                            <button onclick="openRequestAdoptionModal({{ $item->id }})"
                                style="text-transform: capitalize" type="button" class="btn btn-sm btn-primary">
                                Request </button>

                        </div>
                    @endforeach
                @else
                    <h5 style="color: red">Sorry there is no pet! </h5>
                    <a href="{{ url('/adoption/listing-dashboard') }}" style="color: black">Want to list yours? </a>
                @endif

            </div>
        </div>
    </div>
    <div class="page-links mt-5" id="hide-on-filter">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
    <div class="modal fade " id="login-Modal" style=" padding-right: 17px;margin-top:150px" aria-modal="true"
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

                    <a onclick="closeReqModal()" class="btn btn-danger">ok!</a>

                </div>
            </div>
        </div>
    </div>
    <script>
        function openRequestAdoptionModal(id) {
            let User_Email = "<?php echo session('userEmail'); ?>";
      
            if (!User_Email) {
                $('#login-Modal').modal("show");
            } else {

                $('#HiddenAdoptionpetID').val(id)
                $("#modal-adoption-request").modal('show')
            }
        }
        function closeReqModal() {
            $('#blur-body').hide()

            $('#login-Modal').modal("hide")
        }   
    </script>
