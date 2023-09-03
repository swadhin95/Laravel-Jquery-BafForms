<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

   
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="90%" border="0" style="padding-top: 30px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="90%">
                            <p style="text-align: center;"><b><u>{{$downloadPdf->info_title}}</u></b></p>
                        </td>
                    </tr>
                </table>
                <table width="70%" border="0" style="padding-top: 10px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="45%">
                        <p>{{$downloadPdf->scale_officer}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->scale_officer_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$downloadPdf->scale_cadets}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->scale_cadets_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$downloadPdf->scale_airmen}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->scale_airmen_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->scale_airmen_value_two}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$downloadPdf->scale_recruits}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->scale_recruits_value}}</p>
                        </td>
                    </tr>
                </table>

                <table width="70%" border="0" style="padding-top: 10px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="45%">
                        <p>{{$downloadPdf->strength_officers}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->strength_officers_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$downloadPdf->strength_cadets}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->strength_cadets_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$downloadPdf->strength_airmen}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->strength_airmen_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$downloadPdf->strength_recruits}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->strength_recruits_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$downloadPdf->yearly_rec}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->yearly_rec_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$downloadPdf->three_yearly_rec}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->three_yearly_rec_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$downloadPdf->avg_yr_costume}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->avg_yr_costume_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$downloadPdf->per_stock}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->per_stock_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$downloadPdf->dues_in}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->dues_in_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$downloadPdf->int_qty_procure}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->int_qty_procure_value}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45%">
                            <p>{{$downloadPdf->esc_rec_qty}}</p>
                        </td>
                        <td width="5%">
                            <p>:</p>
                        </td>
                        <td width="50%">
                            <p>{{$downloadPdf->esc_rec_qty_value}}</p>
                        </td>
                    </tr>
                </table>
                <table width="70%" border="0" style="padding: 10px 0px 30px 0px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="100%" style="padding-top: 5px;">
                            <p>{{$downloadPdf->note}}</p>
                        </td>
                    </tr>
                    
                </table>
                


            </td>
        </tr>
    </table>
</body>

</html>