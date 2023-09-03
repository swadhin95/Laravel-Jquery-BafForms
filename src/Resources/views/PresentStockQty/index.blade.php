@extends('master')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h5>Present Stock Qty</h5>
    </div>
    <div class="card-body">
        <div id="accordion">
            @foreach ($formattedArray as $key => $datam)
            <div class="card">
                <div class="card-header d-flex justify-content-between" id="heading{{ $key }}">
                    <h5 class="mb-0">
                        {{-- @dd($datam) --}}
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            Voucher No : <b> {{ $datam->id }} </b>
                        </button>
                    </h5>
                    <div>
                        <a href="{{ route('PresentStockQty.downloadPdf', ['PresentSQID' => $datam->id]) }}" class="btn btn-sm btn-outline-info">PDF</a>
                        <a href="{{ route('PresentStockQty.view', ['PresentSQID' => $datam->id]) }}" class="btn btn-sm btn-outline-success">View</a>
                        <a href="{{ route('PresentStockQty.edit', ['PresentSQID' => $datam->id]) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        <a href="{{ route('PresentStockQty.delete', ['PresentSQID' => $datam->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </div>
                </div>
                <div id="collapse{{ $key }}" class="collapse show" aria-labelledby="heading{{ $key }}" data-parent="#accordion">
                    <div class="card-body">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td align="center">
                                    <table width="90%" border="0" style="padding-top: 30px;" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="90%">
                                                <u><b>
                                                        <p style="text-align: center;"><span>{{ $datam->title}}</span></p>
                                                    </b></u>
                                            </td>
                                        </tr>
                                    </table>

                                    <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" cellpadding="0" cellspacing="0">
                                        <tr style="background-color: #9c9797;">
                                            <th width="5%">
                                                <p>Ser No</p>
                                            </th>
                                            <th width="20%">
                                                <p>Description of items</p>
                                            </th>
                                            <th width="5%">
                                                <p>U/I</p>
                                            </th>
                                            <th width="10%">
                                                <p>201MU BAF</p>
                                                </p>
                                            </th>
                                            <th width="10%">
                                                <p>Dues in</p>
                                                </p>
                                            </th>
                                            <th width="5%">
                                                <p>BBD</p>
                                            </th>
                                            <th width="5%">
                                                <p>BSR</p>
                                            </th>
                                            <th width="5%">
                                                <p>ZHR</p>
                                            </th>
                                            <th width="5%">
                                                <p>MTR</p>
                                            </th>
                                            <th width="10%">
                                                <p>Present Stock Bases/Unit</p>
                                            </th>
                                            <th width="10%">
                                                <p>Average Yearly Consumption</p>
                                            </th>
                                        </tr>
                                    </table>
                                    <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" id="table">
                                    @foreach ($datam['serial_no_one'] as $key => $serial_no_one)
                                        <tr>
                                            <th width="5%">
                                                <p><span>{{ $serial_no_one }}</span></p>
                                            </th>
                                            <th width="20%">
                                                <p><span>{{ $datam['description_of_items_one'][$key]  }}</span></p>
                                            </th>
                                            <th width="5%">
                                                <p><span>{{ $datam['ui_one'][$key]  }}</span></p>
                                            </th>
                                            <th width="10%">
                                                <p><span>{{$datam['mu_baf_one'][$key]  }}</span></p>
                                            </th>
                                            <th width="10%">
                                                <p><span>{{ $datam['dues_in_one'][$key]  }}</span></p>
                                            </th>
                                            <th width="5%">
                                                <p><span>{{ $datam['bbd_one'][$key]  }}</span></p>
                                            </th>
                                            <th width="5%">
                                                <p><span>{{ $datam['bsr_one'][$key]  }}</span></p>
                                            </th>
                                            <th width="5%">
                                                <p><span>{{ $datam['zhr_one'][$key] }}</span></p>
                                            </th>
                                            <th width="5%">
                                                <p><span>{{ $datam['mtr_one'][$key] }}</span></p>
                                            </th>
                                            <th width="10%">
                                                <p><span>{{ $datam['present_stock_one'][$key] }}</span></p>
                                            </th>
                                            <th width="10%">
                                                <p><span>{{ $datam['avg_yr_consumption_one'][$key] }}</span></p>
                                            </th>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" id="table_two">
                                    @foreach ($datam['serial_no_two'] as $key => $serial_no_two)
                                        <tr>
                                            <th width="5%">
                                                <p><span>{{ $serial_no_two }}</span></p>
                                            </th>
                                            <th width="20%">
                                                <p><span>{{ $datam['description_of_items_two'][$key]  }}</span></p>
                                            </th>
                                            <th width="5%">
                                                <p><span>{{ $datam['ui_two'][$key]  }}</span></p>
                                            </th>
                                            <th width="10%">
                                                <p><span>{{$datam['mu_baf_two'][$key]  }}</span></p>
                                            </th>
                                            <th width="10%">
                                                <p><span>{{ $datam['dues_in_two'][$key]  }}</span></p>
                                            </th>
                                            <th width="5%">
                                                <p><span>{{ $datam['bbd_two'][$key]  }}</span></p>
                                            </th>
                                            <th width="5%">
                                                <p><span>{{ $datam['bsr_two'][$key]  }}</span></p>
                                            </th>
                                            <th width="5%">
                                                <p><span>{{ $datam['zhr_two'][$key] }}</span></p>
                                            </th>
                                            <th width="5%">
                                                <p><span>{{ $datam['mtr_two'][$key] }}</span></p>
                                            </th>
                                            <th width="10%">
                                                <p><span>{{ $datam['present_stock_two'][$key] }}</span></p>
                                            </th>
                                            <th width="10%">
                                                <p><span>{{ $datam['avg_yr_consumption_two'][$key] }}</span></p>
                                            </th>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" id="table_three">
                                    @foreach ($datam['serial_no_three'] as $key => $serial_no_three)
                                        <tr>
                                            <th width="5%">
                                                <p><span>{{ $serial_no_three }}</span></p>
                                            </th>
                                            <th width="20%">
                                                <p><span>{{ $datam['description_of_items_three'][$key]  }}</span></p>
                                            </th>
                                            <th width="5%">
                                                <p><span>{{ $datam['ui_three'][$key]  }}</span></p>
                                            </th>
                                            <th width="10%">
                                                <p><span>{{$datam['mu_baf_three'][$key]  }}</span></p>
                                            </th>
                                            <th width="10%">
                                                <p><span>{{ $datam['dues_in_three'][$key]  }}</span></p>
                                            </th>
                                            <th width="5%">
                                                <p><span>{{ $datam['bbd_three'][$key]  }}</span></p>
                                            </th>
                                            <th width="5%">
                                                <p><span>{{ $datam['bsr_three'][$key]  }}</span></p>
                                            </th>
                                            <th width="5%">
                                                <p><span>{{ $datam['zhr_three'][$key] }}</span></p>
                                            </th>
                                            <th width="5%">
                                                <p><span>{{ $datam['mtr_three'][$key] }}</span></p>
                                            </th>
                                            <th width="10%">
                                                <p><span>{{ $datam['present_stock_three'][$key] }}</span></p>
                                            </th>
                                            <th width="10%">
                                                <p><span>{{ $datam['avg_yr_consumption_three'][$key] }}</span></p>
                                            </th>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <table width="90%" border="0" style="margin-top: 20px;" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="90%">
                                                <p><span>{{ $datam->pl_see_excl }}</span></p>
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <div class="card-footer text-center">
        <a href="{{ route('PresentStockQty.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
    </div>
</div>
@push('js')
<script>
    $('.collapse').collapse({
        toggle: true
    })
</script>
<script src="{{ asset('vendor/bafforms/assets/libs/select2/select2.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@endpush
@push('css')
<link rel="stylesheet" href="{{ asset('vendor/bafforms/assets/libs/select2/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush
@endsection