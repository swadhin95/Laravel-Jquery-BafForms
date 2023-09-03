@extends('master')
@section('content')
<div class="card my-5">
        <div class="card-header">
            <h5>Present Stock Qty : Update</h5>
        </div>
        
<form action="{{route('PresentStockQty.update', ['PresentSQID' => $dataEdit->id])}}" method="POST">
    @csrf
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="90%" border="0" style="padding-top: 30px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="90%">
                            <u><b>
                                    <p style="text-align: center;"><input type="text" name="title" value="{{$dataEdit->title}}" ></p>
                                </b></u>
                        </td>
                    </tr>
                </table>

                <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" cellpadding="0" cellspacing="0">
                    <tr style="background-color: #9c9797;">
                        <th width="5%">
                            <p>Ser No</p>
                        </th>
                        <th width="20%">
                            <p>Description of items</p>
                        </th>
                        <th width="5%">
                            <p>U/I</p>
                        </th>
                        <th width="10%">
                            <p>201MU BAF</p>
                            </p>
                        </th>
                        <th width="10%">
                            <p>Dues in</p>
                            </p>
                        </th>
                        <th width="5%">
                            <p>BBD</p>
                        </th>
                        <th width="5%">
                            <p>BSR</p>
                        </th>
                        <th width="5%">
                            <p>ZHR</p>
                        </th>
                        <th width="5%">
                            <p>MTR</p>
                        </th>
                        <th width="10%">
                            <p>Present Stock Bases/Unit</p>
                        </th>
                        <th width="10%">
                            <p>Average Yearly Consumption</p>
                        </th>
                    </tr>
                </table>
                <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" id="table">
                @foreach ($dataEdit['serial_no_one'] as $key => $serial_no_one)
                    <tr>
                        <td>
                            <button type="button" name="add" id="add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button>
                        </td>
                        <th width="5%">
                            <p><input type="text" name="serial_no_one[]"  value="{{$serial_no_one}}" ></p>
                        </th>
                        <th width="20%">
                            <p><input type="text" name="description_of_items_one[]"  value="{{$dataEdit['description_of_items_one'][$key]}}" ></p>
                        </th>
                        <th width="5%">
                            <p><input type="text" name="ui_one[]" value="{{$dataEdit['ui_one'][$key]}}" ></p>
                        </th>
                        <th width="10%">
                            <p><input type="text" name="mu_baf_one[]" value="{{$dataEdit['mu_baf_one'][$key]}}" ></p>
                        </th>
                        <th width="10%">
                            <p><input type="text" name="dues_in_one[]" value="{{$dataEdit['dues_in_one'][$key]}}" ></p>
                        </th>
                        <th width="5%">
                            <p><input type="text" name="bbd_one[]"  value="{{$dataEdit['bbd_one'][$key]}}" ></p>
                        </th>
                        <th width="5%">
                            <p><input type="text" name="bsr_one[]"  value="{{$dataEdit['bsr_one'][$key]}}" ></p>
                        </th>
                        <th width="5%">
                            <p><input type="text" name="zhr_one[]" value="{{$dataEdit['zhr_one'][$key]}}" ></p>
                        </th>
                        <th width="5%">
                            <p><input type="text" name="mtr_one[]"  value="{{$dataEdit['mtr_one'][$key]}}" ></p>
                        </th>
                        <th width="10%">
                            <p><input type="text" name="present_stock_one[]" value="{{$dataEdit['present_stock_one'][$key]}}" ></p>
                        </th>
                        <th width="10%">
                            <p><input type="text" name="avg_yr_consumption_one[]" value="{{$dataEdit['avg_yr_consumption_one'][$key]}}" ></p>
                        </th>
                    </tr>
                    @endforeach
                </table>
                <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" id="table_two">
                @foreach ($dataEdit['serial_no_two'] as $key => $serial_no_two)
                    <tr>
                        <td>
                            <button type="button" name="add" id="add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button>
                        </td>
                        <th width="5%">
                            <p><input type="text" name="serial_no_two[]"  value="{{$serial_no_two}}" ></p>
                        </th>
                        <th width="20%">
                            <p><input type="text" name="description_of_items_two[]"  value="{{$dataEdit['description_of_items_two'][$key]}}" ></p>
                        </th>
                        <th width="5%">
                            <p><input type="text" name="ui_two[]" value="{{$dataEdit['ui_two'][$key]}}" ></p>
                        </th>
                        <th width="10%">
                            <p><input type="text" name="mu_baf_two[]" value="{{$dataEdit['mu_baf_two'][$key]}}" ></p>
                        </th>
                        <th width="10%">
                            <p><input type="text" name="dues_in_two[]" value="{{$dataEdit['dues_in_two'][$key]}}" ></p>
                        </th>
                        <th width="5%">
                            <p><input type="text" name="bbd_two[]"  value="{{$dataEdit['bbd_two'][$key]}}" ></p>
                        </th>
                        <th width="5%">
                            <p><input type="text" name="bsr_two[]"  value="{{$dataEdit['bsr_two'][$key]}}" ></p>
                        </th>
                        <th width="5%">
                            <p><input type="text" name="zhr_two[]" value="{{$dataEdit['zhr_two'][$key]}}" ></p>
                        </th>
                        <th width="5%">
                            <p><input type="text" name="mtr_two[]"  value="{{$dataEdit['mtr_two'][$key]}}" ></p>
                        </th>
                        <th width="10%">
                            <p><input type="text" name="present_stock_two[]" value="{{$dataEdit['present_stock_two'][$key]}}" ></p>
                        </th>
                        <th width="10%">
                            <p><input type="text" name="avg_yr_consumption_two[]" value="{{$dataEdit['avg_yr_consumption_two'][$key]}}" ></p>
                        </th>
                    </tr>
                    @endforeach
                </table>
                <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" id="table_three">
                @foreach ($dataEdit['serial_no_three'] as $key => $serial_no_three)
                    <tr>
                        <td>
                            <button type="button" name="add" id="add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button>
                        </td>
                        <th width="5%">
                            <p><input type="text" name="serial_no_three[]"  value="{{$serial_no_three}}" ></p>
                        </th>
                        <th width="20%">
                            <p><input type="text" name="description_of_items_three[]"  value="{{$dataEdit['description_of_items_three'][$key]}}" ></p>
                        </th>
                        <th width="5%">
                            <p><input type="text" name="ui_three[]" value="{{$dataEdit['ui_three'][$key]}}" ></p>
                        </th>
                        <th width="10%">
                            <p><input type="text" name="mu_baf_three[]" value="{{$dataEdit['mu_baf_three'][$key]}}" ></p>
                        </th>
                        <th width="10%">
                            <p><input type="text" name="dues_in_three[]" value="{{$dataEdit['dues_in_three'][$key]}}" ></p>
                        </th>
                        <th width="5%">
                            <p><input type="text" name="bbd_three[]"  value="{{$dataEdit['bbd_three'][$key]}}" ></p>
                        </th>
                        <th width="5%">
                            <p><input type="text" name="bsr_three[]"  value="{{$dataEdit['bsr_three'][$key]}}" ></p>
                        </th>
                        <th width="5%">
                            <p><input type="text" name="zhr_three[]" value="{{$dataEdit['zhr_three'][$key]}}" ></p>
                        </th>
                        <th width="5%">
                            <p><input type="text" name="mtr_three[]"  value="{{$dataEdit['mtr_three'][$key]}}" ></p>
                        </th>
                        <th width="10%">
                            <p><input type="text" name="present_stock_three[]" value="{{$dataEdit['present_stock_three'][$key]}}" ></p>
                        </th>
                        <th width="10%">
                            <p><input type="text" name="avg_yr_consumption_three[]" value="{{$dataEdit['avg_yr_consumption_three'][$key]}}" ></p>
                        </th>
                    </tr>
                    @endforeach
                </table>
                <table width="90%" border="0" style="margin-top: 20px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="90%">
                            <p><input type="text" name="pl_see_excl" value="{{$dataEdit->pl_see_excl}}" ></p>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
    <div class="card-footer" align="center">
        <button type="submit" class="btn btn-sm btn-success">Update</button>
    </div>
