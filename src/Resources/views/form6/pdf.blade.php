<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p style="text-align: end; margin: 90px 0 0 0; ">বিএএফ ফরম-৬</p>
    <table style="width: 100%;">
        <tr>
            <td style="width: 33%;">
                <p>ফ্লাইট অথবা সেকশন ক্রমিক নং: <input type="text" name="sec_ser_no" value="{{$form6->sec_ser_no}}"></p>
                <p style="padding-top: 20px;">কারখানা ক্রমিক নং: <input type="text" name="fac_ser_no" value="{{$form6->fac_ser_no}}"></p>
            </td>
            <td style="width: 33%;">
                <p style="font-size: larger; text-align: center;"><b>বাংলাদেশ বিমান বাহিনি</b></p>
                <p style="font-size: larger; text-align: center;"><u><b>অভ্যন্তরিন মেরামত অথবা নির্মাণের আদেশপত্র</b></u>
                </p>
                <div class="form-group row justify-content-start">
                    <label for="work_no" class="col-3">কাজের নং:</label>
                    <div class="col-6">
                        <input type="text" name="work_no" class="form-control" value="{{$form6->work_no}}">
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
                            <p><input type="text" name="officer_sig" value="{{$form6->officer_sig}}"></p>
                            <p>অনুমোদিত অফিসারের স্বাক্ষর</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 50%;">
                            <p>ভাউচার নংঃ<input type="text" name="vou_no" value="{{$form6->vou_no}}"></p>
                        </td>
                        <td style="width: 50%;">
                            <p>তারিখঃ<input type="date" name="date" value="{{$form6->date}}"></p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table style="width: 100%; border: 1px; text-align: center;" class="table-bordered">
        <tr>
            <td>Action</td>
            <td style="width: 7%;">রেঃ নং</td>
            <td style="width: 7%;">পার্ট নং</td>
            <td style="width: 16%;">
                <p style="margin: 0 0 0 0; text-align: center;">দ্রব্যের নাম</p>
                <p style="margin: 0 0 0 0; text-align: center;">সেকশন নংঃ<input type="text" name="sec_no" value="{{$form6->sec_no}}"></p>
            </td>
            <td style="width: 12%;">কাজের ধরন</td>
            <td style="width: 8%;">মজুদ</td>
            <td style="width: 10%;">পরবর্তি ৬ মাসের মজুদ</td>
            <td style="width: 30%;">
                <table class="table-bordered">
                    <tr>
                        <td colspan="5">পরিমাণ</td>
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
                </table>
            </td>
            <td style="width: 10%;">মন্তব্য</td>
        </tr>
    </table>
    <table style="width: 100%; border: 1px; text-align: center;" class="table-bordered" id="table">
        @foreach ( $form6['reg_no'] as $key => $reg_no)
        <tr>
            <td>
                <button type="button" name="add" id="add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button>
            </td>
            <td style="width: 7%;"><input type="text" name="reg_no" value="{{$reg_no}}"></td>
            <td style="width: 7%;"><input type="text" name="part_no" value="{{$form6['part_no'][$key]}}"></td>
            <td style="width: 16%;">
                <input type="text" name="product_name" value="{{$form6['product_name'][$key]}}">
            </td>
            <td style="width: 12%;"><input type="text" name="work_type" value="{{$form6['work_type'][$key]}}"></td>
            <td style="width: 8%;"><input type="text" name="store" value="{{$form6['store'][$key]}}"></td>
            <td style="width: 10%;"><input type="text" name="next_six_month_store" value="{{$form6['next_six_month_store'][$key]}}">
            </td>
            <td style="width: 30%;">
                <table class="table-bordered">
                    <tr>
                        <td rowspan="2" style="width: 28%;"><input type="text" name="rep_or_build" value="{{$form6['rep_or_build'][$key]}}"></td>
                    </tr>
                    <tr>
                        <td style="width:25%;"><input type="text" name="workable" value="{{$form6['workable'][$key]}}"></td>
                        <td style="width:25%;"><input type="text" name="repairable" value="{{$form6['repairable'][$key]}}"></td>
                        <td style="width:25%;"><input type="text" name="not_workable" value="{{$form6['not_workable'][$key]}}"></td>
                        <td style="width:25%;"><input type="text" name="convert" value="{{$form6['convert'][$key]}}"></td>
                    </tr>
                </table>
            </td>
            <td style="width: 10%;"><input type="text" name="comment" value="{{$form6['comment'][$key]}}"></td>
        </tr>
        @endforeach
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 33%;">
                <p style="text-align: end;">স্বাক্ষর<input type="text" name="sig_bottom_left" value="{{$form6->sig_bottom_left}}"></p>
                <p><span>তারিখ<input type="date" name="date_bottom_left" value="{{$form6->date_bottom_left}}"></span><span>অফিসার ,
                        রিকুইজিসনিং(ভারপ্রাপ্ত)</span><span>ফ্লাইট/সেকশন</span></p>
                <p>অনুমোদিত<input type="text" name="permissable" value="{{$form6->permissable}}"></p>
                <p style="text-align: end;">কমান্ডিং অফিসার<br> *মাত্র ডিপোর জন্য</p>
                <input type="text" name="serial_no" placeholder="serial_no" value="{{$form6->serial_no}}">
            </td>
            <td style="width: 7%;">

            </td>
            <td style="width: 25%;">
                <p>কাজ হাতে নেওয়া হইবে<input type="text" name="work_will_be_taken" value="{{$form6->work_will_be_taken}}"></p>
                <p>মেরামতের জন্য উল্লেখিত দ্রব্য পাওয়া গেল</p>
                <p>স্বাক্ষর<input type="text" name="sig_bottom_middle" value="{{$form6->sig_bottom_middle}}"></p>
                <p style="text-align: end;">কারখানার ভারপ্রাপ্ত অফিসার</p>
                <p>তারিখ<input type="date" name="date_bottom_middle" value="{{$form6->date_bottom_middle}}">
                <p>কাজ সম্পন্ন হইল<input type="text" name="work_done" value="{{$form6->work_done}}"></p>
                <p>**অপ্রইয়োজনিয় অংশ কাটিয়া ফেলুন।</p>
            </td>
            <td style="width: 5%;">

            </td>
            <td style="width: 30%; padding-left: 1px solid black;">
                <p>সনদনামা দিতেছি যে, উল্লেখিত ব্যবহারযোগ্য শ্রেণিভাগকিত দ্রব্যদি ব্যবহার উপযোগি</p>
                <p style="text-align: end;"><input type="text" name="sig_bottom_right_up" value="{{$form6->sig_bottom_right_up}}"><br>কারখানা ভারপ্রাপ্ত অফিসার
                    এআইডি</p>
                <hr>
                <p>উল্লেখিত দ্রব্য পাওয়া গেল </p>
                <p>তারিখ<input type="date" name="date_bottom_right" value="{{$form6->date_bottom_right}}">
                <div class="row">
                    <p class="col-3">**<br>উল্লেখিত দ্রব্যদি</p>
                    <p class="col-6" style="text-align: end;">অন্তভূক্ত করা হইল ।<br> নতুন শ্রেণিভুক্ত করা হইল ।<br> বাদ দেওয়া
                        হইল ।</p>
                </div>
                <hr>
                <table style="width: 100%;" class="table-bordered">
                    <tr>
                        <td colspan="2">টালি কার্ডে অন্তভূক্ত করা হইল ।</td>
                        <td colspan="2">লেজারের অন্তভূক্ত করা হইল ।</td>
                    </tr>
                    <tr>
                        <td>স্বাক্ষর<br><input type="text" name="sig_bottom_right_left" value="{{$form6->sig_bottom_right_left}}"></td>
                        <td>তারিখ<input type="date" name="date_bottom_right_left" value="{{$form6->date_bottom_right_left}}"></td>
                        <td>স্বাক্ষর<br><input type="text" name="sig_bottom_right_right" value="{{$form6->sig_bottom_right_right}}"></td>
                        <td>তারিখ<input type="date" name="date_bottom_right_right" value="{{$form6->date_bottom_right_right}}"></td>

                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>

</html>