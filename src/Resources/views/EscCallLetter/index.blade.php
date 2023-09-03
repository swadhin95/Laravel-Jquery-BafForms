@extends('master')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h5>Esc Call Letter</h5>
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
                        <a href="{{ route('EscCallLetter.downloadPdf', ['escCall' => $datam->id]) }}" class="btn btn-sm btn-outline-info">PDF</a>
                        <a href="{{ route('EscCallLetter.view', ['esc_calls' => $datam->id]) }}" class="btn btn-sm btn-outline-success">View</a>
                        <a href="{{ route('EscCallLetter.edit', ['esc_calls' => $datam->id]) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        <a href="{{ route('EscCallLetter.delete', ['esc_calls' => $datam->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
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
                                                <p style="text-align: center;"><span>{{ $datam->confidential }}</span></p>
                                                <p style="text-align: center;"><span>{{ $datam->maintainence }}</span></p>
                                                <p style="text-align: center;">(<span>{{ $datam->transportation_unit }}</span>)</p>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="90%" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="90%">
                                                <p>নৈঃ পঃ</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="90%">
                                                <p><span>{{ $datam->serial_no }}</span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="90%">
                                                <p><b><u><span>{{ $datam->instrument_serial_no }}</span></u></b></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="90%">
                                                <p><span>{{ $datam->description_one }}</span></p>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="90%" border="1" style="margin-left: 50px;" cellpadding="0" cellspacing="0">

                                        <tr style="background-color: #9c9797;">
                                            <th width="5%"><p>Ser No</p></th>
                                            <th width="15%"><p>Indent No</p> </th>
                                            <th width="45%"><p>Description of Items/Stores</p></th>
                                            <th width="10%"><p>Qty</p></th>
                                            <th width="5%"><p>Rmk</p></th>
                                        </tr>
                                    </table>
                                    <table width="90%" border="1" class="table-bordered" style="margin-left: 50px; margin-bottom: 20px;" id="table">
                                        @foreach ($datam['one_serial'] as $key => $one_serial)
                                        <tr>
                                            <td width="5%">{{ $one_serial }}</td>
                                            <td width="15%">{{ $datam['one_indent'][$key] }}</td>
                                            <td width="45%">{{ $datam['one_description'][$key] }}</td>
                                            <td width="10%">{{ $datam['one_qty'][$key] }}</td>
                                            <td width="5%">{{ $datam['one_rmk'][$key] }}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                
                                <table width="90%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="90%">
                                            <p><span>{{ $datam->description_two }}</span></p>
                                        </td>
                                    </tr>
                                </table>
                                <table width="90%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="65%"></td>
                                        <td width="25%">
                                            <p><span>{{ $datam->name }}</span></p>
                                        </td>
                                        <td width="10%"></td>
                                    </tr>
                                    <tr>
                                        <td width="65%"></td>
                                        <td width="25%">
                                            <p><span>{{ $datam->rank }}</span></p>
                                        </td>
                                        <td width="10%"></td>
                                    </tr>
                                    <tr>
                                        <td width="65%"></td>
                                        <td width="25%">
                                            <p><span>{{ $datam->transfer_director }}</span></p>
                                        </td>
                                        <td width="10%"></td>
                                    </tr>
                                    <tr>
                                        <td width="65%"></td>
                                        <td width="25%">
                                            <p><span>{{ $datam->phone }}</span></p>
                                        </td>
                                        <td width="10%"></td>
                                    </tr>
                                    <tr>
                                        <td width="65%"></td>
                                        <td width="25%">
                                            <p><span>{{ $datam->date }}</span></p>
                                        </td>
                                        <td width="10%"></td>
                                    </tr>
                                </table>
                        <table width="90%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="90%">
                                    <p>To:</p>
                                    <p><span>{{ $datam->main_inspector }}</span></p>
                                    <p><span>{{ $datam->derector_title }}</span></p>
                                    <p><span>{{ $datam->captain }}</span></p>
                                    <p><span>{{ $datam->staff_officer_title }}</span></p>
                                    <p>Awareness:</p>
                                    <p><span>{{ $datam->secretary_title }}</span></p>
                                </td>
                            </tr>
                        </table>
                        <table width="90%" border="0" style="padding-top: 90px;" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="90%">
                                    <p style="text-align: center;"><span>{{ $datam->confidential_bottom }}</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td width="90%">
                                    <p><span>{{ $datam->serial_bottom }}</span></p>
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
        <a href="{{ route('EscCallLetter.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
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