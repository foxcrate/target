@extends('templates.main')
@section('content')

@include('templates.navbar')



<div class="container-fluid page-title">
    <h1 class="title-h">قطاعات الشركات</h1>
</div>
<div class="container">
    <div class="row">
        @foreach( $all_categories as $category )
        <div class="col-md-6 category-table">
            <div class="cat-card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="cat-img img-fluid rounded-start" src="{{asset($category->image)}}"  alt="Category-img">
                    </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$category->name}}</h5>
                                <p class="card-text">{{$category->description}}</p>
                                <p class="card-text"><small class="cat-number">يحتوي <span class="cat-span">{{ count($category->companies) }}</span> شركة</small></p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
