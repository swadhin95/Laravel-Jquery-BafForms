@extends('master')
@section('content')
<div class="card my-5  container-fluid">
    <div class="card-header">
        <h5>Proceeding ESC 1: Create</h5>
    </div>
    <form action="{{ route('esc1.store') }}" method="post">@csrf
        <div class="card-body">
            <p style="text-align: end; margin: 90px 0 0 0; ">BAF F 20200</p>
            <table style="width: 100%;">
                <tr>
                    <td style="width: 80%;">
                        <p><b><u>PROCEEDINGS OF EQUIPMENT SELECTION COMMITTEE</u></b></p>
                        <p><input type="text" name="ref_no" placeholder="Reference no"></p>
                    </td>
                    <td style="width: 20%;">
                        <p>date :<input type="date" name="date"></p>
                    </td>
                </tr>
            </table>
            <table style="width: 100%; border: 1px;" class="table-bordered table-responsive">
                <tr>
                    <th style="width: 75%;  text-align:center;">Description of items</th>
                    <th style="width: 25%; text-align:center;">Qty</th>

                </tr>
                <tr>
                    <td style="width: 75%;"><input type="text" name="description_item"></td>
                    <td style="width: 25%;"><input type="text" name="qty"></td>
                </tr>
            </table>
            <table style="width: 100%;" class=" table-responsive">
                <tr>
                    <td style="width: 80%;"><u>Samples code no</u></td>
                    <td style="width: 20%;"><u>Offer Validity</u></td>
                </tr>
                <tr>
                    <td style="width: 80%;"><input type="text" name="samples_code_no"></td>
                    <td style="width: 20%;"><input type="text" name="offer_validity"></td>
                </tr>
            </table>
            <hr>
            <table style="width: 100%;" class=" table-responsive">
                <tr>
                    <td style="width: 100%;"><u>Remarks by SPS:</u></td>
                </tr>
                <tr>
                    <td style="width: 100%;"><span>1. </span><input type="text" name="remarks_one"></td>
                </tr>
                <tr>
                    <td style="width: 100%;"><span>2. <b><u>Recommendation for Acceptance.</u></b></span><input type="text" name="recommendation_acceptance"></td>
                </tr>
                <tr>    
                    <table style="width: 100%; border: 1px; margin-top: 15px; margin-bottom: 15px;" class="table-bordered table-responsive" id="table">
                        <thead align="center" class="bg-secondary">
                            <tr>
                                <td >Action</td>
                                <td  style="width: 15%;">Code no</td>
                                <td  style="width: 65%;">Obsn on sample</td>
                                <td style="width: 20%;">Rmk</td>                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <button type="button" name="add" id="add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button>
                                </td>
                                <td style="width: 15%;"><input type="text" name="accept_code_no[]" placeholder="Code no"></td>
                                <td style="width: 65%;"><input type="text" name="accept_obsn_sample[]" placeholder="Obsn On sample"></td>
                                <td style="width: 20%;"><input type="text" name="accept_rmk[]" placeholder="Rmk"></td>
                            </tr>
                        </tbody>
                    </table>
                </tr>
                <tr>
                    <td><input type="text" name="table_bottom_comment"></td>
                </tr>
                <br>
                <tr>
                    <td style="width: 100%;"><span>3. <b><u>Rejection.</u></b></span><input type="text" name="rejection"></td>
                </tr>
                <tr>    
                    <table style="width: 100%; border: 1px; margin-top: 15px;" class="table-bordered table-responsive" id="table2">
                        <thead align="center" class="bg-secondary">
                            <tr>
                                <td >Action</td>
                                <td  style="width: 15%;">Code no</td>
                                <td  style="width: 65%;">Obsn on sample</td>
                                <td style="width: 20%;">Rmk</td>                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <button type="button" name="add" id="add_2" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button>
                                </td>
                                <td style="width: 15%;"><input type="text" name="reject_code_no[]" placeholder="Code no"></td>
                                <td style="width: 65%;"><input type="text" name="reject_obsn_sample[]" placeholder="Obsn On sample"></td>
                                <td style="width: 20%;"><input type="text" name="reject_rmk[]" placeholder="Rmk"></td>
                            </tr>
                        </tbody>
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
    $("#add").click(function() {
        console.log('inn');
        ++i;

        let html = `
                <tr>
                    <td>
                        <button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button>                  
                    </td>
                    <td>
                        <input type="text" name="accept_code_no[]" >
                    </td>
                    <td>
                        <input type="text" name="accept_obsn_sample[]">
                    </td>
                    <td>
                        <input type="text" name="accept_rmk[]">
                    </td>
                </tr> 
            `;
        $("#table").append(html);

    });
    $(document).on('click', '.remove-tr', function() {

        $(this).parents('tr').remove();

    });
    var j = 0;
    $("#add_2").click(function() {
        console.log('inn');
        ++j;

        let html2 = `
                <tr>
                    <td>
                        <button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button>                  
                    </td>
                    <td>
                        <input type="text" name="reject_code_no[]" >
                    </td>
                    <td>
                        <input type="text" name="reject_obsn_sample[]">
                    </td>
                    <td>
                        <input type="text" name="reject_rmk[]">
                    </td>
                </tr> 
            `;
        $("#table2").append(html2);

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