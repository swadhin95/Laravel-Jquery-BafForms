@extends('master')

@section('content')
    <div class="card mt-3">
        <div class="jumbotron text-center">
            <h2 class="text-capitalize text-light bg-primary"> total stock record voucher </h2>
            <p>Resize this responsive page to see the effect!</p>
        </div>
        <div class="card-body">
            
            <div class="container-fluid">
                <div id="jsexcelTblContainer" class="mt-2 table-responsive"></div>
            </div>
            <div class="row" style="margin-top:30px">
                <div class="col-sm-4">
                <ul>
                    <li>That is going to be proved </li>
                    <li> i) Accutal reserves are found in columns 8 </li>
                    <li>ii) Recipt of temporarry borrowed liquid was submitted </li>
                </ul>
                </div>

                <div class="col-sm-4">
                    <ul>
                        <li> Proof of receipt must be proved </li>
                    </ul>
                </div>

                <div class="col-sm-4">
                    <p> I am satisfied that the stock and stock record stock shown in columns 9 and 10 is correct during the calculation and calculation of the said liquid.<p>
                </div>
            </div>

        <div class="row" style="margin-top:80px">
            
            <div class="col-sm-3">
                <hr style="border: 2px solid black; width:70%;">
                <h6>Product Counting Signature </h6>
            </div>

            <div class="col-sm-6">
                <hr style="border: 2px solid black; width:60%;">
                <h6>Product Counting Group Officer in charge Signature </h6>  
            </div>

                <div class="col-sm-3">
                    <hr style="border: 2px solid black; width:80%;">
                    <h6> Stores Officer in charge Signature </h6>
                </div>

            </div>
        </div>

   

    
</div>

       
    </div>
@push('js')
    <script src="{{ asset('vendor/bafforms/assets/libs/jsexcel/js/jexcel.js') }}"></script>
    <script src="{{ asset('vendor/bafforms/assets/libs/jsexcel/js/jsuites.js') }}"></script>

    <script src="{{ asset('vendor/bafforms/assets/libs/select2/select2.min.js') }}"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>

        const MASTER_DATA = @json($form600As);

    </script>

    <script type="module" src="{{ asset('vendor/bafforms/assets/js/form600A/index.js') }}"></script>
@endpush
@push('css')
<style>
    .jexcel tbody tr:hover {
        background-color: rgb(183, 218, 250);
    }

    .jexcel tbody tr td:hover {
        background-color: rgb(155, 205, 252);
    }

</style>

<link rel="stylesheet" href="{{ asset('vendor/bafforms/assets/libs/jsexcel/css/jexcel.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/bafforms/assets/libs/jsexcel/css/jsuites.css') }}">

<link rel="stylesheet" href="{{ asset('vendor/bafforms/assets/libs/select2/select2.min.css') }}">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<link rel="stylesheet" href="{{ asset('vendor/bafforms/assets/css/style.css') }}">

@endpush
@endsection

