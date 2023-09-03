<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4"></div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <p style="text-align: center;">
                <b>Bangladesh Air Force
                    <br>
                    Product Details *Lost or *Damage
                </b>
                <br>
                Separate form for every product
            </p>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <p style="text-align: end">BAF Form 34</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4 row">
            <div class="col-sm-5 col-md-5 col-lg-5">
                <span>Base/Unit:</span>

            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <p>{{ $form34->base_unit }}</p>

            </div>
            <div class="col-sm-5 col-md-5 col-lg-5">

                <span>Flight/Section:</span>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">

                <p>{{ $form34->flight_section }}</p>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 row">
            <div class="col-sm-5 col-md-5 col-lg-5">
                <p>Date:</p>

            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <p>{{ $form34->date }}</p>

            </div>
            <div class="col-sm-5 col-md-5 col-lg-5">

                <p>Year:</p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">

                <p>{{ $form34->year }}</p>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 row">
            <div class="col-sm-5 col-md-5 col-lg-5">
                <span>ID/CV no:</span><br>

            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <p>{{ $form34->id_no }}</p>

            </div>
            <div class="col-sm-5 col-md-5 col-lg-5">

                <span>Financial Year:</span>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">

                <p>{{ $form34->financial_year }}</p>
            </div>
        </div>

    </div>


    <table style="width: 100%; border: 1px; margin-top: 15px; margin-bottom: 15px;"
        class="table-bordered table-responsive" id="table">
        <thead align="center" class="bg-secondary">
            <tr>

                <td style="width:10%;" rowspan="2">Part/Reference no</td>
                <td style="width:20%;" rowspan="2">Section:{{ $form34->section }}<br>Product
                    Description</td>
                <td style="width:5%;" rowspan="2">Product Unit</td>
                <td style="width:5%;" rowspan="2">Product Number</td>
                <td style="width:5%;" rowspan="2">Condition of the lost or damaged product</td>
                <td style="width:5%;" rowspan="2">Price in the Book</td>
                <td style="width:5%;" rowspan="2">Determining price</td>
                <td style="width:10%;" colspan="2">Total lost value</td>
                <td style="width:10%;" rowspan="2">If a search committee is formed, its place or
                    date</td>
                <td style="width:5%;" rowspan="2">Posted</td>
                <td style="width:20%;" rowspan="2">Comments and consideration of lost goods</td>
            </tr>
            <tr>
                <td>Taka</td>
                <td>Poisha</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($form34['part_reference_no'] as $key => $part_reference_no)
                <tr>

                    <td><span>{{ $part_reference_no }}</span></td>
                    <td>{{ $form34['product_des'][$key] }}
                    <td>{{ $form34['product_unit'][$key] }}
                    <td>{{ $form34['product_number'][$key] }}
                    <td>{{ $form34['product_cond'][$key] }}
                    <td>{{ $form34['price_in_book'][$key] }}
                    <td>{{ $form34['determining_price'][$key] }}
                    <td>{{ $form34['price_in_taka'][$key] }}
                    <td>{{ $form34['price_in_poisha'][$key] }}
                    <td>{{ $form34['search_committee'][$key] }}
                    <td>{{ $form34['posted'][$key] }}
                    <td>{{ $form34['comment_consideration'][$key] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div class="row">
        <div class="col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-sm-7 col-md-7 col-lg-7 row">
            <div class="col-sm-8 col-md-8 col-lg-8">
                <table style="width: 100%; border: 1px; margin-top: 15px; margin-bottom: 15px;"
                    class="table-bordered table-responsive">
                    <thead align="center" class="bg-secondary">
                        <tr>


                            <td style="width:10%;" colspan="2">Lost Documented</td>
                            <td style="width:10%;" colspan="2">Stock record card was entered
                            </td>
                            <td style="width:10%;" colspan="2">Usable product Documented</td>

                        </tr>
                        <tr>
                            <td>Signature</td>
                            <td>Date</td>
                            <td>Signature</td>
                            <td>Date</td>
                            <td>Signature</td>
                            <td>Date</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>{{ $form34->sign_lost_docu }}</td>
                            <td>{{ $form34->date_lost_docu }}</td>
                            <td>{{ $form34->sign_stock }}</td>
                            <td>{{ $form34->date_stock }}</td>
                            <td>{{ $form34->sign_usable }}</td>
                            <td>{{ $form34->date_usable }}</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <p>Date:{{ $form34->date_commanding_officer }}</p>
                {{ $form34->sign_commanding_officer }}<br>
                ................<br>
                (Commanding Officer)
            </div>

        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">
            <p>Complete dissolution of product <span>&#10013;</span><br>
                Half dissolution of product <span>&#10013;</span></p>
            <p> {{ $form34->sign_bottom_right }}<br>
                ................<br>
                Signature and designation
            </p>
            <p>
                For Cheif Of Air Staff <span>&#10013;</span><br>
                Commanding Officer <span>&#10013;</span><br>
                Cut out unnecessary words <span>&#10013;</span>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <p>
                Remarks of the Economic Authority in accordance with Bangladesh Air Force
                Publication no 830 Chapter 22 Paragraph 93.
            </p>
            <p>{{ $form34->baf_press_serial }}</p>
        </div>
    </div>

</body>

</html>
