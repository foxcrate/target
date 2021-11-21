@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}


                </div>

                <div>
                    <h6>Users</h6>
                    <form class="m-5" action="{{ route('user_import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                            <div class="custom-file text-left">
                                <input type="file" name="file" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label" for="customFile">اختر الملف</label>
                            </div>
                        </div>
                        <button class="btn btn-primary">استيراد</button>
                    </form>

                    <a class="btn btn-success" href="{{ route('user_export') }}">تصدير</a>
                </div>

                <div>
                    <h6>Companies</h6>
                    <form class="m-5" action="{{ route('company_import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                            <div class="custom-file text-left">
                                <input type="file" name="file" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label" for="customFile">اختر الملف</label>
                            </div>
                        </div>
                        <button class="btn btn-primary">استيراد</button>
                    </form>

                    <a class="btn btn-success" href="{{ route('company_export') }}">تصدير</a>
                </div>


                {{-- <button type="button" class="btn btn-primary m-3">Excel Import</button>
                <button type="button" class="btn btn-primary m-3">Excel Export</button> --}}
            </div>
        </div>
    </div>
</div>
@endsection
