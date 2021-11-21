@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')



<div class="container add-company-dash">
    <form>
      <div class="row">
        <div class="col-md-4">
          <input type="text" class="form-control add-form" placeholder="إسم الشركة" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <input type="number" class="form-control add-form" placeholder="رقم المحمول" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <input type="number" class="form-control add-form" placeholder="رقم واتساب" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control add-form" placeholder="النشاط التجاري" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control add-form" placeholder="إسم الشركة" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <select class="form-select form-select-sm add-form" aria-label=".form-select-sm example">
            <option selected>إختار المدينة</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control add-form" placeholder="المنطقة" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control add-form" placeholder=" العنوان" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control add-form" placeholder=" الموقع الألكتروني" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control add-form" placeholder="رابط صفحة الفيسبوك" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control add-form" placeholder="رابط إنستجرام" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control add-form" placeholder="رابط تويتر" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control add-form" placeholder="رابط لينكد إن" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <input type="email" class="form-control add-form" placeholder="البريد الألكتروني" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control add-form" placeholder="  المسمى الوظيفي" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-6 mt-3">
          <input type="file" class="form-control" id="inputGroupFile01">
        </div>
        <div class="col-md-6">
          <textarea class="form-control" placeholder="وصف كامل لشركتك" aria-label="With textarea"></textarea>
        </div>
        <div class="col-md-12 text-center mt-2">
          <a class="btn btn-dark" href="#">تسجيل البيانات</a>
      </div>
      </div>
    </form>
  </div>



@endsection
