@extends('master')
@section('content')

<div class="card my-5">
    <div class="card-header">
        <h5>Esc Call Letter : Store</h5>
    </div>

    <form action="{{ route('EscCallLetter.store') }}" method="POST">
        @csrf
        <div class="card-body">
    
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center">
                    <table width="90%" border="0" style="padding-top: 30px;" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="90%">
                                <p style="text-align: center;"><input type="text" name="confidential"
                                        placeholder="|:|PLACEHOLDER_CONFIDENTIAL|:|"></p>
                                <p style="text-align: center;"><input type="text" name="maintainence"
                                        placeholder="|:|PLACEHOLDER_MAINTAINENCE|:|"></p>
                                <p style="text-align: center;">(<input type="text" name="transportation_unit"
                                        placeholder="|:|PLACEHOLDER_TRANSPORTATION_UNIT|:|">)</p>
                            </td>
                        </tr>
                    </table>
                    <table width="90%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="90%">
                                <p>নৈঃ পঃ</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="90%">
                                <p><input type="text" name="serial_no" placeholder="|:|PLACEHOLDER_SERIAL_NO|:|"></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="90%">
                                <p><b><u><input type="text" name="instrument_serial_no"
                                                placeholder="|:|PLACEHOLDER_INSTRUMENT_SERIAL_NO|:|"></u></b></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="90%">
                                <p><input type="text" name="description_one"
                                        placeholder="|:|PLACEHOLDER_DESCRIPTION_ONE|:|"></p>
                            </td>
                        </tr>
                    </table>
                    <table width="90%" border="1" style="margin-left: 50px; margin-bottom:10px" class="table-bordered text-center"  cellpadding="0" cellspacing="0" id="table">
                        <thead>
                            <tr style="background-color: #9c9797;">
                                <td>Action</td>
                                <td width="10%">
                                    <p>Ser No</p>
                                </td>
                                <td width="20%">
                                    <p>Indent No</p>
                                </td>
                                <td width="50%">
                                    <p>Description of Items/Stores</p>
                                </td>
                                <td width="10%">
                                    <p>Qty</p>
                                </td>
                                <td width="10%">
                                    <p>Rmk</p>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <button type="button" name="add" id="add" class="btn btn-sm btn-primary"><i
                                            class="fa fa-plus"></i></button>
                                </td>
                                <td width="10%">
                                    <p><input type="text" name="one_serial[]" placeholder="|:|PLACEHOLDER_ONE_SERIAL|:|">
                                    </p>
                                </td>
                                <td width="20%">
                                    <p><input type="text" name="one_indent[]" placeholder="|:|PLACEHOLDER_ONE_INDENT|:|">
                                    </p>
                                </td>
                                <td width="50%">
                                    <p><input type="text" name="one_description[]"
                                            placeholder="|:|PLACEHOLDER_ONE_DESCRIPTION|:|"></p>
                                </td>
                                <td width="10%">
                                    <p><input type="text" name="one_qty[]" placeholder="|:|PLACEHOLDER_ONE_QTY|:|"></p>
                                </td>
                                <td width="10%">
                                    <p><input type="text" name="one_rmk[]" placeholder="|:|PLACEHOLDER_ONE_RMK|:|"></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>



                    <table width="90%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="90%">
                                <p><input type="text" name="description_two"
                                        placeholder="|:|PLACEHOLDER_DESCRIPTION_TWO|:|"></p>
                            </td>
                        </tr>
                    </table>
                    <table width="90%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="65%"></td>
                            <td width="25%">
                                <p><input type="text" name="name" placeholder="|:|PLACEHOLDER_NAME|:|"></p>
                            </td>
                            <td width="10%"></td>
                        </tr>
                        <tr>
                            <td width="65%"></td>
                            <td width="25%">
                                <p><input type="text" name="rank" placeholder="|:|PLACEHOLDER_RANK|:|"></p>
                            </td>
                            <td width="10%"></td>
                        </tr>
                        <tr>
                            <td width="65%"></td>
                            <td width="25%">
                                <p><input type="text" name="transfer_director"
                                        placeholder="|:|PLACEHOLDER_TRANSFER_DIRECTOR|:|"></p>
                            </td>
                            <td width="10%"></td>
                        </tr>
                        <tr>
                            <td width="65%"></td>
                            <td width="25%">
                                <p><input type="text" name="phone" placeholder="|:|PLACEHOLDER_PHONE|:|"></p>
                            </td>
                            <td width="10%"></td>
                        </tr>
                        <tr>
                            <td width="65%"></td>
                            <td width="25%">
                                <p><input type="date" name="date" placeholder="|:|PLACEHOLDER_DATE|:|"></p>
                            </td>
                            <td width="10%"></td>
                        </tr>
                    </table>
                    <table width="90%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="90%">
                                <p>প্রতিঃ</p>
                                <p><input type="text" name="main_inspector" placeholder="|:|PLACEHOLDER_MAIN_INSPECTOR|:|">
                                </p>
                                <p><input type="text" name="derector_title" placeholder="|:|PLACEHOLDER_DERECTOR_TITLE|:|">
                                </p>
                                <p><input type="text" name="captain" placeholder="|:|PLACEHOLDER_CAPTAIN|:|"></p>
                                <p><input type="text" name="staff_officer_title"
                                        placeholder="|:|PLACEHOLDER_STAFF_OFFICER_TITLE|:|"></p>
                                <p>অবগতিঃ</p>
                                <p><input type="text" name="secretary_title"
                                        placeholder="|:|PLACEHOLDER_SECRETARY_TITLE|:|"></p>
                            </td>
                        </tr>
                    </table>
                    <table width="90%" border="0" style="padding-top: 90px;" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="90%">
                                <p style="text-align: center;"><input type="text" name="confidential_bottom"
                                        placeholder="|:|PLACEHOLDER_CONFIDENTIAL_BOTTOM|:|"></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="90%">
                                <p><input type="text" name="serial_bottom" placeholder="|:|PLACEHOLDER_SERIAL_BOTTOM|:|">
                                </p>
                            </td>
                        </tr>
                    </table>




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
                        <input type="text" name="one_serial[]" >
                    </td>
                    <td>
                        <input type="text" name="one_indent[]">
                    </td>
                    <td>
                        <input type="text" name="one_description[]">
                    </td>
                    <td>
                        <input type="text" name="one_qty[]">
                    </td>
                    <td>
                        <input type="text" name="one_rmk[]">
                    </td>
                </tr> 
            `;
                $("#table").append(html);

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
