@extends('templates.main')
@section('content')

@include('templates.navbar')

<section class="vh-100 login-bg">
    <div class="container  box">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10 ">
          <div class="card-box">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img
                  src="images/login.jpg"
                  alt="login form"
                  class="img-login"
                />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body text-whit">

                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <h2 class="h1 fw-bold mb-0">تارجت<span class="login-logo"> بيزنيس </span></h2>
                    </div>

                    <h5 class="fw-normal mb-2 pb-2 text-center" >تسجيل عضوية جديدة </h5>

                    <div class="form-outline mb-4">
                        <input type="text" id="name" name="name" placeholder="الأسم بالكامل " class="form-control form-control-lg" />
                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="job" name="job" placeholder="الوظيفة" class="form-control form-control-lg" />
                      @if ($errors->has('job'))
                          <span class="help-block">
                          <strong>{{ $errors->first('job') }}</strong>
                      </span>
                      @endif
                    </div>


                    <div class="form-outline mb-4">
                      <input type="email" id="email" name="email" placeholder="البريد الألكتروني" class="form-control form-control-lg" />
                      @if ($errors->has('email'))
                          <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                    </div>


                    <div class="form-outline mb-4">
                      <input type="password" id="password" name="password" placeholder="كلمة المرور" class="form-control form-control-lg" />
                      @if ($errors->has('password'))
                          <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                      @endif
                    </div>


                    <div class="form-outline mb-4">
                      <input type="password" id="password_confirmation" name="password_confirmation" placeholder="تأكيد كلمة المرور" class="form-control form-control-lg" />
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-info btn-lg btn-block" type="submit">تسجيل</button>
                    </div>

                    <a class="small login-text" href="#!"> لديك عضوية؟</a>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
