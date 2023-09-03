
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

   
<table width="90%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="90%" border="0" style="padding-top: 30px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="85%">
                            <p style="text-align: center;">{{$downloadPdf->confidential}}</p>
                        </td>
                        <td width="15%">
                            
                        </td>
                    </tr>
                    
                </table>
                <table width="90%" border="0" style="padding-top: 30px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="50%">
                            <p>{{$downloadPdf->serial_no}}</p>
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
                            <p>{{$downloadPdf->title}}</p>
                        </td>
                        
                        <td width="15%">
                            
                        </td>
                    </tr>
                    <tr>
                        <td width="85%" style="text-align: center;">
                            <b><u><p style="text-align: center;">{{$downloadPdf->serial_no_center}}</p></u></b>
                        </td>
                        
                        <td width="15%">
                            
                        </td>
                    </tr>
                    <tr>
                        <td width="85%">
                            <p>{{$downloadPdf->ref_field}}</p>
                        </td>
                        
                        <td width="15%">
                            
                        </td>
                    </tr>
                    <tr>
                        <td width="85%">
                            <p>{{$downloadPdf->equip_sele_tit}}</p>
                        </td>
                        
                        <td width="15%">
                        <p>{{$downloadPdf->equip_sele_tit_val}}</p>
                        </td>
                    </tr>
                    
                </table>
                <table width="90%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="60%"></td>
                        <td width="25%">
                            <p>{{$downloadPdf->name}}</p>
                        </td>
                        <td width="15%"></td>
                    </tr>
                    <tr>
                        <td width="60%"></td>
                        <td width="25%">
                            <p>{{$downloadPdf->rank}}</p>
                        </td>
                        <td width="15%"></td>
                    </tr>
                    <tr>
                        <td width="60%"></td>
                        <td width="25%">
                            <p>{{$downloadPdf->division}}</p>
                        </td>
                        <td width="15%"></td>
                    </tr>
                    <tr>
                        <td width="60%"></td>
                        <td width="25%">
                            <p>{{$downloadPdf->ext}}</p>
                        </td>
                        <td width="15%"></td>
                    </tr>
                    <tr>
                        <td width="60%"></td>
                        <td width="25%">
                            <p>{{$downloadPdf->date}}</p>
                        </td>
                        <td width="15%"></td>
                    </tr>
                    <tr>
                        <td width="60%">
                            <b><u>{{$downloadPdf->acas}}</u></b>
                        </td>
                        <td width="25%"></td>
                        <td width="15%"></td>
                    </tr>
                </table>     
            </td>
        </tr>
    </table>
</body>

</html>