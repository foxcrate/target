@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')

@if(Session::has('message'))
    <div class="alert alert-success m-3" role="alert">
        {{ Session::get('message') }}
    </div>
@endif

<div class="container image-gallery">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('image.add') }}" enctype="multipart/form-data">
                @csrf
                <h4> رفع صور الى المعرض</h4>
                <label for="name">اسم الصورة</label>
                <input type="text" name="name" id="name" class="mb-2">
                <input type="hidden" value="{{ $company_id }}" name="company_id">
                <div class="file-drop-area"> <span class="choose-file-button">إستعراض صورك</span> <span class="file-message">أو قم بسحبها هنا</span><input class="file-input" type="file" name="file" multiple>
                </div>
                <button type="submit" class="btn btn-outline-success but">رفع</button>
            </form>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <!-- Start image Gallery -->
                <div class="container">
                    <div class="portfolio-item row">
                        @foreach( $all_images as $image )
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                                <a href="http://localhost:8000/{{$image->file}}" target="_blank" class="fancylight popup-btn" data-fancybox-group="light">
                                <img class="img-fluid" src="{{asset($image->file)}}" title="{{$image->title}}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- End image Gallery -->
            </div>
        </div>
    </div>
</div>
@endsection
