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
                            <u><b>
                                    <p style="text-align: center;"><span>{{ $PresentSQID->title}}</span></p>
                                </b></u>
                        </td>
                    </tr>
                </table>

                <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" cellpadding="0" cellspacing="0">
                    <tr style="background-color: #9c9797;">
                        <th width="5%">
                            <p>Ser No</p>
                        </th>
                        <th width="20%">
                            <p>Description of items</p>
                        </th>
                        <th width="5%">
                            <p>U/I</p>
                        </th>
                        <th width="10%">
                            <p>201MU BAF</p>
                            </p>
                        </th>
                        <th width="10%">
                            <p>Dues in</p>
                            </p>
                        </th>
                        <th width="5%">
                            <p>BBD</p>
                        </th>
                        <th width="5%">
                            <p>BSR</p>
                        </th>
                        <th width="5%">
                            <p>ZHR</p>
                        </th>
                        <th width="5%">
                            <p>MTR</p>
                        </th>
                        <th width="10%">
                            <p>Present Stock Bases/Unit</p>
                        </th>
                        <th width="10%">
                            <p>Average Yearly Consumption</p>
                        </th>
                    </tr>
                </table>
                <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" id="table">
                    @foreach ($PresentSQID['serial_no_one'] as $key => $serial_no_one)
                    <tr>
                        <th width="5%">
                            <p><span>{{ $serial_no_one }}</span></p>
                        </th>
                        <th width="20%">
                            <p><span>{{ $PresentSQID['description_of_items_one'][$key]  }}</span></p>
                        </th>
                        <th width="5%">
                            <p><span>{{ $PresentSQID['ui_one'][$key]  }}</span></p>
                        </th>
                        <th width="10%">
                            <p><span>{{$PresentSQID['mu_baf_one'][$key] }}</span></p>
                        </th>
                        <th width="10%">
                            <p><span>{{ $PresentSQID['dues_in_one'][$key]  }}</span></p>
                        </th>
                        <th width="5%">
                            <p><span>{{ $PresentSQID['bbd_one'][$key]  }}</span></p>
                        </th>
                        <th width="5%">
                            <p><span>{{ $PresentSQID['bsr_one'][$key]  }}</span></p>
                        </th>
                        <th width="5%">
                            <p><span>{{ $PresentSQID['zhr_one'][$key] }}</span></p>
                        </th>
                        <th width="5%">
                            <p><span>{{ $PresentSQID['mtr_one'][$key] }}</span></p>
                        </th>
                        <th width="10%">
                            <p><span>{{ $PresentSQID['present_stock_one'][$key] }}</span></p>
                        </th>
                        <th width="10%">
                            <p><span>{{ $PresentSQID['avg_yr_consumption_one'][$key] }}</span></p>
                        </th>
                    </tr>
                    @endforeach
                </table>
                <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" id="table_two">
                    @foreach ($PresentSQID['serial_no_two'] as $key => $serial_no_two)
                    <tr>
                        <th width="5%">
                            <p><span>{{ $serial_no_two }}</span></p>
                        </th>
                        <th width="20%">
                            <p><span>{{ $PresentSQID['description_of_items_two'][$key]  }}</span></p>
                        </th>
                        <th width="5%">
                            <p><span>{{ $PresentSQID['ui_two'][$key]  }}</span></p>
                        </th>
                        <th width="10%">
                            <p><span>{{$PresentSQID['mu_baf_two'][$key] }}</span></p>
                        </th>
                        <th width="10%">
                            <p><span>{{ $PresentSQID['dues_in_two'][$key]  }}</span></p>
                        </th>
                        <th width="5%">
                            <p><span>{{ $PresentSQID['bbd_two'][$key]  }}</span></p>
                        </th>
                        <th width="5%">
                            <p><span>{{ $PresentSQID['bsr_two'][$key]  }}</span></p>
                        </th>
                        <th width="5%">
                            <p><span>{{ $PresentSQID['zhr_two'][$key] }}</span></p>
                        </th>
                        <th width="5%">
                            <p><span>{{ $PresentSQID['mtr_two'][$key] }}</span></p>
                        </th>
                        <th width="10%">
                            <p><span>{{ $PresentSQID['present_stock_two'][$key] }}</span></p>
                        </th>
                        <th width="10%">
                            <p><span>{{ $PresentSQID['avg_yr_consumption_two'][$key] }}</span></p>
                        </th>
                    </tr>
                    @endforeach
                </table>
                <table width="90%" border="1" class="table-bordered" style="margin-left: 50px;" id="table_three">
                    @foreach ($PresentSQID['serial_no_three'] as $key => $serial_no_three)
                    <tr>
                        <th width="5%">
                            <p><span>{{ $serial_no_three }}</span></p>
                        </th>
                        <th width="20%">
                            <p><span>{{ $PresentSQID['description_of_items_three'][$key]  }}</span></p>
                        </th>
                        <th width="5%">
                            <p><span>{{ $PresentSQID['ui_three'][$key]  }}</span></p>
                        </th>
                        <th width="10%">
                            <p><span>{{$PresentSQID['mu_baf_three'][$key] }}</span></p>
                        </th>
                        <th width="10%">
                            <p><span>{{ $PresentSQID['dues_in_three'][$key]  }}</span></p>
                        </th>
                        <th width="5%">
                            <p><span>{{ $PresentSQID['bbd_three'][$key]  }}</span></p>
                        </th>
                        <th width="5%">
                            <p><span>{{ $PresentSQID['bsr_three'][$key]  }}</span></p>
                        </th>
                        <th width="5%">
                            <p><span>{{ $PresentSQID['zhr_three'][$key] }}</span></p>
                        </th>
                        <th width="5%">
                            <p><span>{{ $PresentSQID['mtr_three'][$key] }}</span></p>
                        </th>
                        <th width="10%">
                            <p><span>{{ $PresentSQID['present_stock_three'][$key] }}</span></p>
                        </th>
                        <th width="10%">
                            <p><span>{{ $PresentSQID['avg_yr_consumption_three'][$key] }}</span></p>
                        </th>
                    </tr>
                    @endforeach
                </table>
                <table width="90%" border="0" style="margin-top: 20px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="90%">
                            <p><span>{{ $PresentSQID->pl_see_excl }}</span></p>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</body>

</html>