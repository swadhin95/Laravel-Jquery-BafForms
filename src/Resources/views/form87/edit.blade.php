@extends('master')
@section('content')
<div class="card my-5">
    <div class="card-header">
        <h5>Form 87 : Update</h5>
    </div>

    <form action="{{route('form87.update', ['form87' => $dataEdit->id])}}" method="POST">
        @csrf
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
                    <input type="text" value="{{$dataEdit->serial_no}}" name="serial_no" size="35">
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <p>Date:</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <input type="date" value="{{$dataEdit->serial_date}}" name="serial_date">
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <p>Voucher No:</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <input type="text" value="{{$dataEdit->voucher_no}}" name="voucher_no" size="35">
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <p>Date:</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <input type="date" value="{{$dataEdit->voucher_date}}" name="voucher_date">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12" style="border-bottom:groove; padding-bottom:10px;">
                </div>
            </div>

            <div class="row">

                <div class="col-sm-2 col-md-2 col-lg-2">
                    <p>From:</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <input type="text" value="{{$dataEdit->from}}" name="from" size="35">
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <p>To:</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <input type="text" value="{{$dataEdit->to}}" name="to">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <span>Officer-in-Charge</span>
                    <input type="text" value="{{$dataEdit->area_section}}" name="area_section">
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
                        <td rowspan="2">Action</td>
                        <td rowspan="2" style="width: 10%">Section/Law no</td>
                        <td rowspan="2" style="width: 5%">Part no</td>
                        <td rowspan="2" style="width: 25%">Details</td>
                        <td colspan="4" style="width: 25%">Amount of stock</td>
                        <td colspan="5" style="width: 30%">Rules Applied in the time of measure by quality control</td>
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
                    @foreach ($dataEdit['section_no'] as $key => $section_no)
                    <tr>
                        <td>
                            <button type="button"  name="add" id="add" class="btn btn-sm btn-primary"><i
                                    class="fa fa-plus"></i></button>
                        </td>
                        <td><input type="text" value="{{$section_no}}"  name="section_no[]"></td>
                        <td><input type="text" value="{{$dataEdit['part_no'][$key]}}" name="part_no[]"></td>
                        <td><input type="text" value="{{$dataEdit['details'][$key]}}" name="details[]"></td>
                        <td><input type="text" value="{{$dataEdit['stock_workable'][$key]}}" name="stock_workable[]"></td>
                        <td><input type="text" value="{{$dataEdit['stock_base_repairable'][$key]}}" name="stock_base_repairable[]"></td>
                        <td><input type="text" value="{{$dataEdit['stock_depo_repairable'][$key]}}" name="stock_depo_repairable[]"></td>
                        <td><input type="text" value="{{$dataEdit['stock_useless'][$key]}}" name="stock_useless[]"></td>
                        <td><input type="text" value="{{$dataEdit['quality_control_workable'][$key]}}" name="quality_control_workable[]"></td>
                        <td><input type="text" value="{{$dataEdit['quality_control_base_repairable'][$key]}}" name="quality_control_base_repairable[]"></td>
                        <td><input type="text" value="{{$dataEdit['quality_control_depo_repairable'][$key]}}" name="quality_control_depo_repairable[]"></td>
                        <td><input type="text" value="{{$dataEdit['quality_control_useless'][$key]}}" name="quality_control_useless[]"></td>
                        <td><input type="text" value="{{$dataEdit['unclassified'][$key]}}" name="unclassified[]"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <input type="text" value="{{$dataEdit->officer_in_charge_sign}}" name="officer_in_charge_sign">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 text-end">
                    <input type="text" value="{{$dataEdit->chief_inspection_officer_sign}}" name="chief_inspection_officer_sign">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <p>Signature of Officer-In-Charge,Area/Section</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 text-end">
                    <p>Signature of Chief Inspection Officer/<br>Chief Technical Officer</p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12" style="border-bottom:groove; padding-bottom:10px;">
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 50px">
                    <p><b><u>Cause of the error</u></b></p>
                    <textarea  value="{{$dataEdit->error_cause}}" name="error_cause" rows="4" cols="140"></textarea>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 10px">
                    <p><b><u>Possible reason for the error</u></b></p>
                    <textarea  value="{{$dataEdit->error_reason}}" name="error_reason" rows="4" cols="140"></textarea>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 20px">
                    <span>The approximate value of the error</span>
                    <input type="text" value="{{$dataEdit->value_of_error}}" name="value_of_error">
                    <span>Taka </span>
                    <input type="text" value="{{$dataEdit->value_of_error_taka}}" name="value_of_error_taka">
                    <span>Poisa </span>
                    <input type="text" value="{{$dataEdit->value_of_error_poisa}}" name="value_of_error_poisa">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 15px">
                    <p>Recommendations for disposal and other reasons</p>
                    <textarea  value="{{$dataEdit->disposal_recommendation}}" name="disposal_recommendation" rows="2" cols="140"></textarea>
                </div>

                <div class="col-sm-8 col-md-8 col-lg-8" style="padding-top: 10px">

                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 text-end" style="padding-top: 10px">
                    <span>Signature  </span><input type="text" value="{{$dataEdit->chief_technical_officer_sign}}" name="chief_technical_officer_sign"><br>
                    <p>Chief Inspection Officer/<br>Chief Technical Officer</p>                        
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8" style="padding-top: 10px">
                    <span>Approved </span><input type="text" value="{{$dataEdit->approved}}" name="approved">
                </div> 
                <div class="col-sm-4 col-md-4 col-lg-4 text-end" style="padding-top: 10px">
                    <span>Signature  </span><input type="text" value="{{$dataEdit->captain_sign}}" name="captain_sign"><br>
                    <p>Captain</p>                        
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12" style="border-bottom:groove; padding-bottom:10px;">
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
                                <td><input type="text" value="{{$dataEdit->bought_charge_sign}}" name="bought_charge_sign"></td>
                                <td><input type="date" value="{{$dataEdit->bought_charge_date}}" name="bought_charge_date"></td>
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
                                <td><input type="text" value="{{$dataEdit->out_charge_sign}}" name="out_charge_sign"></td>
                                <td><input type="date" value="{{$dataEdit->out_charge_date}}" name="out_charge_date"></td>
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
                        <span>Date</span><input type="text" value="{{$dataEdit->Bought_out_date}}" name="Bought_out_date">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <span>Signature of Officer in charge Area/Section</span><input type="text" value="{{$dataEdit->officer_in_charge_sign_area}}" name="officer_in_charge_sign_area">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">

                    </div>
                </div>

                
                <div class="row" style=" border-bottom:groove; margin-top:10px padding:0 0 10px 0;">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <table class="table-bordered" style="width: 100%; border:1px; margin-top: 15px;  text-align:center;">
                            <tr>
                                <td>Section/Law No</td>
                                <td>Presentation/Details</td>
                            </tr>
                            <tr>
                                <td><input type="text" value="{{$dataEdit->section_law_no}}" name="section_law_no"></td>
                                <td><textarea  value="{{$dataEdit->presentation_detail}}" name="presentation_detail" rows="3" cols="110"></textarea></td>
                                
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
                                <td><input type="text" value="{{$dataEdit->hander}}" name="hander"></td>
                                <td><input type="text" value="{{$dataEdit->quarter}}" name="quarter"></td>
                                <td><input type="date" value="{{$dataEdit->pound}}" name="pound"></td>
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
                                <td><input type="text" value="{{$dataEdit->recorded_sign}}" name="recorded_sign"></td>
                                <td><input type="date" value="{{$dataEdit->recorded_date}}" name="recorded_date"></td>
                            </tr>
                        </table>

                    </div>

                    <p style="padding:10px 0 0 25px">I verify that the useless stores mentioned above have been properly dismantled and the amount of stores and other descriptions presented</p>
                    <div class="col-sm-4 col-md-4 col-lg-4" style="padding:10px 0 0 0">
                        <span>Date</span><input type="date" value="{{$dataEdit->recorded_date_bottom}}" name="recorded_date_bottom">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4" style="padding:10px 0 0 0">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 text-center" style="padding:10px 0 0 0">
                        <input type="text" value="{{$dataEdit->acting_officer_sign}}" name="acting_officer_sign"><br>
                        <span>Acting Officer</span>
                    </div>

                </div>

                <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <p>The stock holding area/section will report the loss</p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 10px">
                    <p>1. Granted during inspection</p>
                    <textarea  value="{{$dataEdit->inspection_granted}}" name="inspection_granted" rows="3" cols="140"></textarea>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 10px">
                    <p>2. When and where the goods were delivered to the unit</p>
                    <textarea  value="{{$dataEdit->when_where}}" name="when_where" rows="2" cols="140"></textarea>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 10px">
                    <p>3. Payment details every last three years</p>
                    <textarea  value="{{$dataEdit->Payment_details}}" name="Payment_details" rows="2" cols="140"></textarea>
                </div>
                
                
                <div class="col-sm-8 col-md-8 col-lg-8" style="padding-top: 10px">

                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 text-end" style="padding-top: 10px">
                    <span>Signature  </span><input type="text" value="{{$dataEdit->officer_in_charge_bottom_sign}}" name="officer_in_charge_bottom_sign"><br>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 " style="padding-top: 10px">
                    <span>Date  </span><input type="date" value="{{$dataEdit->officer_in_charge_bottom_date}}" name="officer_in_charge_bottom_date"><br>
                                           
                </div>
                 <div class="col-sm-4 col-md-4 col-lg-4 text-end" style="padding-top: 10px">
                                          
                </div>
                 <div class="col-sm-4 col-md-4 col-lg-4 text-end" style="padding-top: 10px">
                    
                    <p>Officer in charge</p>                        
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" value="{{$dataEdit->serial_no_bottom}}" name="serial_no_bottom" placeholder="Serial Number">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12" style="border-bottom:groove; padding-bottom:10px;">
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
                        <input type="text"  name="section_no[]" size="80">
                    </td>
                    <td>
                        <input type="text"  name="part_no[]" size="80">
                    </td>
                    <td>
                        <input type="text"  name="details[]" size="80">
                    </td>
                    <td>
                        <input type="text"  name="stock_workable[]" size="80">
                    </td>
                    <td>
                        <input type="text"  name="stock_base_repairable[]" size="80">
                    </td>
                    <td>
                        <input type="text"  name="stock_depo_repairable[]" size="80">
                    </td>
                    <td>
                        <input type="text"  name="stock_useless[]" size="80">
                    </td>
                    <td>
                        <input type="text" name="quality_control_workable[]" size="80">
                    </td>
                    <td>
                        <input type="text" name="quality_control_base_repairable[]" size="80">
                    </td>
                    <td>
                        <input type="text" name="quality_control_depo_repairable[]" size="80">
                    </td>
                    <td>
                        <input type="text" name="quality_control_useless[]" size="80">
                    </td>
                    <td>
                        <input type="text" name="unclassified[]" size="80">
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