@extends('master')

@section('content')
    <div class="card mt-3">

        <div class="jumbotron text-center">
            <h2 class="text-capitalize text-light bg-primary"> internal exchange voucher </h2>
        </div>

        <div class="row" style="margin-top:30px">
                <div class="col-sm-6">
                    <ul>
                        <li>Sl No:..................................... Date:................................ </li>
                        <li> Flyit/Section.............................. Unit................................ </li>
                    </ul>
                </div>

                <div class="col-sm-6">
                    <ul>
                        <li>Exchange voucher No:...............................</li>
                        <li> Ecomic year....................................... </li>
                    </ul>
                </div>

            </div>

        <div class="card-body">
            
            <div class="container-fluid">
                <div id="jsexcelTblContainer" class="mt-2 table-responsive"></div>
            </div>

            <div class="row" style="margin-top:80px">
            
            <div class="col-sm-3">
               <div class="product" style="margin-bottom:40px"> 
                <h5>Gotten the above product </h5>
               </div>
                <hr>
              <h5>  Signature  Of Exchange Flyit/Section Captain</h5>
            </div>

            <div class="col-sm-6">
                <hr style="border: 2px solid black; width:50%;">
                <h5>Product Exchanger Signature </h5>  
                <table class=" table table-bordered"> 
                    <tr> 
                        <th colspan="2">Stock Record Added</th>
                    </tr>
                    <tr> 
                        <th> Signature </th>
                        <th> Date </th>
                    </tr>
                    <tr> 
                        <td></td>
                        <td></td>
                    </tr>

                </table>
            </div>

                <div class="col-sm-3">
                   <div class="date"> 
                        <h5> Giving & Taking stocker Signature </h5>
                        <h5>.........................Date..........................</h5>
                        <h5> Exchange of Goods was Allowed </h5>
                   </div>

                   <div class="exchange"> 
                        <hr> 
                        <h5> Exchange Flyit/Section captain Signature </h5>
                   </div>
                    
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

        const MASTER_DATA = @json($form673);

    </script>

    <script type="module" src="{{ asset('vendor/bafforms/assets/js/form673/index.js') }}"></script>
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