</form>

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
                        <input type="text" name="serial_no_one[]" >
                    </td>
                    <td>
                        <input type="text" name="description_of_items_one[]">
                    </td>
                    <td>
                        <input type="text" name="ui_one[]">
                    </td>
                    <td>
                        <input type="text" name="mu_baf_one[]">
                    </td>
                    <td>
                        <input type="text" name="dues_in_one[]">
                    </td>
                    <td>
                        <input type="text" name="bbd_one[]">
                    </td>
                    <td>
                        <input type="text" name="bsr_one[]">
                    </td>
                    <td>
                        <input type="text" name="zhr_one[]">
                    </td>
                    <td>
                        <input type="text" name="mtr_one[]">
                    </td>
                    <td>
                        <input type="text" name="present_stock_one[]">
                    </td>
                    <td>
                        <input type="text" name="avg_yr_consumption_one[]">
                    </td>
                </tr> 
            `;
        $("#table").append(html);

    });
    $(document).on('click', '.remove-tr', function() {

        $(this).parents('tr').remove();

    });
    var j = 0;
    $("#add_two").click(function() {
        console.log('inn');
        ++j;

        let html2 = `
                <tr>
                    <td>
                        <button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button>                  
                    </td>
                    <td>
                        <input type="text" name="serial_no_two[]" >
                    </td>
                    <td>
                        <input type="text" name="description_of_items_two[]">
                    </td>
                    <td>
                        <input type="text" name="ui_two[]">
                    </td>
                    <td>
                        <input type="text" name="mu_baf_two[]">
                    </td>
                    <td>
                        <input type="text" name="dues_in_two[]">
                    </td>
                    <td>
                        <input type="text" name="bbd_two[]">
                    </td>
                    <td>
                        <input type="text" name="bsr_two[]">
                    </td>
                    <td>
                        <input type="text" name="zhr_two[]">
                    </td>
                    <td>
                        <input type="text" name="mtr_two[]">
                    </td>
                    <td>
                        <input type="text" name="present_stock_two[]">
                    </td>
                    <td>
                        <input type="text" name="avg_yr_consumption_two[]">
                    </td>
                </tr> 
            `;
        $("#table_two").append(html2);

    });
    $(document).on('click', '.remove-tr', function() {

        $(this).parents('tr').remove();

    });
    var k = 0;
    $("#add_three").click(function() {
        console.log('inn');
        ++k;

        let html3 = `
                <tr>
                    <td>
                        <button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button>                  
                    </td>
                    <td>
                        <input type="text" name="serial_no_three[]" >
                    </td>
                    <td>
                        <input type="text" name="description_of_items_three[]">
                    </td>
                    <td>
                        <input type="text" name="ui_three[]">
                    </td>
                    <td>
                        <input type="text" name="mu_baf_three[]">
                    </td>
                    <td>
                        <input type="text" name="dues_in_three[]">
                    </td>
                    <td>
                        <input type="text" name="bbd_three[]">
                    </td>
                    <td>
                        <input type="text" name="bsr_three[]">
                    </td>
                    <td>
                        <input type="text" name="zhr_three[]">
                    </td>
                    <td>
                        <input type="text" name="mtr_three[]">
                    </td>
                    <td>
                        <input type="text" name="present_stock_three[]">
                    </td>
                    <td>
                        <input type="text" name="avg_yr_consumption_three[]">
                    </td>
                </tr> 
            `;
        $("#table_three").append(html3);

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