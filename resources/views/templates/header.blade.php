{{-- <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="دليل تارجت للشركات والمصانع">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

    <title>دليل تارجت للشركات والمصانع</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
    <script src="{{asset('js/bootstrap.bundle.js')}}" ></script>
    <script src="{{asset('js/all.min.js')}}" ></script>
    <script src="{{asset('js/popper.js')}}" ></script>
    <script src="{{asset('js/bootstrap.min.js')}}" ></script>
    <script src="{{asset('js/jQuery.js')}}" ></script>
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="{{asset('js/style.js')}}" ></script>
</head>
<body> --}}

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta name="description" content="{{$meta_description}}"> --}}
    {{-- <meta name="keywords" content="{{$meta_tag}}"> --}}
    <meta name="author" content="دليل تارجت للشركات والمصانع">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    {{-- <title>{{$page_title}}</title> --}}
        <!-- Start CSS -->
    <link href="{{ asset('css\bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('css\all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css\hover-min.css') }}" rel="stylesheet">
    <link href="{{ asset('css\multiple-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css\style.css') }}" rel="stylesheet" >
        <!-- End Css -->
        <!-- Start Js -->
    <script src="{{ asset('js/bootstrap.bundle.js') }}" ></script>
    <script src="{{ asset('js/popper.js') }}" ></script>
    <script src="{{ asset('js/jQuery.js') }}" ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('js/multiple-select.min.js') }}" ></script>
    <script src="{{ asset('js/all.min.js') }}" ></script>
    <script src="{{ asset('js/style.js') }}" ></script>
        <!-- End Js -->
</head>
<body>
