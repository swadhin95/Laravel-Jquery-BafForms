@extends('master')
@section('content')
    <div class="card my-5">
        <div class="card-header">
            <h5>Form-675 : Update</h5>
        </div>
        @foreach($data as $key => $datam)
        <form action="{{ route('form675.update', ['form675' => $datam->uuid]) }}" method="post"> @csrf
      
        <div class="card-body">
        <table style="width: 100%"> 
                    <tr>
                        <td colspan="3" align="right">BAF Form-675</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="center"><h4>Internal Exchange and Recevied Voucher</h4></td>
                        <td align="right">Origianl Copy</td>
                    </tr>
                    <tr> 
                        <td>
                            <div class="form-group row">
                            
                                <label for="ser_no" class="col-5">Ser No</label>
                                <div class="col-7">
                                    <input type="text" name="ser_no" class="form-control" value="{{$datam->ser_no}}">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="unit_flt_sec_name" class="col-5">Flight/Section</label>
                                <div class="col-7">
                                    <input type="text" name="unit_flt_sec_name" class="form-control" value="{{$datam->unit_flt_sec_name}}">
                                </div>
                            </div>
                           
                        </td>
                        <td align="center">
                            <div class="form-group row">
                                <label for="date_of_voucher" class="col-4">Date</label>
                                <div class="col-6">
                                    <input type="date" name="date_of_voucher" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="base_name" class="col-4">Base Name</label>
                                <div class="col-6">
                                    <input type="text" name="base_name" class="form-control" value="{{$datam->base_name}}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group row">
                                <label for="receipt_voucher_no" class="col-6">Receipt Voucher No</label>
                                <div class="col-6">
                                    <input type="text" name="receipt_voucher_no" class="form-control" value="{{$datam->receipt_voucher_no}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fin_year" class="col-6">Fin Year</label>
                                <div class="col-6">
                                    <input type="text" name="fin_year" class="form-control" value="{{$datam->fin_year}}">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    <table class="table table-responsive" id="table">
                            <thead align="center" class="bg-secondary">
                                <tr>
                                    <th rowspan="2">Action</th>
                                    <th rowspan="2">Ref No</th>
                                    <th rowspan="2">Description of goods</th>
                                    <th rowspan="2">Unit</th>
                                    <th colspan="2">Quantity</th>
                                    <th rowspan="2">Stock Record <br> Card Posted</th>
                                    <th rowspan="2">Reason for Refund</th>
                                </tr>
                                <tr>
                                    <th>Workable</th>
                                    <th>Repairable</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <button type="button" name="add" id="add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button>
                                    </td>
                                    <td>
                                        <input type="text" name="ref_no[]" value="{{$datam->ref_no}}">
                                    </td>
                                    <td>
                                        <input type="text" name="description_of_goods[]" value="{{$datam->description_of_goods}}">
                                    </td>
                                    <td>
                                        <input type="text" name="unit[]" value="{{$datam->unit}}">
                                    </td>
                                    <td>
                                        <input type="text" name="qty_workable[]" value="{{$datam->qty_workable}}">
                                    </td>
                                    <td>
                                        <input type="text" name="qty_repairable[]" value="{{$datam->qty_repairable}}">
                                    </td>
                                    <td>
                                        <input type="text" name="stock_record_card_posted[]" value="{{$datam->stock_record_card_posted}}">
                                    </td>
                                    <td>
                                        <input type="text" name="reason_for_refund[]" value="{{$datam->reason_for_refund}}">
                                    </td>
                                </tr>    
                            </tbody>                               
                                
                        </table>
                    </tr>
                    <tr>
                    <table style="width: 100%;">
                            <tr>
                                <td style="width: 30% !important">
                                <table style="width: 100% !important;">
                                        <tr>
                                            <td  style="margin-top: 10px; text-align: center;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center"><br>
                                                Returnd Flight/Section<br>
                                                Captain Latter
                                            </td>
                                        </tr>
                                        <tr>
                                            <td  style="margin-top: 10px; text-align: center;"><br>
                                                Name : <input type="text" name="name_of_user" value="{{$datam->name_of_user}}"> <br>
                                                Rank : <input type="text" name="rank" class="mt-1" value="{{$datam->rank}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="border-top: 2px dotted black;">
                                                Name & Rank
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="width: 30% !important">
                                <table style="width: 100% !important;" align="center">
                                        <tr>
                                            <td  style="margin-top: 10px;"><br>
                                                Signature : <input type="text" name="recipient_signature" value="{{$datam->recipient_signature}}"> <br>
                                                Date :  <input type="date" name="recipient_date" class="mt-1" value="{{$datam->recipient_date}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="border-top: 2px dotted black;">
                                                Receiver Signature <br> and Date <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="margin-top: 10px; text-align: center;">
                                                <input type="text" name="consent_of_returner_deposit_amount" class="mt-3" value="{{$datam->consent_of_returner_deposit_amount}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="border-top: 2px dotted black;">
                                                Returned Flight/Section <br> Captain
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="width: 40% !important">
                                <table class="table" style="width: 100% !important;" align="right">
                                        <tr align="center">
                                            <td colspan="2">Stock Record are Recorded</td>
                                            <td colspan="2">Ledger are Corrected</td>
                                        </tr>
                                        <tr align="center">
                                            <td>Signature</td>
                                            <td>Date</td>
                                            <td>Signature</td>
                                            <td>Date</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="sign_of_recorded_stock" value="{{$datam->sign_of_recorded_stock}}">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="date_of_recorded_stock" value="{{$datam->date_of_recorded_stock}}">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="sign_of_corrected_ledger" value="{{$datam->sign_of_corrected_ledger}}">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="date_of_corrected_ledger" value="{{$datam->date_of_corrected_ledger}}">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </tr>
                </table>                
            </div>
            <div class="card-footer" align="center">
                <input type="hidden" name="uuid" value="{{ $datam->uuid }}">
                <button type="submit" class="btn btn-sm btn-success">Update</button>
            </div>
            @endforeach
        </form>
    </div>
    @push('js')
    <script type="text/javascript">
        var i = 0;       
        $("#add").click(function(){
            console.log('inn');
            ++i;

            let html = `
                <tr>
                    <td>
                        <button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button>                  
                    </td>
                    <td>
                        <input type="text" name="ref_no[]" >
                    </td>
                    <td>
                        <input type="text" name="description_of_goods[]">
                    </td>
                    <td>
                        <input type="text" name="unit[]">
                    </td>
                    <td>
                        <input type="text" name="qty_workable[]">
                    </td>
                    <td>
                        <input type="text" name="qty_repairable[]">
                    </td>
                    <td>
                        <input type="text" name="stock_record_card_posted[]">
                    </td>
                    <td>
                        <input type="text" name="reason_for_refund[]">
                    </td>
                </tr> 
            `;
            $("#table").append(html);
    
        });
        $(document).on('click', '.remove-tr', function(){  
    
             $(this).parents('tr').remove();
    
        });  
    </script>
    @endpush
    @push('css')
        <style>
            .table{
                width: 100% !important;
                border-collapse: collapse;
                border: 1px solid black;
                align-items: center;
            }
            .table tr{
                border: 1px solid black;
            }
            .table th{
                border: 1px solid black;
            }
            .table td{
                border: 1px solid black;
            }
            
        </style>
    @endpush
@endsection