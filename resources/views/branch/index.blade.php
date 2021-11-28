@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')

<div class="container image-gallery">
    <h3>إضافة فرع</h3>
    <form method="POST" action="{{ route('branch.add') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <input type="hidden" value="{{ $company_id }}" name="company_id">
            <div class="col-md-4 mb-2">
                <div class="file-drop-area"> <span class="choose-file-button">
                    إختار صورة الفرع</span> <span class="file-message">أو قم بسحبها هنا</span><input class="file-input" type="file" name="image" multiple>
                </div>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control add-form" placeholder="إسم الفرع" id="title" name="title" aria-describedby="emailHelp">
            </div>
            <div class="col-md-4">
                <input type="number" class="form-control add-form" placeholder="رقم المحمول" id="mobile_number" name="mobile_number" aria-describedby="emailHelp">
            </div>
            <div class="col-md-4">
                <input type="number" class="form-control add-form" placeholder="رقم واتساب" id="whats_number" name="whats_number" aria-describedby="emailHelp">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control add-form" placeholder=" البريد الألكتروني" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control add-form" placeholder="عنوان الشركة" id="address" name="address" aria-describedby="emailHelp">
            </div>
            <div class="col-md-12 text-center mt-2">
                <button class="btn btn-dark" type="submit">تسجيل الفرع</button>
            </div>
        </div>
    </form>

    <hr>
            {{-- Start Brun --}}
            <div class="row">
                @foreach( $all_branches as $branch )
                    <div class="col-md-3 company-ro">
                        <div class="company-card" style="width: 18rem;">
                                <img src="{{ asset( $branch->image ) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="view-span">{{ $branch->title }}</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                                </div>
                                    <div class="row card-icon">
                                        {{-- <div class="view-all col-md-6"><i class="fas fa-eye"></i> <span class="view-span">225</span></div> --}}
                                        <div class="card-adress col-md-6"><i class="fas fa-map-marker-alt"></i><span class="adress-span">{{$branch->address}}</span> </div>
                                        <div class="card-clicktocall col-md-12">
                                        <a class="card-phone btn btn-outline-primary d-grid gap-2" href="tel:01022630272" >Call :  {{$branch->mobile_number}}</a>
                                        </div>
                                    </div>
                                    <div class="card-button">
                                        <a href="https://wa.me/{{$branch->whats_number}}" target="_blank" class="btn btn-success">واتساب</a>
                                        <a href="#" class="btn btn-danger">إرسال بريد الكتروني</a>
                                    </div>
                        </div>
                    </div>
               @endforeach
            </div>
        {{-- End brunch --}}

</div>

@endsection
