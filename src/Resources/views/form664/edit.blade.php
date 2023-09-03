@extends('master')
@section('content')
<div class="card my-5">
    <div class="card-header">
        <h5>Form 664 : Update</h5>
    </div>

    <form action="{{route('form664.update', ['form664' => $dataEdit->id])}}" method="POST">
        @csrf
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
                    <input type="text"  value="{{$dataEdit->cash_voucher_no}}"  name="cash_voucher_no">
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <p>Issue Voucher No:</p>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <input type="text"  value="{{$dataEdit->issue_voucher_no}}"  name="issue_voucher_no">
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">

                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">

                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <p>Period of Account:</p>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <input type="date"  value="{{$dataEdit->account_period}}"  name="account_period">
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
                    <input type="text"  value="{{$dataEdit->base}}"  name="base">
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <p>Unit:</p>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <input type="text"  value="{{$dataEdit->unit}}"  name="unit">
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
                            <td><input type="text"  value="{{$dataEdit->stock_record_initials}}"  name="stock_record_initials"></td>
                            <td><input type="date"  value="{{$dataEdit->stock_record_date}}"  name="stock_record_date"></td>
                        </tr>
                    </table>
                    <span>Date:</span>
                    <input type="date"  value="{{$dataEdit->issuing_officer_date}}"  name="issuing_officer_date">
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
                            <td><input type="text"  value="{{$dataEdit->entered_initials}}"  name="entered_initials"></td>
                            <td><input type="date"  value="{{$dataEdit->entered_date}}"  name="entered_date"></td>
                        </tr>
                    </table>
                    <div style="text-align: center;">
                        <input type="text"  value="{{$dataEdit->issuing_officer_sign}}"  name="issuing_officer_sign"><br>
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
                    <p>2. Received Tk. <input type="text"  value="{{$dataEdit->received_taka}}"  name="received_taka"> (in word) <input type="text"
                             value="{{$dataEdit->received_taka_in_words}}"  name="received_taka_in_words"> and debited in public Fund Account</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">

                    <span>Date:</span>
                    <input type="date"  value="{{$dataEdit->account_officer_date}}"  name="account_officer_date">
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                    <div style="text-align: center;">
                        <input type="text"  value="{{$dataEdit->account_officer_sign}}"  name="account_officer_sign"><br>
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
                                <p style=" text-align: end">Issue Voucher no: <input type="text"
                         value="{{$dataEdit->issue_voucher_no_b}}"  name="issue_voucher_no_b">
                    </p>
                    <p style="text-align: end">Period of Account: <input type="date"  value="{{$dataEdit->Period_of_account}}"  name="Period_of_account"></p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12" style=" border-bottom:groove;">
                </div>

            </div>
            <div class="row">
                <p style="text-align: center;  font-size: 28px"><b>INTERNAL REPAYMENT VOUCHER</b></p>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <P>FOR USE IN CHARGING <u>LOSSES OF*, OR DAMAGE</u> TO*, AIR FORCE EQUIPMENT</P>
                    <P>Base: <input type="text"  value="{{$dataEdit->base_b}}"  name="base_b"> Unit: <input type="text"  value="{{$dataEdit->unit_b}}"  name="unit_b"> Flight or
                        Section:
                        <input type="text"  value="{{$dataEdit->flight_or_section}}"  name="flight_or_section"> Date: <input type="date"
                             value="{{$dataEdit->date_internal_payment}}"  name="date_internal_payment">
                        19<input type="text"  value="{{$dataEdit->date_value}}"  name="date_value">
                    </P>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 text-center" style="padding:20px 0 0 0">
                    <input type="text"  value="{{$dataEdit->flight_or_section_sign}}"  name="flight_or_section_sign"><br>
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
                    <span>Date:</span><input type="date"  value="{{$dataEdit->commanding_officer_date}}"  name="commanding_officer_date">19<input type="text"
                         value="{{$dataEdit->date_value_commanding}}"  name="date_value_commanding">
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4 text-center" style="padding:20px 0 0 0">
                    <input type="text"  value="{{$dataEdit->commanding_officer_sign}}"  name="commanding_officer_sign"><br>
                    <span>Commanding Officer</span>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 text-center" style=" border-bottom:groove;">

                </div>
            </div>
            <div class="row">
                <p style="text-align: center">Certified that the total charges made herein has been recovered as follow
                    :-</p>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <p><input type="text"  value="{{$dataEdit->value_of_taka}}"  name="value_of_taka"> Tk.<input type="text"  value="{{$dataEdit->value_of_paisa}}"  name="value_of_paisa"> Paisa </p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    Debited <input type="text"  value="{{$dataEdit->debited_value}}"  name="debited_value" size="47"
                        placeholder="to the public Fund Account Imprest to the I, R, I, A"> For
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <p>Total: <input type="text"  value="{{$dataEdit->total_value}}"  name="total_value" size="42"> </p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    the month of <input type="text"  value="{{$dataEdit->month_period_value}}"  name="month_period_value" size="42" placeholder="the period">
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4" style="padding:10px 0 0 0">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4" style="padding:10px 0 0 0">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 text-center" style="padding:10px 0 0 0">
                    <input type="text"  value="{{$dataEdit->imprest_holder_sign}}"  name="imprest_holder_sign"><br>
                    <span>Accounting Officer/Imprest Holder</span>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 text-center" style=" border-bottom:groove;">
                    <p>Unit <input type="text"  value="{{$dataEdit->unit_b_bottom}}"  name="unit_b_bottom"></p>
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
                            <td><input type="text"  value="{{$dataEdit->stock_record_initials_b}}"  name="stock_record_initials_b"></td>
                            <td><input type="date"  value="{{$dataEdit->stock_record_date_b}}"  name="stock_record_date_b"></td>
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
                            <td><input type="text"  value="{{$dataEdit->accounting_initials}}"  name="accounting_initials"></td>
                            <td><input type="date"  value="{{$dataEdit->accounting_date}}"  name="accounting_date"></td>
                        </tr>
                    </table>


                </div>
                <div class="col-sm-4 col-md-4 col-lg-4" style="padding:10px 0 0 0">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4" style="padding:10px 0 0 0">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 text-center" style="padding:10px 0 0 0">
                    <input type="text"  value="{{$dataEdit->equipment_officer_sign}}"  name="equipment_officer_sign"><br>
                    <span>Equipment Officer</span>
                </div>
                
            </div>

            <div class="row text-center">
                <p><b>FOR USE IN CASE OF COLLECTIVE CHAERGE</b></p>
                <p>CHARGE PER MAN <input type="text"  value="{{$dataEdit->charge_per_man}}"  name="charge_per_man"></p>
                <p>NAMES OF THE AIRMEN INVOLVED</p>

                <table style="width: 100%; margin-bottom: 15px;"
                    class="table-bordered table-responsive" id="table">

                    <tbody>
                        @foreach ($dataEdit['name'] as $key => $name)
                        <tr>
                            <td>
                                <button type="button"   name="add" id="add" class="btn btn-sm btn-primary"><i
                                        class="fa fa-plus"></i></button>
                            </td>
                            <td><input type="text"  value="{{$name}}"  name="name[]" size="80"></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>



        </div>
        <div class="card-footer" align="center">
            <button type="submit" class="btn btn-sm btn-success">Save</button>
        </div>
    </form>
</div>
@push('js')
    <script type="text/javascript">
        var i = 0;
        $("#add").click(function() {
            console.log('inn');
            ++i;

            let html = `
            <tr>
                <td>
                    <button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button>                  
                </td>
                
                <td>
                    <input type="text"   name="dawn[]">
                </td>
                
            </tr> 
        `;
            $("#table").append(html);

        });
        $(document).on('click', '.remove-tr', function() {

            $(this).parents('tr').remove();

        });
        $(document).on('click', '.remove-tr', function() {

            $(this).parents('tr').remove();

        });
    </script>
@endpush
@push('css')
    <style>
        .table {
            width: 100% !important;
            border-collapse: collapse;
            border: 1px solid black;
            align-items: center;
        }

        .table tr {
            border: 1px solid black;
        }

        .table th {
            border: 1px solid black;
        }

        .table td {
            border: 1px solid black;
        }

    </style>
@endpush
@endsection