@extends('templates.main')
@section('content')

@include('templates.navbar')

{{-- @include('templates.dash_navbar') --}}


<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-success m-3" role="alert">
        {{ Session::get('message') }}
    </div>
    @endif
    <div class="row company-discr">
        <div class="col-md-4 company-ro">
            @if ($company->image_1 == null)
            <img class="company-img" src="images/company.jpg" alt="">
            @else
            <img class="company-img" src='{{ asset($company->image_1) }}' alt="">
            @endif

        </div>

        <div class="col-md-8 company-ro">
            <h2>{{$company->title}}</h2>
            <p>{{$company->description}}</p>
                <a class="company-category" href="#"><i class="fas fa-table"></i> قطاع الدعاية والأعلان</a>
        </div>
            <div class="col-md-12 call_to_action ">
              <!-- Modal -->
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                            <div class="modal-body">
                                <a class="phone_number" href="tel:01022630272"><i class="fas fa-mobile-alt"></i>{{$company->phone_number}}</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-2" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">يمكنك مراسلة الشركة من هنا</h5>
                            </div>
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                                    <input type="text" class="form-control" placeholder="الأسم بالكامل" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                    <input type="text" class="form-control" placeholder="البريد الألكتروني" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                    <input type="number" class="form-control" placeholder="رقم الهاتف" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">رسالتك</span>
                                    <textarea class="form-control" placeholder="أكتب رسالتك هنا " aria-label="With textarea"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark ">إرسال</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal3" tabindex="-3" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                            <div class="modal-body">
                                <a class="phone_number" href="tel:01022630272"><i class="fas fa-fax"></i>{{$company->phone_number}}</a>
                            </div>
                            </div>
                        </div>
                    </div>

                    {{-- <h1>{{$company->website}}</h1> --}}
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="fas fa-mobile-alt"></i> إتصال</button>
                <a class="btn btn-dark" href="https://{{$company->website}}" target="_blank"><i class="fas fa-globe"></i> الموقع الألكتروني</a>
                <a class="btn btn-dark" href="tel:01022630272"><i class="fas fa-map-marker-alt"></i> الخريطة</a>
                <a class="btn btn-success" href="https://wa.me/{{$company->whatsapp_number}}" target="_blank"><i class="fab fa-whatsapp"></i> واتساب</a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="far fa-envelope"></i> إرسال بريد الكتروني</button>
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal3"><i class="fab fa-telegram-plane"></i> جروب تليجرام</button>
                <a  href="https://www.facebook.com/{{$company->facebook_url}}" target="_blank" class="btn btn-primary" ><i class="fab fa-facebook-messenger"></i>  فيس بوك ماسينجر</a>
                @auth
                <a href="{{ route( 'message.message_to_company' , [ 'receiver_id'=>$company->user->id , 'sender_id'=>auth()->user()->id ] ) }}" type="button" class="btn btn-dark" ><i class="fas fa-reply"></i> رسالة خاصة</a>
                @else
                <a href="{{ route('login') }}" type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal3"><i class="fas fa-reply"></i> رسالة خاصة</a>
                @endauth
            </div>
            <div class="col-md-12 vip-data ">
                 <h2 class="block-title">بيانات أكثر دقة </h2>
                 <div class="table-responsive-sm">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">الأسم</th>
                                <th scope="col">الرقم</th>
                                <th scope="col">الأسم</th>
                                <th scope="col">الرقم</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</th>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                                <td><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</td>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                            </tr>
                            <tr>
                                <th scope="row"><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</th>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                                <td><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</td>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                            </tr>
                            <tr>
                                <th scope="row"><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</th>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                                <td><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</td>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                            </tr>
                            <tr>
                                <th scope="row"><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</th>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                                <td><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</td>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                            </tr>
                            <tr>
                                <th scope="row"><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</th>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                                <td><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</td>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                            </tr>
                            <tr>
                                <th scope="row"><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</th>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                                <td><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</td>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                            </tr>
                    <tbody>
                    </table>
                 </div>
            </div>
    </div>
</div>


