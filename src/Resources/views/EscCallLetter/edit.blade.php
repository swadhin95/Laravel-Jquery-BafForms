@extends('master')
@section('content')
<div class="card my-5">
        <div class="card-header">
            <h5>Esc Call Letter : Update</h5>
        </div>
        
<form action="{{route('EscCallLetter.update', ['esc_calls' => $data->id])}}" method="POST">
    @csrf
    <div class="card-body">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="90%" border="0" style="padding-top: 30px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="90%">
                            <p style="text-align: center;"><input type="text" name="confidential"  value="{{$data->confidential}}" ></p>
                            <p style="text-align: center;"><input type="text" name="maintainence" value="{{$data->maintainence}}" ></p>
                            <p style="text-align: center;">(<input type="text" name="transportation_unit" value="{{$data->transportation_unit}}" >)</p>
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
                            <p><input type="text" name="serial_no"  value="{{$data->serial_no}}" ></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="90%">
                            <p><b><u><input type="text" name="instrument_serial_no"  value="{{$data->instrument_serial_no}}" ></u></b></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="90%">
                            <p><input type="text" name="description_one"  value="{{$data->description_one}}" ></p>
                        </td>
                    </tr>
                </table>
                <table width="90%" border="1" style="margin-left: 50px;" cellpadding="0" cellspacing="0">

                    <tr style="background-color: #9c9797;">
                        <th width="5%">
                            <p>Ser No</p>
                        </th>
                        <th width="15%">
                            <p>Indent No</p>
                        </th>
                        <th width="45%">
                            <p>Description of Items/Stores</p>
                        </th>
                        <th width="10%">
                            <p>Qty</p>
                        </th>
                        <th width="5%">
                            <p>Rmk</p>
                        </th>
                    </tr>
                </table>
                <table width="90%" border="1" class="table-bordered" style="margin-left: 50px; margin-bottom: 20px;" id="table">
                @foreach ($data['one_serial'] as $key => $one_serial)
                    <tr>
                        <td>
                            <button type="button" name="add" id="add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button>
                        </td>
                        <td width="5%">
                            <p><input type="text" name="one_serial[]"  value="{{$one_serial}}" ></p>
                        </td>
                        <td width="15%">
                            <p><input type="text" name="one_indent[]"  value="{{$data['one_indent'][$key]}}" ></p>
                        </td>
                        <td width="45%">
                            <p><input type="text" name="one_description[]"  value="{{$data['one_description'][$key]}}" ></p>
                        </td>
                        <td width="10%">
                            <p><input type="text" name="one_qty[]" value="{{$data['one_qty'][$key]}}" ></p>
                        </td>
                        <td width="5%">
                            <p><input type="text" name="one_rmk[]"  value="{{$data['one_rmk'][$key]}}" ></p>
                        </td>
                    </tr>
                    @endforeach
                </table>



                <table width="90%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="90%">
                            <p><input type="text" name="description_two"  value="{{$data->description_two}}" ></p>
                        </td>
                    </tr>
                </table>
                <table width="90%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="65%"></td>
                        <td width="25%">
                            <p><input type="text" name="name"  value="{{$data->name}}" ></p>
                        </td>
                        <td width="10%"></td>
                    </tr>
                    <tr>
                        <td width="65%"></td>
                        <td width="25%">
                            <p><input type="text" name="rank"  value="{{$data->rank}}" ></p>
                        </td>
                        <td width="10%"></td>
                    </tr>
                    <tr>
                        <td width="65%"></td>
                        <td width="25%">
                            <p><input type="text" name="transfer_director"  value="{{$data->transfer_director}}" ></p>
                        </td>
                        <td width="10%"></td>
                    </tr>
                    <tr>
                        <td width="65%"></td>
                        <td width="25%">
                            <p><input type="text" name="phone" value="{{$data->phone}}" ></p>
                        </td>
                        <td width="10%"></td>
                    </tr>
                    <tr>
                        <td width="65%"></td>
                        <td width="25%">
                            <p><input type="date" name="date" value="{{$data->date}}" ></p>
                        </td>
                        <td width="10%"></td>
                    </tr>
                </table>
                <table width="90%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="90%">
                            <p>To:</p>
                            <p><input type="text" name="main_inspector"  value="{{$data->main_inspector}}" ></p>
                            <p><input type="text" name="derector_title"  value="{{$data->derector_title}}" ></p>
                            <p><input type="text" name="captain"  value="{{$data->captain}}" ></p>
                            <p><input type="text" name="staff_officer_title"  value="{{$data->staff_officer_title}}" ></p>
                            <p>Awareness:</p>
                            <p><input type="text" name="secretary_title"  value="{{$data->secretary_title}}" ></p>
                        </td>
                    </tr>
                </table>
                <table width="90%" border="0" style="padding-top: 90px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="90%">
                            <p style="text-align: center;"><input type="text" name="confidential_bottom"  value="{{$data->confidential_bottom}}" ></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="90%">
                            <p><input type="text" name="serial_bottom" value="{{$data->serial_bottom}}" ></p>
                        </td>
                    </tr>
                </table>




            </td>
        </tr>
    </table>
    </div>
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