@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')

<div class="container mycompany">
    <div class="row">
        <div class="col-md-2 text-center com-icon">
            <a class="c-icon" href="#"><i class="fas fa-building"></i><p> ملف الشركة</p></a>
        </div>
        <div class="col-md-2 text-center com-icon">
            <a class="c-icon" href="#"><i class="fas fa-briefcase"></i><p> ألوظائف </p></a>
        </div>
        <div class="col-md-2 text-center com-icon">
            <a class="c-icon" href="#"><i class="fas fa-store"></i><p>المتجر</p></a>
        </div>
        <div class="col-md-2 text-center com-icon">
            <a class="c-icon" href="#"><i class="fab fa-buysellads"></i><p>  الأعلانات</p></a>
        </div>
        <div class="col-md-2 text-center com-icon">
            <a class="c-icon" href="#"><i class="fas fa-calendar-alt"></i><p> المناسبات </p></a>
        </div>
        <div class="col-md-2 text-center com-icon">
            <a class="c-icon" href="{{route('video.index',auth()->user()->company->id)}}"><i class="fas fa-video"></i><p> الفيديوهات </p></a>
        </div>
        <div class="col-md-2 text-center com-icon">
            <a class="c-icon" href="{{route('image.index',auth()->user()->company->id)}}" ><i class="fas fa-images"></i><p> الصور </p></a>
        </div>
        <div class="col-md-2 text-center com-icon">
            <a class="c-icon" href="#"><i class="fab fa-blogger"></i><p> المدونة </p></a>
        </div>
        <div class="col-md-2 text-center com-icon">
            <a class="c-icon" href="#"><i class="fab fa-accusoft"></i><p> إعلانات مبوبة </p></a>
        </div>
        <div class="col-md-2 text-center com-icon">
            <a class="c-icon" href="{{route('pdf.index',auth()->user()->company->id)}}"><i class="fas fa-file-pdf"></i><p>  الملفات</p></a>
        </div>
        <div class="col-md-2 text-center com-icon">
            <a class="c-icon" href="{{route('branch.index',auth()->user()->company->id)}}" ><i class="fas fa-code-branch"></i><p> الفروع </p></a>
        </div>
        <div class="col-md-2 text-center com-icon">
            <a class="c-icon" href="#"><i class="fab fa-buffer"></i><p>  العروض </p></a>
        </div>
        <div class="col-md-2 text-center com-icon">
            <a class="c-icon" href="#"><i class="fab fa-first-order-alt"></i><p>  الطلبات </p></a>
        </div>
        <div class="col-md-2 text-center com-icon">
            <a class="c-icon" href="#"><i class="fas fa-map-marked-alt"></i><p> الخريطة </p></a>
        </div>
        <div class="col-md-2 text-center com-icon">
            <a class="c-icon" href="{{ route('message.inbox') }}" ><i class="fas fa-inbox"></i><p> البريد الوارد </p></a>
        </div>

    </div>
</div>

@endsection
