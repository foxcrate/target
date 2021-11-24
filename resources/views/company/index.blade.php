@extends('templates.main')
@section('content')

@include('templates.navbar')


<div class="container-fluid meeting">
    <div class="row">
        @foreach ( $all_companies as $company )
        <div class="col-md-6">
            <div class="meet-card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        @if ($company->image_1 == null)
                        <img src="images/company.jpg" class="img-fluid rounded-start cat-img" alt="...">
                        @else
                        <img src='{{ asset($company->image_1) }}' class="img-fluid rounded-start cat-img" alt="...">
                        @endif
                    </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$company->title}}</h5>
                                <p class="card-text">{{$company->description}}</p>
                                <a class="btn btn-outline-dark" href="{{route( 'company_profile',[ 'company_id' => $company->id ] )}}" >زيارة الشركة</a>
                                <a href="https://wa.me/{{$company->whatsapp_number}}" target="_blank" class="btn btn-success">واتساب</a>
                                <a class="card-phone btn btn-outline-primary " href="tel:{{ $company->phone_number }}" >Call: {{ $company->phone_number }}</a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="far fa-envelope"></i> إرسال بريد الكتروني</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<div class="modal fade" id="exampleModal2" tabindex="-2" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">يمكنك مراسلة الشركة من هنا</h5>
        </div>
        <div class="modal-body">
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                <input type="text" class="form-control" placeholder="الأسم بالكامل" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                <input type="text" class="form-control" placeholder="البريد الألكتروني" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                <input type="number" class="form-control" placeholder="رقم الهاتف" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-text">رسالتك</span>
                <textarea class="form-control" placeholder="أكتب رسالتك هنا " aria-label="With textarea"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark ">إرسال</button>
        </div>
        </div>
    </div>
</div>


@endsection
