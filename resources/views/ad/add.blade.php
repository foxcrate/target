@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')


    <form method="POST" action="{{ route('ad.add_post') }}" enctype="multipart/form-data">
        @csrf
        <div class="container mt-5 mb-5">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="card-ads px-5 py-5">
                    <h3>إنشاء إعلان جديد</h3>
                    <div class="row">
                        <div class="col-md-12 form-input"><input type="text" name= "title" class="form-control" placeholder="إسم الإعلان"> </div>
                        {{-- <div class="col-md-4 form-input"><input type="number" class="form-control" placeholder="عدد النقرات المطلوبة"> </div>
                        <div class="col-md-4 form-input"><input type="number" class="form-control" placeholder="عدد المشاهدات المطلوبة"> </div> --}}
                            <div class="col-md-6 ">
                                <h5>إختيار القطاعات</h5>
                                <select multiple name="categories[]" class="form-control form-select-lg mb-3 selct" size="4" data-show-subtext="true" data-live-search="true"  multiple="multiple">
                                    <option disabled selected>حدد القطاعات</option>
                                        @foreach( $all_categories as $category )
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 ">
                                <h5> الكلمات الدلالية</h5>
                                <select multiple class="form-control form-select-lg mb-3 selectpicker selct" name="keywords[]" size="4" data-show-subtext="true"  data-live-search="true"  multiple="multiple">
                                    <option disabled selected>إختر الكلمات الدلالية</option>
                                    @foreach( $keywords as $keyword )
                                        <option value="{{$keyword}}">{{$keyword}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="formFileMultiple" class="form-label mt-2">إختيار البنر الإعلاني مقاس 700عرض * 150 ارتفاع</label>
                                <input class="form-control" type="file" name="image" id="formFileMultiple">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="end_date" class="form-label mt-2" >تاريخ إنتهاء الإعلان</label>
                                <input type="date" id="end_date" name="end_date" class="form-control" >
                            </div>
                            <div class="col-md-12 form-check">
                                <div class="row">
                                    <button type="submit" class="btn btn-warning d-grid gap-2 ">مراجعة الإعلان </button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection
