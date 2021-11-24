@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')


<div class="container-fluid meeting">
    <div class="row">
        @foreach ( $all_pdfs as $pdf )
        <div class="col-md-6">
            <div class="meet-card mb-3">
                <div class="row g-0">
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title">{{$pdf->title}}</h5>
                                <p class="card-text " style=" word-wrap: break-word;">{{$pdf->description}}</p>
                                <a class="btn btn-outline-dark" href="http://localhost:8000/{{$pdf->file}}" target="_blank">الملف</a>
                                {{-- <a href="https://wa.me/{{$company->whatsapp_number}}" target="_blank" class="btn btn-success">واتساب</a>
                                <a class="card-phone btn btn-outline-primary " href="tel:{{ $company->phone_number }}" >Call: {{ $company->phone_number }}</a> --}}
                                {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="far fa-envelope"></i> إرسال بريد الكتروني</button> --}}
                            </div>
                        </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