<!-- Start Module tabs -->
<div class="container-fluid mt-5">
    <div class="row">
    <div class="card-tab">
          <div class="card-header">
            <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#photo" role="tab">الصور</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#video" role="tab">الفيديو</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#job" role="tab">الوظائف</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#product" role="tab">المنتجات</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#blog" role="tab">المدونة</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#event" role="tab">المناسبات</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#files" role="tab">الملفات</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#brun" role="tab">الفروع</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#olx" role="tab">إعلانات مبوبة</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#offer" role="tab">العروض</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#order" role="tab">الطلبات</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <!-- Tab panes -->
            <div class="tab-content text-center">
              <div class="tab-pane active" id="photo" role="tabpanel">
                  <!-- Start image Gallery -->
                  <div class="container">
                      <div class="portfolio-item row">
                          <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                          <a href="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" target="_blank" class="fancylight popup-btn" data-fancybox-group="light">
                          <img class="img-fluid" src="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" alt="">
                          </a>
                          </div>
                          <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                          <a href="https://image.freepik.com/free-photo/pretty-girl-near-car_1157-16962.jpg" target="_blank" class="fancylight popup-btn" data-fancybox-group="light">
                          <img class="img-fluid" src="https://image.freepik.com/free-photo/pretty-girl-near-car_1157-16962.jpg" alt="">
                          </a>
                          </div>
                          <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                          <a href="https://image.freepik.com/free-photo/blonde-tourist-taking-selfie_23-2147978899.jpg" target="_blank" class="fancylight popup-btn" data-fancybox-group="light">
                          <img class="img-fluid" src="https://image.freepik.com/free-photo/blonde-tourist-taking-selfie_23-2147978899.jpg" alt="">
                          </a>
                          </div>
                          <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                          <a href="https://image.freepik.com/free-photo/cute-girls-oin-studio_1157-18211.jpg" target="_blank" class="fancylight popup-btn" data-fancybox-group="light">
                          <img class="img-fluid" src="https://image.freepik.com/free-photo/cute-girls-oin-studio_1157-18211.jpg" alt="">
                          </a>
                          </div>
                          <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                          <a href="https://image.freepik.com/free-photo/stylish-pin-up-girls_1157-18451.jpg" target="_blank" class="fancylight popup-btn" data-fancybox-group="light">
                          <img class="img-fluid" src="https://image.freepik.com/free-photo/stylish-pin-up-girls_1157-18451.jpg" alt="">
                          </a>
                          </div>
                          <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                          <a href="https://image.freepik.com/free-photo/stylish-pin-up-girl_1157-18940.jpg" target="_blank" class="fancylight popup-btn" data-fancybox-group="light">
                          <img class="img-fluid" src="https://image.freepik.com/free-photo/stylish-pin-up-girl_1157-18940.jpg" alt="">
                          </a>
                          </div>
                          <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                          <a href="https://image.freepik.com/free-photo/digital-laptop-working-global-business-concept_53876-23438.jpg" target="_blank" class="fancylight popup-btn" data-fancybox-group="light">
                          <img class="img-fluid" src="https://image.freepik.com/free-photo/digital-laptop-working-global-business-concept_53876-23438.jpg" alt="">
                          </a>
                          </div>
                          <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                          <a href="https://image.freepik.com/free-psd/set-digital-devices-screen-mockup_53876-76507.jpg" target="_blank" class="fancylight popup-btn" data-fancybox-group="light">
                          <img class="img-fluid" src="https://image.freepik.com/free-psd/set-digital-devices-screen-mockup_53876-76507.jpg" alt="">
                          </a>
                          </div>
                      </div>
                  </div>
                  <!-- End image Gallery -->
              </div>
              <div class="tab-pane" id="video" role="tabpanel">
              <div class="ratio ratio-16x9">
                  <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
              </div>
              </div>
              <div class="tab-pane" id="job" role="tabpanel">
                <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
              </div>
              <div class="tab-pane" id="product" role="tabpanel">
                <p>
                  "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                </p>
              </div>
              <div class="tab-pane" id="blog" role="tabpanel">
                <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
              </div>
              <div class="tab-pane" id="event" role="tabpanel">
                <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
              </div>
              <div class="tab-pane" id="fils" role="tabpanel">
                <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
              </div>
              <div class="tab-pane" id="brun" role="tabpanel">
                <p>
                  "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                </p>
            </div>
            <div class="tab-pane" id="olx" role="tabpanel">
                <p>
                  "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                </p>
            </div>
            <div class="tab-pane" id="offer" role="tabpanel">
                <p>
                  "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                </p>
            </div>
            <div class="tab-pane" id="order" role="tabpanel">
                <p>
                  "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                </p>
            </div>
          </div>
        </div>
    </div>
  </div>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link>

  <!-- End moduls Tabs -->
<!-- Star's Rate -->

  <div class="container rate">
      <div class="row">
          <form method="post" action="{{route('company.rate')}}">
            <input type="hidden" name="company_id" value="{{$company->id}}">
            @csrf
            <h2 class="block-title"> قيم شركة فاروق جروب</h2>
            <div class="col-md-12 text-center">
                <div class="wrapper">
                    {{-- <form class="demoForm"> --}}
                    <div class="rating rating-large" dir="rtl">
                    <input type="radio" name="rate" id="5" value="5"/>
                    <label class="rating-label" for="5">&#9734</label>
                    <input type="radio" name="rate" id="4" value="4"/>
                    <label class="rating-label" for="4">&#9734</label>
                    <input type="radio" name="rate" id="3" value="3"/>
                    <label class="rating-label" for="3">&#9734</label>
                    <input type="radio" name="rate" id="2" value="2"/>
                    <label class="rating-label" for="2">&#9734</label>
                    <input type="radio" name="rate" id="1" value="1"/>
                    <label class="rating-label" for="1">&#9734</label>
                    </div>
                    {{-- </form> --}}
                </div>
            </div>
            <div class="col-md-12 comment text-center">
                    <div>
                        <textarea class="form-control" placeholder="ضع تقييمك هنا" id="comment" name="comment" ></textarea>
                    </div>
                    <button class="btn btn-outline-info" type="submit">Submit</button>

            </div>
          </form>

      </div>
  </div>
<!-- End Rate -->

@endsection
