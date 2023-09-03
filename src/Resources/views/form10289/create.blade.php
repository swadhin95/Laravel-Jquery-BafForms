@extends('master')
@section('content')
<div class="card my-5">
    <div class="card-header">
        <h5>Form 10289 : Store</h5>
    </div>

    <form action="{{ route('form10289.store') }}" method="post">
        @csrf
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
                    <input type="text"  name="base">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <p> miles wide area</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <p>Time and date of permanence, From </p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <input type="time"   name="from_time">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    to(Bangladesh Time)
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <input type="time"   name="to_time">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <p>date</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <input type="date"  name="to_date">.
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <input type="time"  name="greenwich_time">
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
                        <td width="10%" style="writing-mode: vertical-lr; padding:20px 0 20px 0" rowspan="9">Wind
                            direction, speed and temperature ° celsius</td>
                        <td style="text-align:left;" width="45%">Direction and speed of <br>surface wind</td>
                        <td width="45%"></td>
                    </tr>

                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">1000 ft/<br>300 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">Knots/Kmph</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"   name="temp_one_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">25000 ft/<br>7500 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">Knots/Kmph</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"   name="temp_twenty_five_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">2000 ft/<br>600 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"  name="temp_two_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">30000 ft/<br>9000 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"  name="temp_thirty_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">3000 ft/<br>900 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"   name="temp_three_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">35000 ft/<br>10500 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"  name="temp_thirty_five_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">5000 ft/<br>1500 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"  name="temp_five_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">40000 ft/<br>12000 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"    name="temp_fourty_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">7000 ft/<br>2100 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"   name="temp_seven_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">45000 ft/<br>13500 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"   name="temp_fourty_five_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">10000 ft/<br>3000 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"  name="temp_ten_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">50000 ft/<br>15000 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"   name="temp_fifty_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">15000 ft/<br>4500 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"  name="temp_fifteen_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">55000 ft/<br>16500 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"   name="temp_fifty_five_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">20000 ft/<br>6000 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"  name="temp_twenty_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">60000 ft/<br>18000 m</div>
                                <div class="col-sm-2 col-md-2 col-lg-2">,,</div>
                                <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"   name="temp_sixty_k"
                                        placeholder="° celsius"></div>
                            </div>
                        </td>
                    </tr>
                </thead>
            </table>
            <table align="center" style="width: 100%; border: 1px;" 
            class="table-bordered table-responsive">
                <tr>
                    <td width="5%" style="writing-mode: vertical-lr; text-align:center; " rowspan="2">Cloud</td>
                    <td width="5%" style="writing-mode: vertical-lr; padding:10px 0 10px 0; text-align:center; ">Low Level</td>
                    <td width="90%">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 text-left">
                                <span>Quantity and type</span><br>
                                <span>Height of the lower part</span><br>
                                <span>Height of the surface</span>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                                <br>
                                <input type="text"  name="lower_lower_hight">
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                                <br>
                                <input type="text"  name="lower_surface_hight">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="5%" style="writing-mode: vertical-lr; padding:10px 0 10px 0; text-align:center;">High Level</td>
                    <td width="90%">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 text-left">
                                <span>Quantity and type</span><br>
                                <span>Height of the lower part</span><br>
                                <span>Height of the surface</span>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                                <br>
                                <input type="text"  name="upper_lower_hight">
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                                <br>
                                <input type="text"  name="upper_surface_hight">
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <table align="center" style="width: 100%; border: 1px;" 
            class="table-bordered table-responsive">
                <tr>
                    <td width="30" style="padding-left:10px">Sight range</td>
                    <td width="70"><input type="text"  name="sight_range"></td>
                </tr>
                <tr>
                    <td width="30" style="padding-left:10px">Weather</td>
                    <td width="70"><input type="text"   name="weather"></td>
                </tr>
                <tr>
                    <td width="30" style="padding-left:10px">10 mile wide area forecast</td>
                    <td width="70"><input type="text"  name="forcast_ten_miles"></td>
                </tr>
                <tr>
                    <td width="30" style="padding-left:10px">Forecast for the next 24 hours</td>
                    <td width="70"><input type="text"  name="forcast_next_twentyfour"></td>
                </tr>
            </table>
            <table align="center" style="width: 100%; border: 1px;  margin-bottom: 15px;" 
            class="table-bordered table-responsive">
                <tr>
                    <td class="col-sm-3 col-md-3 col-lg-3 text-center">Amount of instability in the atmosphere/Freeze</td>
                    <td class="col-sm-3 col-md-3 col-lg-3 text-center">Mintra Level</td>
                    <td class="col-sm-3 col-md-3 col-lg-3 text-center">freezing level</td>
                    <td class="col-sm-3 col-md-3 col-lg-3 text-center">Average of the lowest air pressure at sea level</td>
                </tr>
                <tr>
                    <td class="col-sm-3 col-md-3 col-lg-3 text-center">No/light/medium/extreme</td>
                    <td class="col-sm-3 col-md-3 col-lg-3 text-center">
                        <div class="row">
                            <div class="col-sm-8 col-md-8 col-lg-8"><input type="text"  name="mintra_feet"> </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 text-left">feet</div>
                            <div class="col-sm-8 col-md-8 col-lg-8"><input type="text"  name="mintra_meter">  </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 text-left">meter</div>
                        </div>
                    </td>
                    <td class="col-sm-3 col-md-3 col-lg-3 text-center">
                        <div class="row">
                            <div class="col-sm-8 col-md-8 col-lg-8"><input type="text"  name="freezing_feet"> </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 text-left">feet</div>
                            <div class="col-sm-8 col-md-8 col-lg-8"><input type="text"  name="freezing_meter">  </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 text-left">meter</div>
                        </div>
                    </td>
                    <td class="col-sm-3 col-md-3 col-lg-3 text-center">
                        <div class="row">
                            <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"  name="avg_lowest_sea_level_feet"> </div>
                            <div class="col-sm-5 col-md-5 col-lg-5 text-left">millimeter</div>
                            <div class="col-sm-7 col-md-7 col-lg-7"><input type="text"  name="avg_lowest_sea_level_meter">  </div>
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
                        <td >Action</td>
                        <td >Date</td>
                        <td >Dawn</td>
                        <td >Sunrise </td>
                        <td >Sunset</td>
                        <td >Twilight</td>
                        <td >Moonrise</td>
                        <td >Moonset</td>
                        <td >Crescent</td>
                    </tr>
                </thead>
                <tbody>
                 
                    <tr>
                        <td>
                            <button type="button"  name="add" id="add" class="btn btn-sm btn-primary"><i
                                    class="fa fa-plus"></i></button>
                        </td>
                        <td><input type="date"   name="date[]"></td>
                        <td><input type="text"  name="dawn[]"></td>
                        <td><input type="text"  name="sunrise[]"></td>
                        <td><input type="text"   name="sunset[]"></td>
                        <td><input type="text"   name="twilight[]"</td>
                        <td><input type="text"   name="moonrise[]"></td>
                        <td><input type="text"  name="moonset[]"></td>
                        <td><input type="text"   name="crescent[]"></td>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">Time and Date of Issue</div>
                <div class="col-sm-2 col-md-2 col-lg-2"><input type="time"  name="issue_time"></div>
                <div class="col-sm-2 col-md-2 col-lg-2"><input type="date"  name="issue_date"></div>
                <div class="col-sm-2 col-md-2 col-lg-2">Air Force Base</div>
                <div class="col-sm-3 col-md-3 col-lg-3"><input type="text"   name="air_force_base"></div>
            </div>
            
            <table style="width: 100%; margin-top: 60px; margin-bottom: 15px;"
                class="table-responsive">
                <tr>
                    <td width="77%"></td>
                    <td width="23%">
                        <input type="text"  name="predictor_signature"><br>
                    <p>Predictor Signature</p>
                    </td>
                </tr>
                <tr>
                    <td width="50%"><input type="text"   name="baf_serial_no" placeholder="Serial No"></td>
                    <td width="50%"></td>
                </tr>
            </table>





        </div>
        <div class="card-footer" align="center">
            <button type="submit" class="btn btn-sm btn-success">Save</button>
        </div>
    </form>
</div>
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
                    <input type="date" name="date[]" >
                </td>
                <td>
                    <input type="text" name="dawn[]">
                </td>
                <td>
                    <input type="text" name="sunrise[]">
                </td>
                <td>
                    <input type="text" name="sunset[]">
                </td>
                <td>
                    <input type="text" name="twilight[]">
                </td>
                <td>
                    <input type="text" name="moonrise[]">
                </td>
                <td>
                    <input type="text" name="moonset[]">
                </td>
                <td>
                    <input type="text" name="crescent[]">
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