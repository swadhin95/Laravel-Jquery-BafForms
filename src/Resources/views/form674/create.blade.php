@extends('bafforms::master')
@section('content')
    <div class="card my-5">
        <div class="card-header">
            <h5>Form-674 : Create</h5>
        </div>
        <form action="{{ route('form674.store') }}" method="post">@csrf
        <div class="card-body">
        <table style="width: 100%"> 
                    <tr>
                        <td colspan="3" align="right">BAF Form-674</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="center"><h4>Internal Demand & Issue Voucher</h4></td>
                        <td align="right">Originial Copy</td>
                    </tr>
                    <tr> 
                        <td>
                            <div class="form-group row">
                                <label for="ser_no" class="col-5">Ser No</label>
                                <div class="col-7">
                                    <input type="text" name="ser_no" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="unit_flt_sec_name" class="col-5">Machine</label>
                                <div class="col-7">
                                    <input type="text" name="machine" class="form-control">
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
                                <label for="base_name" class="col-4">Major</label>
                                <div class="col-6">
                                    <input type="text" name="major" class="form-control">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group row">
                                <label for="receipt_voucher_no" class="col-6">Issue Voucher No</label>
                                <div class="col-6">
                                    <input type="text" name="issue_voucher_no" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fin_year" class="col-6">Financial Year</label>
                                <div class="col-6">
                                    <input type="text" name="fin_year" class="form-control">
                                </div>
                            </div>
                        </td>

                    </tr>

                    <tr> 

                        <td align="center">
                            <div class="form-group row">
                                <label for="model_prepare_date" class="col-4">Model Prepare Date </label>
                                <div class="col-6">
                                    <input type="date" name="model_prepare_date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="index_page" class="col-4">Index & Page No</label>
                                <div class="col-6">
                                    <input type="text" name="index_page" class="form-control">
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="form-group row">
                                <label for="to_no" class="col-6">To No</label>
                                <div class="col-6">
                                    <input type="text" name="to_no" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="another_date" class="col-6">Another Date</label>
                                <div class="col-6">
                                    <input type="text" name="another_date" class="form-control">
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
                                    <th colspan="2">Quantity</th>
                                    <th rowspan="2">Posted</th>
                                    <th rowspan="2">Important Data</th>
                                </tr>
                                <tr>
                                    <th>Demand</th>
                                    <th>Issue</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <button type="button" name="add" id="add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button>
                                    </td>
                                    <td>
                                        <input type="text" name="ref_no[]" >
                                    </td>
                                    <td>
                                        <input type="text" name="description_of_goods[]">
                                    </td>
                                    <td>
                                        <input type="text" name="demand[]">
                                    </td>
                                    <td>
                                        <input type="text" name="issue[]">
                                    </td>
                                    <td>
                                        <input type="text" name="posted[]">
                                    </td>
                                    <td>
                                        <input type="text" name="important_data[]">
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
                                                Officer/Inventory/Demanding
                                            </td>
                                        </tr>

                                        <tr>
                                            <td  style="margin-top: 10px; text-align: center;"><br>
                                                Rank : <input type="text" name="rank"> <br>
                                                Date : <input type="date" name="rank_date" class="mt-1">
                                            </td>
                                        </tr>
             
                                    </table>
                                </td>
                             
                                <td style="width: 40% !important">
                                <table class="table" style="width: 70% !important;" align="right">
                                        <tr align="center">
                                            <td colspan="2">Flight/Section Inventory was entered</td>

                                        </tr>
                                        <tr align="center">
                                            <td>Signature</td>
                                            <td>Date</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="sign_of_flight">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="date_of_flight">
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
                <button type="submit" class="btn btn-sm btn-success">Save</button>
            </div>
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