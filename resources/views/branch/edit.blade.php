@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')

<div class="container image-gallery">
    <h3>تعديل فرع</h3>
    <form method="POST" action="{{ route('branch.edit_post') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <input type="hidden" name="branch_id" value="{{$branch->id}}">
            <div class="col-md-4 mb-2">
                <img src="{{ asset( $branch->image ) }}" class="card-img-top" alt="...">
                <div class="file-drop-area"> <span class="choose-file-button">
                    إختار صورة الفرع</span> <span class="file-message">أو قم بسحبها هنا</span><input class="file-input" type="file" name="image" multiple>
                </div>
            </div>
            <div class="col-md-4">
                <label for="title">أسم الفرع</label>
                <input type="text" class="form-control add-form" placeholder="إسم الفرع" id="title" value="{{ $branch->title }}" name="title" aria-describedby="emailHelp">
            </div>
            <div class="col-md-4">
                <label for="mobile_number">رقم المحمول</label>
                <input type="number" class="form-control add-form" placeholder="رقم المحمول" id="mobile_number" value="{{ $branch->mobile_number }}" name="mobile_number" aria-describedby="emailHelp">
            </div>
            <div class="col-md-4">
                <label for="whats_number">رقم الواتس</label>
                <input type="number" class="form-control add-form" placeholder="رقم واتساب" id="whats_number" value="{{ $branch->whats_number }}" name="whats_number" aria-describedby="emailHelp">
            </div>
            <div class="col-md-4">
                <label for="email">الإيميل</label>
                <input type="text" class="form-control add-form" placeholder=" البريد الألكتروني" id="email" value="{{ $branch->email }}" name="email" aria-describedby="emailHelp">
            </div>
            <div class="col-md-4">
                <label for="address">العنوان</label>
                <input type="text" class="form-control add-form" placeholder="عنوان الشركة" id="address" value="{{ $branch->address }}" name="address" aria-describedby="emailHelp">
            </div>
            <div class="col-md-12 text-center mt-2">
                <button class="btn btn-dark" type="submit">حفظ</button>
            </div>
        </div>
    </form>

    <hr>

</div>

@endsection
