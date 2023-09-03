@extends('master')

@section('content')
    <div class="card mt-3">
        <div class="card-body">
            
            <div class="container-fluid">
                <div id="jsexcelTblContainer" class="mt-2 table-responsive"></div>
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

