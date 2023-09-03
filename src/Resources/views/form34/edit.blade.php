@extends('master')
@section('content')
<div class="card my-5">
    <div class="card-header">
        <h5>Form 34 : Update</h5>
    </div>

    <form action="{{route('form34.update', ['form34' => $dataEdit->id])}}" method="POST">
        @csrf
        <div class="card-body">
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
                        <span>Flight/Section:</span>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <input type="text"   value="{{$dataEdit->base_unit}}" name="base_unit">
                        <input type="text"   value="{{$dataEdit->flight_section}}" name="flight_section">
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 row">
                    <div class="col-sm-5 col-md-5 col-lg-5">
                        <p>Date:</p>
                        <p>Year:</p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <input type="text"   value="{{$dataEdit->date}}" name="date">
                        <input type="text"   value="{{$dataEdit->year}}" name="year">
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 row">
                    <div class="col-sm-5 col-md-5 col-lg-5">
                        <span>ID/CV no:</span><br>
                        <span>Financial Year:</span>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <input type="text"   value="{{$dataEdit->id_no}}" name="id_no">
                        <input type="text"   value="{{$dataEdit->financial_year}}" name="financial_year">
                    </div>
                </div>

            </div>


            <table style="width: 100%; border: 1px; margin-top: 15px; margin-bottom: 15px;"
                class="table-bordered table-responsive" id="table">
                <thead align="center" class="bg-secondary">
                    <tr>
                        <td rowspan="2">Action</td>
                        <td style="width:10%;" rowspan="2">Part/Reference no</td>
                        <td style="width:20%;" rowspan="2">Section<input type="text"   value="{{$dataEdit->section}}" name="section"><br>Product
                            Description</td>
                        <td style="width:5%;" rowspan="2">Product Unit</td>
                        <td style="width:5%;" rowspan="2">Product Number</td>
                        <td style="width:5%;" rowspan="2">Condition of the lost or damaged product</td>
                        <td style="width:5%;" rowspan="2">Price in the Book</td>
                        <td style="width:5%;" rowspan="2">Determining price</td>
                        <td style="width:10%;" colspan="2">Total lost value</td>
                        <td style="width:10%;" rowspan="2">If a search committee is formed, its place or date</td>
                        <td style="width:5%;" rowspan="2">Posted</td>
                        <td style="width:20%;" rowspan="2">Comments and consideration of lost goods</td>
                    </tr>
                    <tr>
                        <td>Taka</td>
                        <td>Poisha</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataEdit['part_reference_no'] as $key => $part_reference_no)
                    <tr>
                        <td>
                            <button type="button"  name="add" id="add" class="btn btn-sm btn-primary"><i
                                    class="fa fa-plus"></i></button>
                        </td>
                        <td><input type="text"   value="{{$part_reference_no}}" name="part_reference_no[]" placeholder="Part/Reference no"></td>
                        <td><input type="text"   value="{{$dataEdit['product_des'][$key]}}" name="product_des[]" placeholder="Product Description"></td>
                        <td><input type="text"   value="{{$dataEdit['product_unit'][$key]}}" name="product_unit[]" placeholder="Product Unit"></td>
                        <td><input type="text"   value="{{$dataEdit['product_number'][$key]}}" name="product_number[]" placeholder="Product Number"></td>
                        <td><input type="text"   value="{{$dataEdit['product_cond'][$key]}}" name="product_cond[]" placeholder="Product Condition"></td>
                        <td><input type="text"   value="{{$dataEdit['price_in_book'][$key]}}" name="price_in_book[]" placeholder="Price in Book"></td>
                        <td><input type="text"   value="{{$dataEdit['determining_price'][$key]}}" name="determining_price[]" placeholder="Determining Price"></td>
                        <td><input type="text"   value="{{$dataEdit['price_in_taka'][$key]}}" name="price_in_taka[]" placeholder="Price in taka"></td>
                        <td><input type="text"   value="{{$dataEdit['price_in_poisha'][$key]}}" name="price_in_poisha[]" placeholder="Price in poisha"></td>
                        <td><input type="text"   value="{{$dataEdit['search_committee'][$key]}}" name="search_committee[]" placeholder="Search Committee"></td>
                        <td><input type="text"   value="{{$dataEdit['posted'][$key]}}" name="posted[]" placeholder="Posted"></td>
                        <td><input type="text"   value="{{$dataEdit['comment_consideration'][$key]}}" name="comment_consideration[]" placeholder="Comment & Consideration">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


            <div class="row">


                <div class="col-sm-12 col-md-12 col-lg-12">
                    <table style="width: 100%; border: 1px; margin-top: 15px; margin-bottom: 15px;"
                        class="table-bordered table-responsive">
                        <thead align="center" class="bg-secondary">
                            <tr>


                                <td style="width:10%;" colspan="2">Lost Documented</td>
                                <td style="width:10%;" colspan="2">Stock record card was entered</td>
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

                                <td><input type="text"   value="{{$dataEdit->sign_lost_docu}}" name="sign_lost_docu"></td>
                                <td><input type="date"   value="{{$dataEdit->date_lost_docu}}" name="date_lost_docu"></td>
                                <td><input type="text"   value="{{$dataEdit->sign_stock}}" name="sign_stock"></td>
                                <td><input type="date"   value="{{$dataEdit->date_stock}}" name="date_stock"></td>
                                <td><input type="text"   value="{{$dataEdit->sign_usable}}" name="sign_usable"></td>
                                <td><input type="date"   value="{{$dataEdit->date_usable}}" name="date_usable"></td>

                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6">
                    <p>Date:<input type="date"   value="{{$dataEdit->date_commanding_officer}}" name="date_commanding_officer"></p>
                    <input type="text"   value="{{$dataEdit->sign_commanding_officer}}" name="sign_commanding_officer"><br>
                    ................<br>
                    (Commanding Officer)
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6">
                    <p>Complete dissolution of product <span>&#10013;</span><br>
                        Half dissolution of product <span>&#10013;</span></p>
                    <p> <input type="text"   value="{{$dataEdit->sign_bottom_right}}" name="sign_bottom_right"><br>
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
                        Remarks of the Economic Authority in accordance with Bangladesh Air Force Publication no 830
                        Chapter 22 Paragraph 93.
                    </p>
                    <p><input type="text"   value="{{$dataEdit->baf_press_serial}}" name="baf_press_serial"></p>
                </div>
            </div>

        </div>
        <div class="card-footer" align="center">
            <button type="submit" class="btn btn-sm btn-success">Update</button>
        </div>
    </form>

    @push('js')
    <script type="text/javascript">
        var i = 0;
        $("#add").click(function() {
            console.log('inn');
            ++i;

            let html = `
            <tr>
                    <td>
                        <button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button>                  
                    </td>
                    <td>
                        <input type="text" name="part_reference_no[]" >
                    </td>
                    <td>
                        <input type="text" name="product_des[]">
                    </td>
                    <td>
                        <input type="text" name="product_unit[]">
                    </td>
                    <td>
                        <input type="text" name="product_number[]">
                    </td>
                    <td>
                        <input type="text" name="product_cond[]">
                    </td>
                    <td>
                        <input type="text" name="price_in_book[]">
                    </td>
                    <td>
                        <input type="text" name="determining_price[]">
                    </td>
                    <td>
                        <input type="text" name="price_in_taka[]">
                    </td>
                    <td>
                        <input type="text" name="price_in_poisha[]">
                    </td>
                    <td>
                        <input type="text" name="search_committee[]">
                    </td>
                    <td>
                        <input type="text" name="posted[]">
                    </td>
                    <td>
                        <input type="text" name="comment_consideration[]">
                    </td>
                </tr> 
            `;
            $("#table").append(html);

        });
        $(document).on('click', '.remove-tr', function() {

            $(this).parents('tr').remove();

        });
        $(document).on('click', '.remove-tr', function() {

            $(this).parents('tr').remove();

        });
    </script>
    @endpush
    @push('css')
    <style>
        .table {
            width: 100% !important;
            border-collapse: collapse;
            border: 1px solid black;
            align-items: center;
        }

        .table tr {
            border: 1px solid black;
        }

        .table th {
            border: 1px solid black;
        }

        .table td {
            border: 1px solid black;
        }
    </style>
    @endpush
    @endsection