@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')


<div class="container">
    <div class="row inbox">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body message">
                    <p class="text-center">إرسال رسالة داخلية </p>
                    <form class="form-horizontal " role="form" method="post" action="{{route('message.post_message_to_company')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="to" class="col-sm-1">عنوان الرسالة:</label>
                            <div class="col-sm-12 form-group">
                                  <input type="text" class="form-control select2-offscreen" id="title" name="title" placeholder=" أكتب هنا عنوان رسالتك" tabindex="-1">
                                  <input type="hidden" name="receiver_id" value="{{$the_receiver}}">
                                  <input type="hidden" name="sender_id" value="{{$sender}}">
                            </div>
                          </div>
                             <div class="form-group">
                                <textarea class="form-control msg-field" id="text_content" name="text_content" rows="12" placeholder="أكتب رسالتك هنا"></textarea>
                            </div>
                                <div class="col-md-12 msg-field">
                                    <h4>الملفات المرفقة</h4>
                                    <div class="file-drop-area"> <span class="choose-file-button">إستعراض ملفاتك</span> <span class="file-message">أو قم بسحبها هنا</span> <input class="file-input" type="file" name="file" id="file" multiple>
                                    </div>
                                </div>
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-outline-dark">إرسال رسالتك</button>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
