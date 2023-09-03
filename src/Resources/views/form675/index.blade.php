@extends('master')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <h5>Form-675</h5>
        </div>
        <div class="card-body">
            <div id="accordion">
                @foreach ($formattedArray as $key => $datam)
                    <div class="card">
                    <div class="card-header d-flex justify-content-between" id="heading{{ $key }}">
                            <h5 class="mb-0">
                                {{-- @dd($datam) --}}
                                <button class="btn btn-link" data-toggle="collapse"
                                    data-target="#collapse{{ $key }}" aria-expanded="true"
                                    aria-controls="collapse{{ $key }}">
                                    Voucher No : <b> {{ $datam->receipt_voucher_no }} </b>
                                </button>
                            </h5>
                            <div>
                                <a href="{{ route('form675.downloadPdf', ['form675' => $datam->uuid]) }}" class="btn btn-sm btn-outline-info">PDF</a>
                                <a href="{{ route('form675.view', ['form675' => $datam->uuid]) }}"
                                    class="btn btn-sm btn-outline-success">View</a>
                                <a href="{{ route('form675.edit', ['form675' => $datam->uuid]) }}"
                                    class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="{{ route('form675.delete', ['form675' => $datam->uuid]) }}" class="btn btn-sm btn-outline-danger">Delete</a>
                            </div>
                        </div>
                        <div id="collapse{{ $key }}" class="collapse show"
                            aria-labelledby="heading{{ $key }}" data-parent="#accordion">
                            <div class="card-body">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="center">
                                            <table width="90%" border="0" cellpadding="0" cellspacing="0"
                                                bgcolor="#ffffff">
                                                <tr>
                                                    <td align="right" style="padding-right:2px;">
                                                        <p>BAF Form 675</p>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table width="90%" border="0" cellpadding="0" cellspacing="0"
                                                bgcolor="#ffffff">
                                                <tr>
                                                    <td width="30%"></td>
                                                    <td width="30%" align="center" style="padding-right:2px;">
                                                        <h4>Internal Exchange and Recevied Voucher</h4>
                                                    </td>
                                                    <td width="30%" align="right" style="padding-right:4px;">
                                                        <p>Original Copy</p>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table width="90%" border="0" cellpadding="0" cellspacing="0"
                                                bgcolor="#ffffff">
                                                <tr>
                                                    <td width="30%">
                                                        <p>Ser No : <span>{{ $datam->ser_no }}</span></p>
                                                        <p>Office Name : <span>{{ $datam->name_of_user }}</span></p>
                                                    </td>
                                                    <td width="30%" style="padding-right:2px;">
                                                        <p>Date : <span>{{ $datam->date_of_voucher }}</span></p>
                                                        <p>Base Name : <span>{{ $datam->base_name }}</span></p>
                                                    </td>
                                                    <td width="30%" style="padding-right:2px;">
                                                        <p>Receipt Voucher No :
                                                            <span>{{ $datam->receipt_voucher_no }}</span>
                                                        </p>
                                                        <p>Financial Year : <span>{{ $datam->fin_year }}</span></p>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table width="90%" border="0" cellpadding="0" cellspacing="0"
                                                bgcolor="#ffffff">
                                                <tr>
                                                    <td>
                                                        <table width="100%" style="table-layout: fixed;" border="1px solid black">
                                                            <thead align="center">
                                                                <tr>
                                                                    <th rowspan="2">Ref No</th>
                                                                    <th rowspan="2">Description of Goods</th>
                                                                    <th rowspan="2">Unit</th>
                                                                    <th colspan="2">Quantity</th>
                                                                    <th rowspan="2">Stock Record <br>Card Posted</th>
                                                                    <th rowspan="2">Reason for Refund</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Workable</th>
                                                                    <th>Repairable</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($datam['ref_no'] as $key => $ref_no)
                                                                    <tr>
                                                                        <td>{{ $ref_no }}</td>
                                                                        <td>{{ $datam['description_of_goods'][$key] }}</td>
                                                                        <td>{{ $datam['unit'][$key] }}</td>
                                                                        <td>{{ $datam['qty_workable'][$key] }}</td>
                                                                        <td>{{ $datam['qty_repairable'][$key] }}</td>
                                                                        <td>{{ $datam['stock_record_card_posted'][$key] }}
                                                                        </td>
                                                                        <td style="word-wrap: break-word">{{ $datam['reason_for_refund'][$key] }}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table width="90%" border="0" cellpadding="0" cellspacing="0"
                                                bgcolor="#ffffff">
                                                <tr>
                                                    <td width="30%" style="text-align: center;">
                                                        <p></p>
                                                        <p>Returnd Flight/Section<br>Captain Latter</p>
                                                        <p></p>
                                                        <p style="border-top: 2px dotted black;">(Name and Rank)</p>
                                                    </td>
                                                    <td width="30%" style="text-align: center;">
                                                        <p style="margin-top: 3em"></p>
                                                        <p style="border-top: 2px dotted black;">Receiver Signature <br> and Date</p>
                                                        <p></p>
                                                        <p style="border-top: 2px dotted black;">Consent to the amount deposited by the returning <br> flight / section captain</p>
                                                    </td>
                                                    <td width="30%" align="right">
                                                        <table border="1px" cell-padding="0" cell-spacing="0" style="border-collapse: collapse;">
                                                            <thead align="center">
                                                                <tr>
                                                                    <th colspan="2">Stock record card <br> was entered</th>
                                                                    <th colspan="2">The ledger was <br> corrected</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Signature</th>
                                                                    <th>Date</th>
                                                                    <th>Signature</th>
                                                                    <th>Date</th>
                                                                </tr>
                                                            </thead>
                                                            <tr>
                                                                <td>{{ $datam->sign_of_recorded_stock }}</td>
                                                                <td>{{ $datam->date_of_recorded_stock }}</td>
                                                                <td>{{ $datam->sign_of_corrected_ledger }}</td>
                                                                <td>{{ $datam->date_of_corrected_ledger }}</td>
                                                            </tr>
                                                        </table>
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
            <a href="{{ route('form675.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
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
