@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')


<div class="container image-gallery">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('pdf.add') }}" enctype="multipart/form-data">
                @csrf
                <h4> رفع الفيديو  </h4>
                <label for="name">اسم الملف</label>
                <input type="text" name="name" id="name" class="mb-2">
                <input type="hidden" value="{{ $company_id }}" name="company_id">
                <div class="file-drop-area"> <span class="choose-file-button">إستعراض ملفاتك</span> <span class="file-message">أو قم بسحبها هنا</span><input class="file-input" type="file" name="file" multiple>
                </div>
                <button type="submit" class="btn btn-outline-success but">رفع</button>
            </form>
        </div>
        <hr>
        <div class="row">
            @foreach( $all_pdfs as $pdf )
            <div class="col-md-2 text-center com-icon">
                <a class="c-icon" href="http://localhost:8000/{{$pdf->file}}" target="_blank" ><i class="fas fa-file-pdf"></i><p> {{$pdf->title}}</p></a>
                <a href="{{ route( 'pdf.delete' , ['pdf_id'=>$pdf->id] ) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
            </div>

            @endforeach
        </div>
    </div>
</div>


@endsection
