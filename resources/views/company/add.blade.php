@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')

<div class="container add-company-dash">
    <form method="POST" action="{{ route('company.add_post') }}" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <div class="col-md-4">
                <input type="text" class="form-control add-form" placeholder="إسم الشركة" name="title" id="title" aria-describedby="emailHelp">
            </div>

            <div class="col-md-4">
                <input type="number" class="form-control add-form" placeholder="رقم المحمول" name="phone_1" id="phone_1" aria-describedby="emailHelp">
            </div>

            <div class="col-md-4">
                <input type="number" class="form-control add-form" placeholder="رقم واتساب" name="whatsapp_number" id="whatsapp_number" aria-describedby="emailHelp">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control add-form" placeholder="النشاط التجاري" name="activity" id="activity" aria-describedby="emailHelp">
            </div>

            <div class="col-md-4">
                <select id='city' name="city" class="form-select form-select-sm add-form" aria-label=".form-select-sm example">
                <option value="cairo">القاهرة</option>
                <option value="giza">الجيزة</option>
                <option value="alexanderia">الإسكندرية</option>
                </select>
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control add-form" placeholder="الرقم البريدي" name="postcode" id="postcode" aria-describedby="emailHelp">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control add-form" placeholder=" العنوان" name="address" id="address" aria-describedby="emailHelp">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control add-form" placeholder=" الموقع الألكتروني" name="website" id="website" aria-describedby="emailHelp">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control add-form" placeholder="رابط صفحة الفيسبوك" name="facebook_url" id="facebook_url" aria-describedby="emailHelp">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control add-form" placeholder="قسم الشركة" name="categories_1" id="categories_1" aria-describedby="emailHelp">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control add-form" placeholder="إسم رئيس مجلس الإدارة" name="ceo_name" id="ceo_name" aria-describedby="emailHelp">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control add-form" placeholder="المسئول عن التواصل" name="contact_person" id="contact_person" aria-describedby="emailHelp">
            </div>

            <div class="col-md-4">
                <input type="email" class="form-control add-form" placeholder="البريد الألكتروني" name="email" id="email" aria-describedby="emailHelp">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control add-form" placeholder="الفاكس" name="fax" id="fax" aria-describedby="emailHelp">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control add-form" placeholder="رابط صفحة اليوتيوب" name="youtube_url" id="youtube_url" aria-describedby="emailHelp">
            </div>

            <div class="col-md-6 mt-3">
                <input type="file" name="image_1" id="image_1" class="form-control" id="inputGroupFile01">
            </div>

            <div class="col-md-6">
                <textarea class="form-control" name="description" id="description" placeholder="وصف كامل لشركتك" aria-label="With textarea"></textarea>
            </div>

            <div class="col-md-12 text-center mt-2">
                <button  class="btn btn-dark" type="submit"> تسجيل البيانات </button>
            </div>

        </div>
    </form>
  </div>

@endsection
