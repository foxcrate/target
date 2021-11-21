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

                  <form>
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <h2 class="h1 fw-bold mb-0">تارجت<span class="login-logo"> بيزنيس </span></h2>
                    </div>

                    <h5 class="fw-normal mb-2 pb-2 text-center" >تسجيل عضوية جديدة </h5>

                    <div class="form-outline mb-4">
                      <input type="text" id="form2Example17" placeholder="الأسم بالكامل " class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4">
                      <input type="text" id="form2Example17" placeholder="الوظظيفة" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" placeholder="البريد الألكتروني" class="form-control form-control-lg" />
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" placeholder="كلمة المرور" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" placeholder="تأكيد كلمة المرور" class="form-control form-control-lg" />
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-info btn-lg btn-block" type="button">تسجيل</button>
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
