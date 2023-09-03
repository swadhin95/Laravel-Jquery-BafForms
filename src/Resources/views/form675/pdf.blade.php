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
                <table width="90%" border="0" cellpadding="0" cellspacing="0"
                    bgcolor="#ffffff">
                    <tr>
                        <td align="right" style="padding-right:2px;">
                            <p>BAF Form 675</p>
                        </td>
                    </tr>
                </table>
                <table width="90%" border="0" cellpadding="0" cellspacing="0"
                    bgcolor="#ffffff">
                    <tr>
                        <td width="30%"></td>
                        <td width="30%" align="center" style="padding-right:2px;">
                            <h4>Internal Exchange and Recevied Voucher</h4>
                        </td>
                        <td width="30%" align="right" style="padding-right:4px;">
                            <p>Original Copy</p>
                        </td>
                    </tr>
                </table>
                <table width="90%" border="0" cellpadding="0" cellspacing="0"
                    bgcolor="#ffffff">
                    <tr>
                        <td width="30%">
                            <p>Ser No : <span>{{ $form675->ser_no }}</span></p>
                            <p>Office Name : <span>{{ $form675->name_of_user }}</span></p>
                        </td>
                        <td width="30%" style="padding-right:2px;">
                            <p>Date : <span>{{ $form675->date_of_voucher }}</span></p>
                            <p>Base Name : <span>{{ $form675->base_name }}</span></p>
                        </td>
                        <td width="30%" style="padding-right:2px;">
                            <p>Receipt Voucher No :
                                <span>{{ $form675->receipt_voucher_no }}</span>
                            </p>
                            <p>Financial Year : <span>{{ $form675->fin_year }}</span></p>
                        </td>
                    </tr>
                </table>
                <table width="90%" border="0" cellpadding="0" cellspacing="0"
                    bgcolor="#ffffff">
                    <tr>
                        <td>
                            <table width="100%" style="table-layout: fixed; border-collapse: collapse;" border="1px solid black">
                                <thead align="center">
                                    <tr>
                                        <th rowspan="2">Ref No</th>
                                        <th rowspan="2">Description of Goods</th>
                                        <th rowspan="2">Unit</th>
                                        <th colspan="2">Quantity</th>
                                        <th rowspan="2">Stock Record <br>Card Posted</th>
                                        <th rowspan="2">Reason for Refund</th>
                                    </tr>
                                    <tr>
                                        <th>Workable</th>
                                        <th>Repairable</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($form675['ref_no'] as $key => $ref_no)
                                        <tr>
                                            <td>{{ $ref_no }}</td>
                                            <td>{{ $form675['description_of_goods'][$key] }}</td>
                                            <td>{{ $form675['unit'][$key] }}</td>
                                            <td>{{ $form675['qty_workable'][$key] }}</td>
                                            <td>{{ $form675['qty_repairable'][$key] }}</td>
                                            <td>{{ $form675['stock_record_card_posted'][$key] }}
                                            </td>
                                            <td style="word-wrap: break-word">{{ $form675['reason_for_refund'][$key] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </table>
                <table width="90%" border="0" cellpadding="0" cellspacing="0"
                    bgcolor="#ffffff">
                    <tr>
                        <td width="30%" style="text-align: center;">
                            <p></p>
                            <p>Returnd Flight/Section<br>Captain Latter</p>
                            <p></p>
                            <p style="border-top: 2px dotted black;">(Name and Rank)</p>
                        </td>
                        <td width="30%" style="text-align: center;">
                            <p style="margin-top: 3em"></p>
                            <p style="border-top: 2px dotted black;">Receiver Signature <br> and Date</p>
                            <p></p>
                            <p style="border-top: 2px dotted black;">Consent to the amount deposited by the returning <br> flight / section captain</p>
                        </td>
                        <td width="30%" align="right">
                            <table border="1px" cell-padding="0" cell-spacing="0" style="border-collapse: collapse;">
                                <thead align="center">
                                    <tr>
                                        <th colspan="2">Stock record card <br> was entered</th>
                                        <th colspan="2">The ledger was <br> corrected</th>
                                    </tr>
                                    <tr>
                                        <th>Signature</th>
                                        <th>Date</th>
                                        <th>Signature</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td>{{ $form675->sign_of_recorded_stock }}</td>
                                    <td>{{ $form675->date_of_recorded_stock }}</td>
                                    <td>{{ $form675->sign_of_corrected_ledger }}</td>
                                    <td>{{ $form675->date_of_corrected_ledger }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>