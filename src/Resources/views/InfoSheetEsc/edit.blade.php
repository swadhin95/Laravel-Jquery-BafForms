@extends('bafforms::master')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Tender</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('InfoSheetEsc.index') }}"> Back</a>
        </div>
    </div>
</div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{ route('InfoSheetEsc.update',$edit->id) }}" method="POST">
    @csrf

    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="90%" border="0" style="padding-top: 30px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="90%">
                            <p style="text-align: center;"><b><u><input type="text" name="info_title" value="{{ $edit->info_title }}"  placeholder="|:|PLACEHOLDER_INFO_TITLE|:|"></u></b></p>
                        </td>
                    </tr>
                </table>
                <table width="70%" border="0" style="padding-top: 10px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="45%">
                        <p><input type="text" name="scale_officer" value="{{ $edit->scale_officer}}" placeholder="|:|PLACEHOLDER_SCALE_OFFICERS|:|"></p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="scale_officer_value" value="{{ $edit->scale_officer_value}}" placeholder="|:|PLACEHOLDER_SCALE_OFFICERS_VALUE|:|"></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p><input type="text" name="scale_cadets" value="{{ $edit->scale_cadets}}" placeholder="|:|PLACEHOLDER_SCALE_CADETS|:|"></p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="scale_cadets_value" value="{{ $edit->scale_cadets_value}}" placeholder="|:|PLACEHOLDER_SCALE_CADETS_VALUE|:|"></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p><input type="text" name="scale_airmen" value="{{ $edit->scale_airmen}}" placeholder="|:|PLACEHOLDER_SCALE_AIRMEN|:|"></p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="scale_airmen_value" value="{{ $edit->scale_airmen_value}}" placeholder="|:|PLACEHOLDER_SCALE_AIRMEN_VALUE|:|"></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="scale_airmen_value_two" value="{{ $edit->scale_airmen_value_two}}" placeholder="|:|PLACEHOLDER_SCALE_AIRMEN_VALUE_TWO|:|"></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p><input type="text" name="scale_recruits" value="{{ $edit->scale_recruits}}" placeholder="|:|PLACEHOLDER_SCALE_RECRUITS|:|"></p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="scale_recruits_value" value="{{ $edit->scale_recruits_value}}" placeholder="|:|PLACEHOLDER_SCALE_RECRUITS_VALUE|:|"></p>
                        </td>
                    </tr>
                </table>

                <table width="70%" border="0" style="padding-top: 10px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="45%">
                        <p><input type="text" name="strength_officers" value="{{ $edit->strength_officers}}" placeholder="|:|PLACEHOLDER_STRENGTH_OFFICERS|:|"></p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="strength_officers_value" value="{{ $edit->strength_officers_value}}" placeholder="|:|PLACEHOLDER_STRENGTH_OFFICERS_VALUE|:|"></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p><input type="text" name="strength_cadets" value="{{ $edit->strength_cadets}}" placeholder="|:|PLACEHOLDER_STRENGTH_CADETS|:|"></p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="strength_cadets_value" value="{{ $edit->strength_cadets_value}}" placeholder="|:|PLACEHOLDER_STRENGTH_CADETS_VALUE|:|"></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p><input type="text" name="strength_airmen" value="{{ $edit->strength_airmen}}" placeholder="|:|PLACEHOLDER_STRENGTH_AIRMEN|:|"></p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="strength_airmen_value" value="{{ $edit->strength_airmen_value}}" placeholder="|:|PLACEHOLDER_STRENGTH_AIRMEN_VALUE|:|"></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p><input type="text" name="strength_recruits" value="{{ $edit->strength_recruits}}" placeholder="|:|PLACEHOLDER_STRENGTH_RECRUITS|:|"></p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="strength_recruits_value" value="{{ $edit->strength_recruits_value}}" placeholder="|:|PLACEHOLDER_STRENGTH_RECRUITS_VALUE|:|"></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p><input type="text" name="yearly_rec" value="{{ $edit->yearly_rec}}" placeholder="|:|PLACEHOLDER_YEARLY_REC|:|"></p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="yearly_rec_value" value="{{ $edit->yearly_rec_value}}" placeholder="|:|PLACEHOLDER_STRENGTH_YEARLY_REC_VALUE|:|"></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p><input type="text" name="three_yearly_rec" value="{{ $edit->three_yearly_rec}}" placeholder="|:|PLACEHOLDER_3YEARLY_REC|:|"></p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="three_yearly_rec_value" value="{{ $edit->three_yearly_rec_value}}" placeholder="|:|PLACEHOLDER_3YEARLY_REC_VALUE|:|"></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p><input type="text" name="avg_yr_costume" value="{{ $edit->avg_yr_costume}}" placeholder="|:|PLACEHOLDER_AVG_YR_CONSUME|:|"></p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="avg_yr_costume_value" value="{{ $edit->avg_yr_costume_value}}" placeholder="|:|PLACEHOLDER_AVG_YR_CONSUME_VALUE|:|"></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p><input type="text" name="per_stock" value="{{ $edit->per_stock}}" placeholder="|:|PLACEHOLDER_PRE_STOCK|:|"></p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="per_stock_value" value="{{ $edit->per_stock_value}}" placeholder="|:|PLACEHOLDER_PRE_STOCK_VALUE|:|"></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p><input type="text" name="dues_in" value="{{ $edit->dues_in}}" placeholder="|:|PLACEHOLDER_DUES_IN|:|"></p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="dues_in_value" value="{{ $edit->dues_in_value}}" placeholder="|:|PLACEHOLDER_DUES_IN_VALUE|:|"></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p><input type="text" name="int_qty_procure" value="{{ $edit->int_qty_procure}}" placeholder="|:|PLACEHOLDER_INT_QTY_PROCURE|:|"></p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="int_qty_procure_value" value="{{ $edit->int_qty_procure_value}}" placeholder="|:|PLACEHOLDER_INT_QTY_PROCURE_VALUE|:|"></p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p><input type="text" name="esc_rec_qty" value="{{ $edit->esc_rec_qty}}" placeholder="|:|PLACEHOLDER_ESC_REC_QTY|:|"></p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p><input type="text" name="esc_rec_qty_value" value="{{ $edit->esc_rec_qty_value}}" placeholder="|:|PLACEHOLDER_ESC_REC_QTY_VALUE|:|"></p>
                        </td>
                    </tr>
                </table>
                <table width="70%" border="0" style="padding: 10px 0px 30px 0px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="100%" style="padding-top: 5px;">
                            <p><input type="text" name="note" value="{{ $edit->note}}" placeholder="|:|PLACEHOLDER_NOTE|:|"></p>
                        </td>
                    </tr>
                    
                </table>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>


            </td>
        </tr>
    </table>


</form>
@endsection