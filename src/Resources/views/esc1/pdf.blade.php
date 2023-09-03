<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<p style="text-align: end; margin: 90px 0 0 0; ">BAF F 20200</p>
<table style="width: 100%;">
    <tr>
        <td style="width: 80%;">
            <p><b><u>PROCEEDINGS OF EQUIPMENT SELECTION COMMITTEE</u></b></p>
            <p> {{ $esc1->ref_no}} </p>
        </td>
        <td style="width: 20%;">
            <p>date : {{ $esc1->date}}</p>
        </td>
    </tr>
</table>
<table style="width: 100%; border: 1px;" class="table-bordered table-responsive">
    <tr>
        <th style="width: 75%;  text-align:center;">Description of items</th>
        <th style="width: 25%; text-align:center;">Qty</th>

    </tr>
    <tr>
        <td style="width: 75%;"> {{ $esc1->description_item}}</td>
        <td style="width: 25%;"> {{ $esc1->qty}} </td>
    </tr>
</table>
<table style="width: 100%;" class=" table-responsive">
    <tr>
        <td style="width: 80%;"><u>Samples code no</u></td>
        <td style="width: 20%;"><u>Offer Validity</u></td>
    </tr>
    <tr>
        <td style="width: 80%;"> {{ $esc1->samples_code_no}}</td>
        <td style="width: 20%;"> {{ $esc1->offer_validity}}</td>
    </tr>
</table>
<hr>
<table style="width: 100%;" class=" table-responsive">
    <tr>
        <td style="width: 100%;"><u>Remarks by SPS:</u></td>
    </tr>
    <tr>
        <td style="width: 100%;"><span>1. </span> {{ $esc1->remarks_one}} </td>
    </tr>
    <tr>
        <td style="width: 100%;"><span>2. <b><u>Recommendation for Acceptance.</u></b></span> {{ $esc1->recommendation_acceptance}}</td>
    </tr>
    <tr>
        <table style="width: 100%; border: 1px; margin-top: 15px; margin-bottom: 15px;" class="table-bordered table-responsive" id="table">
            <thead align="center" class="bg-secondary">
                <tr>
                    <th style="width: 15%;">Code no</th>
                    <th style="width: 65%;">Obsn on sample</th>
                    <th style="width: 20%;">Rmk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($esc1['accept_code_no'] as $key => $accept_code_no)
                <tr>
                    <td style="width: 15%;">
                        <p><span>{{ $accept_code_no }}</span></p>
                    </td>
                    <td style="width: 65%;">
                        <p><span>{{ $esc1['accept_obsn_sample'][$key]  }}</span></p>
                    </td>
                    <td style="width: 20%;">
                        <p><span>{{ $esc1['accept_rmk'][$key]  }}</span></p>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </tr>
    <tr>
        <td> {{ $esc1->table_bottom_comment}}</td>
    </tr>
    <br>
    <tr>
        <td style="width: 100%;"><span>3. <b><u>Rejection.</u></b></span> {{ $esc1->rejection}}</td>
    </tr>
    <tr>
        <table style="width: 100%; border: 1px; margin-top: 15px;" class="table-bordered table-responsive" id="table2">
            <thead align="center" class="bg-secondary">
                <tr>
                    <th style="width: 15%;">Code no</th>
                    <th style="width: 65%;">Obsn on sample</th>
                    <th style="width: 20%;">Rmk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($esc1['reject_code_no'] as $key => $reject_code_no)
                <tr>
                    <td style="width: 15%;">
                        <p><span>{{ $reject_code_no }}</span></p>
                    </td>
                    <td style="width: 65%;">
                        <p><span>{{ $esc1['reject_obsn_sample'][$key]  }}</span></p>
                    </td>
                    <td style="width: 20%;">
                        <p><span>{{ $esc1['reject_rmk'][$key]  }}</span></p>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </tr>
</table>
</body>

</html>