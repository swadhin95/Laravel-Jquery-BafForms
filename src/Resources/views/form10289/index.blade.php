@extends('master')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <h5>Form 10289</h5>
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
                                <a href="{{ route('form10289.downloadPdf', ['form10289' => $datam->id]) }}"
                                    class="btn btn-sm btn-outline-info">PDF</a>
                                <a href="{{ route('form10289.view', ['form10289' => $datam->id]) }}"
                                    class="btn btn-sm btn-outline-success">View</a>
                                <a href="{{ route('form10289.edit', ['form10289' => $datam->id]) }}"
                                    class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="{{ route('form10289.delete', ['form10289' => $datam->id]) }}"
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
                                            <span style="font-size: 20px">Bangladesh Air Force</span>
                                            <br>
                                            <b style="font-size: 28px">Local weather forecast
                                            </b>
                                        </p>
                                    </div>

                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <p style="text-align: end">BAF Form 10289</p>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <p>Air Force base</p>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        {{ $datam->base }}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <p> miles wide area</p>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <p>Time and date of permanence, From </p>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        {{ $datam->from_time }}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        to(Bangladesh Time)
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        {{ $datam->to_time }}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <p>date</p>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        {{ $datam->to_date }}.
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        {{ $datam->greenwich_time }}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        greenwich time based on synoptic chart.
                                    </div>
                                </div>
                                <hr>
                                <p>Synoptic Position</p>
                                <hr>

                                <table style="width: 100%; border: 1px; margin-top: 15px;"
                                    class="table-bordered table-responsive">
                                    <thead align="center">
                                        <tr>
                                            <td width="10%" style="writing-mode: vertical-lr; padding:20px 0 20px 0"
                                                rowspan="9">Wind
                                                direction, speed and temperature ° celsius</td>
                                            <td style="text-align:left;" width="45%">Direction and speed of <br>surface wind
                                            </td>
                                            <td width="45%"></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">1000 ft/<br>300 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">Knots/Kmph</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7"> {{ $datam->temp_one_k }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">25000 ft/<br>7500 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">Knots/Kmph</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                                        {{ $datam->temp_twenty_five_k }} </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">2000 ft/<br>600 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7"> {{ $datam->temp_two_k }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">30000 ft/<br>9000 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7"> {{ $datam->temp_thirty_k }}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">3000 ft/<br>900 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7"> {{ $datam->temp_three_k }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">35000 ft/<br>10500 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                                        {{ $datam->temp_thirty_five_k }}</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">5000 ft/<br>1500 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7"> {{ $datam->temp_five_k }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">40000 ft/<br>12000 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7"> {{ $datam->temp_fourty_k }}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">7000 ft/<br>2100 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7"> {{ $datam->temp_seven_k }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">45000 ft/<br>13500 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                                        {{ $datam->temp_fourty_five_k }} </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">10000 ft/<br>3000 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7"> {{ $datam->temp_ten_k }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">50000 ft/<br>15000 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7"> {{ $datam->temp_fifty_k }}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">15000 ft/<br>4500 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7"> {{ $datam->temp_fifteen_k }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">55000 ft/<br>16500 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                                        {{ $datam->temp_fifty_five_k }}</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">20000 ft/<br>6000 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7"> {{ $datam->temp_twenty_k }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-lg-3">60000 ft/<br>18000 m</div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7"> {{ $datam->temp_sixty_k }}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </thead>
                                </table>
                                <table align="center" style="width: 100%; border: 1px;"
                                    class="table-bordered table-responsive">
                                    <tr>
                                        <td width="5%" style="writing-mode: vertical-lr; text-align:center; " rowspan="2">
                                            Cloud</td>
                                        <td width="5%"
                                            style="writing-mode: vertical-lr; padding:10px 0 10px 0; text-align:center; ">
                                            Low Level</td>
                                        <td width="90%">
                                            <div class="row">
                                                <div class="col-sm-4 col-md-4 col-lg-4 text-left">
                                                    <span>Quantity and type</span><br>
                                                    <span>Height of the lower part</span><br>
                                                    <span>Height of the surface</span>
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                                                    <br>
                                                    {{ $datam->lower_lower_hight }}
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                                                    <br>
                                                    {{ $datam->lower_surface_hight }}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="5%"
                                            style="writing-mode: vertical-lr; padding:10px 0 10px 0; text-align:center;">
                                            High Level</td>
                                        <td width="90%">
                                            <div class="row">
                                                <div class="col-sm-4 col-md-4 col-lg-4 text-left">
                                                    <span>Quantity and type</span><br>
                                                    <span>Height of the lower part</span><br>
                                                    <span>Height of the surface</span>
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                                                    <br>
                                                    {{ $datam->upper_lower_hight }}
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                                                    <br>
                                                    {{ $datam->upper_surface_hight }}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table align="center" style="width: 100%; border: 1px;"
                                    class="table-bordered table-responsive">
                                    <tr>
                                        <td width="30" style="padding-left:10px">Sight range</td>
                                        <td width="70"> {{ $datam->sight_range }} </td>
                                    </tr>
                                    <tr>
                                        <td width="30" style="padding-left:10px">Weather</td>
                                        <td width="70"> {{ $datam->weather }} </td>
                                    </tr>
                                    <tr>
                                        <td width="30" style="padding-left:10px">10 mile wide area forecast</td>
                                        <td width="70"> {{ $datam->forcast_ten_miles }} </td>
                                    </tr>
                                    <tr>
                                        <td width="30" style="padding-left:10px">Forecast for the next 24 hours</td>
                                        <td width="70"> {{ $datam->forcast_next_twentyfour }} </td>
                                    </tr>
                                </table>
                                <table align="center" style="width: 100%; border: 1px;  margin-bottom: 15px;"
                                    class="table-bordered table-responsive">
                                    <tr>
                                        <td class="col-sm-3 col-md-3 col-lg-3 text-center">Amount of instability in the
                                            atmosphere/Freeze</td>
                                        <td class="col-sm-3 col-md-3 col-lg-3 text-center">Mintra Level</td>
                                        <td class="col-sm-3 col-md-3 col-lg-3 text-center">freezing level</td>
                                        <td class="col-sm-3 col-md-3 col-lg-3 text-center">Average of the lowest air
                                            pressure at sea level</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-3 col-md-3 col-lg-3 text-center">No/light/medium/extreme</td>
                                        <td class="col-sm-3 col-md-3 col-lg-3 text-center">
                                            <div class="row">
                                                <div class="col-sm-8 col-md-8 col-lg-8"> {{ $datam->mintra_feet }}
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 text-left">feet</div>
                                                <div class="col-sm-8 col-md-8 col-lg-8"> {{ $datam->mintra_meter }}
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 text-left">meter</div>
                                            </div>
                                        </td>
                                        <td class="col-sm-3 col-md-3 col-lg-3 text-center">
                                            <div class="row">
                                                <div class="col-sm-8 col-md-8 col-lg-8"> {{ $datam->freezing_feet }}
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 text-left">feet</div>
                                                <div class="col-sm-8 col-md-8 col-lg-8"> {{ $datam->freezing_meter }}
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 text-left">meter</div>
                                            </div>
                                        </td>
                                        <td class="col-sm-3 col-md-3 col-lg-3 text-center">
                                            <div class="row">
                                                <div class="col-sm-7 col-md-7 col-lg-7">
                                                    {{ $datam->avg_lowest_sea_level_feet }} </div>
                                                <div class="col-sm-5 col-md-5 col-lg-5 text-left">millimeter</div>
                                                <div class="col-sm-7 col-md-7 col-lg-7">
                                                    {{ $datam->avg_lowest_sea_level_meter }} </div>
                                                <div class="col-sm-5 col-md-5 col-lg-5 text-left">millibar</div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <p class="text-center" style="font-size: 20px;"><b>Bangladesh Time</b></p>
                                <table style="width: 100%; border: 1px; margin-top: 15px; margin-bottom: 15px;"
                                    class="table-bordered table-responsive" id="table">
                                    <thead align="center" class="bg-secondary">
                                        <tr>
                                            <td>Date</td>
                                            <td>Dawn</td>
                                            <td>Sunrise </td>
                                            <td>Sunset</td>
                                            <td>Twilight</td>
                                            <td>Moonrise</td>
                                            <td>Moonset</td>
                                            <td>Crescent</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datam['date'] as $key => $date)
                                            <tr>
                                                <td> {{ $date }}</td>
                                                <td>{{ $datam['dawn'][$key] }} </td>
                                                <td>{{ $datam['sunrise'][$key] }} </td>
                                                <td>{{ $datam['sunset'][$key] }} </td>
                                                <td>{{ $datam['twilight'][$key] }}</td>
                                                <td>{{ $datam['moonrise'][$key] }}</td>
                                                <td>{{ $datam['moonset'][$key] }} </td>
                                                <td>{{ $datam['crescent'][$key] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-sm-3 col-md-3 col-lg-3">Time and Date of Issue</div>
                                    <div class="col-sm-2 col-md-2 col-lg-2"> {{ $datam->issue_time }} </div>
                                    <div class="col-sm-2 col-md-2 col-lg-2"> {{ $datam->issue_date }} </div>
                                    <div class="col-sm-2 col-md-2 col-lg-2">Air Force Base</div>
                                    <div class="col-sm-3 col-md-3 col-lg-3"> {{ $datam->air_force_base }} </div>
                                </div>

                                <table style="width: 100%; margin-top: 60px; margin-bottom: 15px;"
                                    class="table-responsive">
                                    <tr>
                                        <td width="77%"></td>
                                        <td width="23%">
                                            {{ $datam->predictor_signature }} <br>
                                            <p>Predictor Signature</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%"> {{ $datam->baf_serial_no }} </td>
                                        <td width="50%"></td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="card-footer text-center">
            <a href="{{ route('form10289.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
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
