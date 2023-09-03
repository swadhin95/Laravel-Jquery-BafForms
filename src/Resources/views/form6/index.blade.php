@extends('master')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h5>Form-6</h5>
    </div>
    <div class="card-body">
        <div id="accordion">
            @foreach ($formattedArray as $key => $datam)
            <div class="card">
                <div class="card-header d-flex justify-content-between" id="heading{{ $key }}">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            Voucher No : <b> {{ $datam->id}} </b>
                        </button>
                    </h5>
                    <div>
                        <a href="{{ route('form6.downloadPdf', ['form6' => $datam->id]) }}" class="btn btn-sm btn-outline-info">PDF</a>
                        <a href="{{ route('form6.view', ['form6' => $datam->id]) }}" class="btn btn-sm btn-outline-success">View</a>
                        <a href="{{ route('form6.edit', ['form6' => $datam->id]) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        <a href="{{ route('form6.delete', ['form6' => $datam->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </div>
                </div>
                <div id="collapse{{ $key }}" class="collapse show" aria-labelledby="heading{{ $key }}" data-parent="#accordion">
                    <div class="card-body">
                        <p style="text-align: end; margin: 90px 0 0 0; ">বিএএফ ফরম-৬</p>
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 33%;">
                                    <p>ফ্লাইট অথবা সেকশন ক্রমিক নং: <span>{{ $datam->sec_ser_no }}</span></p>
                                    <p style="padding-top: 20px;">কারখানা ক্রমিক নং: <span>{{ $datam->fac_ser_no }}</span></p>
                                </td>
                                <td style="width: 33%;">
                                    <p style="font-size: larger; text-align: center;"><b>বাংলাদেশ বিমান বাহিনি</b></p>
                                    <p style="font-size: larger; text-align: center;"><u><b>অভ্যন্তরিন মেরামত অথবা নির্মাণের আদেশপত্র</b></u>
                                    </p>
                                    <div class="form-group row justify-content-start">
                                        <label for="work_no" class="col-3">কাজের নং:</label>
                                        <div class="col-6">
                                            <span>{{ $datam->work_no }}</span>
                                        </div>
                                        <p class="col-2" style="text-align: end;">**প্রাপ্তি <br> পরিবর্তন <br> প্রদান</p>
                                    </div>
                                </td>
                                <td style="width: 33%;">
                                    <table border="1px">
                                        <tr>
                                            <td class="col-2 ">
                                                <p>**অতিজরুরি <br> জরুরি <br> সাধারন</p>
                                            </td>

                                            <td class="col-8">
                                                <p><span>{{ $datam->officer_sig }}</span></p>
                                                <p>অনুমোদিত অফিসারের স্বাক্ষর</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%;">
                                                <p>ভাউচার নংঃ<span>{{ $datam->vou_no }}</span></p>
                                            </td>
                                            <td style="width: 50%;">
                                                <p>তারিখঃ<span>{{ $datam->date }}</span></p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table style="width: 100%; border: 1px;" class="table-bordered">
                            <thead align="center" class="bg-secondary">
                                <tr>
                                    <td rowspan="3" style="width: 7%;">রেঃ নং</td>
                                    <td rowspan="3" style="width: 7%;">পার্ট নং</td>
                                    <td rowspan="3" style="width: 16%;">
                                        <p style="margin: 0 0 0 0; text-align: center;">দ্রব্যের নাম</p>
                                        <p style="margin: 0 0 0 0; text-align: center;">সেকশন নংঃ{{ $datam->sec_no }}</p>
                                    </td>
                                    <td rowspan="3" style="width: 12%;">কাজের ধরন</td>
                                    <td rowspan="3" style="width: 8%;">মজুদ</td>
                                    <td rowspan="3" style="width: 10%;">পরবর্তি ৬ মাসের মজুদ</td>


                                    <td colspan="5">পরিমাণ</td>

                                    <td rowspan="3" style="width: 10%;">মন্তব্য</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="width: 28%;">মেরামত অথবা নির্মাণের জন্য</td>
                                    <td colspan="4" style="width: 72%;">পরীক্ষার পরে মেরামত অথবা নির্মাণ</td>
                                </tr>
                                <tr>
                                    <td style="width:25%;">কর্মযোগ্য</td>
                                    <td style="width: 25%;">মেরামত যোগ্য</td>
                                    <td style="width: 25%;">কাজের অযোগে</td>
                                    <td style="width: 25%;">রুপান্তর</td>
                                </tr>

                            </thead>
                            <tbody>
                                
                              
                                @foreach ( $datam['reg_no'] as $key => $reg_no)
                                <tr>
                                    <td style="width: 7%;"><span>{{ $reg_no }}</span></td>
                                    <td style="width: 7%;"><span>{{ $datam['part_no'][$key] }}</span></td>
                                    <td style="width: 16%;"><span>{{ $datam['product_name'][$key] }}</span></td>
                                    <td style="width: 12%;"><span>{{ $datam['work_type'][$key] }}</span></td>
                                    <td style="width: 8%;"><span>{{ $datam['store'][$key] }}</span></td>
                                    <td style="width: 10%;"><span>{{ $datam['next_six_month_store'][$key] }}</span></td>

                                    <td style="width: 28%;"><span>{{ $datam['rep_or_build'][$key] }}</span></td>


                                    <td style="width:25%;"><span>{{ $datam['workable'][$key] }}</span></td>
                                    <td style="width:25%;"><span>{{ $datam['not_workable'][$key] }}</span></td>
                                    <td style="width:25%;"><span>{{ $datam['repairable'][$key] }}</span></td>
                                    <td style="width:25%;"><span>{{ $datam['convert'][$key] }}</span></td>


                                    <td style="width: 10%;"><span>{{ $datam['comment'][$key] }}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 33%;">
                                    <p style="text-align: end;">স্বাক্ষর<span>{{ $datam->sig_bottom_left }}</span></p>
                                    <p><span>তারিখ<span>{{ $datam->date_bottom_left }}</span><span>অফিসার , রিকুইজিসনিং(ভারপ্রাপ্ত)</span><span>ফ্লাইট/সেকশন</span></p>
                                    <p>অনুমোদিত<span>{{ $datam->permissable }}</span></p>
                                    <p style="text-align: end;">কমান্ডিং অফিসার<br> *মাত্র ডিপোর জন্য</p>
                                    <span>{{ $datam->serial_no }}</span>
                                </td>
                                <td style="width: 7%;">

                                </td>
                                <td style="width: 25%;">
                                    <p>কাজ হাতে নেওয়া হইবে<span>{{ $datam->work_will_be_taken }}</span></p>
                                    <p>মেরামতের জন্য উল্লেখিত দ্রব্য পাওয়া গেল</p>
                                    <p>স্বাক্ষর<span>{{ $datam->sig_bottom_middle }}</span></p>
                                    <p style="text-align: end;">কারখানার ভারপ্রাপ্ত অফিসার</p>
                                    <p>তারিখ<span>{{ $datam->date_bottom_middle }}</span></p>
                                    <p>কাজ সম্পন্ন হইল<span>{{ $datam->work_done }}</span></p>
                                    <p>**অপ্রইয়োজনিয় অংশ কাটিয়া ফেলুন।</p>
                                </td>
                                <td style="width: 5%;">

                                </td>
                                <td style="width: 30%; padding-left: 1px solid black;">
                                    <p>সনদনামা দিতেছি যে, উল্লেখিত ব্যবহারযোগ্য শ্রেণিভাগকিত দ্রব্যদি ব্যবহার উপযোগি</p>
                                    <p style="text-align: end;"><span>{{ $datam->sig_bottom_right_up }}</span><br>কারখানা ভারপ্রাপ্ত অফিসার এআইডি</p>
                                    <hr>
                                    <p>উল্লেখিত দ্রব্য পাওয়া গেল </p>
                                    <p>তারিখ<span>{{ $datam->date_bottom_right }}</span>
                                    <div class="row">
                                        <p class="col-3">**<br>উল্লেখিত দ্রব্যদি</p>
                                        <p class="col-6" style="text-align: end;">অন্তভূক্ত করা হইল ।<br> নতুন শ্রেণিভুক্ত করা হইল ।<br> বাদ দেওয়া হইল ।</p>
                                    </div>
                                    <hr>
                                    <table style="width: 100%;" class="table-bordered">
                                        <tr>
                                            <td colspan="2">টালি কার্ডে অন্তভূক্ত করা হইল ।</td>
                                            <td colspan="2">লেজারের অন্তভূক্ত করা হইল ।</td>
                                        </tr>
                                        <tr>
                                            <td>স্বাক্ষর<br><span>{{ $datam->sig_bottom_right_left }}</span></td>
                                            <td>তারিখ<span>{{ $datam->date_bottom_right_left }}</span></td>
                                            <td>স্বাক্ষর<br><span>{{ $datam->sig_bottom_right_right }}</span></td>
                                            <td>তারিখ<span>{{ $datam->date_bottom_right_right }}</span></td>

                                        </tr>

                                    </table>
                                </td>
                            </tr>
                        </table>
                        </td>
                        </tr>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <div class="card-footer text-center">
        <a href="{{ route('form6.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
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