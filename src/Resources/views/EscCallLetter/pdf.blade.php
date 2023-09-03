<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <table width="90%" border="0" style="padding-top: 30px;" cellpadding="0" cellspacing="0">
        <tr>
            <td width="90%">
                <p style="text-align: center;"><span>{{ $escCall->confidential }}</span></p>
                <p style="text-align: center;"><span>{{ $escCall->maintainence }}</span></p>
                <p style="text-align: center;">(<span>{{ $escCall->transportation_unit }}</span>)</p>
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
                <p><span>{{ $escCall->serial_no }}</span></p>
            </td>
        </tr>
        <tr>
            <td width="90%">
                <p><b><u><span>{{ $escCall->instrument_serial_no }}</span></u></b></p>
            </td>
        </tr>
        <tr>
            <td width="90%">
                <p><span>{{ $escCall->description_one }}</span></p>
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

        @foreach ($escCall['one_serial'] as $key => $one_serial)
        <tr>
            <td width="5%">{{ $one_serial }}</td>
            <td width="15%">{{ $escCall['one_indent'][$key] }}</td>
            <td width="45%">{{ $escCall['one_description'][$key] }}</td>
            <td width="10%">{{ $escCall['one_qty'][$key] }}</td>
            <td width="5%">{{ $escCall['one_rmk'][$key] }}</td>
        </tr>
        @endforeach
    </table>

    <table width="90%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="90%">
                <p><span>{{ $escCall->description_two }}</span></p>
            </td>
        </tr>
    </table>
    <table width="90%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="65%"></td>
            <td width="25%">
                <p><span>{{ $escCall->name }}</span></p>
            </td>
            <td width="10%"></td>
        </tr>
        <tr>
            <td width="65%"></td>
            <td width="25%">
                <p><span>{{ $escCall->rank }}</span></p>
            </td>
            <td width="10%"></td>
        </tr>
        <tr>
            <td width="65%"></td>
            <td width="25%">
                <p><span>{{ $escCall->transfer_director }}</span></p>
            </td>
            <td width="10%"></td>
        </tr>
        <tr>
            <td width="65%"></td>
            <td width="25%">
                <p><span>{{ $escCall->phone }}</span></p>
            </td>
            <td width="10%"></td>
        </tr>
        <tr>
            <td width="65%"></td>
            <td width="25%">
                <p><span>{{ $escCall->date }}</span></p>
            </td>
            <td width="10%"></td>
        </tr>
    </table>
    <table width="90%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="90%">
                <p>To:</p>
                <p><span>{{ $escCall->main_inspector }}</span></p>
                <p><span>{{ $escCall->derector_title }}</span></p>
                <p><span>{{ $escCall->captain }}</span></p>
                <p><span>{{ $escCall->staff_officer_title }}</span></p>
                <p>Awareness:</p>
                <p><span>{{ $escCall->secretary_title }}</span></p>
            </td>
        </tr>
    </table>
    <table width="90%" border="0" style="padding-top: 90px;" cellpadding="0" cellspacing="0">
        <tr>
            <td width="90%">
                <p style="text-align: center;"><span>{{ $escCall->confidential_bottom }}</span></p>
            </td>
        </tr>
        <tr>
            <td width="90%">
                <p><span>{{ $escCall->serial_bottom }}</span></p>
            </td>
        </tr>
    </table>
    
</body>

</html>