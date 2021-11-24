@extends('templates.main')
@section('content')


<section class="vh-100 login-bg">
    <div class="container  box">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10 ">
          <div class="card-box">
            @if(Session::has('message'))
            <div class="alert alert-danger m-3" role="alert">
                {{ Session::get('message') }}
              </div>
            @endif
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

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="d-flex align-items-center mb-3 pb-1">

                        <h2 class="h1 fw-bold mb-0">تارجت<span class="login-logo"> بيزنيس </span></h2>
                        </div>
                        <h5 class="fw-normal mb-2 pb-2 text-center" >الدخول الى حسابك</h5>


                        <div class="form-outline mb-4">
                            <input type="text" name="email" id="email" placeholder="exampel@examel.com " value="{{ old('email') }}" class="form-control form-control-lg" required />
                            <label class="form-label" for="email">البريد الألكتروني</label>
                        </div>
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror

                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="password" placeholder="1256*Ac54789" class="form-control form-control-lg" required />
                            <label class="form-label" for="password">كلمة المرور</label>
                        </div>
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror

                        <div class="pt-1 mb-4">
                        <button class="btn btn-info btn-lg btn-block" type="submit">دخول</button>
                        </div>

                        <a class="small login-text" href="#!">نسيت كلمة المرور ؟</a>
                        {{-- <p class="mb-5 pb-lg-2 login-text" >Don't have an account? <a class=" login-text" href="{{route('register')}}">Register here</a></p> --}}
                        <p><a href="{{route('register')}}" class="mb-5 pb-lg-2 login-text" >Don't have an account? Register here</a></p>
                        <a href="#!" class="small login-text">Terms of use.</a>
                        <a href="#!" class="small login-text">Privacy policy</a>
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
