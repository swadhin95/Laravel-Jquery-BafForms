@extends('master')
@section('content')
    <div class="card my-5">
        <div class="card-header">
            <h5>Present Stock Qty : Store</h5>
        </div>

        <form action="{{ route('PresentStockQty.store') }}" method="POST">
            @csrf
            <div class="card-body">



                <table width="90%" border="0" style="padding-top: 30px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="90%">
                            <u><b>
                                    <p style="text-align: center;"><input type="text" name="title"
                                            placeholder="|:|PLACEHOLDER_TITLE|:|"></p>
                                </b></u>
                        </td>
                    </tr>
                </table>

                <table width="90%" border="1" class="table-bordered text-center" style="margin-left: 50px;" cellpadding="0"
                    cellspacing="0">
                    <thead>

                        <tr style="background-color: #9c9797;">
                            <td>Action</td>
                            <td width="5%">
                                <p>Ser No</p>
                            </td>
                            <td width="20%">
                                <p>Description of items</p>
                            </td>
                            <td width="5%">
                                <p>U/I</p>
                            </td>
                            <td width="10%">
                                <p>201MU BAF</p>
                                </p>
                            </td>
                            <td width="10%">
                                <p>Dues in</p>
                                </p>
                            </td>
                            <td width="5%">
                                <p>BBD</p>
                            </td>
                            <td width="5%">
                                <p>BSR</p>
                            </td>
                            <td width="5%">
                                <p>ZHR</p>
                            </td>
                            <td width="5%">
                                <p>MTR</p>
                            </td>
                            <td width="10%">
                                <p>Present Stock Bases/Unit</p>
                            </td>
                            <td width="10%">
                                <p>Average Yearly Consumption</p>
                            </td>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" id="table">
                                <td>
                                    <button type="button" name="add" id="add" class="btn btn-sm btn-primary"><i
                                            class="fa fa-plus"></i></button>
                                </td>
                                <th width="5%">
                                    <p><input type="text" name="serial_no_one[]"
                                            placeholder="|:|PLACEHOLDER_SERIAL_NO_ONE|:|">
                                    </p>
                                </th>
                                <th width="20%">
                                    <p><input type="text" name="description_of_items_one[]"
                                            placeholder="|:|PLACEHOLDER_DESCRIPTION_OF_ITEMS_ONE|:|"></p>
                                </th>
                                <th width="5%">
                                    <p><input type="text" name="ui_one[]" placeholder="|:|PLACEHOLDER_UI_ONE|:|"></p>
                                </th>
                                <th width="10%">
                                    <p><input type="text" name="mu_baf_one[]" placeholder="|:|PLACEHOLDER_MU_BAF_ONE|:|">
                                    </p>
                                </th>
                                <th width="10%">
                                    <p><input type="text" name="dues_in_one[]" placeholder="|:|PLACEHOLDER_DUES_IN_ONE|:|">
                                    </p>
                                </th>
                                <th width="5%">
                                    <p><input type="text" name="bbd_one[]" placeholder="|:|PLACEHOLDER_BBD_ONE|:|"></p>
                                </th>
                                <th width="5%">
                                    <p><input type="text" name="bsr_one[]" placeholder="|:|PLACEHOLDER_BSR_ONE|:|"></p>
                                </th>
                                <th width="5%">
                                    <p><input type="text" name="zhr_one[]" placeholder="|:|PLACEHOLDER_ZHR_ONE|:|"></p>
                                </th>
                                <th width="5%">
                                    <p><input type="text" name="mtr_one[]" placeholder="|:|PLACEHOLDER_MTR_ONE|:|"></p>
                                </th>
                                <th width="10%">
                                    <p><input type="text" name="present_stock_one[]"
                                            placeholder="|:|PLACEHOLDER_PRESENT_STOCK_ONE|:|"></p>
                                </th>
                                <th width="10%">
                                    <p><input type="text" name="avg_yr_consumption_one[]"
                                            placeholder="|:|PLACEHOLDER_AVG_YR_CONSUMPTION_ONE|:|"></p>
                                </th>
                            </table>
                        </tr>
                        <tr>
                            <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" id="table_two">
                                <td>
                                    <button type="button" name="add_two" id="add_two" class="btn btn-sm btn-primary"><i
                                            class="fa fa-plus"></i></button>
                                </td>
                                <th width="5%">
                                    <p><input type="text" name="serial_no_two[]"
                                            placeholder="|:|PLACEHOLDER_SERIAL_NO_TWO|:|">
                                    </p>
                                </th>
                                <th width="20%">
                                    <p><input type="text" name="description_of_items_two[]"
                                            placeholder="|:|PLACEHOLDER_DESCRIPTION_OF_ITEMS_TWO|:|"></p>
                                </th>
                                <th width="5%">
                                    <p><input type="text" name="ui_two[]" placeholder="|:|PLACEHOLDER_UI_TWO|:|"></p>
                                </th>
                                <th width="10%">
                                    <p><input type="text" name="mu_baf_two[]" placeholder="|:|PLACEHOLDER_MU_BAF_TWO|:|">
                                    </p>
                                </th>
                                <th width="10%">
                                    <p><input type="text" name="dues_in_two[]" placeholder="|:|PLACEHOLDER_DUES_IN_TWO|:|">
                                    </p>
                                </th>
                                <th width="5%">
                                    <p><input type="text" name="bbd_two[]" placeholder="|:|PLACEHOLDER_BBD_TWO|:|"></p>
                                </th>
                                <th width="5%">
                                    <p><input type="text" name="bsr_two[]" placeholder="|:|PLACEHOLDER_BSR_TWO|:|"></p>
                                </th>
                                <th width="5%">
                                    <p><input type="text" name="zhr_two[]" placeholder="|:|PLACEHOLDER_ZHR_TWO|:|"></p>
                                </th>
                                <th width="5%">
                                    <p><input type="text" name="mtr_two[]" placeholder="|:|PLACEHOLDER_MTR_TWO|:|"></p>
                                </th>
                                <th width="10%">
                                    <p><input type="text" name="present_stock_two[]"
                                            placeholder="|:|PLACEHOLDER_PRESENT_STOCK_TWO|:|"></p>
                                </th>
                                <th width="10%">
                                    <p><input type="text" name="avg_yr_consumption_two[]"
                                            placeholder="|:|PLACEHOLDER_AVG_YR_CONSUMPTION_TWO|:|"></p>
                                </th>
                            </table>
                        </tr>
                        <tr>
                            <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;"
                                id="table_three">
                                <td>
                                    <button type="button" name="add_three" id="add_three" class="btn btn-sm btn-primary"><i
                                            class="fa fa-plus"></i></button>
                                </td>
                                <th width="5%">
                                    <p><input type="text" name="serial_no_three[]"
                                            placeholder="|:|PLACEHOLDER_SERIAL_NO_THREE|:|">
                                    </p>
                                </th>
                                <th width="20%">
                                    <p><input type="text" name="description_of_items_three[]"
                                            placeholder="|:|PLACEHOLDER_DESCRIPTION_OF_ITEMS_THREE|:|"></p>
                                </th>
                                <th width="5%">
                                    <p><input type="text" name="ui_three[]" placeholder="|:|PLACEHOLDER_UI_THREE|:|">
                                    </p>
                                </th>
                                <th width="10%">
                                    <p><input type="text" name="mu_baf_three[]"
                                            placeholder="|:|PLACEHOLDER_MU_BAF_THREE|:|">
                                    </p>
                                </th>
                                <th width="10%">
                                    <p><input type="text" name="dues_in_three[]"
                                            placeholder="|:|PLACEHOLDER_DUES_IN_THREE|:|">
                                    </p>
                                </th>
                                <th width="5%">
                                    <p><input type="text" name="bbd_three[]" placeholder="|:|PLACEHOLDER_BBD_THREE|:|">
                                    </p>
                                </th>
                                <th width="5%">
                                    <p><input type="text" name="bsr_three[]" placeholder="|:|PLACEHOLDER_BSR_THREE|:|">
                                    </p>
                                </th>
                                <th width="5%">
                                    <p><input type="text" name="zhr_three[]" placeholder="|:|PLACEHOLDER_ZHR_THREE|:|">
                                    </p>
                                </th>
                                <th width="5%">
                                    <p><input type="text" name="mtr_three[]" placeholder="|:|PLACEHOLDER_MTR_THREE|:|">
                                    </p>
                                </th>
                                <th width="10%">
                                    <p><input type="text" name="present_stock_three[]"
                                            placeholder="|:|PLACEHOLDER_PRESENT_STOCK_THREE|:|"></p>
                                </th>
                                <th width="10%">
                                    <p><input type="text" name="avg_yr_consumption_three[]"
                                            placeholder="|:|PLACEHOLDER_AVG_YR_CONSUMPTION_THREE|:|"></p>
                                </th>
                            </table>
                        </tr>
                    </tbody>
                </table>

                {{-- <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" id="table_two">

                </table>
                <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" id="table_three">

                </table> --}}


                <table width="90%" border="0" style="margin-top: 20px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="90%">
                            <p><input type="text" name="pl_see_excl" placeholder="|:|PLACEHOLDER_PL_SEE_EXCL|:|">
                            </p>
                        </td>
                    </tr>
                </table>



            </div>
            <div class="card-footer" align="center">
                <button type="submit" class="btn btn-sm btn-success">Save</button>
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
