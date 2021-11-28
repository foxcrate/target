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
            <form method="POST" action="{{ route('video.add') }}" >
                @csrf
                <h4> رفع الفيديو  </h4>
                <label for="name">اسم الفيديو</label>
                <input type="text" name="name" id="name" class="mb-2">
                <label for="name">لينك الفيديو</label>
                <input type="text" name="link" id="link" class="mb-2">
                <input type="hidden" value="{{ $company_id }}" name="company_id">
                <button type="submit" class="btn btn-outline-success but">رفع</button>
            </form>
        </div>
        <hr>
        <div class="row">
            @foreach( $all_videos as $video )
                <div class="col-md-12">
                    <div class="ratio ratio-16x9">
                        <iframe src={{$video->link}} title={{$video->title}} allowfullscreen></iframe>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
