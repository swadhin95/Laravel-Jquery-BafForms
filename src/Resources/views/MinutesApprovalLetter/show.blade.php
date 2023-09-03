@extends('bafforms::master')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('MinutesApprovalLetter.index') }}"> Back</a>
            </div>
        </div>
    </div>
  

    <table width="90%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="90%" border="0" style="padding-top: 30px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="85%">
                            <p style="text-align: center;">{{$show->confidential}}</p>
                        </td>
                        <td width="15%">
                            
                        </td>
                    </tr>
                    
                </table>
                <table width="90%" border="0" style="padding-top: 30px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="50%">
                            <p>{{$show->serial_no}}</p>
                        </td>
                        <td width="35%">
                            
                        </td>
                        <td width="15%">
                            <p><u><b>Encl No</b></u> </p>
                        </td>
                    </tr>
                    
                </table>
                <table width="90%" border="0" style="padding-bottom: 110px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="85%">
                            <p>{{$show->title}}</p>
                        </td>
                        
                        <td width="15%">
                            
                        </td>
                    </tr>
                    <tr>
                        <td width="85%" style="text-align: center;">
                            <b><u><p style="text-align: center;">{{$show->serial_no_center}}</p></u></b>
                        </td>
                        
                        <td width="15%">
                            
                        </td>
                    </tr>
                    <tr>
                        <td width="85%">
                            <p>{{$show->ref_field}}</p>
                        </td>
                        
                        <td width="15%">
                            
                        </td>
                    </tr>
                    <tr>
                        <td width="85%">
                            <p>{{$show->equip_sele_tit}}</p>
                        </td>
                        
                        <td width="15%">
                        <p>{{$show->equip_sele_tit_val}}</p>
                        </td>
                    </tr>
                    
                </table>
                <table width="90%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="60%"></td>
                        <td width="25%">
                            <p>{{$show->name}}</p>
                        </td>
                        <td width="15%"></td>
                    </tr>
                    <tr>
                        <td width="60%"></td>
                        <td width="25%">
                            <p>{{$show->rank}}</p>
                        </td>
                        <td width="15%"></td>
                    </tr>
                    <tr>
                        <td width="60%"></td>
                        <td width="25%">
                            <p>{{$show->division}}</p>
                        </td>
                        <td width="15%"></td>
                    </tr>
                    <tr>
                        <td width="60%"></td>
                        <td width="25%">
                            <p>{{$show->ext}}</p>
                        </td>
                        <td width="15%"></td>
                    </tr>
                    <tr>
                        <td width="60%"></td>
                        <td width="25%">
                            <p>{{$show->date}}</p>
                        </td>
                        <td width="15%"></td>
                    </tr>
                    <tr>
                        <td width="60%">
                            <b><u>{{$show->acas}}</u></b>
                        </td>
                        <td width="25%"></td>
                        <td width="15%"></td>
                    </tr>
                </table>     
            </td>
        </tr>
    </table>
    @endsection