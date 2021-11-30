@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')

{{-- <input type="hidden" name="student_id" value="{{$student_id}}"> --}}
@if(Session::has('message'))
    <div class="alert alert-success m-3" role="alert">
        {{ Session::get('message') }}
    </div>
@endif
<div class="container">
    <div class="col-md-12">
            <h2 class="block-title">جميع إعلاناتي</h2>
            <div class="table-responsive-sm">
                <a class="btn btn-success mb-2" href="{{ route('ad.add_get') }}"><i class="far fa-plus-square"></i> إنشاء إعلان جديد</a>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">م</th>
                            <th scope="col">إسم الأعلان</th>
                            <th scope="col">تاريخ البدء</th>
                            <th scope="col"> تاريخ الأنتهاء</th>
                            <th scope="col"> حالة الإعلان</th>
                            <th scope="col">  عدد النقرات</th>
                            <th scope="col"> عدد المشاهدات</th>
                            <th scope="col"> القطاعات </th>
                            <th scope="col">إجراءات </th>
                        </tr>
                    </thead>
                    {{-- <th scope="col"> المدن</th> --}}
                    {{-- <td>القاهرة, الجيزة,أسوان </td> --}}
                    <tbody>
                        @foreach( $all_ads as $ad )
                            <tr>
                                <th scope="row">1</th>
                                <td> {{$ad->title}}</td>
                                <td>{{$ad->start_date}}</td>
                                <td>{{$ad->end_date}}</td>
                                <td>{{$ad->status}}</td>
                                <td>{{$ad->hits}}</td>
                                <td>{{$ad->seen}}</td>
                                <td>{{$ad->categories_names()}}</td>
                                <td>
                                    {{-- <a class="btn btn-dark ads-button" href="#">تعديل</a> --}}
                                    <a class="btn btn-danger ads-button" href="{{ route('ad.delete',['ad_id'=> $ad->id ]) }}">إيقاف</a>
                                    <a class="btn btn-primary ads-button" href="{{ route('ad.recharge',['ad_id'=> $ad->id ]) }}">تجديد</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>



@endsection
