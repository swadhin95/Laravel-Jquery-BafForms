@extends('master')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <h5>Form 87</h5>
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
                                    Voucher No : <b> {{ $datam->id }} </b>
                                </button>
                            </h5>
                            <div>
                                <a href="{{ route('form87.downloadPdf', ['form87' => $datam->id]) }}"
                                    class="btn btn-sm btn-outline-info">PDF</a>
                                <a href="{{ route('form87.view', ['form87' => $datam->id]) }}"
                                    class="btn btn-sm btn-outline-success">View</a>
                                <a href="{{ route('form87.edit', ['form87' => $datam->id]) }}"
                                    class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="{{ route('form87.delete', ['form87' => $datam->id]) }}"
                                    class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Are you sure?')">Delete</a>
                            </div>
                        </div>
                        <div id="collapse{{ $key }}" class="collapse show"
                            aria-labelledby="heading{{ $key }}" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-lg-4"></div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">

                                    </div>

                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <p style="text-align: end">BAF Form 87</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <p style="text-align: center; font-size: 20px;">BANGLADESH AIR FORCE<br>
                                        <b style=" font-size: 25px;">INSPECTION NOTE</b>
                                    </p>
                                </div>

                                <div class="row" style="padding:55px 0 20px 0 ">
                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                        <p>Serial No:</p>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        {{ $datam->serial_no }}
                                    </div>
                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                        <p>Date:</p>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        {{ $datam->serial_date }}
                                    </div>
                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                        <p>Voucher No:</p>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        {{ $datam->voucher_no }}
                                    </div>
                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                        <p>Date:</p>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        {{ $datam->voucher_date }}
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12"
                                        style="border-bottom:groove; padding-bottom:10px;">
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                        <p>From:</p>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        {{ $datam->from }}
                                    </div>
                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                        <p>To:</p>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        {{ $datam->to }}
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <span>Officer-in-Charge</span>
                                        {{ $datam->area_section }}
                                        <span>Area/Section</span>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <p>Chief Inspection Officer/Chief Technical Officer</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <p>Unit:-</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">

                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 row">
                                        <div class="col-sm-1 col-md-1 col-lg-1">

                                        </div>
                                        <div class="col-sm-11 col-md-11 col-lg-11">
                                            <p>Nature of the inspection:-
                                            <ol type="a">
                                                <li>Before payment</li>
                                                <li>New receipt</li>
                                                <li>Periodic inspections</li>
                                                <li>Classification</li>
                                            </ol>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <table style="width: 100%; border: 1px; margin-top: 15px; margin-bottom: 35px;"
                                    class="table-bordered table-responsive" id="table">
                                    <thead align="center" class="bg-secondary">
                                        <tr>
                                            <td rowspan="2" style="width: 10%">Section/Law no</td>
                                            <td rowspan="2" style="width: 5%">Part no</td>
                                            <td rowspan="2" style="width: 25%">Details</td>
                                            <td colspan="4" style="width: 25%">Amount of stock</td>
                                            <td colspan="5" style="width: 30%">Rules Applied in the time of measure by
                                                quality control</td>
                                        </tr>
                                        <tr>
                                            <td>Workable</td>
                                            <td>Repaireable in base</td>
                                            <td>Repairable in depo</td>
                                            <td>Useless</td>
                                            <td>Workable</td>
                                            <td>Repaireable in base</td>
                                            <td>Repairable in depo</td>
                                            <td>Useless</td>
                                            <td>Unclassified</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datam['section_no'] as $key => $section_no)
                                        <tr>
                                            <td> {{ $section_no }}</td>
                                            <td>{{ $datam['part_no'][$key] }}</td>
                                            <td>{{ $datam['details'][$key] }}</td>
                                            <td>{{ $datam['stock_workable'][$key] }}</td>
                                            <td>{{ $datam['stock_base_repairable'][$key] }}</td>
                                            <td>{{ $datam['stock_depo_repairable'][$key] }}</td>
                                            <td>{{ $datam['stock_useless'][$key] }}</td>
                                            <td>{{ $datam['quality_control_workable'][$key] }}</td>
                                            <td>{{ $datam['quality_control_base_repairable'][$key] }}</td>
                                            <td>{{ $datam['quality_control_depo_repairable'][$key] }}</td>
                                            <td>{{ $datam['quality_control_useless'][$key] }}</td>
                                            <td>{{ $datam['unclassified'][$key] }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                         {{ $datam->officer_in_charge_sign }}
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 text-end">
                                        {{ $datam->chief_inspection_officer_sign }}
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <p>Signature of Officer-In-Charge,Area/Section</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 text-end">
                                        <p>Signature of Chief Inspection Officer/<br>Chief Technical Officer</p>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12"
                                        style="border-bottom:groove; padding-bottom:10px;">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 50px">
                                        <p><b><u>Cause of the error</u></b></p>
                                        {{ $datam->error_cause }}
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 10px">
                                        <p><b><u>Possible reason for the error</u></b></p>
                                        {{ $datam->error_reason }} 
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 20px">
                                        <span>The approximate value of the error</span>
                                        {{ $datam->value_of_error }} 
                                        <span>Taka </span>
                                        {{ $datam->value_of_error_taka }}
                                        <span>Poisa </span>
                                        {{ $datam->value_of_error_poisa }}
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 15px">
                                        <p>Recommendations for disposal and other reasons</p>
                                         {{ $datam->disposal_recommendation }}
                                    </div>

                                    <div class="col-sm-8 col-md-8 col-lg-8" style="padding-top: 10px">

                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 text-end" style="padding-top: 10px">
                                        <span>Signature </span>{{ $datam->chief_technical_officer_sign }}<br>
                                        <p>Chief Inspection Officer/<br>Chief Technical Officer</p>
                                    </div>
                                    <div class="col-sm-8 col-md-8 col-lg-8" style="padding-top: 10px">
                                        <span>Approved </span>{{ $datam->approved }}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 text-end" style="padding-top: 10px">
                                        <span>Signature </span>{{ $datam->captain_sign }}<br>
                                        <p>Captain</p>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12"
                                        style="border-bottom:groove; padding-bottom:10px;">
                                    </div>

                                </div>

                                <div class="row" style=" border-bottom:groove; padding:0 0 10px 0;">
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <table class="table-bordered"
                                            style="width: 100%; border:1px; margin-top: 15px; margin-bottom: 10px; text-align:center;">
                                            <tr>
                                                <td colspan="2">Brought on charge</td>
                                            </tr>
                                            <tr>
                                                <td>Signature</td>
                                                <td>Date</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $datam->bought_charge_sign }}</td>
                                                <td>{{ $datam->bought_charge_date }}</td>
                                            </tr>
                                        </table>

                                    </div>

                                    <div class="col-sm-4 col-md-4 col-lg-4">

                                    </div>

                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <table class="table-bordered"
                                            style="width: 100%; border:1px; margin-top: 15px; margin-bottom: 10px; text-align:center;">

                                            <tr>
                                                <td colspan="2">Out of charge</td>
                                            </tr>
                                            <tr>
                                                <td>Signature</td>
                                                <td>Date</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $datam->out_charge_sign }}</td>
                                                <td>{{ $datam->out_charge_date }}</td>
                                            </tr>
                                        </table>

                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <p>
                                            "Workable"<br>
                                            "Repairable in Base"<br>
                                            "Repairable in Depo"<br>
                                            "Unsuitable"
                                        </p>
                                    </div>
                                    <div class="col-sm-8 col-md-8 col-lg-8">

                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <span>Date</span>{{ $datam->Bought_out_date }}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <span>Signature of Officer in charge Area/Section</span>
                                            {{ $datam->officer_in_charge_sign_area }}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">

                                    </div>
                                </div>


                                <div class="row"
                                    style=" border-bottom:groove; margin-top:10px padding:0 0 10px 0;">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <table class="table-bordered"
                                            style="width: 100%; border:1px; margin-top: 15px;  text-align:center;">
                                            <tr>
                                                <td>Section/Law No</td>
                                                <td>Presentation/Details</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $datam->section_law_no }}</td>
                                                <td>{{ $datam->presentation_detail }}
                                                </td>

                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <table class="table-bordered"
                                            style="width: 100%; border:1px; margin-top: 15px;  text-align:center;">
                                            <tr>
                                                <td colspan="3">Presented Amount</td>
                                            </tr>
                                            <tr>
                                                <td>Hander</td>
                                                <td>Quarter</td>
                                                <td>Pound</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $datam->hander }}</td>
                                                <td>{{ $datam->quarter }}</td>
                                                <td>{{ $datam->pound }}</td>
                                            </tr>
                                        </table>

                                    </div>

                                    <div class="col-sm-1 col-md-1 col-lg-1">

                                    </div>

                                    <div class="col-sm-5 col-md-5 col-lg-5">
                                        <table class="table-bordered"
                                            style="width: 100%; border:1px; margin-top: 15px;  text-align:center;">

                                            <tr>
                                                <td colspan="2"> included in stock record card</td>
                                            </tr>
                                            <tr>
                                                <td>Signature</td>
                                                <td>Date</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" {{ $datam->recorded_sign }}</td>
                                                <td><input type="date" {{ $datam->recorded_date }}</td>
                                            </tr>
                                        </table>

                                    </div>

                                    <p style="padding:10px 0 0 25px">I verify that the useless stores mentioned above have
                                        been properly dismantled and the amount of stores and other descriptions presented
                                    </p>
                                    <div class="col-sm-4 col-md-4 col-lg-4" style="padding:10px 0 0 0">
                                        <span>Date</span>{{ $datam->recorded_date_bottom }}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4" style="padding:10px 0 0 0">
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 text-center" style="padding:10px 0 0 0">
                                         {{ $datam->acting_officer_sign }}<br>
                                        <span>Acting Officer</span>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <p>The stock holding area/section will report the loss</p>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 10px">
                                        <p>1. Granted during inspection</p>
                                        {{ $datam->inspection_granted }}
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 10px">
                                        <p>2. When and where the goods were delivered to the unit</p>
                                        {{ $datam->when_where }}
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 10px">
                                        <p>3. Payment details every last three years</p>
                                        {{ $datam->Payment_details }}
                                    </div>


                                    <div class="col-sm-8 col-md-8 col-lg-8" style="padding-top: 10px">

                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 text-end" style="padding-top: 10px">
                                        <span>Signature </span> {{ $datam->officer_in_charge_bottom_sign }}<br>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 " style="padding-top: 10px">
                                        <span>Date </span>{{ $datam->officer_in_charge_bottom_date }}<br>

                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 text-end" style="padding-top: 10px">

                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 text-end" style="padding-top: 10px">

                                        <p>Officer in charge</p>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        {{ $datam->serial_no_bottom }}
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12"
                                        style="border-bottom:groove; padding-bottom:10px;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="card-footer text-center">
            <a href="{{ route('form87.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
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
