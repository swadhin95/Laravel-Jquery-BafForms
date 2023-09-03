@extends('bafforms::master')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Tender</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('MinutesApprovalLetter.index') }}"> Back</a>
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

<form action="{{ route('MinutesApprovalLetter.store') }}" method="POST">
    @csrf

    <table width="90%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="90%" border="0" style="padding-top: 30px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="85%">
                            <p style="text-align: center;"><input type="text" name="confidential" placeholder="|:|PLACEHOLDER_CONFIDENTIAL|:|"></p>
                        </td>
                        <td width="15%">
                            
                        </td>
                    </tr>
                    
                </table>
                <table width="90%" border="0" style="padding-top: 30px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="50%">
                            <p><input type="text"  name="serial_no" placeholder="|:|PLACEHOLDER_SER_NO|:|"></p>
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
                            <p><input type="text"  name="title" placeholder="|:|PLACEHOLDER_TITLE|:|"></p>
                        </td>
                        
                        <td width="15%">
                            
                        </td>
                    </tr>
                    <tr>
                        <td width="85%" style="text-align: center;">
                            <b><u><p style="text-align: center;"><input type="text"  name="serial_no_center" placeholder="|:|PLACEHOLDER_SER_NO_CEN|:|"></p></u></b>
                        </td>
                        
                        <td width="15%">
                            
                        </td>
                    </tr>
                    <tr>
                        <td width="85%">
                            <p><input type="text"  name="ref_field" placeholder="|:|PLACEHOLDER_REF_FIELD|:|"></p>
                        </td>
                        
                        <td width="15%">
                            
                        </td>
                    </tr>
                    <tr>
                        <td width="85%">
                            <p><input type="text"  name="equip_sele_tit" placeholder="|:|PLACEHOLDER_EQUIP_SELECTION_TITLE|:|"></p>
                        </td>
                        
                        <td width="15%">
                        <p><input type="text"  name="equip_sele_tit_val" placeholder="|:|PLACEHOLDER_EQUIP_SELECTION_TITLE_VALUE|:|"></p>
                        </td>
                    </tr>
                    
                </table>
                <table width="90%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="60%"></td>
                        <td width="25%">
                            <p><input type="text"  name="name" placeholder="|:|PLACEHOLDER_NAME|:|"></p>
                        </td>
                        <td width="15%"></td>
                    </tr>
                    <tr>
                        <td width="60%"></td>
                        <td width="25%">
                            <p><input type="text"  name="rank" placeholder="|:|PLACEHOLDER_RANK|:|"></p>
                        </td>
                        <td width="15%"></td>
                    </tr>
                    <tr>
                        <td width="60%"></td>
                        <td width="25%">
                            <p><input type="text" name="division"  placeholder="|:|PLACEHOLDER_DIVISION|:|"></p>
                        </td>
                        <td width="15%"></td>
                    </tr>
                    <tr>
                        <td width="60%"></td>
                        <td width="25%">
                            <p><input type="text"  name="ext" placeholder="|:|PLACEHOLDER_EXT|:|"></p>
                        </td>
                        <td width="15%"></td>
                    </tr>
                    <tr>
                        <td width="60%"></td>
                        <td width="25%">
                            <p><input type="date"  name="date" placeholder="|:|PLACEHOLDER_DATE|:|"></p>
                        </td>
                        <td width="15%"></td>
                    </tr>
                    <tr>
                        <td width="60%">
                            <b><u><input type="text"  name="acas" placeholder="|:|PLACEHOLDER_ACAS|:|"></u></b>
                        </td>
                        <td width="25%"></td>
                        <td width="15%"></td>
                    </tr>
                </table>     
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