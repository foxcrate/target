@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')

<div class="container">
    <div class="email-app mb-4">
        <nav>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="inbox.php"><i class="fa fa-inbox"></i> البريد الوارد <span class="badge badge-danger">4</span></a>
            </li>
            <li class="nav-item">
          </ul>
        </nav>
        {{-- <h1>{{$past_messages[0]->sender_user->id}} </h1> --}}
        <main class="message">

          <div class="details">
            <div class="header-1">
              <img class="avatar" src="img/company.jpg">
              <div class="from">
                @if(! $past_messages[0]->sender_user->company)
                <span>{{$past_messages[0]->sender_user->name}} </span>
                @else
                <span>{{$past_messages[0]->sender_user->company}} </span>
                @endif
              </div>
              <div class="date"> {{$past_messages[0]->created_at}} </div>
            </div>
            <div class="content">
            <form method="post" action="{{route('message.post_message_to_company')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="receiver_id" value="{{ $past_messages[0]->sender_user->id }}">
              <div class="form-group">
                <textarea class="form-control" id="message" name="text_content" rows="12" placeholder="أكتب ردك هنا"></textarea>
              </div>
              <div class="form-group replay">
                <button tabindex="3" type="submit" class="btn btn-outline-dark mb-2">رد على الرسالة </button>
              </div>
            </form>
                @foreach( $past_messages as $message )
                    <div style="background-color:#D0D0D0;">
                        <p>
                            {{$message->title}}
                        </p>
                        <blockquote>
                            {{$message->text_content}}
                        </blockquote>
                        </div>
                        <div class="">
                        <h5><i class="fas fa-paperclip"></i> الملفات المرفقة</h5>
                        <div class="">
                            <a href="#" onclick="abstract_tab('{{$message->file}}')" class="attach"><b><i class="fas fa-cloud-download-alt"></i>image</b> (0,5MB)</a>
                        </div>
                        <hr class="mt-2 mb-2"/>
                    </div>
              @endforeach
            </div>
          </div>
        </main>
      </div>
      </div>

<script>

    function abstract_tab(the_file){
        //alert("A");
        url = 'http://localhost:8000/' + the_file  ;
        window.open(url, '_blank').focus();

    }

</script>

@endsection
