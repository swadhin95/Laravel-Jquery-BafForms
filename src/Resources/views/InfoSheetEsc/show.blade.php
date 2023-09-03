@extends('bafforms::master')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('InfoSheetEsc.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="90%" border="0" style="padding-top: 30px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="90%">
                            <p style="text-align: center;"><b><u>{{$show->info_title}}</u></b></p>
                        </td>
                    </tr>
                </table>
                <table width="70%" border="0" style="padding-top: 10px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="45%">
                        <p>{{$show->scale_officer}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->scale_officer_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$show->scale_cadets}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->scale_cadets_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$show->scale_airmen}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->scale_airmen_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->scale_airmen_value_two}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$show->scale_recruits}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->scale_recruits_value}}</p>
                        </td>
                    </tr>
                </table>

                <table width="70%" border="0" style="padding-top: 10px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="45%">
                        <p>{{$show->strength_officers}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->strength_officers_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$show->strength_cadets}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->strength_cadets_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$show->strength_airmen}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->strength_airmen_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$show->strength_recruits}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->strength_recruits_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$show->yearly_rec}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->yearly_rec_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$show->three_yearly_rec}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->three_yearly_rec_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$show->avg_yr_costume}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->avg_yr_costume_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$show->per_stock}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->per_stock_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$show->dues_in}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->dues_in_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$show->int_qty_procure}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->int_qty_procure_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$show->esc_rec_qty}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$show->esc_rec_qty_value}}</p>
                        </td>
                    </tr>
                </table>
                <table width="70%" border="0" style="padding: 10px 0px 30px 0px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="100%" style="padding-top: 5px;">
                            <p>{{$show->note}}</p>
                        </td>
                    </tr>
                    
                </table>
                


            </td>
        </tr>
    </table>
@endsection