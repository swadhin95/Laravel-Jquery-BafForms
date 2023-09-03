@extends('master')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h5>Precceding ESC 1</h5>
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
                        <a href="{{ route('esc1.downloadPdf', ['esc1' => $datam->id]) }}" class="btn btn-sm btn-outline-info">PDF</a>
                        <a href="{{ route('esc1.view', ['esc1' => $datam->id]) }}" class="btn btn-sm btn-outline-success">View</a>
                        <a href="{{ route('esc1.edit', ['esc1' => $datam->id]) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        <a href="{{ route('esc1.delete', ['esc1' => $datam->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </div>
                </div>
                <div id="collapse{{ $key }}" class="collapse show" aria-labelledby="heading{{ $key }}" data-parent="#accordion">
                    <div class="card-body">
                        <p style="text-align: end; margin: 90px 0 0 0; ">BAF F 20200</p>
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 80%;">
                                    <p><b><u>PROCEEDINGS OF EQUIPMENT SELECTION COMMITTEE</u></b></p>
                                    <p> {{ $datam->ref_no}} </p>
                                </td>
                                <td style="width: 20%;">
                                    <p>date : {{ $datam->date}}</p>
                                </td>
                            </tr>
                        </table>
                        <table style="width: 100%; border: 1px;" class="table-bordered table-responsive">
                            <tr>
                                <th style="width: 75%;  text-align:center;">Description of items</th>
                                <th style="width: 25%; text-align:center;">Qty</th>

                            </tr>
                            <tr>
                                <td style="width: 75%;"> {{ $datam->description_item}}</td>
                                <td style="width: 25%;"> {{ $datam->qty}} </td>
                            </tr>
                        </table>
                        <table style="width: 100%;" class=" table-responsive">
                            <tr>
                                <td style="width: 80%;"><u>Samples code no</u></td>
                                <td style="width: 20%;"><u>Offer Validity</u></td>
                            </tr>
                            <tr>
                                <td style="width: 80%;"> {{ $datam->samples_code_no}}</td>
                                <td style="width: 20%;"> {{ $datam->offer_validity}}</td>
                            </tr>
                        </table>
                        <hr>
                        <table style="width: 100%;" class=" table-responsive">
                            <tr>
                                <td style="width: 100%;"><u>Remarks by SPS:</u></td>
                            </tr>
                            <tr>
                                <td style="width: 100%;"><span>1. </span> {{ $datam->remarks_one}} </td>
                            </tr>
                            <tr>
                                <td style="width: 100%;"><span>2. <b><u>Recommendation for Acceptance.</u></b></span> {{ $datam->recommendation_acceptance}}</td>
                            </tr>
                            <tr>
                                <table style="width: 100%; border: 1px; margin-top: 15px; margin-bottom: 15px;" class="table-bordered table-responsive" id="table">
                                    <thead align="center" class="bg-secondary">
                                        <tr>
                                            <th style="width: 15%;">Code no</th>
                                            <th style="width: 65%;">Obsn on sample</th>
                                            <th style="width: 20%;">Rmk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datam['accept_code_no'] as $key => $accept_code_no)
                                        <tr>
                                            <td style="width: 15%;">
                                                <p><span>{{ $accept_code_no }}</span></p>
                                            </td>
                                            <td style="width: 65%;">
                                                <p><span>{{ $datam['accept_obsn_sample'][$key]  }}</span></p>
                                            </td>
                                            <td style="width: 20%;">
                                                <p><span>{{ $datam['accept_rmk'][$key]  }}</span></p>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </tr>
                            <tr>
                                <td> {{ $datam->table_bottom_comment}}</td>
                            </tr>
                            <br>
                            <tr>
                                <td style="width: 100%;"><span>3. <b><u>Rejection.</u></b></span> {{ $datam->rejection}}</td>
                            </tr>
                            <tr>
                                <table style="width: 100%; border: 1px; margin-top: 15px;" class="table-bordered table-responsive" id="table2">
                                    <thead align="center" class="bg-secondary">
                                        <tr>
                                            <th style="width: 15%;">Code no</th>
                                            <th style="width: 65%;">Obsn on sample</th>
                                            <th style="width: 20%;">Rmk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datam['reject_code_no'] as $key => $reject_code_no)
                                        <tr>
                                            <td style="width: 15%;">
                                                <p><span>{{ $reject_code_no }}</span></p>
                                            </td>
                                            <td style="width: 65%;">
                                                <p><span>{{ $datam['reject_obsn_sample'][$key]  }}</span></p>
                                            </td>
                                            <td style="width: 20%;">
                                                <p><span>{{ $datam['reject_rmk'][$key]  }}</span></p>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <div class="card-footer text-center">
        <a href="{{ route('esc1.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
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