@extends('master')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <h5>Form 34</h5>
        </div>
        <div class="card-body">
            <div id="accordion">
                @foreach ($formattedArray as $key => $datam)
                    <div class="card">
                        <div class="card-header d-flex justify-content-between" id="heading{{ $key }}">
                            <h5 class="mb-0">
                                {{-- @dd($datam) --}}
                                <button class="btn btn-link" data-toggle="collapse"
                                    data-target="#collapse{{ $key }}" aria-expanded="true"
                                    aria-controls="collapse{{ $key }}">
                                    Voucher No : <b> {{ $datam->id }} </b>
                                </button>
                            </h5>
                            <div>
                                <a href="{{ route('form34.downloadPdf', ['form34' => $datam->id]) }}"
                                    class="btn btn-sm btn-outline-info">PDF</a>
                                <a href="{{ route('form34.view', ['form34' => $datam->id]) }}"
                                    class="btn btn-sm btn-outline-success">View</a>
                                <a href="{{ route('form34.edit', ['form34' => $datam->id]) }}"
                                    class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="{{ route('form34.delete', ['form34' => $datam->id]) }}"
                                    class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Are you sure?')">Delete</a>
                            </div>
                        </div>
                        <div id="collapse{{ $key }}" class="collapse show"
                            aria-labelledby="heading{{ $key }}" data-parent="#accordion">
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
                                            
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <p>{{ $datam->base_unit }}</p>
                                            
                                        </div>
                                        <div class="col-sm-5 col-md-5 col-lg-5">
                                            
                                            <span>Flight/Section:</span>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            
                                            <p>{{ $datam->flight_section }}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 row">
                                        <div class="col-sm-5 col-md-5 col-lg-5">
                                            <p>Date:</p>
                                            
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <p>{{ $datam->date }}</p>
                                            
                                        </div>
                                        <div class="col-sm-5 col-md-5 col-lg-5">
                                            
                                            <p>Year:</p>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            
                                            <p>{{ $datam->year }}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4 row">
                                        <div class="col-sm-5 col-md-5 col-lg-5">
                                            <span>ID/CV no:</span><br>
                                            
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <p>{{ $datam->id_no }}</p>
                                            
                                        </div>
                                        <div class="col-sm-5 col-md-5 col-lg-5">
                                            
                                            <span>Financial Year:</span>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            
                                            <p>{{ $datam->financial_year }}</p>
                                        </div>
                                    </div>

                                </div>


                                <table style="width: 100%; border: 1px; margin-top: 15px; margin-bottom: 15px;"
                                    class="table-bordered table-responsive" id="table">
                                    <thead align="center" class="bg-secondary">
                                        <tr>

                                            <td style="width:10%;" rowspan="2">Part/Reference no</td>
                                            <td style="width:20%;" rowspan="2">Section:{{ $datam->section }}<br>Product
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
                                        @foreach ($datam['part_reference_no'] as $key => $part_reference_no)
                                            <tr>

                                                <td><span>{{ $part_reference_no }}</span></td>
                                                <td>{{ $datam['product_des'][$key] }}</td>
                                                <td>{{ $datam['product_unit'][$key] }}</td>
                                                <td>{{ $datam['product_number'][$key] }}</td>
                                                <td>{{ $datam['product_cond'][$key] }}</td>
                                                <td>{{ $datam['price_in_book'][$key] }}</td>
                                                <td>{{ $datam['determining_price'][$key] }}</td>
                                                <td>{{ $datam['price_in_taka'][$key] }}</td>
                                                <td>{{ $datam['price_in_poisha'][$key] }}</td>
                                                <td>{{ $datam['search_committee'][$key] }}</td>
                                                <td>{{ $datam['posted'][$key] }}</td>
                                                <td>{{ $datam['comment_consideration'][$key] }}</td>
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

                                                        <td>{{ $datam->sign_lost_docu }}</td>
                                                        <td>{{ $datam->date_lost_docu }}</td>
                                                        <td>{{ $datam->sign_stock }}</td>
                                                        <td>{{ $datam->date_stock }}</td>
                                                        <td>{{ $datam->sign_usable }}</td>
                                                        <td>{{ $datam->date_usable }}</td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                            <p>Date:{{ $datam->date_commanding_officer }}</p>
                                            {{ $datam->sign_commanding_officer }}<br>
                                            ................<br>
                                            (Commanding Officer)
                                        </div>

                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <p>Complete dissolution of product <span>&#10013;</span><br>
                                            Half dissolution of product <span>&#10013;</span></p>
                                        <p> {{ $datam->sign_bottom_right }}<br>
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
                                        <p>{{ $datam->baf_press_serial }}</p>
                                    </div>
                                </div>






                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="card-footer text-center">
            <a href="{{ route('form34.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
        </div>
    </div>
    @push('js')
        <script>
            $('.collapse').collapse({
                toggle: true
            })
        </script>
        <script src="{{ asset('vendor/bafforms/assets/libs/select2/select2.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @endpush
    @push('css')
        <link rel="stylesheet" href="{{ asset('vendor/bafforms/assets/libs/select2/select2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @endpush
@endsection
