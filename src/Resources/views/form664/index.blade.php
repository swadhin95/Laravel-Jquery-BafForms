@extends('master')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <h5>Form 664</h5>
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
                                <a href="{{ route('form664.downloadPdf', ['form664' => $datam->id]) }}"
                                    class="btn btn-sm btn-outline-info">PDF</a>
                                <a href="{{ route('form664.view', ['form664' => $datam->id]) }}"
                                    class="btn btn-sm btn-outline-success">View</a>
                                <a href="{{ route('form664.edit', ['form664' => $datam->id]) }}"
                                    class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="{{ route('form664.delete', ['form664' => $datam->id]) }}"
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
                                        <p style="text-align: end">BAF Form 664</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <span style="text-align: center; border-bottom:groove;">
                                        <b style="font-size: 30px">BANGLADESH AIR FORCE</b>
                                    </span>
                                </div>
                
                                <div class="row" style="padding:55px 0 20px 0">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <p>Cash Account Voucher No:</p>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        {{ $datam->cash_voucher_no }}
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <p>Issue Voucher No:</p>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        {{ $datam->issue_voucher_no }}
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <p>Period of Account:</p>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        {{ $datam->account_period }} 
                                    </div>
                
                                </div>
                                <hr>
                                <div class="row">
                                    <p style="text-align: center; border-bottom:groove; padding:0 0 20px 0; font-size: 30px"">ISSUE ON PREPAYMENT</p>
                                    </div>
                                    <div class="   row" style="padding: 0 0 120px 0; border-bottom:groove;">
                                    <p style="text-align: center;  font-size: 30px">INTERNAL Demand and Issue Voucher</p>
                                    <p style="text-align: center; padding-bottom:20px;">for issues of Personal Clothing and necessariess</p>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <p>Base:</p>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        {{ $datam->base }} 
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <p>Unit:</p>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        {{ $datam->unit }} 
                                    </div>
                                </div>
                
                
                                <div class="row" style=" border-bottom:groove; padding:0 0 10px 0;">
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <table class="table-bordered"
                                            style="width: 100%; border:1px; margin-top: 15px; margin-bottom: 110px; text-align:center;">
                                            <tr>
                                                <td colspan="2">Entered in Stock Record</td>
                                            </tr>
                                            <tr>
                                                <td>Initials</td>
                                                <td>Date</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $datam->stock_record_initials }} </td>
                                                <td>{{ $datam->stock_record_date }}</td>
                                            </tr>
                                        </table>
                                        <span>Date:</span>
                                        {{ $datam->issuing_officer_date }} 
                                    </div>
                
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                
                                    </div>
                
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <table class="table-bordered"
                                            style="width: 100%; border:1px; margin-top: 15px; margin-bottom: 110px; text-align:center;">
                
                                            <tr>
                                                <td colspan="2">Entered in F-667</td>
                                            </tr>
                                            <tr>
                                                <td>Initials</td>
                                                <td>Date</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $datam->entered_initials }}</td>
                                                <td>{{ $datam->entered_date }}</td>
                                            </tr>
                                        </table>
                                        <div style="text-align: center;">
                                            {{ $datam->issuing_officer_sign }} <br>
                                            <span>Signature of Officer Issuing Equipment</span>
                                        </div>
                
                                    </div>
                                </div>
                
                                <div class="row" style=" border-bottom:groove; padding:0 0 10px 0;">
                
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <p>1. Certified prices of articles have been checked in accordance with current price list and found
                                            correct.</p>
                                    </div>
                
                                    <div class="col-sm-12 col-md-12 col-lg-12" style="padding:0 0 50px 0;">
                                        <p>2. Received Tk. {{ $datam->received_taka }} (in word) {{ $datam->received_taka_in_words }} and debited in public Fund Account</p>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                
                                        <span>Date:</span>
                                        {{ $datam->account_officer_date }}
                                    </div>
                
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                
                                    </div>
                
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                
                                        <div style="text-align: center;">
                                            {{ $datam->account_officer_sign }}<br>
                                            <span>Account Officer/Imprest Holder</span>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="row" style="padding:90px 0 0 0">
                                    <div class="col-sm-4 col-md-4 col-lg-4"></div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                
                                    </div>
                
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <p style="text-align: end">B A F Form 664-B</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <span style="text-align: center;">
                                        <b style="font-size: 30px">BANGLADESH AIR FORCE</b>
                                    </span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-lg-4"></div>
                                    <div class="col-sm-4 col-md-4 col-lg-4"></div>
                
                                    <div class="col-sm-4 col-md-4 col-lg-4"">
                                                    <p style=" text-align: end">Issue Voucher no: {{ $datam->issue_voucher_no_b }} 
                                        </p>
                                        <p style="text-align: end">Period of Account: {{ $datam->Period_of_account }}</p>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12" style=" border-bottom:groove;">
                                    </div>
                
                                </div>
                                <div class="row">
                                    <p style="text-align: center;  font-size: 28px"><b>INTERNAL REPAYMENT VOUCHER</b></p>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <P>FOR USE IN CHARGING <u>LOSSES OF*, OR DAMAGE</u> TO*, AIR FORCE EQUIPMENT</P>
                                        <P>Base: {{ $datam->base_b }} Unit: {{ $datam->unit_b }} Flight or
                                            Section:
                                            {{ $datam->flight_or_section }}  Date: {{ $datam->date_internal_payment }} 
                                            19{{ $datam->date_value }}
                                        </P>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 text-center" style="padding:20px 0 0 0">
                                        {{ $datam->flight_or_section_sign }} <br>
                                        <span>Officer-in-Charge of Flight or Section</span>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12 text-center" style=" border-bottom:groove;">
                                        <p>*Seperate forms to be used for each, the inappropriate term to be deleted.</p>
                                    </div>
                                </div>
                                <div class="row">
                
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <P>The Charges detailed herein are approved and I certify that in the cases of damage the amounts
                                            charges are sufficient to cover the damage in question</P>
                                    </div>
                                    <div class="col-sm-8 col-md-8 col-lg-8" style="padding:20px 0 0 0">
                                        <span>Date:</span>{{ $datam->commanding_officer_date }} 19{{ $datam->date_value_commanding }} 
                                    </div>
                
                                    <div class="col-sm-4 col-md-4 col-lg-4 text-center" style="padding:20px 0 0 0">
                                        {{ $datam->commanding_officer_sign }} <br>
                                        <span>Commanding Officer</span>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12 text-center" style=" border-bottom:groove;">
                
                                    </div>
                                </div>
                                <div class="row">
                                    <p style="text-align: center">Certified that the total charges made herein has been recovered as follow
                                        :-</p>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <p>{{ $datam->value_of_taka }}Tk.{{ $datam->value_of_paisa }} Paisa </p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        Debited {{ $datam->debited_value }}  For
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <p>Total: {{ $datam->total_value }} </p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        the month of {{ $datam->month_period_value }} 
                                    </div>
                
                                    <div class="col-sm-4 col-md-4 col-lg-4" style="padding:10px 0 0 0">
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4" style="padding:10px 0 0 0">
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 text-center" style="padding:10px 0 0 0">
                                        {{ $datam->imprest_holder_sign }}<br>
                                        <span>Accounting Officer/Imprest Holder</span>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12 text-center" style=" border-bottom:groove;">
                                        <p>Unit {{ $datam->unit_b_bottom }}</p>
                                    </div>
                                </div>
                
                                <div class="row" style=" border-bottom:groove; padding:0 0 10px 0;">
                                    <div class="col-sm-5 col-md-5 col-lg-5">
                                        <table class="table-bordered"
                                            style="width: 100%; border:1px; margin-top: 15px;  text-align:center;">
                                            <tr>
                                                <td colspan="2">Entered or Stock Record Card</td>
                                            </tr>
                                            <tr>
                                                <td>Initials</td>
                                                <td>Date</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $datam->stock_record_initials_b }} </td>
                                                <td>{{ $datam->stock_record_date_b }} </td>
                                            </tr>
                                        </table>
                
                                    </div>
                
                                    <div class="col-sm-2 col-md-2 col-lg-2">
                
                                    </div>
                
                                    <div class="col-sm-5 col-md-5 col-lg-5">
                                        <table class="table-bordered"
                                            style="width: 100%; border:1px; margin-top: 15px;  text-align:center;">
                
                                            <tr>
                                                <td colspan="2">Posted in Equipment Accounting Section</td>
                                            </tr>
                                            <tr>
                                                <td>Initials</td>
                                                <td>Date</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $datam->accounting_initials }}</td>
                                                <td>{{ $datam->accounting_date }} </td>
                                            </tr>
                                        </table>
                
                
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4" style="padding:10px 0 0 0">
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4" style="padding:10px 0 0 0">
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 text-center" style="padding:10px 0 0 0">
                                        {{ $datam->equipment_officer_sign }} <br>
                                        <span>Equipment Officer</span>
                                    </div>
                                    
                                </div>
                
                                <div class="row text-center">
                                    <p><b>FOR USE IN CASE OF COLLECTIVE CHAERGE</b></p>
                                    <p>CHARGE PER MAN {{ $datam->charge_per_man }} </p>
                                    <p>NAMES OF THE AIRMEN INVOLVED</p>
                
                                    <table style="width: 100%; margin-bottom: 15px;"
                                        class="table-bordered table-responsive" id="table">
                
                                        <tbody>
                                            @foreach ($datam['name'] as $key => $name)
                                            <tr>
                                                <td>{{ $name }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                
                
                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="card-footer text-center">
            <a href="{{ route('form664.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
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
